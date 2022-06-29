<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
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
        $this->load->model('prodi_model');
        $prodi = $this->prodi_model->get_all_data();

        $data = array(
            "title" => "Web Admin | Data Prodi",
            "isi_db" => $prodi,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/foot');
    }

    public function detail($id)
    {
        $this->load->model('prodi_model', 'prodi');
        $prodi = $this->prodi->detailProdi($id);

        $data = array(
            "title" => "Web Admin | Detail Prodi",
            "prd" => $prodi,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/detail_prodi', $data);
        $this->load->view('layout/foot');
    }

    public function form()
    {
        $this->load->model('prodi_model', 'prodi');

        $data = array(
            "title" => "Web Admin | Form Prodi",
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/form_prodi', $data);
        $this->load->view('layout/foot');
    }


    public function create()
    {
        $this->load->model('prodi_model', 'prodi');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');

        $db_prodi = array(
            'kode' => $_kode,
            'nama' => $_nama,
            'kaprodi' => $_kaprodi
        );

        $this->prodi->save($db_prodi);

        // Logika pesan berhasil buat data
        $this->session->set_flashdata('message_success', 'Data <b>berhasil</b> ditambahkan!');

        redirect('prodi/index', 'refresh');
    }

    public function halaman_edit($id)
    {
        $this->load->model('prodi_model', 'prodi');
        $query_prodi_detail = $this->prodi->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_prodi_detail);
        // echo "</pre>";

        $data = array(
            "title" => "Web Admin | Form Prodi",
            'query_prodi_detail' => $query_prodi_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/edit_form', $data);
        $this->load->view('layout/foot');
    }

    public function edit_prodi()
    {
        $this->load->model('prodi_model', 'prodi');
        $_id = $this->input->post('id');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');

        $array_update = array(
            'id' => $_id,
            'kode' => $_kode,
            'nama' => $_nama,
            'kaprodi' => $_kaprodi
        );

        $this->prodi->edit($_id, $array_update);

        // Logika pesan berhasil edit redirect ke halaman index
        $this->session->set_flashdata('success', 'Data berhasil diubah');

        redirect('prodi/index', 'refresh');
    }

    public function delete_prodi($id)
    {
        $this->load->model('prodi_model', 'prodi');

        $array_update['id'] = $id;
        $this->prodi->delete($array_update);

        // Logika pesan berhasil hapus redirect ke halaman index
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');

        redirect('prodi/index', 'refresh');
    }
}
