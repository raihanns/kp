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

        $data['jumlah'] = $this->db->query('SELECT * FROM jalan')->num_rows();
        $data['baik'] = $this->db->select_sum('baik')->get('jalan')->row('baik');
        $data['panjang'] = $this->db->select_sum('panjang')->get('jalan')->row('panjang');
        $this->load->view('data_jalan', $data);
    }
    public function data_kegiatan($id)
    {
        $data['title'] = 'kegiatan';
        $data['jalan'] = $this->db->get_where('jalan', ['id' => $id])->row_array();
        $this->load->view('data_kegiatan', $data);
    }
}
