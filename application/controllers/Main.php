<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Main';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('main', $data);
        // $this->load->view('templates/footer', $data);
    }
    public function data_jalan()
    {
        $data['title'] = 'jalan';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('data_jalan', $data);
        // $this->load->view('templates/footer', $data);
    }
    public function data_kegiatan()
    {
        $data['title'] = 'kegiatan';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('data_kegiatan', $data);
        // $this->load->view('templates/footer', $data);
    }
}