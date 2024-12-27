<?php

class Dashboard extends CI_Controller
{

  public function index()
  {
    $data['buku'] = $this->rental_model->get_data('buku')->result();
    $this->load->view('templates_customer/header');
    $this->load->view('customer/dashboard', $data);
    $this->load->view('templates_customer/footer');
  }

  public function visimisi()
  {
    $this->load->view('templates_customer/header'); // Header
    $this->load->view('customer/visimisi'); // Konten Visi Misi
    $this->load->view('templates_customer/footer'); // Footer
  }

  public function profil()
  {
    $this->load->view('templates_customer/header'); // Header
    $this->load->view('customer/profil'); // Konten Visi Misi
    $this->load->view('templates_customer/footer'); // Footer
  }

}