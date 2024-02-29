<?php
defined('BASEPATH') or exit('No direct script access allowed');

class crule extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rule_model');
    }

    public function index()
    {
        $data['title'] = 'Rule';
        $data['tbl_rule'] = $this->rule_model->get_data('tbl_rule')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vrule', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Penyakit';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtrule');
        $this->load->view('admin/footer');
    }

public function tambah_aksi()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        // Mendapatkan nilai terakhir dari kd_user
        $last_kd_rule = $this->rule_model->get_last_kd_rule();
        
        // Mengatur nilai kd_user untuk data baru
        $next_kd_rule = ($last_kd_rule) ? $last_kd_rule + 1 : 1;

        $data = array(
            'kd_rule' => $next_kd_rule,
            'gejala' => $this->input->post('gejala'),
            'penyakit' => $this->input->post('penyakit'),
        );

        $this->rule_model->insert_data($data, 'tbl_rule');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('crule');
    }
}


    public function edit($kd_rule)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'kd_rule' => $kd_rule,
                'gejala' => $this->input->post('gejala'),
                'penyakit' => $this->input->post('penyakit'),
            );

            $this->rule_model->update_data($kd_rule, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('crule');
        }
    }

    public function delete($kd_rule)
    {
        $where = array('kd_rule' => $kd_rule);
        $this->rule_model->delete_data($where, 'tbl_rule');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('crule');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('gejala', 'gejala', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('penyakit', 'penyakit', 'required', array(
            'required' => '%s data harus diisi !'
        ));
    }
}
