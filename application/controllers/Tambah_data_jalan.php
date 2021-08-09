<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tambah_jalan');

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Tambah Data Jalan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jalan', 'Jalan', 'required');

        $data['jalan'] = $this->M_tambah_jalan->getTambahJalan();
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
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jalan/input_data', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->db->insert('tambah_data_jalan', [
                'no_ruas' => $this->input->post('no_ruas'),
                'nama_ruaskecamatandesa' => $this->input->post('nama_ruaskecamatandesa'),
                'kecamatandesa' => $this->input->post('kecamatandesa'),
                'desa' => $this->input->post('desa'),
                'panjang' => $this->input->post('panjang'),
                'lebar' => $this->input->post('lebar'),
                'perkerasan_aspal_km' => $this->input->post('perkerasan_aspal_km'),
                'perkerasan_aspal_meter' => $this->input->post('perkerasan_aspal_meter'),
                'perkerasan_beton_km' => $this->input->post('perkerasan_beton_km'),
                'perkerasan_beton_meter' => $this->input->post('perkerasan_beton_meter'),
                'perkerasan_kerikil_km' => $this->input->post('perkerasan_kerikil_km'),
                'perkerasan_kerikil_meter' => $this->input->post('perkerasan_kerikil_meter'),
                'perkerasan_tanah_km' => $this->input->post('perkerasan_tanah_km'),
                'perkerasan_tanah_meter' => $this->input->post('perkerasan_tanah_meter'),
                'kondisi_baik_km' => $this->input->post('kondisi_baik_km'),
                'kondisi_baik_meter' => $this->input->post('kondisi_baik_meter'),
                'kondisi_sedang_km' => $this->input->post('kondisi_sedang_km'),
                'kondisi_sedang_meter' => $this->input->post('kondisi_sedang_meter'),
                'kondisi_rusak_ringan_km' => $this->input->post('kondisi_rusak_ringan_km'),
                'kondisi_rusak_ringan_meter' => $this->input->post('kondisi_rusak_ringan_meter'),
                'kondisi_rusak_berat_km' => $this->input->post('kondisi_rusak_berat_km'),
                'kondisi_rusak_berat_meter' => $this->input->post('kondisi_rusak_berat_meter'),
                'dokumentasi' => $this->input->post('dokumentasi'),
            ]);
        }
    }
}
