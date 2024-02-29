<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_konsultasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model_konsultasi di sini
        $this->load->model('model_konsultasi');
    }

    public function index() {
        // Contoh penggunaan model_konsultasi di dalam controller
        $data['hasil_konsultasi'] = $this->model_konsultasi->get_data(); // Ganti 'get_data()' dengan method yang sesuai di model_konsultasi

        // Load view atau lakukan hal lain sesuai kebutuhan
        $this->load->view('view_konsultasi', $data);
    }

    // Tambahkan method lain sesuai kebutuhan

}
