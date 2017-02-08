<?php
class Login extends CI_Controller {

	public function __construct() {        
		parent::__construct();
	}
	
	
	public function index(){
		
		if ( ! file_exists(APPPATH.'/views/login/login.php')){
		
				// Whoops, we don't have a page for that!
				show_404();
		}
		
		$data['title'] = "login";
		
		$this->load->view('templates/header',$data);
		$this->load->view('login/login');
		$this->load->view('templates/footer');
	}
	
	
	function validate_credentials(){	
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		
		$this->form_validation->set_rules('password', 'Password', 'required');		
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('pages/login_form');
		}
		else{
		
			$this->load->model("membership_model");
		
			$query = $this->membership_model -> validate();
			
			if($query){ // if the users credentials validate...
				
				
				$user_name = $this->input->post("username");
				
				$user_data = $this->membership_model -> get_all_info_by_username($user_name);
				
				
				$data= array(
				
					'username'=>$this->input->post('username'),
					'first_name'=>$user_data->first_name,
					'last_name'=>$user_data->last_name,
					'library'=>$user_data->	library,
					'user_img'=>$user_data->img,
					'is_logged_in'=>true					
				);				

				$this->session->set_userdata($data);
				
				redirect('site/members_area');
			
			}else{
			
				
				$this->index();
				
			}
		}		
	}

	public function log_out(){
		
		session_destroy();	
		
		redirect("login/index");
		
	}

	
	
}