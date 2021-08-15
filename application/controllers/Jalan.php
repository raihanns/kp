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

        $this->form_validation->set_rules('jalan', 'Jalan', 'required');
        $this->form_validation->set_rules('no_ruas', 'No_ruas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jalan/input_data', $data);
            $this->load->view('templates/footer', $data);
        } else {
            // $upload_image = $_FILES['image']['name'];
            // if ($upload_image) {
            //     $config['allowed_types'] = 'gif|jpg';
            //     $config['max_size'] = 2048;
            //     $config['upload_path'] = './assets/img/dokumentasi/';
            //     $this->load->library('upload', $config);

            //     if ($this->upload->do_upload('image')) {
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->set('image', $new_image);
            //     } else {
            //         echo $this->upload->display_errors();
            //     }
            // }

            $data = [
                'jalan' => $this->input->post('jalan'),
                'no_ruas' => $this->input->post('no_ruas'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),
                'panjang' => $this->input->post('panjang'),
                'lebar' => $this->input->post('lebar'),
                'aspal' => $this->input->post('aspal'),
                'beton' => $this->input->post('beton'),
                'kerikil' => $this->input->post('kerikil'),
                'tanah_belum' => $this->input->post('tanah_belum'),
                'baik' => $this->input->post('baik'),
                'sedang' => $this->input->post('sedang'),
                'rusak_ringan' => $this->input->post('rusak_ringan'),
                'rusak_berat' => $this->input->post('rusak_berat'),
                'image' => $this->_uploadImage(),


            ];
            $this->db->where('id', $id);
            $this->db->update('jalan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>Jalan berhasil di update!</div>');
            redirect('jalan');
        }
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/dokumentasi/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'tes';
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 2MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function input_kegiatan($id)
    {
        $data['title'] = 'Tambah Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jalan'] = $this->db->get_where('jalan', ['id' => $id])->row_array();

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jalan/input_kegiatan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'kegiatan' => $this->input->post('kegiatan'),
                'perusahaan' => $this->input->post('perusahaan'),
                'kontrak' => $this->input->post('kontrak'),
                'jangka' => $this->input->post('jangka'),
                'volume_pekerjaan' => $this->input->post('volume_pekerjaan'),
                'foto_kegiatan' => 'foto.jpg',
                'video_kegiatan' => 'video.mp4',
            ];
            $this->db->where('id', $id);
            $this->db->update('jalan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>Data kegiatan berhasil di update!</div>');
            redirect('jalan/kegiatan');
        }
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
}
