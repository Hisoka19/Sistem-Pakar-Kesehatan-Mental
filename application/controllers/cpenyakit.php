<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cpenyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penyakit_model');
    }

    public function index()
    {
        $data['title'] = 'Penyakit';
        $data['tbl_penyakit'] = $this->penyakit_model->get_data('tbl_penyakit')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vpenyakit', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Penyakit';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtpenyakit');
        $this->load->view('admin/footer');
    }

public function tambah_aksi()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        // Mendapatkan nilai terakhir dari kd_user
        $last_kd_penyakit = $this->penyakit_model->get_last_kd_penyakit();
        
        // Mengatur nilai kd_user untuk data baru
        $next_kd_penyakit = ($last_kd_penyakit) ? $last_kd_penyakit + 1 : 1;

        $data = array(
            'kd_penyakit' => $next_kd_penyakit,
            'no' => $this->input->post('no'),
            'nama_penyakit' => $this->input->post('nama_penyakit'),
        );

        $this->penyakit_model->insert_data($data, 'tbl_penyakit');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('cpenyakit');
    }
}


    public function edit($kd_penyakit)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'kd_penyakit' => $kd_penyakit,
                'no' => $this->input->post('no'),
                'nama_penyakit' => $this->input->post('nama_penyakit'),
            );

            $this->penyakit_model->update_data($kd_penyakit, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('cpenyakit');
        }
    }

    public function delete($kd_penyakit)
    {
        $where = array('kd_penyakit' => $kd_penyakit);
        $this->penyakit_model->delete_data($where, 'tbl_penyakit');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('cpenyakit');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no', 'no', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('nama_penyakit', 'nama_penyakit', 'required', array(
            'required' => '%s data harus diisi !'
        ));
    }
}
