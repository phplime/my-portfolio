<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['page_title'] = "Upcoming";
        $data['page'] = "Activities";
        // $data['upcoming'] = $this->admin_m->select('upcoming');
		$data['main_content'] = $this->load->view('admin/dashboard/activities/home', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	public function social_sites()
	{
		$data = array();
		$data['page_title'] = "Social Sites";
        $data['page'] = "Activities";
        $data['social_sites'] = $this->admin_m->select('social_sites');
		$data['main_content'] = $this->load->view('admin/dashboard/activities/social_names', $data, TRUE);
		$this->load->view('admin/index',$data);
	}
	
	/**
	  *** add setting
	**/ 
	public function add_social_sites(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('icon', 'Icon', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url('admin/activities/social_sites'));
			}else{	
				$data = array(
					'name' => strtolower($this->input->post('name')),
					'label' => ucfirst($this->input->post('label')),
					'icon' => $this->input->post('icon'),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'social_sites');
				}else{
					$insert = $this->admin_m->update($data,$id,'social_sites');
				}

				if($insert){
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/activities/social_sites'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/activities/social_sites'));
				}	
		}
	}




	/**
	  *** add setting
	**/ 
	public function add_upcoming(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('start_date', 'Upcoming Time', 'xss_clean');
		$this->form_validation->set_rules('status', 'Status', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url('admin/activities'));
			}else{	
				$data = array(
					'title' => $this->input->post('title'),
					'details' => $this->input->post('details'),
					'start_date' => $this->input->post('start_date'),
					'status' => $this->input->post('status'),
					'post_time' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'upcoming');
				}else{
					$insert = $this->admin_m->update($data,$id,'upcoming');
				}

				if($insert){
					$this->upload_images($insert);
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/activities'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/activities'));
				}	
		}
	}


/**
   ** default Image Upload
 **/ 
	public function upload_images($id=0)
	{
		echo $id;
		if(!empty($_FILES['images']['name'])){

			$dir = "uploads/";
			$name = $_FILES['images']['name'];
			list($txt, $ext) = explode(".", $name);
			$image_name = md5(time()).".".$ext;
			$tmp = $_FILES['images']['tmp_name'];
		   if(move_uploaded_file($tmp, $dir.$image_name)){
			    $url = $dir.$image_name;
			    $data = array('image' => $url);
				$this->admin_m->update($data,$id,'upcoming');	
		   }else{
		      echo "image uploading failed";
		   }
		}

	}

	public function skills()
	{
		$data = array();
		$data['page_title'] = "Skills";
        $data['page'] = "Activities";
        $data['s_skill'] = FALSE;
        $data['skills'] = $this->admin_m->select('skills');
		$data['main_content'] = $this->load->view('admin/dashboard/activities/skills', $data, TRUE);
		$this->load->view('admin/index',$data);
	}
	
	public function edit_skills($id)
	{
		$data = array();
		$data['page_title'] = "Upcoming";
        $data['page'] = "Activities";
        $data['s_skill'] =$this->admin_m->single_select_by_id($id,'skills');
        $data['skills'] = $this->admin_m->select('skills');
		$data['main_content'] = $this->load->view('admin/dashboard/activities/skills', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	/**
	  *** add setting
	**/ 
	public function add_skills(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('percentage', 'Percentage', 'required|xss_clean');
		$this->form_validation->set_rules('skill_type', 'Skill Type', 'required|xss_clean');
		$this->form_validation->set_rules('size', 'Size', 'required|xss_clean');
		$this->form_validation->set_rules('width', 'Width', 'required|xss_clean');
		$this->form_validation->set_rules('barcolor', 'barcolor', 'required|xss_clean');
		$this->form_validation->set_rules('traccolor', 'traccolor', 'required|xss_clean');
		$this->form_validation->set_rules('status', 'Status', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->skills();
			}else{	
				$data = array(
					'title' => $this->input->post('title'),
					'percentage' => $this->input->post('percentage'),
					'skill_type' => $this->input->post('skill_type'),
					'size' => $this->input->post('size'),
					'width' => $this->input->post('width'),
					'barcolor' => $this->input->post('barcolor'),
					'traccolor' => $this->input->post('traccolor'),
					'status' => $this->input->post('status'),
					'post_time' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'skills');
				}else{
					$insert = $this->admin_m->update($data,$id,'skills');
				}

				if($insert){
					$this->upload_images($insert);
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/activities/skills'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/activities/skills'));
				}	
		}
	}


	

}
