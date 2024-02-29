<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['title'] = 'User';
        $data['tbl_user'] = $this->user_model->get_data('tbl_user')->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vuser', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah User';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/vtuser');
        $this->load->view('admin/footer');
    }

public function tambah_aksi()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        // Mendapatkan nilai terakhir dari kd_user
        $last_kd_user = $this->user_model->get_last_kd_user();
        
        // Mengatur nilai kd_user untuk data baru
        $next_kd_user = ($last_kd_user) ? $last_kd_user + 1 : 1;

        $data = array(
            'kd_user' => $next_kd_user,
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'umur' => $this->input->post('umur'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        $this->user_model->insert_data($data, 'tbl_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('cuser');
    }
}


    public function edit($kd_user)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'kd_user' => $kd_user,
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'umur' => $this->input->post('umur'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );

            $this->user_model->update_data($kd_user, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('cuser');
        }
    }

    public function delete($kd_user)
    {
        $where = array('kd_user' => $kd_user);
        $this->user_model->delete_data($where, 'tbl_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('cuser');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('umur', 'umur', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('email', 'email', 'required', array(
            'required' => '%s data harus diisi !'
        ));
        $this->form_validation->set_rules('password', 'password', 'required', array(
            'required' => '%s data harus diisi !'
        ));
    }
}
