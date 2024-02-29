<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cnilaipakar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_pakar_model');
    }

    public function index()
    {
        $data['title'] = 'Nilai Kepastian Pakar';
        $data['tbl_nilai_kepastian_pakar'] = $this->nilai_pakar_model->get_data('tbl_nilai_kepastian_pakar')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vnilaipakar', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Nilai Kepastian Pakar';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtnilaipakar');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $last_no = $this->nilai_pakar_model->get_last_no();
            $next_no = ($last_no) ? $last_no + 1 : 1;

            $data = array(
                'no' => $next_no,
                'nama_gejala' => $this->input->post('nama_gejala'),
                'nilaicf' => $this->input->post('nilaicf'),
            );

            $this->nilai_pakar_model->insert_data($data, 'tbl_nilai_kepastian_pakar');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('cnilaipakar');
        }
    }

    public function edit($no)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'no' => $no,
                'nama_gejala' =>$this->input->post('nama_gejala'),
                'nilaicf' => $this->input->post('nilaicf'),
            );

            $this->nilai_pakar_model->update_data($no, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('cnilaipakar');
        }
    }

    public function delete($no)
    {
        $where = array('no' => $no);
        $this->nilai_pakar_model->delete_data($where, 'tbl_nilai_kepastian_pakar');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('cnilaipakar');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nilaicf', 'nilaicf', 'required', array(
            'required' => '%s data harus diisi !'
        ));
    }
}
