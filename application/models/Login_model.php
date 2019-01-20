<?php 

class Login_model extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function tambah_akun($where,$table){
        $this->db->insert($table,$where);
    }
}
?>