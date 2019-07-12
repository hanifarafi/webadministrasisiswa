<?php

class Mahasiswa_model extends CI_Model{
    function ambil_data(){
        return $this->db->get('user');
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
  }
    function Search_model(){
    $cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * FROM user WHERE nama like '%$cari%'");
    return $data->result();
    }
}   
?>