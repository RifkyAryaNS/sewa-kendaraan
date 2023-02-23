<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
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
            'pageTitle' => "RentCars | Mobil",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'pesan' => $this->pesan->getAllPesanan()
            //'pesan' => $this->db->get_where('pesanan', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('pesanan');
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar');
            $this->load->view('pesanan');
            $this->load->view('template/footer');
        }
    }

    public function sewa_mobil($id)
    {
        $data = [
            'pageTitle' => "RentCars | Mobil",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'mobil' => $this->mobil->find_by_id($id)
        ];

        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('sewa_mobil');
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar');
            $this->load->view('sewa_mobil');
            $this->load->view('template/footer');
        }
    }
    function tambah_sewa_mobil()
    {
        //validasi server side
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            //validasi menemukan error
            $this->load->view('sewa_mobil');
        } else {
            //lolos validasi
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nama_kendaraan' => $this->input->post('nama_kendaraan'),
                'no_pol' => $this->input->post('no_pol'),
                'harga' => $this->input->post('harga'),
                'lama_sewa' => $this->input->post('lama_sewa'),
                'date_created' => time()
            ];
            $this->pesan->insert($data);
            redirect(base_url('pesanan'));
        }
    }

    public function sewa_motor($id)
    {
        $data = [
            'pageTitle' => "RentCars | Mobil",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'motor' => $this->motor->find_by_id($id)
        ];

        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('sewa_motor');
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar');
            $this->load->view('sewa_motor');
            $this->load->view('template/footer');
        }
    }
    function tambah_sewa_motor()
    {
        //validasi server side
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            //validasi menemukan error
            $this->load->view('sewa_motor');
        } else {
            //lolos validasi
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nama_kendaraan' => $this->input->post('nama_kendaraan'),
                'no_pol' => $this->input->post('no_pol'),
                'harga' => $this->input->post('harga'),
                'lama_sewa' => $this->input->post('lama_sewa'),
                'date_created' => time()
            ];
            $this->pesan->insert($data);
            redirect(base_url('pesanan'));
        }
    }

    public function hapus_pesanan()
    {
        $this->cart->destroy();
        redirect('home');
    }



    //ALTER TABLE `nilai_perpanjangan`
    //ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION
}
