<?php
class pelanggan_model extends CI_Model {
  var $table = "pelanggan";

  //ambil data berdasarkan Id
  public function get_by_id($id) {
    $this->db->where('pelanggan_id',$id);
    return $this->db->get($this->table)->row();
  }

  //tampilkan data pelanggan_nama dan jenis kelaminnya saja
  public function get_pelanggan() {
    $this->db->select('pelanggan_nama,pelanggan_jk');
    $this->db->order_by('pelanggan_nama','DESC');
    $this->db->limit(3);
    return $this->db->get($this->table)->result();
  }

  //get all data pelanggan
  public function get_all() {
    return $this->db->get($this->table)->result();
  }

  //update
  public function update($id,$data) {
    $this->db->where('pelanggan_id',$id);
    $this->db->update($this->table,$data);
  }

  public function delete($id_delete) {
    $this->db->where('pelanggan_id',$id_delete);
    $this->db->delete($this->table);
  }

  public function insert($data) {
    $this->db->insert($this->table,$data);
  }

  //pelanggan perbaris
    public function get_all_pelanggan() {
      $this->db->select('pelanggan_nama,pelanggan_id');
      return $this->db->get($this->table)->result();
    }

}
