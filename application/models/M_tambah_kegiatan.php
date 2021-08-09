<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tambah_jalan extends CI_Model
{
    public function getTambahKegiatan()
    {
        return $this->db->get('tambah_kegiatan')->result_array();
    }

    public function insertKegiatan($data)
    {
        return $this->db->insert('tambah_kegiatan', $data);
    }
}
