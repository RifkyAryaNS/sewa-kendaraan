<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('beranda');
        }
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/navbar');
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //usernya ada dan jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/home');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert
                    alert-danger" role="alert">Password anda salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger" role="alert">email belum aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert
            alert-danger" role="alert">email belum terdaftar!</div>');
            redirect('auth');
        }
    }

    public function daftar()
    {
        if ($this->session->userdata('email')) {
            redirect('beranda');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email sudah terpakai'
        ]);
        $this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[3]|matches[pass2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password to short'
        ]);
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/navbar');
            $this->load->view('auth/daftar');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                //'id_jk' => $this->input->post('id_jk', true),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
                'nama' => $this->input->post('nama', true),
                'no_sim' => $this->input->post('no_sim', true),
                'no_hp' => $this->input->post('no_hp', true),
                'role_id' => 2,
                'is_active' => 1,
                'image' => 'default.jpg',
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Data berhasil disimpan. silakan login dengan akun anda</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">berhasil Log out</div>');
        redirect('home');
    }


    /*public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {

            $this->load->view('auth/forgotpassword');
        } else {
            $email = $this->input->post('email');
            $user  = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                //$this->_sendEmail($token, 'forgot');
                //$this->_sendEmail($token, 'verify');

                $this->session->set_flashdata('message', '<div class="alert
                alert-success" role="alert">silakan cek email anda untuk mereset password!</div>');
                redirect('auth/forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger" role="alert">Email tidak terdaftar atau belum aktif!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger" role="alert">reset password gagal! token salah.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert
            alert-danger" role="alert">reset password gagal! email salah.</div>');
            redirect('auth');
        }
    }*/


    public function changePassword()
    {
        /*if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }*/
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {

            $this->load->view('auth/change-password');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Password berhasil di ubah! silakan login.</div>');
            redirect('auth');
        }
    }
}
