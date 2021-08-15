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

    function data($number, $offset)
    {
        return $query = $this->db->get('jalan', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('jalan')->num_rows();
    }

    function get_jalan_list($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('jalan', $keyword);
        }
        $query = $this->db->get('jalan', $limit, $start);
        return $query;
    }
}
