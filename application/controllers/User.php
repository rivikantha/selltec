<?php
class User extends CI_Controller {

	public function index(){
	
		$data['title'] = "User panel";
	
		$this->load->view('templates/header',$data);
		$this->load->view('user/index');
		$this->load->view('templates/footer');
	}		
	

	public function enter_payment(){
	
		$data['title'] = "Enter Payment";		
		
		$this->form_validation->set_rules('voucher_no', 'Voucher No', 'trim|required|max_length[10]|alpha_numeric');

		$this->form_validation->set_rules('payment_date', 'Payment Date', 'trim|required|callback_check_date_format');

		$this->form_validation->set_rules('payable_to', 'Payable to', 'trim|required|max_length[50]|alpha_numeric_spaces');

		$this->form_validation->set_rules('payment_description', 'Payment Description', 'trim|required|max_length[200]|alpha_numeric_spaces');

		$this->form_validation->set_rules('account_code', 'Account Code', 'trim|required|integer');		

		$this->form_validation->set_rules('payment_amount', 'Payment Amount', 'trim|required|integer');

		$this->form_validation->set_rules('payment_type', 'Payment Type', 'trim|required|integer');

		$this->form_validation->set_rules('payment_check_no', 'Check No', 'trim|required|max_length[10]|alpha_numeric');
					
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('templates/header',$data);
			$this->load->view('user/enter_payment');
			$this->load->view('templates/footer');
		}else{
			
			$this->load->model("payment_model");
			$query=$this->payment_model->enter_payment();

			$this->index();			
		}		
	}

	public function list_payments(){

		$header_data["title"] = "List Payments";

		$this->load->model("payment_model");
		$data["payments"] = $this->payment_model->list_payments();	

		$this->load->view('templates/header',$header_data);
		$this->load->view('user/list_payments',$data);
		$this->load->view('templates/footer');
	}


	public function enter_receipt(){
	
		$data['title'] = "Enter Receipt";				
		
		$this->form_validation->set_rules('receipt_no', 'Receipt No', 'trim|required|max_length[10]|alpha_numeric');

		$this->form_validation->set_rules('receipt_date', 'Receipt Date', 'trim|required|callback_check_date_format');

		$this->form_validation->set_rules('received_from', 'Received from', 'trim|required|max_length[200]|callback_custom_alpha_numeric');

		$this->form_validation->set_rules('receipt_description', 'Receipt Description', 'trim|required|max_length[200]|alpha_numeric_spaces');

		$this->form_validation->set_rules('account_code', 'Account Code', 'trim|required|integer');		

		$this->form_validation->set_rules('receipt_amount', 'Receipt Amount', 'trim|required|integer');		

		$this->form_validation->set_rules('amount_type', 'Amount Type', 'trim|required|integer');

		$this->form_validation->set_rules('receipt_check_no', 'Check No', 'trim|integer|max_length[10]|alpha_numeric');
					
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('templates/header',$data);
			$this->load->view('user/enter_receipt');
			$this->load->view('templates/footer');
		}else{
			
			$this->load->model("receipt_model");
			$query=$this->receipt_model->enter_receipt();

			$this->index();			
		}		
	}

	public function list_receipts(){

		$header_data["title"] = "List Receipts";

		$this->load->model("receipt_model");
		$data["receipts"] = $this->receipt_model->list_receipts();	

		$this->load->view('templates/header',$header_data);
		$this->load->view('user/list_receipts',$data);
		$this->load->view('templates/footer');
	}


	public function view_cash_book(){

		$header_data["title"] = "Cash Book(User View)";

		$data = array();

		$this->load->view('templates/header',$header_data);
		$this->load->view('user/view_cash_book',$data);
		$this->load->view('templates/footer');

	}


	public function check_date_format($str){

		if(preg_match("/\d{4}-(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3(0|1))/", $str)){

			return true;

		}else{

			$this->form_validation->set_message('check_date_format', 'The {field} format is wrong plase use yyyy-mm-dd');
			return false;
		}
	}

	public function custom_alpha_numeric($str){

	    if ( !preg_match('/^[a-z .,\-]+$/i',$str) )
	    {
	        
	        $this->form_validation->set_message('custom_alpha_numeric', 'The {field} can only have alpha numeric characters spaces dots and commas');
	        return false;

	    }else{

	    	return true;
	    }
	}

}