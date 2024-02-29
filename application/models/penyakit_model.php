<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{
    // fungsi read data
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    // fungsi create/insert data
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_last_kd_penyakit()
{
    $this->db->select_max('kd_penyakit');
    $query = $this->db->get('tbl_penyakit');
    return $query->row()->kd_penyakit;
}


    // fungsi update data
    public function update_data($kd_penyakit, $data)
    {
        $this->db->where('kd_penyakit', $kd_penyakit);
        $this->db->update('tbl_penyakit', $data);
    }

    // fungsi delete data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
