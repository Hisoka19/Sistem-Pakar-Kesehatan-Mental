<?php
class Home extends CI_Controller
{
    public function index()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
            redirect('login'); // Redirect to login page if not logged in
        }

        $this->load->view('view_home');
    }

    public function logout()
    {
        // Hapus semua data sesi
        $this->session->sess_destroy();
        // Redirect ke halaman login setelah logout
        redirect('login');
    }
}
