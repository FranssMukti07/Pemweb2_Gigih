<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Semobil.io | Login Page'
        ];

        $this->load->view('login/index', $data);
    }

    // Buat fungsi login dari auth_model
    public function login()
    {
        // Jika session belum ada, maka cek data yang diinputkan
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        // Jika data yang diinputkan benar
        if ($user) {
            // Jika password yang diinputkan benar
            if (password_verify($password, $user['password'])) {
                // Buat session
                $data = [
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'id' => $user['id'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                // Jika role_id nya admin
                if ($user['role'] == 'administrator') {
                    // redirect ke halaman admin
                    redirect('Landing/index');
                } else {
                    // redirect ke halaman user
                    redirect('Landing/index');
                }
            } else {
                // Jika password yang diinputkan salah
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth/index');
            }
        } else {
            // Jika data yang diinputkan salah
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username salah!</div>');
            redirect('auth/index');
        }
    }

    // Buat fungsi regitrasi dari auth_model
    public function register()
    {
        // Jika session sudah ada, maka redirect ke halaman dasboard
        // if ($this->session->userdata('username')) {
        //     redirect('pages/index');
        // }
        // Jika session belum ada, maka cek data yang diinputkan
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'email' => $this->input->post('email'),
            'role' => 'public'
        ];

        // Jika password dan konfirmasi password tidak sama
        if ($this->input->post('password') != $this->input->post('password2')) {
            // Jika password dan konfirmasi password tidak sama
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Konfirmasi Password tidak sama!</div>');
            redirect('auth/index');
        }

        // Jika data yang diinputkan benar
        if ($this->db->insert('users', $data)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar! Silahkan login.</div>');
            redirect('auth/index');
        } else {
            // Jika data yang diinputkan sudah ada di database
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username sudah ada!</div>');
            redirect('auth/index');
        }

        $this->db->insert('users', $data);
    }


    // Buat fungsi logout dari auth_model
    public function logout()
    {
        $this->Auth_model->logout();
        // Hapus session yang ada
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        // Redirect ke halaman login
        redirect('landing/index');
    }
}
