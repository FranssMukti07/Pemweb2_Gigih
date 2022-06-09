<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Dosen_model', 'dsn1');
        $this->dsn1->nama = "Sirojul Munir, S.Si, M.Kom.
        ";
        $this->dsn1->nidn = "0414047101
        ";
        $this->dsn1->gender = "L";
        $this->dsn1->pendidikan = "S2 – Universitas Budi Luhur";

        $this->load->model('Dosen_model', 'dsn2');
        $this->dsn2->nama = "Ahmad Rio Adriansyah, S.Si. M.Si.
        ";
        $this->dsn2->nidn = "0413128601";
        $this->dsn2->gender = "L";
        $this->dsn2->pendidikan = "S2 – ITB/Kanazawa University Sains Komputasi";

        $this->load->model('Dosen_model', 'dsn3');
        $this->dsn3->nama = "TIFANI NABARIAN, S.Kom, M.T.i
        ";
        $this->dsn3->nidn = "420089004";
        $this->dsn3->gender = "P";
        $this->dsn3->pendidikan = "Teknologi Informasi – Universitas Indonesia";
        
        $this->load->model('Dosen_model', 'dsn4');
        $this->dsn4->nama = $this->input->post('nama');
        $this->dsn4->nidn = $this->input->post('nidn');
        $this->dsn4->gender = $this->input->post('gender');
        $this->dsn4->pendidikan = $this->input->post('pendidikan');

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];
        $data = array(
            "title" => "Dosen",
            "list_dsn" => $list_dsn,
        );
        
        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/index');
        $this->load->view('layout/foot');

    }
}
