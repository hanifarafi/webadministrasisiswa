<?php

class mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mahasiswa_model');
    }
    function index($nama2 =''){
        $data['judul2'] = 'Halaman Mahasiswa';
        $data['nama2'] = $nama2;
        $data['user']  = $this->Mahasiswa_model->ambil_data()->result();
        $this ->load ->view('templates/header',$data);
        $this ->load ->view('templates/footer');
        $this ->load ->view('mahasiswa/Mahasiswa',$data);
    }
    function tambah(){
        $this->load->view('mahasiswa/Input');
        $this ->load ->view('templates/footer');
    }
    function tambah_aksi(){
        $nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        $jenjang  = $this->input->post('jenjang');

        $data = array(
            'nama' =>$nama,
            'alamat' =>$alamat,
            'pekerjaan' =>$pekerjaan,
            'jenjang' =>$jenjang
        );
        $this->Mahasiswa_model->input_data($data,'user');
        redirect('index.php/Mahasiswa/index');
    }
    function hapus($id){
            $where = array('id' => $id);
            $this->Mahasiswa_model->hapus_data($where,'user');
            redirect('index.php/Mahasiswa/index');
    }
    function cari(){
        $data['user'] = $this->Mahasiswa_model->Search_model();
		$this->load->view('mahasiswa/Search', $data);
        $this ->load ->view('mahasiswa/Search',$data);
        $this ->load ->view('templates/footer');
    }
}  
?>