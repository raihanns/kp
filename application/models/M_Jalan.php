<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Jalan extends CI_model
{


    public function getJalan()
    {
        return $this->db->get('jalan')->result_array();
    }

    public function getJalanById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('jalan')->row_array();
    }


    public function deleteJalan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jalan');
    }

    public function editJalan($id)
    {
        $data = [
            'Jalan' => $this->input->post('Jalan')
        ];
        $this->db->where('id', $id);
        $this->db->update('jalan', $data);
    }
}
