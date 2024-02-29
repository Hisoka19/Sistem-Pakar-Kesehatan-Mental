<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cgejala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gejala_model');
    }

    public function index()
    {
        $data['title'] = 'Gejala';
        $data['tbl_gejala'] = $this->gejala_model->get_data('tbl_gejala')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vgejala', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Gejala';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtgejala');
        $this->load->view('admin/footer');
    }

public function tambah_aksi()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        // Mendapatkan nilai terakhir dari kd_user
        $last_kd_gejala = $this->gejala_model->get_last_kd_gejala();
        
        // Mengatur nilai kd_user untuk data baru
        $next_kd_gejala = ($last_kd_gejala) ? $last_kd_gejala + 1 : 1;

        $data = array(
            'kd_gejala' => $next_kd_gejala,
            'no' => $this->input->post('no'),
            'nama_gejala' => $this->input->post('nama_gejala'),
        );

        $this->gejala_model->insert_data($data, 'tbl_gejala');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('cgejala');
    }
}


    public function edit($kd_gejala)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'kd_gejala' => $kd_gejala,
                'no' => $this->input->post('no'),
                'nama_gejala' => $this->input->post('nama_gejala'),
            );

            $this->gejala_model->update_data($kd_gejala, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('cgejala');
        }
    }

    public function delete($kd_gejala)
    {
        $where = array('kd_gejala' => $kd_gejala);
        $this->gejala_model->delete_data($where, 'tbl_gejala');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('cgejala');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no', 'no', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('nama_gejala', 'nama_gejala', 'required', array(
            'required' => '%s data harus diisi !'
        ));
    }
}
