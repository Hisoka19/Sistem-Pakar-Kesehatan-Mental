<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    // Dashboard view
    public function dashboard()
    {
        $data['users'] = $this->Admin_model->getUsers();
        $this->load->view('admin/dashboard', $data);
    }

    // CRUD functions for tbl_user
    public function createUser()
    {
        // Load necessary view for creating user
        // Handle form submission and insert data into database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = $this->input->post('nim');
            $nama_mahasiswa = $this->input->post('nama_mahasiswa');
            $umur = $this->input->post('umur');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->Admin_model->createUser($nim, $nama_mahasiswa, $umur, $jenis_kelamin, $email, $password);
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/create_user');
        }
    }

    public function editUser($kd_user)
    {
        // Load necessary view for editing user
        // Handle form submission and update data in the database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = $this->input->post('nim');
            $nama_mahasiswa = $this->input->post('nama_mahasiswa');
            $umur = $this->input->post('umur');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->Admin_model->updateUser($kd_user, $nim, $nama_mahasiswa, $umur, $jenis_kelamin, $email, $password);
            redirect('admin/dashboard');
        } else {
            $data['user'] = $this->Admin_model->getUser($kd_user);
            $this->load->view('admin/edit_user', $data);
        }
    }

    public function deleteUser($kd_user)
    {
        $this->Admin_model->deleteUser($kd_user);
        redirect('admin/dashboard');
    }
}
?>
