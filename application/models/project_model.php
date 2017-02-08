<?php

class Project_model extends CI_Model{

	function create_project()
	{
		
		$data = array(
			'project_id'=>$this->input->post('project_id'),
			'project_name'=>$this->input->post('project_name'),
			'project_description'=>$this->input->post('project_description')
		);

		$query = $this->db->insert('project', $data);

		if($query){
		
			return true;
			
		}else{
			return false;
		}
		
	}

	function list_projects(){

		$query = $this->db->get('project');

		return $query;
	}

	function get_project_details($project_id){


		$query = $this->db->get_where('project', array('project_id' => $project_id));

		return $query;
	}
	

}