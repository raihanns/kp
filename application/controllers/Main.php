<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Jalan');
    }

    public function index()
    {
        $data['title'] = 'Main';
        $data['jalan'] = $this->M_Jalan->getJalan();
        $this->load->view('main', $data);
    }
    public function data_jalan($id)
    {
        $data['title'] = 'jalan';
        $data['jalan'] = $this->db->get_where('jalan', ['id' => $id])->row_array();
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
