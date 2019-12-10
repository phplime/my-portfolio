<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_login_user();
	}

	public function index()
	{
		$data = array();
		$data['page_title'] = "Dashboard";
        $data['page'] = "Dashboard";
        $data['image'] = $this->admin_m->count_images();
		$data['main_content'] = $this->load->view('admin/dashboard/home', $data, TRUE);
		$this->load->view('admin/index',$data);
	}
	 
	/**
	  ** Get Total users
	**/  

	public function total_user()
	{
		$data = array();
		$data['page_title'] = "Total User";
        $data['page'] = "Dashboard";
        $data['all_user'] = $this->admin_m->get_all_user();
		$data['main_content'] = $this->load->view('admin/dashboard/total_user', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	/**
	  **  select single user
	**/ 
	public function single_user_by_id($id)
	{
		$data = array();
		$data['page_title'] = "Edit User";
        $data['page'] = "Dashboard";
        $data['country']= $this->admin_m->select('country');
        $data['user']= $this->admin_m->single_select_by_id($id,'users');
		$data['main_content'] = $this->load->view('admin/dashboard/edit_user', $data, TRUE);
		$this->load->view('admin/index',$data);
	}


	/**
	  **change user status by admin 
	**/ 
	public function change_status($id,$is_active)
	{

		if($is_active==0):
			$data = array('is_active' => '1',);
		else:
			$data = array('is_active' => '0',);
		endif;	
		$edit = $this->admin_m->update($data,$id,'users');
		if($edit){
			if($is_active==0):
				$this->session->set_flashdata('success', 'User Account is Active Now');
			else:
				$this->session->set_flashdata('error', 'User Account is  Deactive Now ');
			endif;
			redirect($_SERVER['HTTP_REFERER']);
			}else{
			$this->session->set_flashdata('error', 'Somthing worng. Error!!');
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}

	/**
	  **  user edit
	**/ 
	public function user_edit($id)
	{
			$this->form_validation->set_rules('username', 'Username', 'trim|xss_clean');		
			$this->form_validation->set_rules('country', 'country', 'trim|xss_clean');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|xss_clean');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|xss_clean');
			$this->form_validation->set_rules('website', 'Website', 'trim|xss_clean|valid_url');
			$this->form_validation->set_rules('address', 'Address', 'trim|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->single_user_by_id($id);
		
		}else{	
			$data = array(
				'username' => $this->input->post('username'),
				'country' => $this->input->post('country'),
				'gender' => $this->input->post('gender'),
				'designation' => $this->input->post('designation'),
				'website' => $this->input->post('website'),
				'address' => $this->input->post('address'),
			);
			$insert = $this->admin_m->update($data,$id,'users');
			if($insert){
				$this->session->set_flashdata('success', 'Save change Successfull');
				redirect(base_url('admin/dashboard/total_user'));
			}else{
				$this->session->set_flashdata('error', 'Somethings were wrong');
				redirect(base_url('admin/dashboard/total_user'));
			}	
		}
	}


	/**
	  *** add new user by admin
	**/ 
	public function add_user()
		{
			$data = array();
			$data['page_title'] = "Add User";
	        $data['page'] = "Dashboard";
	        $data['all_user'] = $this->admin_m->get_all_user();
	        $data['country'] = $this->admin_m->select('country');
			$data['main_content'] = $this->load->view('admin/dashboard/add_user', $data, TRUE);
			$this->load->view('admin/index',$data);
		}


/**
  *** Add user 
**/ 
	public function user_insert(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]',array(
            'is_unique'     => 'This '.$this->input->post('email').' already exists.'
        ));		
		$this->form_validation->set_rules('country', 'country', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->add_user();
		}else{	

			$length = 6;
			$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'country' => $this->input->post('country'),
				'password' => md5($randomString),
			);
			$insert = $this->admin_m->insert($data,'users');
			if($insert){
				// call send_mail function
				$this->send_mail($data,$_POST['message'],$randomString);

				$this->session->set_flashdata('success', 'New User Added Successfull');
				redirect(base_url('admin/dashboard/total_user'));
			}else{
				$this->session->set_flashdata('error', 'Somethings were wrong');
				redirect(base_url('admin/dashboard/total_user'));
			}
		}
	}

