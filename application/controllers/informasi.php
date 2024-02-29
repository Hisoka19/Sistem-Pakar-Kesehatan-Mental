<?php
class Informasi extends CI_Controller {

    public function index()
    {
        $this->load->model('model_informasi');
        $data['tbl_gejala'] = $this->model_informasi->getGejala();
        $data['tbl_penyakit'] = $this->model_informasi->getPenyakit();
        $data['tbl_nilai_kepastian'] = $this->model_informasi->getNilaiKepastian();    
        $data['tbl_interpretasi_cf'] = $this->model_informasi->getInterpretasiCF();     
        $data['tbl_rule'] = $this->model_informasi->getRule();  
        $this->load->view('view_informasi', $data);
    }
    
}
?>
