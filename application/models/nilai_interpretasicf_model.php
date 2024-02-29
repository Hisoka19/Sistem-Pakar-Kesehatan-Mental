<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_interpretasicf_model extends CI_Model
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

    public function get_last_kd_nilai_kepastian()
{
    $this->db->select_max('Kd_Certainty_Term');
    $query = $this->db->get('tbl_interpretasi_cf');
    return $query->row()->Kd_Certainty_Term;
}


 // Fungsi update_data
public function update_data($Kd_Certainty_Term, $data)
{
    $this->db->where('Kd_Certainty_Term', $Kd_Certainty_Term);
    $this->db->update('tbl_interpretasi_cf', $data);
}

// Fungsi get_last_kd_nilai_kepastian
public function get_last_Kd_Certainty_Term()
{
    $this->db->select_max('Kd_Certainty_Term');
    $query = $this->db->get('tbl_interpretasi_cf');
    return $query->row()->Kd_Certainty_Term;
}

    // fungsi delete data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
