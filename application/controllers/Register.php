<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('register_form');
			$this->load->view('templates_admin/footer');
		}
		else{
			$nama       = $this->input->post('nama');
      $username   = $this->input->post('username');
      $alamat     = $this->input->post('alamat');
      $gender     = $this->input->post('gender');
      $no_telepon = $this->input->post('no_telepon');
      $email     = $this->input->post('email');
      $password   = md5($this->input->post('password'));
      $role_id    = '2';

      $data = array(
        'nama'       => $nama,
        'username'   => $username,
        'alamat'     => $alamat,
        'gender'     => $gender,
        'no_telepon' => $no_telepon,
        'email'     => $email,    
        'password'   => $password,
        'role_id'    => $role_id,
			);
			
			$this->rental_model->insert_data($data, 'customer');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Berhasil register, Silahkan login!
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('auth/login');
		}
	}


	public function _rules(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('no_telepon', 'No. telepon', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
	}





}