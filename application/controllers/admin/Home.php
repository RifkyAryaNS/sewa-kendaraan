<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model divisi_model,nama objeknya = divisi
		$this->load->model('Mobil_model', 'mobil');
		$this->load->model('Motor_model', 'motor');
		$this->load->model('Pesanan_model', 'pesan');
	}
	public function index()
	{
		$data = [
			'pageTitle' => "RentCars | Home",
			'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
			'pesan' => $this->pesan->hitungJumlahData(),
			'motor' => $this->motor->hitungJumlahData(),
			'mobil' => $this->mobil->hitungJumlahData(),

		];

		$this->load->view('template/header', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('template/footer', $data);
	}



	//ALTER TABLE `nilai_perpanjangan`
	//ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION
}
