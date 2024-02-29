<?php
class model_informasi extends CI_Model {

    public function getGejala()
    {
        $query = $this->db->get('tbl_gejala'); // 'gejala' adalah nama tabel di database Anda
        return $query->result();
    }
        public function getPenyakit()
    {
        $query = $this->db->get('tbl_penyakit'); // 'gejala' adalah nama tabel di database Anda
        return $query->result();
    }
        public function getNilaiKepastian()
    {
        $query = $this->db->get('tbl_nilai_kepastian'); // 'gejala' adalah nama tabel di database Anda
        return $query->result();
    }
        public function getInterpretasiCF()
    {
        $query = $this->db->get('tbl_interpretasi_cf'); // 'gejala' adalah nama tabel di database Anda
        return $query->result();
    }
        public function getRule()
    {
        $query = $this->db->get('tbl_rule'); // 'gejala' adalah nama tabel di database Anda
        return $query->result();
    }
}
?>
