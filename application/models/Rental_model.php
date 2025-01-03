<?php

class Rental_model extends CI_Model {

  public function get_data($table){
    return $this->db->get($table);
  }

  public function get_where($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function insert_data($data, $table){
    $this->db->insert($table, $data);
  }

  public function update_data($table, $data, $where){
    $this->db->update($table, $data, $where);
  }

  public function ambil_id_mobil($id){
    $hasil = $this->db->where('id_buku', $id)->get('buku');

    if($hasil->num_rows() > 0){
      return $hasil->result();
    }
    else{
      return false;
    }
  }

  public function cek_login($username, $password){
    $username = set_value('username');
    $password = set_value('password');

    $result = $this->db->where('username', $username)
             ->where('password', md5($password))
             ->limit(1)
             ->get('customer');

    if($result->num_rows() > 0){
      return $result->row();
    }
    else{
      return FALSE;
    }
  }

  public function update_password($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function delete_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function downloadPembayaran($id){
    $query = $this->db->get_where('transaksi', array('id_rental' => $id));
    return $query->row_array();
  }

  // New methods for handling the 'diskon' field
  public function update_mobil_diskon($id_buku, $diskon) {
    $data = array('diskon' => $diskon);
    $this->db->where('id_buku', $id_buku);
    $this->db->update('buku', $data);
  }
  

  public function get_mobil_with_diskon() {
    $this->db->select('buku.*, tipe.genre_name');
    $this->db->from('buku');
    $this->db->join('tipe', 'buku.genre = tipe.genre');
    $query = $this->db->get();
    return $query->result();
  }
}
