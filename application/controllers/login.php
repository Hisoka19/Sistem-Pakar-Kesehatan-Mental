<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('view_login');
    }

    public function process()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->model_login->login($email, $password);

        if ($user) {
            // Login berhasil
            // Set sesi atau lakukan langkah selanjutnya
            $this->session->set_userdata('nama_mahasiswa', $user->nama_mahasiswa);
            $this->session->set_userdata('email', $user->email);
            $this->session->set_userdata('user_logged_in', true);
            $this->session->set_userdata('password', $user->password); // Sesuaikan dengan kolom nama pada tabel user
            // Redirect ke halaman tujuan
            redirect('home');
        } else {
            // Login gagal
            // Tampilkan pesan kesalahan atau langkah alternatif
            echo "Login gagal. Email atau kata sandi tidak benar.";
        }
    }
}
