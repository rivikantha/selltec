<?php

class Account_model extends CI_Model{

	function create_account(){
			
		$data = array(
			//'user_id'=>$this->input->post('user_id'),
			'account_code'=>$this->input->post('account_code'),
			'account_name'=>$this->input->post('account_name'),			
			'account_location'=>$this->input->post('account_location'),
			'balance_sheet_code'=>$this->input->post('balance_sheet_code')

		);

		$query = $this->db->insert('account', $data);

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