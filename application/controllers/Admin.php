<?php
class Admin extends CI_Controller {

	public function index(){
	
		$data['title'] = "Admin page";
	
		$this->load->view('templates/header',$data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}
		
	public function create_project(){
	
		$data['title'] = "Create project";
		
		$this->form_validation->set_rules('project_id', 'Project id', 'trim|required|integer');
		
		$this->form_validation->set_rules('project_name', 'Project name', 'trim|required|max_length[30]|alpha_numeric_spaces');

		$this->form_validation->set_rules('project_description', 'Project description', 'trim|required|alpha_numeric_spaces');			
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('templates/header',$data);
			$this->load->view('admin/create_project');
			$this->load->view('templates/footer');
		}else{
			
			$this->load->model("project_model");
			$query=$this->project_model->create_project();

			$this->index();

			
		}		
	}

	public function list_projects(){

		$header_data["title"] = "List projects";

		$this->load->model("project_model");
		$data["projects"] = $this->project_model->list_projects();	

		$this->load->view('templates/header',$header_data);
		$this->load->view('admin/list_projects',$data);
		$this->load->view('templates/footer');
	}

	public function edit_project($project_id=null){

		$header_data["title"] = "Edit projects";

		if(isset($_POST['project_id'])){			
			

			$this->form_validation->set_rules('project_name', 'Project name', 'trim|required|max_length[30]|alpha_numeric');

			$this->form_validation->set_rules('project_description', 'Project description', 'required');

			if ($this->form_validation->run() == FALSE){

				$data['project'] = array(
							'project_id'=>$this->input->post('project_id'),
							'project_name'=>$this->input->post('project_name'),
							'project_description'=>$this->input->post('project_description')
						);

				$this->load->view('templates/header',$header_data);
				$this->load->view('admin/edit_project',$data);
				$this->load->view('templates/footer');

			}else{


				$this->load->model("project_model");

				$query = $this->project_model->edit_project_details($this->input->post('project_id'));

				$this->list_projects();

			}


		}else{

			$header_data["title"] = "Edit project";

			$this->load->model("project_model");

			$project_details = $this->project_model->get_project_details($project_id);	
			$project = $project_details->row();
			

			$data['project'] = array(

					'project_id'=>$project->project_id,
					'project_name'=>$project->project_name,
					'project_description'=>$project->project_description

				);

			$this->load->view('templates/header',$header_data);
			$this->load->view('admin/edit_project',$data);
			$this->load->view('templates/footer');


		}
		

	}

	public function create_user(){
	
		$data['title'] = "Create user";
		
		//$this->form_validation->set_rules('user_id', 'User id', 'trim|required|integer');
		
		$this->form_validation->set_rules('user_name', 'Project name', 'trim|required|max_length[50]|alpha_numeric');

		$this->form_validation->set_rules('user_password', 'User Password', 'trim|required|max_length[10]|min_length[4]|alpha_numeric');

		$this->form_validation->set_rules('user_role', 'User Role', 'trim|required|max_length[10]|alpha_numeric');

		$this->form_validation->set_rules('project_id', 'Project id', 'trim|required|integer');

					
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('templates/header',$data);
			$this->load->view('admin/create_user');
			$this->load->view('templates/footer');
		}else{
			
			$this->load->model("user_model");
			$query=$this->user_model->create_user();

			$this->index();			
		}		
	}

	public function list_users(){

		$header_data["title"] = "List users";

		$this->load->model("user_model");
		$data["users"] = $this->user_model->list_users();	

		$this->load->view('templates/header',$header_data);
		$this->load->view('admin/list_users',$data);
		$this->load->view('templates/footer');
	}

	public function create_account(){
	
		$data['title'] = "Create Account";
				
		
		$this->form_validation->set_rules('account_code', 'Account Code', 'trim|required|integer');

		$this->form_validation->set_rules('account_name', 'Account Name', 'trim|required|max_length[20]|alpha_numeric_spaces');

		$this->form_validation->set_rules('account_location', 'Account Location', 'trim|required|max_length[10]|alpha_numeric_spaces');

		$this->form_validation->set_rules('balance_sheet_code', 'Balance Sheet Code', 'trim|required|integer');

					
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('templates/header',$data);
			$this->load->view('admin/create_account');
			$this->load->view('templates/footer');
		}else{
			
			$this->load->model("account_model");
			$query=$this->account_model->create_account();

			$this->index();			
		}		
	}


}