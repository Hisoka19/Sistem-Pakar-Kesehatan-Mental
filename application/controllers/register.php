<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_register');
        $this->load->library('form_validation');
        $this->load->database();


    }

    public function index()
    {
        
        $this->load->view('view_register');
        
    }

    public function process()
    {
        $this->form_validation->set_rules('nim', 'nim', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('umur', 'umur', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        
        if ($this->form_validation->run() == true) {
            $nim = $this->input->post('nim');
            $nama_mahasiswa = $this->input->post('nama_mahasiswa');
            $umur = $this->input->post('umur');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $this->model_register->register($nim, $nama_mahasiswa, $umur, $jenis_kelamin, $email, $password);
            redirect('login');
        }
        else{
            echo "Tidak berhasil";}
    }
}