/**
  ** send email after registration successfull
**/
	public function send_mail($data,$msg,$password){
		$setting = $this->admin_m->get_setting('setting');
        $mail_array = array();
        $mail_array['name'] = $data['username'];
        $mail_array['email'] = $data['email'];
        $mail_array['password'] = $password;
        $mail_array['message'] = $msg;
        $mail_body = $this->load->view('inc/mail_body',$mail_array,TRUE);

        if(!empty($setting->email)){
        	 $this->email->from($setting->email);
        }else{
        	 $this->email->from('admin@gmail.com');
        }
        $this->email->to($data['email']);
        $this->email->subject('Contact');
        $this->email->message($mail_body);
        $this->load->library('email');
        $this->load->library('encrypt');
        $this->email->set_mailtype('html');
        $this->email->send();
    }


/**
  *** delete user by admin
**/ 
	public function delete($id)
	{
		$del= $this->admin_m->delete($id,"users");
		if($del){
			$this->session->set_flashdata('success', 'User Delete Successfully');
			redirect(base_url('admin/dashboard/total_user'));
		}else{
			$this->session->set_flashdata('error', 'Somethings were wrong');
			redirect(base_url('admin/dashboard/total_user'));
		}
	}


/**
  *** user profile 
**/  	
	public function profile()
	{
		$data = array();
		$data['page_title'] = "Profile";
        $data['page'] = "Dashboard";
        $data['u_info']=$this->admin_m->get_user_info();
        $data['country']=$this->admin_m->select('country');
		$data['main_content'] = $this->load->view('admin/dashboard/profile', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

/**
  *** update profile action
**/ 
	public function update_profile()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|xss_clean');
		$info = user_info();
		if($info->email == $this->input->post('email')){
			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email');
		}else{
			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required|valid_email|is_unique[users.email]',array('is_unique'=>'Sorry This email already exits'));
		}
		$this->form_validation->set_rules('country', 'country', 'trim|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|xss_clean');
		$this->form_validation->set_rules('designation', 'Designation', 'trim|xss_clean');
		$this->form_validation->set_rules('website', 'Website', 'trim|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->profile();
			}else{	
				$data = array(
					'email' => $this->input->post('email'),
					'country' => $this->input->post('country'),
					'gender' => $this->input->post('gender'),
					'designation' => $this->input->post('designation'),
					'website' => $this->input->post('website'),
					'address' => $this->input->post('address'),
				);
				$insert = $this->admin_m->update_profile($data,'users');
				if($insert){
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/dashboard/profile'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/dashboard/profile'));
				}	
		}
	}

