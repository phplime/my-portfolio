<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_login_user();
	}

	public function index()
	{
		$data = array();
		$data['page_title'] = "Home";
        $data['page'] = "Profile";
        $data['s_home'] = false;
        $data['social_sites'] = $this->admin_m->select('social_sites');
        $data['home'] = $this->admin_m->select_all_by_user('home');
		$data['main_content'] = $this->load->view('admin/dashboard/profile/home', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	public function edit_home($id)
	{
		$data = array();
		$data['page_title'] = "Home";
        $data['page'] = "Profile";
        $data['s_home'] =$this->admin_m->single_select_by_id($id,'home');
        $data['home'] = $this->admin_m->select_all_by_user('home');
        $data['social_sites'] = $this->admin_m->select('social_sites');
		$data['main_content'] = $this->load->view('admin/dashboard/profile/home', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	
	/**
	  *** add setting
	**/ 
	public function add_home(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('about_me', 'About Me', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url('admin/profile/'));
			}else{	
				$data = array(
					'title' => $this->input->post('title',true),
					'user_id' => auth('id'),
					'about_me' => $this->input->post('about_me'),
					'facebook' => $this->input->post('facebook',true),
					'twitter' => $this->input->post('twitter',true),
					'whatsapp' => $this->input->post('whatsapp',true),
					'github' => $this->input->post('github',true),
					'youtube' => $this->input->post('youtube',true),
					'instagram' => $this->input->post('instagram',true),
					'behance' => $this->input->post('behance',true),
					'dribbble' => $this->input->post('dribbble',true),
					'fiverr' => $this->input->post('fiverr',true),
					'upwork' => $this->input->post('upwork',true),
					'created_at' => d_time(),
				);
				// echo "<pre>";print_r($data);exit();
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'home');
				}else{
					$insert = $this->admin_m->update($data,$id,'home');
				}

				if($insert){
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/'));
				}	
		}
	}




/**
   ** default Image Upload
 **/ 
	public function upload_images($id=0,$table)
	{

		if(!empty($_FILES['images']['name'])){
			if($tabel=='services'){
				$dir = 'uploads/services/';
			}elseif($table=='reviews'){
				$dir = 'uploads/reviews/';
			}

			$dir = $dir;
			$name = $_FILES['images']['name'];
			list($txt, $ext) = explode(".", $name);
			$image_name = md5(time()).".".$ext;
			$tmp = $_FILES['images']['tmp_name'];
		   if(move_uploaded_file($tmp, $dir.$image_name)){
			    $url = $dir.$image_name;
			    $data = array('images' => $url);
				$this->admin_m->update($data,$id,$table);	
		   }else{
		      echo "image uploading failed";
		   }
		}

	}

	public function skills()
	{
		$data = array();
		$data['page_title'] = "Skills";
        $data['page'] = "Resume";
        $data['s_skill'] = false;
        $data['skills'] = $this->admin_m->select_all_by_user('skills');
		$data['main_content'] = $this->load->view('admin/dashboard/profile/skills', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	public function edit_skills($id)
	{
		$data = array();
		$data['page_title'] = "Skills";
        $data['page'] = "Resume";
        $data['s_skill'] =$this->admin_m->single_select_by_id($id,'skills');
        $data['skills'] = $this->admin_m->select_all_by_user('skills');
		$data['main_content'] = $this->load->view('admin/dashboard/profile/skills', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	/**
	  *** add_skills
	**/ 
	public function add_skills(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('level', 'level', 'trim|required|integer|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->skills();
			}else{	
				$data = array(
					'title' => $this->input->post('title',true),
					'user_id' => auth('id'),
					'level' => $this->input->post('level',true),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'skills');
				}else{
					$insert = $this->admin_m->update($data,$id,'skills');
				}

				if($insert){
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/skills'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/skills'));
				}	
		}
	}

	public function services()
	{
		$data = array();
		$data['page_title'] = "Services";
        $data['page'] = "About";
        $data['data'] = false;
        $data['services'] = $this->admin_m->select_all_by_user('services');
		$data['main_content'] = $this->load->view('admin/dashboard/about/services', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	public function edit_services($id)
	{
		$data = array();
		$data['page_title'] = "Services";
        $data['page'] = "About";
        $data['data'] =$this->admin_m->single_select_by_id($id,'services');
        $data['services'] = $this->admin_m->select_all_by_user('services');
		$data['main_content'] = $this->load->view('admin/dashboard/about/services', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	/**
	  *** add_skills
	**/ 
	public function add_services(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('details', 'Details', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->services();
			}else{	
				$data = array(
					'title' => $this->input->post('title',true),
					'user_id' => auth('id'),
					'icon' => $this->input->post('icon',true),
					'details' => $this->input->post('details'),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'services');
				}else{
					$insert = $this->admin_m->update($data,$id,'services');
				}

				if($insert){
					$this->upload_images($insert,'services');
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/services'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/services'));
				}	
		}
	}


	public function reviews()
		{
			$data = array();
			$data['page_title'] = "Reviews";
	        $data['page'] = "About";
	        $data['data'] = false;
	        $data['reviews'] = $this->admin_m->select_all_by_user('reviews');
			$data['main_content'] = $this->load->view('admin/dashboard/about/reviews', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function edit_reviews($id)
		{
			$data = array();
			$data['page_title'] = "Reviews";
	        $data['page'] = "About";
	        $data['data'] =$this->admin_m->single_select_by_id($id,'reviews');
	        $data['reviews'] = $this->admin_m->select_all_by_user('reviews');
			$data['main_content'] = $this->load->view('admin/dashboard/about/reviews', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		/**
		  *** add_reviews
		**/ 
		public function add_reviews(){
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('comments', 'C', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				$this->reviews();
			}else{	
				$data = array(
					'name' => $this->input->post('name',true),
					'user_id' => auth('id'),
					'designation' => $this->input->post('designation',true),
					'comments' => $this->input->post('comments'),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'reviews');
				}else{
					$insert = $this->admin_m->update($data,$id,'reviews');
				}

				if($insert){
					$this->upload_images($insert,'reviews');
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/reviews'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/reviews'));
				}	
			}
		}


		public function resume()
		{
			$data = array();
			$data['page_title'] = "Resume";
	        $data['page'] = "Resume";
	        $data['data'] = false;
	        $data['type_data'] = false;
	        $data['resume_type'] = $this->admin_m->select_all_by_user('resume_type');
	        $data['resume'] = $this->admin_m->get_resume_by_user();
	        // echo "<pre>";print_r( $data['resume']);exit();
			$data['main_content'] = $this->load->view('admin/dashboard/profile/resume', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		

		public function edit_resume($id)
		{
			$data = array();
			$data['page_title'] = "Resume";
	        $data['page'] = "Resume";
	        $data['type_data'] =false;
	        $data['resume_type'] = $this->admin_m->select_all_by_user('resume_type');
	        $data['data'] =$this->admin_m->single_select_by_id($id,'resume');
	        $data['resume'] = $this->admin_m->get_resume_by_user();
			$data['main_content'] = $this->load->view('admin/dashboard/profile/resume', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function edit_resume_type($id)
		{
			$data = array();
			$data['page_title'] = "Resume";
	        $data['page'] = "Resume";
	        $data['type_data'] =$this->admin_m->single_select_by_id($id,'resume_type');
	        $data['resume_type'] = $this->admin_m->select_all_by_user('resume_type');
	        $data['data'] =false;
	        $data['resume'] = $this->admin_m->select_all_by_user('reviews');
			$data['main_content'] = $this->load->view('admin/dashboard/profile/resume', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		/**
		  *** add_reviews
		**/ 
		public function add_resume(){
			$this->form_validation->set_rules('resume_type', 'Title', 'trim|required|xss_clean');
			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('details', 'Details', 'trim|required|xss_clean');
			$this->form_validation->set_rules('start_year', 'Start Year', 'trim|required|xss_clean|exact_length[4]');
			$this->form_validation->set_rules('end_year', 'End Year', 'trim|xss_clean|exact_length[4]');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				$this->resume();
			}else{	
				$data = array(
					'title' => $this->input->post('title',true),
					'type_id' => $this->input->post('resume_type',true),
					'user_id' => auth('id'),
					'designation' => $this->input->post('designation',true),
					'details' => $this->input->post('details',true),
					'start_year' => $this->input->post('start_year',true),
					'end_year' => $this->input->post('end_year',true),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'resume');
				}else{
					$insert = $this->admin_m->update($data,$id,'resume');
				}

				if($insert){
					$this->upload_images($insert,'reviews');
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/resume'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/resume'));
				}	
			}
		}

		/**
		  *** add_resume_type
		**/ 
		public function add_resume_type(){
			$this->form_validation->set_rules('type_name', 'Name', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				$this->resume();
			}else{	
				$data = array(
					'type_name' => $this->input->post('type_name',true),
					'icon' => $this->input->post('icon',true),
					'user_id' => auth('id'),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'resume_type');
				}else{
					$insert = $this->admin_m->update($data,$id,'resume_type');
				}

				if($insert){
					$this->upload_images($insert,'reviews');
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/resume'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/resume'));
				}	
			}
		}



		public function portfolio()
		{
			$data = array();
			$data['page_title'] = "Portfolio";
	        $data['page'] = "Profile";
	        $data['data'] = false;
	        $data['portfolio_type'] = $this->admin_m->select_all_by_user('portfolio_type');
	        $data['portfolio'] = $this->admin_m->select_all_by_user('portfolio');
	        // echo "<pre>";print_r( $data['resume']);exit();
			$data['main_content'] = $this->load->view('admin/dashboard/profile/portfolio', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function edit_portfolio_type($id)
		{
			$data = array();
			$data['page_title'] = "Portfolio";
	        $data['page'] = "Profile";
	        $data['data'] =$this->admin_m->single_select_by_id($id,'portfolio_type');
	        $data['portfolio_type'] = $this->admin_m->select_all_by_user('portfolio_type');
	        $data['portfolio'] = $this->admin_m->select_all_by_user('portfolio');
			$data['main_content'] = $this->load->view('admin/dashboard/profile/portfolio', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		/**
		  *** add_reviews
		**/ 
		public function add_portfolio(){
			$this->form_validation->set_rules('resume_type', 'Title', 'trim|required|xss_clean');
			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('details', 'Details', 'trim|required|xss_clean');
			$this->form_validation->set_rules('start_year', 'Start Year', 'trim|required|xss_clean|exact_length[4]');
			$this->form_validation->set_rules('end_year', 'End Year', 'trim|xss_clean|exact_length[4]');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				$this->portfolio();
			}else{	
				$data = array(
					'title' => $this->input->post('title',true),
					'type_id' => $this->input->post('resume_type',true),
					'user_id' => auth('id'),
					'designation' => $this->input->post('designation',true),
					'details' => $this->input->post('details',true),
					'start_year' => $this->input->post('start_year',true),
					'end_year' => $this->input->post('end_year',true),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'resume');
				}else{
					$insert = $this->admin_m->update($data,$id,'resume');
				}

				if($insert){
					$this->upload_images($insert,'reviews');
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/resume'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/resume'));
				}	
			}
		}

		/**
		  *** add_resume_type
		**/ 
		public function add_portfolio_type(){
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				$this->portfolio();
			}else{	
				$data = array(
					'name' => $this->input->post('name',true),
					'user_id' => auth('id'),
					'created_at' => d_time(),
				);
				$id = $this->input->post('id');
				if($id==0){
					$insert = $this->admin_m->insert($data,'portfolio_type');
				}else{
					$insert = $this->admin_m->update($data,$id,'portfolio_type');
				}

				if($insert){
					$this->upload_images($insert,'reviews');
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/profile/portfolio'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/profile/portfolio'));
				}	
			}
		}

	public function upload_image()
	{
	    $data = array();
	    if (!empty($_FILES['file']['name'])) {
	        $filesCount = count($_FILES['file']['name']);
	        for ($i = 0; $i < $filesCount; $i++) {
	              $_FILES['uploadFile']['name'] = str_replace(",","_",$_FILES['file']['name'][$i]);
	              $_FILES['uploadFile']['type'] = $_FILES['file']['type'][$i];
	              $_FILES['uploadFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
	              $_FILES['uploadFile']['error'] = $_FILES['file']['error'][$i];
	              $_FILES['uploadFile']['size'] = $_FILES['file']['size'][$i];

	              //Directory where files will be uploaded
	              $uploadPath = 'uploads/portfolio/';


	              $config['upload_path'] = $uploadPath;
	              // Specifying the file formats that are supported.
	              $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx|xls|xlsx|ppt|pptx|txt|rtf';
	              $config['overwrite'] = TRUE;
				  $config['encrypt_name'] = TRUE;
				  // $config['max_width'] = '1200';
				  // $config['max_height'] = '800';
				   // $config['max_size'] = 50;
	              $this->load->library('upload', $config);
	              $this->upload->initialize($config);
	              // resize library
	              $this->load->library('image_lib');

	              if ($this->upload->do_upload('uploadFile')) {
	                  $fileData = $this->upload->data();
	                  $uploadData[$i]['file_name'] = $fileData['file_name'];
	                  // resize
			            $config = array(
						    'source_image'      => $fileData['full_path'], 
						    'new_image'         => $uploadPath.'/thumb', //path to
						    'maintain_ratio'    => true,
						    'width'             => 600,
						    'height'            => 600
						);
						    $this->image_lib->initialize($config);
						    $this->image_lib->resize();
						// resize
						    
	              }else{
	              	$error = array('error' => $this->upload->display_errors());
                    foreach ($error as $value) {
                    	$msg = $value;
                    }
                    echo json_encode(array('st'=>0,'msg'=>$msg,));
                    exit();
	              }

	        }
	          
	        if (!empty($uploadData)) {
	          $list=array();
	            $j=0;foreach ($uploadData as $value) {
		          	$data = array(
		          		'type_id' => $_POST['type_id'],
		          		'link' => $this->input->post('link')[$j],
		          		'title' => $_POST['title'][$j],
		          		'user_id' => auth('id'),
		          		'image' => $uploadPath.$value['file_name'],
		          		'thumb' => $uploadPath.'thumb/'.$value['file_name'],
		          		'created_at' => d_time(),
		          	);
		          	//insert image into database query
		          	$this->admin_m->insert($data,'portfolio');
		         $j++; 	
	          	}
	    		echo json_encode(array('st'=>1,));
		  	}else{
		    	$msg = 'Please insert an image';
		    	echo json_encode(array('st'=>0,'msg'=>$msg,));
		    }

	    }
	}


	public function upload_imaged()
	{	

	    $data = array();
	    if (!empty($_FILES['file']['name'])) {
	       $filesCount = count($_FILES['file']['name']);
	        for ($i = 0; $i < $filesCount; $i++) {
	              $_FILES['uploadFile']['name'] = str_replace(",","_",$_FILES['file']['name'][$i]);
	              $_FILES['uploadFile']['type'] = $_FILES['file']['type'][$i];
	              $_FILES['uploadFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
	              $_FILES['uploadFile']['error'] = $_FILES['file']['error'][$i];
	              $_FILES['uploadFile']['size'] = $_FILES['file']['size'][$i];

	              //Directory where files will be uploaded
	              $uploadPath = 'uploads/portfolio/';


	              $config['upload_path'] = $uploadPath;
	              // Specifying the file formats that are supported.
	              $config['allowed_types'] = 'jpg|jpeg|png|gif';
	              $config['overwrite'] = TRUE;
				  $config['encrypt_name'] = TRUE;
	              $this->load->library('upload', $config);
	              $this->upload->initialize($config);
	              // resize library
	              $this->load->library('image_lib');

	              if ($this->upload->do_upload('file')) {
	                  $fileData = $this->upload->data();
	                  echo "<pre>";print_r($fileData);exit();
	                  $uploadData[$i]['file_name'] = $fileData['file_name'];
	                  // echo "<pre>";print_r($fileData);exit();
	                  // resize
			            $config = array(
						    'source_image'      => $fileData['full_path'], 
						    'new_image'         => $uploadPath.'/thumb', //path to
						    'maintain_ratio'    => true,
						    'width'             => 600,
						    'height'            => 600
						);
						    $this->image_lib->initialize($config);
						    $this->image_lib->resize();
						// resize
						    
	              }

	        }

	          
	        if (!empty($uploadData)) {

	          $list=array();
	            foreach ($uploadData as $value) {
		          	$data = array(
		          		'type_id' => $this->input->post('type'),
		          		'title' => $this->input->post('title'),
		          		'link' => $this->input->post('link'),
		          		'user_id' => auth('id'),
		          		'image' => 'uploads/'.$value['file_name'],
		          		'thumb' => 'uploads/thumb/'.$value['file_name'],
		          	);
		          	echo "<pre>";print_r($data);
		          	//insert image into database query
		          	// $this->api_m->insert($data,'portfolio');
		          	
	          	}
	          	exit();
	    		echo json_encode(array('st'=>1,));
		  	}else{
		    	$msg = 'Please insert an image';
		    	echo json_encode(array('st'=>0,'msg'=>$msg,));
		    }

	    }
	}

}
