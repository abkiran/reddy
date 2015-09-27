<?php

class Admin_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
		   $this->load->library('ion_auth');
		   
	}
	public function page_list($id='')
	{
		if ( $id != '' )
			$data=array('id'=>$id);
		else
			$data=array();
		$query= $this->db->get_where('tdiet',$data);
		return $query->result_array();
	}
	public function page_save($id,$diet_code,$diet_name)
	{
		$data=array(
             'diet_code'=>$diet_code,
             'diet_name'=>  $diet_name);
		$resp= $this->db->insert('tdiet',$data);
		return $resp;
	}
	public function page_update($id,$diet_code,$diet_name)
	{
		$data=array(
             'diet_code'=>$diet_code,
             'diet_name'=>  $diet_name);
		$this->db->where('id',$id);
		$resp= $this->db->update('tdiet',$data);
		return $resp;
	}
	public function get_diet($dc)
	{
		$data=array('diet_code'=>$dc);
		$this->db->select('diet_name');
		$this->db->like('diet_code',$dc);
		$query= $this->db->get('tdiet');
		return $query->result_array();
	}
}