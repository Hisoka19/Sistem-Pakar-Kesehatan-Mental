<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/view_dashboard');
        $this->load->view('admin/footer');
        
        
    }
}