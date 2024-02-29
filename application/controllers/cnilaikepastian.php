<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cnilaikepastian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_kepastian_model');
    }

    public function index()
    {
        $data['title'] = 'Nilai Kepastian';
        $data['tbl_nilai_kepastian'] = $this->nilai_kepastian_model->get_data('tbl_nilai_kepastian')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vnilai_kepastian', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Nilai Kepastian';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtnilai_kepastian');
        $this->load->view('admin/footer');
    }

public function tambah_aksi()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        // Mendapatkan nilai terakhir dari kd_user
        $last_kd_nilai_kepastian = $this->nilai_kepastian_model->get_last_kd_nilai_kepastian();
        
        // Mengatur nilai kd_user untuk data baru
        $next_kd_nilai_kepastian = ($last_kd_nilai_kepastian) ? $last_kd_nilai_kepastian + 1 : 1;

        $data = array(
            'kd_nilai_kepastian' => $next_kd_nilai_kepastian,
            'no' => $this->input->post('no'),
            'Keterangan' => $this->input->post('Keterangan'),
            'Nilai_kepastian' => $this->input->post('Nilai_kepastian'),
        );

        $this->nilai_kepastian_model->insert_data($data, 'tbl_nilai_kepastian');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('cnilaikepastian');
    }
}


    public function edit($kd_nilai_kepastian)
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->index();
    } else {
        $data = array(
            'no' => $this->input->post('no'),
            'Keterangan' => $this->input->post('Keterangan'),
            'Nilai_kepastian' => $this->input->post('Nilai_kepastian'),
        );

        $this->nilai_kepastian_model->update_data($kd_nilai_kepastian, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('cnilaikepastian');
    }
}


    public function delete($kd_nilai_kepastian)
    {
        $where = array('kd_nilai_kepastian' => $kd_nilai_kepastian);
        $this->nilai_kepastian_model->delete_data($where, 'tbl_nilai_kepastian');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('cnilaikepastian');
    }

    public function _rules()
{
    $this->form_validation->set_rules('no', 'no', 'required', array(
        'required' => '%s data harus diisi !'
    ));
    $this->form_validation->set_rules('Keterangan', 'Keterangan', 'required', array(
        'required' => '%s data harus diisi !'
    ));
    $this->form_validation->set_rules('Nilai_kepastian', 'Nilai_kepastian', 'required', array(
        'required' => '%s data harus diisi !'
    ));
}

}
