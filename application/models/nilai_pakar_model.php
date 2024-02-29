<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_pakar_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_last_no()
    {
        $this->db->select_max('no');
        $query = $this->db->get('tbl_nilai_kepastian_pakar');
        return $query->row()->no;
    }

    public function update_data($no, $data)
    {
        $this->db->where('no', $no);
        $this->db->update('tbl_nilai_kepastian_pakar', $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
