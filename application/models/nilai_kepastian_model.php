<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_kepastian_model extends CI_Model
{

    public function get_nilai_kepastian() {
        // Your code to retrieve data from the database
        $query = $this->db->get('tbl_nilai_kepastian');
        return $query->result();
    }

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

    public function get_last_kd_nilai_kepastian()
{
    $this->db->select_max('kd_nilai_kepastian');
    $query = $this->db->get('tbl_nilai_kepastian');
    return $query->row()->kd_nilai_kepastian;
}


    // fungsi update data
    public function update_data($kd_nilai_kepastian, $data)
    {
        $this->db->where('kd_nilai_kepastian', $kd_nilai_kepastian);
        $this->db->update('tbl_nilai_kepastian', $data);
    }

    // fungsi delete data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
