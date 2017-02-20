<?php

class Payment_model extends CI_Model{

	function enter_payment(){
			
		$data = array(			
			'voucher_no'=>$this->input->post('voucher_no'),
			'payment_date'=>$this->input->post('payment_date'),
			'payable_to'=>$this->input->post('payable_to'),
			'payment_description'=>$this->input->post('payment_description'),			
			'account_code'=>$this->input->post('account_code'),
			'payment_amount'=>$this->input->post('payment_amount'),
			'payment_type'=>$this->input->post('payment_type'),
			'payment_check_no'=>$this->input->post('payment_check_no'),
			'project_id'=>60

			
		);

		$query = $this->db->insert('payment', $data);

		if($query){
		
			return true;
			
		}else{
			return false;
		}
			
	}

	function list_payments(){

		$query = $this->db->get('payment');

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