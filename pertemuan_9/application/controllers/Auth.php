<?php

class Auth extends CI_Controller
{

    // Buat fungsi index
    public function index()
    {
        // Jika session sudah ada, maka redirect ke halaman dasboard
        if ($this->session->userdata('username')) {
            redirect('pages/index');
        }
        
        $data = array(
            'title' => 'Web Admin | Login',
        );

        // Jika session belum ada, maka tampilkan halaman login
        $this->load->view('login/index', $data);
    }

    // Buat fungsi Login
    public function login(){
        // Jika session sudah ada, maka redirect ke halaman dasboard
        if ($this->session->userdata('username')) {
            redirect('user');
        }
        // Jika session belum ada, maka cek data yang diinputkan
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        // Jika data yang diinputkan benar
        if ($user) {
            // Jika password yang diinputkan benar
            if (password_verify($password, $user['password'])) {
                // Buat session
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                // Jika role_id nya admin
                if ($user['username'] == 'admin') {
                    // redirect ke halaman admin
                    redirect('Pages/index');
                } else {
                    // redirect ke halaman user
                    redirect('user');
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

    // Buat fungsi Logout
    public function logout()
    {
        // Hapus session yang ada
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        // Redirect ke halaman login
        redirect('auth');
    }

    



    // public function index()
    // {
    //     $this->load->model('auth_model');
    //     $this->load->library('form_validation');

    //     $rules = $this->auth_model->rules();
    //     $this->form_validation->set_rules($rules);

    //     if ($this->form_validation->run() == FALSE) {
    //         return $this->load->view('login/index');
    //     }

    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     if ($this->auth_model->login($username, $password)) {
    //         redirect('pages/index');
    //     } else {
    //         $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
    //     }

    //     $this->load->view('layout/head');
    //     $this->load->view('login/index');
    //     $this->load->view('layout/foot');
    // }

    // public function login()
    // {
    //     $this->load->model('auth_model');
    //     $this->load->library('form_validation');

    //     $rules = $this->auth_model->rules();
    //     $this->form_validation->set_rules($rules);

    //     if ($this->form_validation->run() == FALSE) {
    //         return $this->load->view('login/index');
    //     }

    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     if ($this->auth_model->login($username, $password)) {
    //         redirect('admin');
    //     } else {
    //         $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
    //     }

    //     $this->load->view('layout/head');
    //     $this->load->view('layout/navbar');
    //     $this->load->view('login/index');
    //     $this->load->view('layout/foot');
    // }

    // public function logout()
    // {
    //     $this->load->model('auth_model');
    //     $this->auth_model->logout();
    //     redirect(base_url());
    // }
}
