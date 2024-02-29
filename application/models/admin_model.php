<?php
class Admin_model extends CI_Model
{
    // CRUD for tbl_user
    public function getUsers()
    {
        $query = $this->db->get('tbl_user');
        return $query->result();
    }

    public function createUser($data)
    {
        $this->db->insert('tbl_user', $data);
    }

    public function updateUser($id, $data)
    {
        $this->db->where('kd_user', $id);
        $this->db->update('tbl_user', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('kd_user', $id);
        $this->db->delete('tbl_user');
    }

    // CRUD for tbl_gejala
    public function getGejala()
    {
        $query = $this->db->get('tbl_gejala');
        return $query->result();
    }

    public function createGejala($data)
    {
        $this->db->insert('tbl_gejala', $data);
    }

    public function updateGejala($id, $data)
    {
        $this->db->where('kd_gejala', $id);
        $this->db->update('tbl_gejala', $data);
    }

    public function deleteGejala($id)
    {
        $this->db->where('kd_gejala', $id);
        $this->db->delete('tbl_gejala');
    }

    // Similar CRUD methods for tbl_penyakit, tbl_nilai_kepastian, and tbl_interpretasi_cf
}
?>
