<?php

class site_model extends CI_Model{
	
	
	
	function getall($sname,$ID){
	$this->load->database();
	
	$sql = "SELECT * FROM studentrecord WHERE studentid = ? AND name = ? "; 

    $query = $this->db->query($sql, array('$ID', '$sname'));
	return $query->first_row('array');
	}
	
	
	
	function get_records(){
		$query = $this -> db -> get('data');
		return $query->result();
	}
		
	function add_record($data)
	{
		$this->db->insert('data',$data);
		return;
	}
	
	function update_record($data)
	{
		$this->db->where('id',1);
		$this->db->update('data',$data);
	}
	function delete_row()
	{
		$this->db->where('id',$this->url->segment(3));
		$this->db->delete('data');
	}
}
/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */