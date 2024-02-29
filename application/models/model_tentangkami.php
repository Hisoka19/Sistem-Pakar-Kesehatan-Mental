<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_tentangkami extends CI_Model
{
    public function tentang_kami($nama_mahasiswa)
    {
        return $this->db->get_where('tbl_user', array('nama_mahasiswa' => $nama_mahasiswa))->row();
    }
}