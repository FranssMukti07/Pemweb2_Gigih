<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
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
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->get_all_data();

        $data = array(
            "title" => "Web Admin | Data Mahasiswa",
            "isi_db" => $mahasiswa,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/foot');
    }

    public function detail($id)
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $mahasiswa = $this->mahasiswa->detailMahasiswa($id);

        $data = array(
            "title" => "Web Admin | Detail Mahasiswa",
            "mhs" => $mahasiswa,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/detail_mahasiswa', $data);
        $this->load->view('layout/foot');
    }

    public function form()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $this->load->model('prodi_model', 'prodi');
        $prodi = $this->prodi->get_all_data();

        $data = array(
            "title" => "Web Admin | Form Mahasiswa",
            'prodi' => $prodi
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/form_mahasiswa', $data);
        $this->load->view('layout/foot');
    }

    public function create()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');
        $_prodi_kode = $this->input->post('prodi_kode');

        $db_mahasiswa = array(
            'nim' => $_nim,
            'nama' => $_nama,
            'gender' => $_gender,
            'tmp_lahir' => $_tmp_lahir,
            'tgl_lahir' => $_tgl_lahir,
            'ipk' => $_ipk,
            'prodi_kode' => $_prodi_kode
        );

        $this->mahasiswa->save($db_mahasiswa);

        // Logika pesan berhasil buat data
        $this->session->set_flashdata('message_success', 'Data <b>berhasil</b> ditambahkan!');

        redirect('mahasiswa/index', 'refresh');
    }

    public function halaman_edit($id)
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $query_mahasiswa_detail = $this->mahasiswa->get_by_id($id);
        $this->load->model('prodi_model', 'prodi');
        $prodi = $this->prodi->get_all_data();

        // echo "<pre>";
        // echo print_r($query_mahasiswa_detail);
        // echo "</pre>";

        $data = array(
            "title" => "Web Admin | Edit Mahasiswa",
            'query_mahasiswa_detail' => $query_mahasiswa_detail,
            'prodi' => $prodi
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/edit_form', $data);
        $this->load->view('layout/foot');
    }

    public function edit_mahasiswa()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $_id = $this->input->post('id');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');
        $_prodi_kode = $this->input->post('prodi_kode');

        $array_update = array(
            'id' => $_id,
            'nim' => $_nim,
            'nama' => $_nama,
            'gender' => $_gender,
            'tmp_lahir' => $_tmp_lahir,
            'tgl_lahir' => $_tgl_lahir,
            'ipk' => $_ipk,
            'prodi_kode' => $_prodi_kode
        );

        $this->mahasiswa->edit($_id, $array_update);

        // Logika pesan berhasil edit redirect ke halaman index
        $this->session->set_flashdata('success', 'Data berhasil diubah');

        redirect('mahasiswa/index', 'refresh');
    }

    public function delete_mahasiswa($id)
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $array_update['id'] = $id ;
        $this->mahasiswa->delete($array_update);

        // Logika pesan berhasil hapus redirect ke halaman index
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        
        redirect('mahasiswa/index', 'refresh');
    }
}
