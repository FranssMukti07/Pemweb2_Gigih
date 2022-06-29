<?php

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if (!$this->session->userdata('username')) {
            redirect('auth/index');
        }
    }

    // Buat fungsi index
    public function index()
    {
        $data = array(
            'title' => 'Home Page',
        );

        $this->load->view('landing/layout/head', $data);
        $this->load->view('landing/layout/navbar');
        $this->load->view('landing/pages/index', $data);
        $this->load->view('landing/layout/foot');
    }

    public function mahasiswa()
    {
        // ambil semua data dari table mahasiswa
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->db->get('mahasiswa')->result();
        $data['title'] = 'Data Mahasiswa';

        // ambil role_id dari session
        $role_id = $this->session->userdata('role_id');

        // ambil data kolom ipk dari tabel database mahasiswa
        $this->db->select('ipk');
        $data['ipk'] = $this->db->get('mahasiswa')->result();

        // ambil data ipk mahasiswa
        $ipk = $data['ipk'];
        // cek apakah ipk mahasiswa kosong atau tidak
        if ($ipk == '') {
            $predikat = '';
        } elseif ($ipk >= 3.5) {
            $predikat = 'Sangat Baik';
        } elseif ($ipk >= 3.0 && $ipk < 3.5) {
            $predikat = 'Baik';
        } elseif ($ipk >= 2.5 && $ipk < 3.0) {
            $predikat = 'Cukup';
        } else {
            $predikat = 'Kurang';
        }
        $data['predikat'] = $predikat;

        $data = array(
            'title' => 'Mahasiswa Page',
            'mahasiswa' => $data['mahasiswa'],
            'predikat' => $data['predikat'],
            'role' => $role_id,
            'table' => $data['title']
        );

        $this->load->view('landing/layout/head', $data);
        $this->load->view('landing/layout/navbar');
        $this->load->view('landing/mahasiswa/index', $data);
        $this->load->view('landing/layout/foot');
    }

    public function dosen()
    {
        // ambil semua data dari table dosen
        $data['dosen'] = $this->db->get('dosen')->result();
        $data['title'] = 'Data Dosen';
        // ambil role_id dari session
        $role_id = $this->session->userdata('role_id');

        $data = array(
            'title' => 'Dosen Page',
            'dosen' => $data['dosen'],
            'role' => $role_id,
            'table' => $data['title']
        );

        $this->load->view('landing/layout/head', $data);
        $this->load->view('landing/layout/navbar');
        $this->load->view('landing/dosen/index', $data);
        $this->load->view('landing/layout/foot');
    }

    public function prodi()
    {
        // ambil semua data dari table prodi
        $data['prodi'] = $this->db->get('prodi')->result();
        $data['title'] = 'Data Prodi';

        // ambil role_id dari session
        $role_id = $this->session->userdata('role_id');

        $data = array(
            'title' => 'Prodi Page',
            'prodi' => $data['prodi'],
            'role' => $role_id,
            'table' => $data['title']
        );

        $this->load->view('landing/layout/head', $data);
        $this->load->view('landing/layout/navbar');
        $this->load->view('landing/prodi/index', $data);
        $this->load->view('landing/layout/foot');
    }
}
