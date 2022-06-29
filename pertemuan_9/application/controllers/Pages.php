<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth/index');
        } else if ($this->session->userdata('role_id') != 1) {
            redirect('Landing/index');
        }
        $this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'title' => 'Web Admin | Home',
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('pages/index');
        $this->load->view('layout/foot');   
    }

    // Jika role_id = 2, maka tidak bisa mengakses halaman ini



}
