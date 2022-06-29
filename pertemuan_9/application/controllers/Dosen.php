<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if (!$this->session->userdata('username')) {
            redirect('auth/index');
        } else if ($this->session->userdata('role_id') != 1) {
            redirect('Landing/index');
        }
    }

    public function index()
    {
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->get_all_data();

        $data = array(
            "title" => "Web Admin | Data Dosen",
            "isi_db" => $dosen,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/foot');
    }

    public function detail($id)
    {
        $this->load->model('dosen_model', 'dosen');
        $dosen = $this->dosen->detailDosen($id);

        $data = array(
            "title" => "Web Admin | Form Dosen",
            "dsn" => $dosen,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/detail_dosen', $data);
        $this->load->view('layout/foot');
    }
    
    public function form()
    {
        $this->load->model('dosen_model', 'dosen');
        $this->load->model('prodi_model', 'prodi');
        $prodi = $this->prodi->get_all_data();

        $data = array(
            "title" => "Web Admin | Form Dosen",
            "prodi" => $prodi,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/form_dosen', $data);
        $this->load->view('layout/foot');
    }

    public function create()
    {
        $this->load->model('dosen_model', 'dosen');
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_prodi_kode = $this->input->post('prodi_kode');

        $db_dosen = array(
            'nidn' => $_nidn,
            'nama' => $_nama,
            'gender' => $_gender,
            'tmp_lahir' => $_tmp_lahir,
            'tgl_lahir' => $_tgl_lahir,
            'pendidikan_akhir' => $_pendidikan_akhir,
            'prodi_kode' => $_prodi_kode
        );

        $this->dosen->save($db_dosen);

        // Logika pesan berhasil buat data
        $this->session->set_flashdata('message_success', 'Data <b>berhasil</b> ditambahkan!');

        redirect('dosen/index', 'refresh');
    }

    public function halaman_edit($id)
    {
        $this->load->model('dosen_model', 'dosen');
        $query_dosen_detail = $this->dosen->get_by_id($id);
        $this->load->model('prodi_model', 'prodi');
        $prodi = $this->prodi->get_all_data();

        // echo "<pre>";
        // echo print_r($query_dosen_detail);
        // echo "</pre>";

        $data = array(
            'title' => 'Web Admin | Edit Dosen',
            'query_dosen_detail' => $query_dosen_detail,
            'prodi' => $prodi,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/edit_form', $data);
        $this->load->view('layout/foot');
    }

    public function edit_dosen()
    {
        $this->load->model('dosen_model', 'dosen');
        $_id = $this->input->post('id');
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_prodi_kode = $this->input->post('prodi_kode');

        $array_update = array(
            'id' => $_id,
            'nidn' => $_nidn,
            'nama' => $_nama,
            'gender' => $_gender,
            'tgl_lahir' => $_tgl_lahir,
            'tmp_lahir' => $_tmp_lahir,
            'pendidikan_akhir' => $_pendidikan_akhir,
            'prodi_kode' => $_prodi_kode
        );

        $this->dosen->edit($_id, $array_update);

        // Logika pesan berhasil edit redirect ke halaman index
        $this->session->set_flashdata('success', 'Data berhasil diubah!');

        redirect('dosen/index', 'refresh');
    }

    public function delete_dosen($id)
    {
        $this->load->model('dosen_model', 'dosen');

        $array_update['id'] = $id;
        $this->dosen->delete($array_update);

        // Logika pesan berhasil hapus redirect ke halaman index
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');

        redirect('dosen/index', 'refresh');
    }
}
