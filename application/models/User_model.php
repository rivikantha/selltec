<?php

class User_model extends CI_Model{

	function create_user(){
			
		$data = array(
			//'user_id'=>$this->input->post('user_id'),
			'user_name'=>$this->input->post('user_name'),
			'user_password'=>$this->input->post('user_password'),			
			'user_role'=>$this->input->post('user_role'),
			'project_id'=>$this->input->post('project_id')

		);

		$query = $this->db->insert('user', $data);

		if($query){
		
			return true;
			
		}else{
			return false;
		}
			
	}

	function list_users(){

		$query = $this->db->get('user');

		return $query;
	}

	function get_project_details($project_id){


		$query = $this->db->get_where('project', array('project_id' => $project_id));

		return $query;
	}

	function edit_project_details($project_id){


		$data = array(	        
	        'project_name' => $this->input->post('project_name'),
	        'project_description' => $this->input->post('project_description')
		);


		$this->db->where('project_id', $project_id);


		$query=$this->db->update('project', $data);

		return $query;
	}

}