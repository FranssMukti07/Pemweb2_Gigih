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
    public function login()
    {
        // Jika session sudah ada, maka redirect ke halaman dasboard
        if ($this->session->userdata('username')) {
            redirect('pages/index');
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
                    'name' => $user['name'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                // Jika role_id nya admin
                if ($user['role_id'] == 1) {
                    // redirect ke halaman admin
                    redirect('Pages/index');
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

    // Buat fungsi redirect ke halaman_regist
    public function halaman_regist()
    {
        // Jika session sudah ada, maka redirect ke halaman dasboard
        if ($this->session->userdata('username')) {
            redirect('pages/index');
        }
        $data = array(
            'title' => 'Web Admin | Registrasi',
        );
        // Jika session belum ada, maka tampilkan halaman registrasi
        $this->load->view('login/halaman_regist', $data);
    }

    // Buat fungsi registrasi untuk user
    public function registrasi()
    {
        // Jika session sudah ada, maka redirect ke halaman dasboard
        if ($this->session->userdata('username')) {
            redirect('pages/index');
        }
        // Jika session belum ada, maka cek data yang diinputkan
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'role_id' => $this->input->post('role_id')
        ];

        // Jika password dan konfirmasi password tidak sama
        if ($this->input->post('password') != $this->input->post('password2')) {
            // Jika password dan konfirmasi password tidak sama
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Konfirmasi Password tidak sama!</div>');
            redirect('auth/halaman_regist');
        }

        // Jika data yang diinputkan benar
        if ($this->db->insert('user', $data)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar! Silahkan login.</div>');
            redirect('auth/index');
        } else {
            // Jika data yang diinputkan sudah ada di database
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username sudah ada!</div>');
            redirect('auth/halaman_regist');
        }

        $this->db->insert('user', $data);
    }

    // Buat fungsi Logout
    public function logout()
    {
        // Hapus session yang ada
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        // Redirect ke halaman login
        redirect('auth/index');
    }
}
