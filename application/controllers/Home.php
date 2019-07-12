<?php
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index($nama =''){
    $data['judul'] = 'Halaman login Saya';
    $data['nama'] = $nama;
    $this ->load->view('templates/header',$data);
    $this ->load->view('templates/footer');
    $this ->load->view('home/index',$data);
    }
}
?>