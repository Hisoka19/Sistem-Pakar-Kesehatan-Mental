<?php
class Konsultasi extends CI_Controller {

    public function index()
    {
        // Assuming you have a model called Nilai_kepastian_model
        $this->load->model('nilai_kepastian_model');
        $this->load->model('gejala_model');

        // Get data from models
        $data['tbl_gejala'] = $this->gejala_model->get_gejala();
        $data['tbl_nilai_kepastian'] = $this->nilai_kepastian_model->get_nilai_kepastian();

        // Load the view and pass the data
        $this->load->view('view_konsultasi', $data);
    }
}
