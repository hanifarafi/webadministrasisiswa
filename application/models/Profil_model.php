<?php
class Profil_model extends CI_Model{
    function ambil_data2(){
      return $this->db->get('profil');
    }
}