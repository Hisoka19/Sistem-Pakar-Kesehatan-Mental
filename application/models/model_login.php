<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{
    public function login($email, $password)
    {
        $user = $this->get_user_by_email($email);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        } else {
            return false;
        }
    }

    public function get_user_by_email($email)
    {
        return $this->db->get_where('tbl_user', array('email' => $email))->row();
    }
}
