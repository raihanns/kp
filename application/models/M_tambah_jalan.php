<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tambah_jalan extends CI_Model
{
    public function getTambahJalan()
    {
        return $this->db->get('tambah_data_jalan')->result_array();
    }

    public function insertDataJalan($data)
    {
        return $this->db->insert('tambah_data_jalan', $data);
    }
}
