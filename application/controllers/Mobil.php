<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model divisi_model,nama objeknya = divisi
        $this->load->model('Mobil_model', 'mobil');
    }

    public function index()
    {

        $data = [
            'pageTitle' => "RentCars | Mobil",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'mobil' => $this->mobil->find_all()
        ];

        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('mobil');
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar');
            $this->load->view('mobil');
            $this->load->view('template/footer');
        }
    }



    //ALTER TABLE `nilai_perpanjangan`
    //ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION
}
