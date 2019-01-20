
<?php 

class Tampil_model extends CI_Model{	
	function tampil_data() {
			return $this->db->get('tiket');
	}
	
	function input_data($data, $table) { 
			$this->db->insert($table, $data);
	}

	function tampil_dataterakhir()
	{
		return $this->db->order_by('id_tiket','DESC')->get('tiket');
		
	}

}
?>