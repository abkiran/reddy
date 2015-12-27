<?php


if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Index extends CI_Controller {

function __construct() {
	parent::__construct();
 //  $this->load->library('My_PHPMailer');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('admin_model');
        $this->data['title']="...";
        $this->data['temp']=NULL;
        $this->data['msg']=NULL;
	LOG_MSG('INFO',"db_page_select: START { \n}");
}


public function index() {
	
	
	$this->data['title'] = "Admin";
	$this->go_page_list();
}
	function go_page_list() {
		// Update the shopsetting to indicate this step is complete
		global $ROW, $TEMPLATE;
		LOG_MSG('INFO',"go_page_list(): START ");
		// Do we have a search string?
		// Get all the args from $_GET
		$name=get_arg($_GET,"name");
		$title=get_arg($_GET,"title");
		$type=get_arg($_GET,"type");
		LOG_MSG('DEBUG',"go_page_list(): Got args");
		// Validate parameters as normal strings 
		LOG_MSG('DEBUG',"go_page_list(): Validated args");
		// Rebuild search string for future pages
		$search_str="name=$name&title=$title&type=$type";
		$ROW=$this->admin_model->db_page_select(
			"",
				$name,
				$title,
				'',
				$type);

		if ( $ROW[0]['STATUS'] != "OK" ) {
			add_msg("ERROR","There was an error loading the Pages. Please try again later. ");
			return;
		}
				$this->data['rows'] = $ROW;
				$this->load->view('theme1/nav/header', $this->data,'');
				$this->load->view('theme1/nav/topbar', $this->data,'');
				$this->load->view('theme1/index', $this->data);
				$this->load->view('theme1/nav/footer', $this->data);
		LOG_MSG('INFO',"go_page_list(): END");
	}
}
