<?php

class Profil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->helper('url');
    }
    function index(){
        $data['judul'] = "Halaman Profil Website";
        $data['profil'] = $this->Profil_model->ambil_data2()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
        $this->load->view('Biodata/Profil',$data);
    }
}


?>