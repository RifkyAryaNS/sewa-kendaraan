<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Motor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model divisi_model,nama objeknya = divisi
        $this->load->model('Motor_model', 'motor');
    }

    public function index()
    {
        $data = [
            'pageTitle' => "RentCars | Motor",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'motor' => $this->motor->find_all()

        ];
        $this->load->view('template/header', $data);
        $this->load->view('admin/index_motor', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah()
    {
        $data = [
            'pageTitle' => "RentCars | Add Motor",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()

        ];
        $this->load->view('template/header', $data);
        $this->load->view('admin/tambah_motor', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah_save()
    {
        //validasi server side
        $this->form_validation->set_rules('merk_motor', 'Merk Motor', 'required');
        if ($this->form_validation->run() == FALSE) {
            //validasi menemukan error
            $this->load->view('admin/tambah_motor');
        } else {
            //handle upload foto
            $config = array(
                'upload_path' => "./assets/img/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $file_name = "";
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $file_name = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                exit;
            }
            //lolos validasi
            $data = [
                'merk_motor' => $this->input->post('merk_motor'),
                'nama_motor' => $this->input->post('nama_motor'),
                'no_pol' => $this->input->post('no_pol'),
                'harga' => $this->input->post('harga'),
                'image' => $file_name
            ];
            $this->motor->insert($data);
            redirect(base_url('admin/motor'));
        }
    }


    function edit($id)
    {
        $data = [
            'pageTitle' => "RentCars | Edit Motor",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'motor' => $this->motor->find_by_id($id)
        ];
        $this->load->view('template/header', $data);
        $this->load->view('admin/edit_motor', $data);
        $this->load->view('template/footer', $data);
    }

    //menyimpan data pada form edit
    function edit_save()
    {
        //validasi server side
        $id = $this->input->post('id');
        // $this->form_validation->set_rules('id_jabatan', 'ID Jabatan', 'required');
        //$this->form_validation->set_rules('id_divisi', 'ID Divisi', 'required');
        $this->form_validation->set_rules('merk_motor', 'Merk Motor', 'required');
        if ($this->form_validation->run() == FALSE) {
            //validasi menemukan error
            $data = $this->motor->find_by_id($id);
            $this->load->view('admin/edit_motor', $data);
        } else {
            //handle upload
            $file_name = $this->input->post('foto_lama');
            if ($_FILES['image']['name'] != "") {
                $config = array(
                    'upload_path' => "./assets/img/",
                    'allowed_types' => "*",
                    'overwrite' => TRUE,
                    'file_name' => "foto_" . date('YmdHis'),
                    'max_size' => "2048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
                );
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                    $file_name = $upload_data['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    exit;
                }
            }
            //lolos validasi
            $data = [
                'merk_motor' => $this->input->post('merk_motor'),
                'nama_motor' => $this->input->post('nama_motor'),
                'no_pol' => $this->input->post('no_pol'),
                'harga' => $this->input->post('harga'),
                'image' => $file_name

            ];
            $this->motor->update($id, $data);
            redirect(base_url('admin/motor'));
        }
    }

    function hapus($id)
    {
        $this->motor->delete($id);
        redirect(base_url('admin/motor'));
    }
}
