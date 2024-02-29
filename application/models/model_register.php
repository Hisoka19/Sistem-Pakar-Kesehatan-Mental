<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_register extends CI_Model
{

    function register($nim, $nama_mahasiswa, $umur, $jenis_kelamin, $email, $password)
    {
        $data_user = array(
            'nim' => $nim,
            'nama_mahasiswa' => $nama_mahasiswa,
            'umur' => $umur,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
            
        );
        $this->db->insert('tbl_user', $data_user);
    }
}
