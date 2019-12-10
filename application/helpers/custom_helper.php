<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



    if (!function_exists('check_login_user')) {

	    function check_login_user() {
	        $ci = get_instance();
	        if ($ci->session->userdata('user_login') != TRUE) {
	            $ci->session->sess_destroy();
	            redirect(base_url('home'));
	        }
	        
	    }

	}

	if (!function_exists('str_slug')) {

	    function str_slug($string, $separator = '-') {
	        $ci = get_instance();
	        $re = "/(\\s|\\".$separator.")+/mu";
	        $str = @trim($string);
	        $subst = $separator;
	        $result = preg_replace($re, $subst, $str);
	        return strtolower($result);
	    }

	}

	if (!function_exists('user_info')) {

	    function user_info(){        
        $ci = get_instance();
        $ci->load->model('admin_m');
        $data = $ci->admin_m->get_user_info();        
        return $data;
  		}	
	}

	if (!function_exists('get_country')) {

	    function get_country(){        
        $ci = get_instance();
        $ci->load->model('admin_m');
        $data = $ci->admin_m->select('country');        
        return $data;
  		}	
	}

	if (!function_exists('settings')) {

	    function settings(){        
        $ci = get_instance();
        $ci->load->model('admin_m');
        $data = $ci->admin_m->get_setting('setting');        
        return $data;
  		}	
	}

	
	if(!function_exists('c_time')){
	    function c_time(){        

	        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	        $date_time = $dt->format('d-m-Y');      
	        
	        return $date_time;
	    }
	}
	
	if (!function_exists('cl_format')) {

	    function cl_format($date) {
	        $ci = get_instance();
		    return date('d F, Y', strtotime($date));
	        
	    }
	}

	if(!function_exists('d_time')){
	    function d_time(){        

	        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	        $date_time = $dt->format('Y-m-d H:i:s');     
	        return $date_time;
	    }
	}

	if(!function_exists('full_time')){
	    function full_time($date){       
	        
	        if($date != ''){
	            $date2 = date_create($date);
	            $date_new = date_format($date2,"d M, Y - h:i a");
	            return $date_new;
	        }else{
	            return '';
	        }
	    }
	}
	
	
//session  data
    if (!function_exists('auth')) 
    {
        function auth($string)
        {
            $ci =& get_instance();
            return $ci->session->userdata($string);
        }
    }

// get user info by id
if (!function_exists('get_user_info_by_id')) {

	    function get_user_info_by_id($id){        
	        $ci = get_instance();
	        $ci->load->model('admin_m');
	        $data = $ci->admin_m->get_user_info_by_id($id);        
	        return $data;
  		}	
	}

if (!function_exists('get_id_by_slug')) {
	function get_id_by_slug($name){        
		$ci = get_instance();
		$ci->load->model('common_m');
		$data = $ci->common_m->get_id_by_slug($name);        
		return $data;
	}	
}




	