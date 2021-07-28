<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Jalan');

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Tambah Data Jalan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jalan', 'Jalan', 'required');

        $data['jalan'] = $this->M_Jalan->getJalan();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jalan/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->db->insert('jalan', ['jalan' => $this->input->post('jalan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>New Jalan added!</div>');
            redirect('jalan');
        }
    }

    public function input_data($id)
    {
        $data['title'] = 'Tambah Data Jalan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jalan'] = $this->db->get_where('jalan', ['id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jalan/input_data', $data);
        $this->load->view('templates/footer', $data);
    }
    public function deleteJalan($id)
    {
        $this->M_Jalan->deleteJalan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jalan berhasil dihapus!</div>');
        redirect('jalan');
    }



    public function kegiatan()
    {
        $data['title'] = 'Tambah Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jalan'] = $this->M_Jalan->getJalan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jalan/kegiatan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function input_kegiatan($id)
    {
        $data['title'] = 'Tambah Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jalan'] = $this->db->get_where('jalan', ['id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jalan/input_kegiatan', $data);
        $this->load->view('templates/footer', $data);
    }
}
