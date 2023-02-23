<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->library('form_validation');
        //load model divisi_model,nama objeknya = divisi
        //$this->load->model('Mobil_model', 'mobil');
    }

    public function index()
    {

        $data = [
            'pageTitle' => "RentCars | My Profile",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('profile');
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar');
            $this->load->view('profile');
            $this->load->view('template/footer');
        }
    }

    public function editProfile()
    {
        $data = [
            'pageTitle' => "RentCars | Edit Profile",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];


        if ($this->session->userdata('email')) {
            $this->load->view('template/header-home', $data);
            $this->load->view('template/navbar-login');
            $this->load->view('edit_profile', $data);
            $this->load->view('template/footer');
        } else {
            $nama = $this->input->post('nama');
            $no_sim = $this->input->post('no_sim');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');

            //cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            };
            $this->db->set('nama', $nama);
            $this->db->set('no_sim', $no_sim);
            $this->db->set('no_hp', $no_hp);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Profile berhasil di update</div>');
            redirect('profile');
        }
    }



    //ALTER TABLE `nilai_perpanjangan`
    //ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION
}
