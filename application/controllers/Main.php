<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Jalan');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Main';
        $config['base_url'] = site_url('main/index');
        // $config['total_rows'] = $this->db->count_all('jalan');
        if ($this->input->post('submit')) {
            // echo $this->input->post('keyword');
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }
        $this->db->like('jalan', $data['keyword']);
        $this->db->from('jalan');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;


        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);


        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['jalan'] = $this->M_Jalan->get_jalan_list($config["per_page"], $data['page'], $data['keyword']);
        $data['pagination'] = $this->pagination->create_links();

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
