<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Mobil_model');
    $this->load->model('Transaksi_model');
    $this->load->model('pelanggan_model');
    $this->load->model('Auth_model');

    if (!$this->session->has_userdata('admin_nama')) {
      $this->session->set_flashdata('belum_login', '<div class="alert alert-danger">Silahkan login terlebih dahulu</div>');
      redirect(base_url());
    }
  }

  public function index()
  {
    $this->data["title"] = "Dashboard - Kedan Trans & Tour";
    //jumlah mobil
    $this->data["jumlah_mobil"]     = $this->db->get('mobil')->num_rows();
    //jumlah pelanggan
    $this->data["jumlah_pelanggan"]  = $this->db->get('pelanggan')->num_rows();
    //jumlah transaksi
    $this->data["jumlah_transaksi"] = $this->db->get('transaksi')->num_rows();
    //rental selesai
    $this->data["rental_selesai"]   = $this->Transaksi_model->get_transaksi_status();
    //mobil-merek
    $this->data["mobil"]            = $this->Mobil_model->get_data_mobil_merk();
    //pelanggan terbaru
    $this->data["pelanggan_baru"]    = $this->pelanggan_model->get_pelanggan();
    //Peminjaman Terakhir
    $this->data["peminjaman_akhir"] = $this->Transaksi_model->get_transaksi_terakhir();
    //edit_pass_nama_user
    $this->data["user"]             = $this->Auth_model->get_all();

    $this->load->view('dashboard', $this->data);
  }
}
