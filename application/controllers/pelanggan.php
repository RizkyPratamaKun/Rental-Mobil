<?php
class pelanggan extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model('pelanggan_model');
  }

  public function index() {
      $this->data["title"] = "Data pelanggan - Aplikasi Rental Mobil";

      $this->data["get_all"] = $this->pelanggan_model->get_all();

      $this->load->view('pelanggan/data_pelanggan',$this->data);
  }

  //edit data pelanggan berdasarkan id
  public function edit_data($id) {
    $this->data["pelanggan"] = $this->pelanggan_model->get_by_id($id);

    $this->data["title"] = "Edit pelanggan - Aplikasi Rental Mobil";

    $row = $this->pelanggan_model->get_by_id($id);

    if($row) {
        //nama user
        $this->data["nama"] = array (
          "name"  => "nama",
          "class" => "form-control",
          "id"    => "nama",
        );

        //jenis Kelamin
        $this->data["option"] = array (
          "L" => "L",
          "P" => "P",
        );

        $this->data["jk"] = array (
          "name" => "jk",
          "class"=> "form-control",
        );

        //alamat
        $this->data["alamat"] = array (
          "name" => "alamat",
          "class"=> "form-control",
        );

        //hp
        $this->data["no_hp"] = array (
          "name" => "no_hp",
          "class"=> "form-control",
        );

        //no ktp
        $this->data["no_ktp"] = array (
          "name" => "no_ktp",
          "class"=> "form-control",
        );

        $this->load->view('pelanggan/edit_pelanggan',$this->data);
    }
  }

  public function edit_pelanggan_proses() {
    $data = array (
      "pelanggan_nama"     => $this->input->post('nama'),
      "pelanggan_alamat"   => $this->input->post('alamat'),
      "pelanggan_jk"       => $this->input->post('jk'),
      "pelanggan_hp"       => $this->input->post('no_hp'),
      "pelanggan_ktp"      => $this->input->post('no_ktp'),
    );

    $this->pelanggan_model->update($this->input->post('id'),$data);
    $this->session->set_flashdata('message','<div class="alert alert-success">Data pelanggan berhasil di edit</div>');
    redirect(base_url('pelanggan'));
  }

  public function delete($id) {
    $this->pelanggan_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success">Data berhasil di hapus</div>');
    redirect(base_url('pelanggan'));
  }

  //tambah pelanggan
  public function tambah_pelanggan() {
    $this->data["title"] = "Tambah pelanggan - Aplikasi Rental Mobil";

    $this->load->view('pelanggan/tambah_pelanggan',$this->data);
  }

  //tambah proses
  public function tambah_pelanggan_proses() {
    $data = array(
      "pelanggan_nama"     => $this->input->post('nama_pelanggan'),
      "pelanggan_alamat"   => $this->input->post('alamat'),
      "pelanggan_jk"       => $this->input->post('jenis_kelamin'),
      "pelanggan_hp"       => $this->input->post('no_hp'),
      "pelanggan_ktp"      => $this->input->post('no_ktp'),
    );

    $this->pelanggan_model->insert($data);
    $this->session->set_flashdata('message','<div class="alert alert-success">Data berhasil ditambahkan</div>');
    redirect(base_url('pelanggan'));
  }

}
