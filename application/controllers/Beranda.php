<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{

		$data = [
			'pageTitle' => "RentCars | Beranda",
			'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
		];

		$this->load->view('template/header', $data);
		$this->load->view('beranda/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function contoh()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('beranda/contoh', $data);
		$this->load->view('template/footer', $data);
	}



	//ALTER TABLE `nilai_perpanjangan`
	//ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION
}
