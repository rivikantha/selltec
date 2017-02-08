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
		
		$this->form_validation->set_rules('project_name', 'Project name', 'trim|required|max_length[30]|alpha_numeric');

		$this->form_validation->set_rules('project_description', 'Project description', 'required');			
		
		if ($this->form_validation->run() == FALSE){
		
			$this->load->view('templates/header',$data);
			$this->load->view('admin/create_project');
			$this->load->view('templates/footer');
		}else{
			
			$this->load->model("project_model");
			$this->project_model->create_project();
			
		}		
	}

	public function list_projects(){

		$title = "List projects";

		$this->load->model("project_model");
		$data["projects"] = $this->project_model->list_projects();	

		$this->load->view('templates/header',$title);
		$this->load->view('admin/list_projects',$data);
		$this->load->view('templates/footer');
	}

	public function edit_project($project_id){

		$title = "Edit projects";

		$this->load->model("project_model");
		$data["project_details"] = $this->project_model->get_project_details($project_id);	

		$this->load->view('templates/header',$title);
		$this->load->view('admin/edit_project',$data);
		$this->load->view('templates/footer');


	}


}