/**
    *** Change password 
 **/   
	public function change_pass(){	
		$this->form_validation->set_rules('old_pass', 'Old Password', 'trim|required|min_length[5]|xss_clean');		
		$this->form_validation->set_rules('new_pass', 'New Password', 'trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('c_pass', 'Confirm Password', 'trim|required|min_length[5]|xss_clean|matches[new_pass]');
		if ($this->form_validation->run() == FALSE) {
			$msg = '<div class="alert alert-danger alert-dismissible">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  '.validation_errors().'
					</div>';
			echo json_encode(array('st' => 0, 'msg'=> $msg));
		}else{	
			$pass = $this->input->post('old_pass');

			$check = $this->admin_m->check_pass($pass);

			if($check){
				$data = array(
					'password' => md5($this->input->post('new_pass')),
				);	
				$insert = $this->admin_m->update($data,$this->session->userdata('id'),'users');
				if($insert){
					$msg = '<div class="alert alert-success alert-dismissible">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Thank You ! </strong> Your password change successfully <i class="fa fa-smile-o"></i>
					</div>';
					
					echo json_encode(array('st' => 1, 'msg'=> $msg));
					
				}else{
					$msg = '<div class="alert alert-danger alert-dismissible">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Sorry </strong> Try again later
					</div>';
					
					echo json_encode(array('st' => 2, 'msg'=> $msg));
				}
			}else{
				$msg = '<div class="alert alert-danger alert-dismissible">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Sorry </strong> Your Old password was wrong
					</div>';
					
					echo json_encode(array('st' => 3, 'msg'=> $msg));
			}	

		}
	}


	/**
	  ***  settings
	**/ 
	public function settings()
	{
		$data = array();
		$data['page_title'] = "Settings";
        $data['page'] = "Dashboard";
        $data['u_info']=$this->admin_m->get_user_info();
        $data['country']=$this->admin_m->select('country');
		$data['main_content'] = $this->load->view('admin/dashboard/setting', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

	/**
	  *** add setting
	**/ 
	public function add_settings(){
			$this->form_validation->set_rules('registration_option', 'Registration Option', 'trim|xss_clean');
			$this->form_validation->set_rules('site_name', 'Site Name', 'trim|xss_clean|max_length[20]');
			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url('admin/dashboard/settings'));
			}else{	
				$data = array(
					'registration_option' => $this->input->post('registration_option'),
					'site_name' => $this->input->post('site_name'),
					'email' => $this->input->post('email'),
					'post_time' => d_time(),
				);

				$setting = $this->admin_m->get_setting('setting');

				if(isset($setting->id) && $setting->id !=''):
					$insert = $this->admin_m->update($data,$setting->id,'setting');
				else:
					$insert = $this->admin_m->insert($data,'setting');
				endif;

				if($insert){
					$this->upload_favicon($insert);
					$this->session->set_flashdata('success', 'Save change Successfull');
					redirect(base_url('admin/dashboard/settings'));
				}else{
					$this->session->set_flashdata('error', 'Somethings were wrong');
					redirect(base_url('admin/dashboard/settings'));
				}	
		}
	}

/**
   ** upload favicon
 **/ 
	public function upload_favicon($id)
	{

		if(!empty($_FILES['favicon']['name'])){

			$dir = "uploads/site_images/";
			$name = $_FILES['favicon']['name'];
			list($txt, $ext) = explode(".", $name);
			$image_name = md5(time()).".".$ext;
			$tmp = $_FILES['favicon']['tmp_name'];
		   if(move_uploaded_file($tmp, $dir.$image_name)){
			    $url = $dir.$image_name;
			    $data = array('favicon' => $url);
				$this->admin_m->update($data,$id,'setting');	
		   }else{
		      echo "image uploading failed";
		   }
		}

	}


/**
  *** gallery
**/ 
	public function gallery()
	{
		$data = array();
		$data['page_title'] = "Gallery";
	    $data['page'] = "Dashboard";
	    $data['gallery']=$this->admin_m->select_desc('gallery');
		$data['main_content'] = $this->load->view('admin/dashboard/gallery', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

/**
  *** Gallery ajax load
**/ 
	public function gallery_ajax_load()
	{	
		$data = array();
	    $data['gallery']=$this->admin_m->select_desc('gallery');
		$gallery_load = $this->load->view('dashboard/gallery_ajax_load.php', $data, TRUE);
		echo json_encode(array('st' => 1, 'gallery_load' => $gallery_load));
	}

/**
  *** image upload script
**/ 
	public function add_gallery_image()
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
	              $uploadPath = 'uploads/';


	              $config['upload_path'] = $uploadPath;
	              // Specifying the file formats that are supported.
	              $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx|xls|xlsx|ppt|pptx|txt|rtf';
	              $config['overwrite'] = TRUE;
				  $config['encrypt_name'] = TRUE;
				  $config['max_width'] = '1200';
				  $config['max_height'] = '800';
				   $config['max_size'] = 50;
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
	            foreach ($uploadData as $value) {
		          	$data = array(
		          		'image' => 'uploads/'.$value['file_name'],
		          		'thumb' => 'uploads/thumb/'.$value['file_name'],
		          	);

		          	//insert image into database query
		          	$this->admin_m->insert($data,'gallery');
		          	
	          	}
	    		echo json_encode(array('st'=>1,));
		  	}else{
		    	$msg = 'Please insert an image';
		    	echo json_encode(array('st'=>0,'msg'=>$msg,));
		    }

	    }
	}



/**
  ** gallery image delete
**/
	public function delete_gallery($id)
	{
		$this->admin_m->delete($id,"gallery");
		$msg = '<div class="alert alert-success alert-dismissible custom_alert" id="successMessage">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>
				<i class="icon fa fa-check"></i>
				success!
				</h4>
					Image Successfullu Deleted
				</div>';
		echo json_encode(array('st' => 1, 'msg'=> $msg));
	}



/**
  *** Backup database by admin
**/ 
	public function db_backup()
    {
        $this->load->dbutil();
		$prefs = array(     
		    'format'      => '.sql',             
		    'filename'    => 'my_db_backup.sql'
		    );
		$backup =$this->dbutil->backup($prefs);
		$project = explode('/', $_SERVER['REQUEST_URI'])[1];
		$db_name =$project.'-'. date("d-m-Y-H-i-s") .'.sql';
		$save = 'database/'.$db_name;
		$this->load->helper('file');
		write_file($save, $backup); 
		$this->session->set_flashdata('success', 'Database backup Successfully');
		redirect($this->agent->referrer());
    }

}
