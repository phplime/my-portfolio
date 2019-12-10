<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['page_title'] = "Login";
        $data['page'] = "User Panel";
		$data['main_content'] = $this->load->view('admin/login', $data, TRUE);
		$this->load->view('admin/index',$data);
	}
	
	
/**
  *** login action
**/ 
public function user_login()
{
	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');		
	$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
	if ($this->form_validation->run() == FALSE) {
		$msg = '<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Sorry ! </strong> '.validation_errors().'
		</div>';
		echo json_encode(array('st' => 0, 'msg'=> $msg,));
	}else{	
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$query = $this->admin_m->login_info_check($email,$password);
		if($query){
			$s_array= array();
			foreach($query as $row):
				$s_array = array(
					'id' => $row->id,
					'username' => $row->username,
					'email' => $row->email,
					'user_type' => $row->user_type,
					'is_active' => $row->is_active,
					'user_login' => TRUE,
				);
				if($row->is_verify==0):	
					$msg = '<div class="alert alert-danger alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sorry ! </strong> Please Verify Your account  <i class="fa fa-frown-o"></i>
					<p>We already sent an email on your email</p>
					</div>';
					echo json_encode(array('st' => 2, 'msg'=> $msg));
				elseif($row->is_active == 1):
					$url = base_url('admin/dashboard');
					$this->session->set_userdata($s_array);
					$data =array(
						'login_time' => d_time()
					);
					
					$this->admin_m->update($data,$row->id,'users');
					$msg = '<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Welcome ! </strong> Login successfull <i class="fa fa-smile-o"></i>

					</div>';
					echo json_encode(array('st' => 1, 'msg'=> $msg, 'url'=> $url));
				else:
					$msg = '<div class="alert alert-danger alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sorry ! </strong> Your account is not approved <i class="fa fa-frown-o"></i>

					</div>';
					echo json_encode(array('st' => 2, 'msg'=> $msg));
				endif;
				
				
			endforeach;

		}else{
			$msg = '<div class="alert alert-danger alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Sorry  ! </strong> Login invalid <i class="fa fa-frown-o" ></i>
			</div>';
			echo json_encode(array('st' => 3, 'msg'=> $msg));
		} 
			//end login_info_check if

	} 
		//end validation if	
}

/**
  *** Registration 
**/ 
	public function register()
	{
		$data = array();
		$data['page_title'] = "Registration";
        $data['page'] = "Admin Panel";
        $data['count_user'] = $this->admin_m->get_all_user();
        $data['all_country'] = $this->admin_m->select('country');
		$data['main_content'] = $this->load->view('admin/register', $data, TRUE);
		$this->load->view('admin/index',$data);
	}

/**
  *** user registration option 
**/ 
public function user_insert(){
	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]',array('is_unique'=>'The email is already Exists'));	
	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]',array('is_unique'=>'The email is already Exists'));	
	$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|min_length[3]');
	$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|xss_clean|matches[password]');
	if ($this->form_validation->run() == FALSE) {
		$msg = '<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Sorry ! </strong> '.validation_errors().'
		</div>';
		echo json_encode(array('st' => 0, 'msg'=> $msg,));
	}else{
		$check = $this->admin_m->check_username(str_slug($this->input->post('username',TRUE)));

		if($check==1){
			$msg = '<div class="alert alert-danger alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Sorry ! </strong> This name <b>'.str_slug($this->input->post('username',TRUE)).'</b> already exists !!
			</div>';
			echo json_encode(array('st' => 0, 'msg'=> $msg,));
			exit();
		}else{

			if(isset($_POST['user_type']) && $_POST['user_type']==1){
				$user_type = 1;
				$is_active = 1;
			}else{
				$user_type = 0;
				$is_active = 0;
			}

			$data = array(
				'username' =>str_slug($this->input->post('username',TRUE)),
				'email' => $this->input->post('email',TRUE),
				'password' => md5($this->input->post('password',TRUE)),
				'user_type' => $user_type,
				'is_active' => $user_type,
			);
			
			$insert = $this->admin_m->insert($data,'users');
			if($insert){
				$msg = '<div class="alert alert-success alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success ! </strong> Data Insert Successfully
				</div>';
				$this->send_mail($data,$this->input->post('password',TRUE));
				echo json_encode(array('st' => 1, 'msg'=> $msg,));

			}else{
				$msg = '<div class="alert alert-danger alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Sorry ! </strong> Somethings Were Wrong
				</div>';
				echo json_encode(array('st' => 0, 'msg'=> $msg,));
				
			}	
		}

	}
		//end validation check
}


public function verifiy($username){
	$data = array('is_verify'=>1,'verify_time'=>d_time());
	$this->admin_m->verify_mail($data, $username,'users');
	$this->session->set_flashdata('verify', 'Your account verify successfully');
	redirect(base_url('admin/home/'));
}


/**
  ***  Logout
**/ 
	public function logout()
	{
        $this->session->unset_userdata('user_login');
        $this->session->sess_destroy();
        $sdata = array();
        $sdata['msg'] = 'You are Successfully logout';
        $this->session->set_userdata($sdata);
        redirect('admin','refresh');
    }

	public function send_mail($data,$password){
		$this->load->library('email');
		//SMTP & mail configuration
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'demotestnm@gmail.com',
		    'smtp_pass' => 'demo2012120',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$mail_array = array();
        $mail_array['name'] = $data['username'];
        $mail_array['email'] = $data['email'];
        $mail_array['password'] = $password;
        $mail_array['message'] = "<a href='".base_url('admin/home/verifiy/'.$data['username'])."'>Click Here</a> to verifiy your account";
        $mail_body = $this->load->view('admin/inc/mail_body',$mail_array,TRUE);

		$this->email->to($data['email']);
		$this->email->from('nm@gmail.com','Nazmul');
		$this->email->subject('User Registration verification Mail');
		$this->email->message($mail_body);
		//Send email
		$this->email->send();
	}

}
