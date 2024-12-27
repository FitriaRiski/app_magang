<?php

class Data_mobil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('rental_model');

    if (empty($this->session->userdata('username'))) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda belum login!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('auth/login');
    } elseif ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda tidak punya akses ke halaman ini!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('customer/dashboard');
    }
  }

  public function index()
  {
    $data['buku'] = $this->rental_model->get_data('buku')->result();
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_mobil', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_mobil()
  {
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/form_tambah_mobil', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_mobil_aksi()
  {
    $config['upload_path'] = './assets/upload/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('gambar')) {
      $gambar = '';
    } else {
      $gambar = $this->upload->data('file_name');
    }

    $data = array(
      'genre' => $this->input->post('genre'), // Update column name
      'nama_buku' => $this->input->post('nama_buku'), // Update column name
      'deskripsi' => $this->input->post('deskripsi'), // Update column name
      'warna' => $this->input->post('warna'),
      'tahun' => $this->input->post('tahun'),
      'status' => $this->input->post('status'),
      'gambar' => $gambar
    );

    $this->rental_model->insert_data($data, 'buku'); // Update table name
    $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
    redirect('admin/data_mobil');
  }

  public function update_mobil($id)
  {
    $where = array('id_buku' => $id);
    $data['buku'] = $this->db->query("SELECT * FROM buku mb, tipe tp WHERE mb.genre = tp.genre AND mb.id_buku = '$id'")->result();
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/form_update_mobil', $data);
    $this->load->view('templates_admin/footer');
  }

  public function update_mobil_aksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $id = $this->input->post('id_buku');
      $this->update_mobil($id);
    } else {
      $id = $this->input->post('id_buku');
      $genre = $this->input->post('genre');
      $nama_buku = $this->input->post('nama_buku');
      $deskripsi = $this->input->post('deskripsi');
      $warna = $this->input->post('warna');
      $tahun = $this->input->post('tahun');
      $status = $this->input->post('status');
      $gambar = $_FILES['gambar']['name'];

      if ($gambar) {
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
          $gambar = $this->upload->data('file_name');
          $this->db->set('gambar', $gambar);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $data = array(
        'genre' => $genre,
        'nama_buku' => $nama_buku,
        'deskripsi' => $deskripsi,
        'tahun' => $tahun,
        'warna' => $warna,
        'status' => $status,
      );

      $where = array('id_buku' => $id);

      $this->rental_model->update_data('buku', $data, $where);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil diupdate
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('admin/data_mobil');
    }
  }


  public function detail_mobil($id)
  {
    $data['detail'] = $this->rental_model->ambil_id_mobil($id); // Ensure method aligns with new schema
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/detail_mobil', $data);
    $this->load->view('templates_admin/footer');
  }
  public function delete_mobil($id)
  {
    $where = array('id_buku' => $id); // Update column name

    $this->rental_model->delete_data($where, 'buku'); // Update table name
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data berhasil dihapus
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button></div>');
    redirect('admin/data_mobil');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('genre', 'Genre', 'required'); // Update to 'genre'
    $this->form_validation->set_rules('nama_buku', 'Nama Buku', 'required'); // Update to 'nama_buku'
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required'); // Update to 'deskripsi'
    $this->form_validation->set_rules('tahun', 'Tahun', 'required');
    $this->form_validation->set_rules('warna', 'Warna', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
  }


}

