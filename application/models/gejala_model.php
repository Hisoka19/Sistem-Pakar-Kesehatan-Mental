<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala_model extends CI_Model
{

     public function get_gejala()
    {
        // Assuming 'gejala' is your table name
        $query = $this->db->get('tbl_gejala');

        // Return the result as an array of objects
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

    public function get_last_kd_gejala()
{
    $this->db->select_max('kd_gejala');
    $query = $this->db->get('tbl_gejala');
    return $query->row()->kd_gejala;
}


    // fungsi update data
    public function update_data($kd_gejala, $data)
    {
        $this->db->where('kd_gejala', $kd_gejala);
        $this->db->update('tbl_gejala', $data);
    }

    // fungsi delete data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
