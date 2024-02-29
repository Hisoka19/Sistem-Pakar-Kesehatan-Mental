<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule_model extends CI_Model
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

    public function get_last_kd_rule()
{
    $this->db->select_max('kd_rule');
    $query = $this->db->get('tbl_rule');
    return $query->row()->kd_rule;
}


    // fungsi update data
    public function update_data($kd_rule, $data)
    {
        $this->db->where('kd_rule', $kd_rule);
        $this->db->update('tbl_rule', $data);
    }

    // fungsi delete data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
