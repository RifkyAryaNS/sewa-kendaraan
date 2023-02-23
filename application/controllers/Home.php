<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {

        $data = [
            'pageTitle' => "RentCars | Home",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('index');
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar');
            $this->load->view('index');
            $this->load->view('template/footer');
        }
    }


    //ALTER TABLE `nilai_perpanjangan`
    //ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION
}
