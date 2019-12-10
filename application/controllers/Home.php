<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function home($slug)
	{
		$data = array();
		$data['page_title'] = "Home";
		$data['slug'] = $slug;
		$id = get_id_by_slug($slug);
        $data['home'] = $this->common_m->single_select_by_user($id,'home');
        $data['social_sites'] = $this->common_m->select('social_sites');
		$data['main_content'] = $this->load->view('home', $data, TRUE);
		$this->load->view('index',$data);
	}

	public function about($slug)
	{
		$data = array();
		$data['page_title'] = "About";
		$data['slug'] = $slug;
		$id = get_id_by_slug($slug);
        $data['services'] = $this->common_m->select_all_by_user($id,'services');
        $data['reviews'] = $this->common_m->select_all_by_user($id,'reviews');
        // echo "<pre>";print_r($data['reviews']);exit();
		$data['main_content'] = $this->load->view('about', $data, TRUE);
		$this->load->view('index',$data);
	}

	public function resume($slug)
	{
		$data = array();
		$data['page_title'] = "Resume";
		$data['slug'] = $slug;
		$id = get_id_by_slug($slug);
		$data['main_content'] = $this->load->view('resume', $data, TRUE);
		$this->load->view('index',$data);
	}

	public function portfolio($slug)
	{
		$data = array();
		$data['page_title'] = "Portfolio";
		$data['slug'] = $slug;
		$id = get_id_by_slug($slug);
        // $data['upcoming'] = $this->common_model->get_upcoming();
        // echo "<pre>";print_r($data['upcoming']);exit();
		$data['main_content'] = $this->load->view('portfolio', $data, TRUE);
		$this->load->view('index',$data);
	}
	
	

	public function upload_profile($id){
		$dir = "uploads/";
		move_uploaded_file($_FILES["image"]["tmp_name"], $dir. $_FILES["image"]["name"]);
		$url = $dir.$_FILES["image"]["name"];
		$data = array('image'=> $url);
		$this->common_model->update($data, $id,'account_information');
	}


	public function work()
	{
		$data = array();
		$data['page_title'] = "Home";
        $data['page'] = "User Panel";
        $data['account_information']= $this->common_model->select('account_information');
		$data['main_content'] = $this->load->view('work', $data, TRUE);
		$this->load->view('index',$data);
	}
	

	

}
