<?php

class Project_model extends CI_Model{	

	function validate()
	{
		
		$this->db->where("username",$this->input->post("username"));
		$this->db->where("password",md5($this->input->post("password")));
		$query = $this->db->get("membership");		
		
		
		if($query->num_rows() == 1)
		{
			return true;
			
		}else{
			
			return false;
		}		
		
	}
	
	public function get_all_info_by_username($username){
		
		$query = $this->db->get_where('membership', array('username' => $username));
		
		if($query->num_rows() == 1)
		{
			
			$row = $query->row();			 
			return $row;
			
		}else{
			
			return false;
		}
	
	}
	
}