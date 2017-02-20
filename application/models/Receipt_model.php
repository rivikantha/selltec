<?php

class Receipt_model extends CI_Model{

	function enter_receipt(){
			
		$data = array(			
			'receipt_no'=>$this->input->post('receipt_no'),
			'receipt_date'=>$this->input->post('receipt_date'),
			'received_from'=>$this->input->post('received_from'),
			'receipt_description'=>$this->input->post('receipt_description'),			
			'account_code'=>$this->input->post('account_code'),
			'receipt_amount'=>$this->input->post('receipt_amount'),
			'amount_type'=>$this->input->post('amount_type'),
			'receipt_check_no'=>$this->input->post('receipt_check_no'),
			'project_id'=>60

		);

		$query = $this->db->insert('receipt', $data);

		if($query){
		
			return true;
			
		}else{
			return false;
		}
			
	}

	function list_receipts(){

		$query = $this->db->get('receipt');

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