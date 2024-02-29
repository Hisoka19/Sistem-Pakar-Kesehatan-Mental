<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
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

    public function get_last_kd_user()
{
    $this->db->select_max('kd_user');
    $query = $this->db->get('tbl_user');
    return $query->row()->kd_user;
}


    // fungsi update data
    public function update_data($kd_user, $data)
    {
        $this->db->where('kd_user', $kd_user);
        $this->db->update('tbl_user', $data);
    }

    // fungsi delete data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
