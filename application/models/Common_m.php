<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_m extends CI_Model {
/* start default query
================================================== */

public function single_select_by_id($id,$table)
{
	$this->db->select();
	$this->db->from($table);
	$this->db->where('id',$id);
	$query = $this->db->get();
	return $query->row_array();
}

public function update($data,$id,$table)
{
	$this->db->where('id',$id);
	$this->db->update($table,$data);
	return $id;
}



public function delete($id,$table)
{
	$this->db->delete($table,array('id'=>$id));
	return $id;
}
public function insert($data,$table)
{
	$this->db->insert($table,$data);
	return $this->db->insert_id();
}

public function select($table)
{
	$this->db->select();
	$this->db->from($table);
	$query = $this->db->get();
	$query = $query->result_array();
	return $query;
}

public function select_desc($table)
{
	$this->db->select();
	$this->db->from($table);
	$this->db->order_by('id','DESC');
	$query = $this->db->get();
	$query = $query->result_array();
	return $query;
}

/* end default query
================================================== */

/**
  ** get User id by name
**/
public function get_id_by_slug($name)
{
	$this->db->select('u.id,username');
	$this->db->from('users as u');
	$this->db->where('u.username',$name);
	$this->db->where('u.is_verify',1);
	$this->db->where('u.is_active',1);
	$query = $this->db->get();
	$query = $query->row_array();
	return $query['id'];
}

/**
  ** gell all information by user_id and tabele
**/

public function select_all_by_user($id,$table)
{
	$this->db->select();
	$this->db->from($table);
	$this->db->where('user_id',$id);
	$this->db->where('status',1);
	$this->db->order_by('id','ASC');
	$query = $this->db->get();
	$query = $query->result_array();
	return $query;
}

/**
  ** gell all information by single user_id and tabele
**/

public function single_select_by_user($id,$table)
{
	$this->db->select();
	$this->db->from($table);
	$this->db->where('user_id',$id);
	$this->db->where('status',1);
	$query = $this->db->get();
	$query = $query->row_array();
	return $query;
}


/**
  ** get resume
**/

public function get_resume_by_user($id)
{
	
	$this->db->select('rt.*');
	$this->db->from('resume_type rt');
	$this->db->where('user_id',$id);
	$this->db->where('status',1);
	$query = $this->db->get();
	$query = $query->result_array();
	foreach ($query as $key => $value) {
		$this->db->select('r.*');
        $this->db->from('resume r');
        $this->db->where('r.type_id',$value['id']);
        $this->db->where('status',1);
        $this->db->where('user_id',$id);
        $this->db->order_by('start_year','DESC');
        $query2 = $this->db->get();
        $query2 = $query2->result_array();
        $query[$key]['resume'] = $query2;
    }
	return $query;
}

/**
  ** get_about
**/

public function get_about($id)
{
	$this->db->select('a.*');
	$this->db->select('h.title,h.about_me,h.user_id');
	$this->db->from('about a');
	$this->db->join('home h','h.user_id=a.user_id','LEFT');
	$this->db->where('a.user_id',$id);
	$this->db->order_by('a.id','ASC');
	$query = $this->db->get();
	$query = $query->result_array();
	foreach ($query as $key => $value) {
		$this->db->select('ac.*');
		$this->db->from('about_content ac');
		$this->db->where('ac.about_id',$value['id']);
		$this->db->where('status',1);
		$this->db->order_by('id','ASC');
		$query2 = $this->db->get();
		$query2 = $query2->result_array();
		$query[$key]['about_content'] = $query2;
	}
	return $query;
}








}
