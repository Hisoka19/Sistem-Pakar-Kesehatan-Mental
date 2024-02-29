<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cnilaiinterpretasicf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_interpretasicf_model');
    }

    public function index()
    {
        $data['title'] = 'Nilai Interpretasi CF';
        $data['tbl_interpretasi_cf'] = $this->nilai_interpretasicf_model->get_data('tbl_interpretasi_cf')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vnilai_interpretasicf', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Interpretasi CF';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtnilai_interpretasicf');
        $this->load->view('admin/footer');
    }

public function tambah_aksi()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        // Mendapatkan nilai terakhir dari kd_user
        $last_Kd_Certainty_Term = $this->nilai_interpretasi_model->get_last_Kd_Certainty_Term();
        
        // Mengatur nilai kd_user untuk data baru
        $next_Kd_Certainty_Term = ($last_Kd_Certainty_Term) ? $last_Kd_Certainty_Term + 1 : 1;

        $data = array(
            'Kd_Certainty_Term' => $next_Kd_Certainty_Term,
            'no' => $this->input->post('no'),
            'Certainty_Term' => $this->input->post('Certainty_Term'),
            'CF_Akhir' => $this->input->post('CF_Akhir'),
        );

        $this->nilai_interpretasicf_model->insert_data($data, 'tbl_interpretasi_cf');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('cnilaiinterpretasicf');
    }
}


public function edit($Kd_Certainty_Term)
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->index();
    } else {
        $data = array(
            'Kd_Certainty_Term' => $Kd_Certainty_Term,
            'no' => $this->input->post('no'),
            'Certainty_Term' => $this->input->post('Certainty_Term'),
            'CF_Akhir' => $this->input->post('CF_Akhir'),                
        );

        $this->nilai_interpretasicf_model->update_data($Kd_Certainty_Term, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('cnilaiinterpretasicf');
    }
}


    public function delete($Kd_Certainty_Term)
    {
        $where = array('Kd_Certainty_Term' => $Kd_Certainty_Term);
        $this->nilai_interpretasicf_model->delete_data($where, 'tbl_interpretasi_cf');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('cnilaiinterpretasicf');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no', 'no', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('Certainty_Term', 'Certainty_Term', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('CF_Akhir', 'CF_Akhir', 'required', array(
            'required' => '%s data harus diisi !'
        ));
    }
}

