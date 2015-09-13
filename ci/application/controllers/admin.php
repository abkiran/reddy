<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        //  $this->load->library('My_PHPMailer');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('admin_model');
        $user = $this->ion_auth->user()->row();
        $this->data['userx'] = $user->username;
        $this->data['idx'] = $user->id;
        $this->data['title']="...";
        $this->data['temp']=NULL;
        $this->data['msg']=NULL;

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
        if (!$this->ion_auth->is_admin()) {
            $this->session->set_flashdata('message', '');
            redirect('employee');
        }
        $this->data['message'] = $this->session->flashdata('message');
        //$this->data['msg'] = $this->session->flashdata('msg');
    }

    
	public function index() {
		
		
		$this->data['title'] = "Admin";
		$this->load->view('admin/index', $this->data);
		
	}
	
	public function page($go='list') { 
		$this->data['title'] = "Admin";
		switch($go){
			case 'list':
				$this->load->view('admin/header', $this->data);
				$this->load->view('admin/leftnav', $this->data);
				$this->load->view('admin/page/list', $this->data);
				$this->load->view('admin/footer', $this->data);
				break;
			case 'add':
				$this->load->view('admin/header', $this->data);
				$this->load->view('admin/leftnav', $this->data);
				$this->load->view('admin/page/record', $this->data);
				$this->load->view('admin/footer', $this->data);
				break;
			case 'modify':
				$this->load->view('admin/header', $this->data);
				$this->load->view('admin/leftnav', $this->data);
				$this->load->view('admin/page/record', $this->data);
				$this->load->view('admin/footer', $this->data);
				break;
		}
	} 

    public function home($page = 'home') {
       $this->data['title'] = "Admin";
        //$this->data['users'] = $this->admin_model->fetch();
       // $this->data['projects'] = $this->admin_model->fetch_a();
       // $this->load->view('index', $this->data);
       
        $q=  $this->admin_model->getCards();
        $table= $this->admin_model->gets('projects');
        $this->data['cars'] = $q;
        $this->data['projects'] = $table;
        $this->data['users']= $this->admin_model->fetch();
 

        $this->data['users'] = $this->admin_model->fetch();
        $this->data['projects'] = $this->admin_model->fetch_a();
        $this->data['timesheet'] = $this->admin_model->fetch_b();
        $this->load->view($page, $this->data);
    }

    function add_project() {
        
        
       // $this->data['projects'] = $table;
       // $this->data['users']= $this->admin_model->gets('users');
        $m="<div class='alert alert-success'>Project added successfully......</div>";
        $this->session->set_flashdata('message', $m);
	$data['title'] = 'Create a new Project';
        $this->form_validation->set_rules('project_name', 'project_name', 'required');
	$this->form_validation->set_rules('project_description', 'project_description', 'required');
        if ($this->form_validation->run() === FALSE)
	{
		
		$this->load->view('projects', $this->data);
                

	}
	else
	{
		$this->admin_model->set_project();
                //$this->admin_model->update_cards();
		$this->projects();
	}
   }
        public function showts($id)
    {
        $user = $this->ion_auth->user()->row();
		$id1= $id;
              //  print_r($user);
// $this->data['date5']=  $this->input->post('date');
                $this->data['title'] = 'daily Time Sheet Update';
                $this->data['timesheet']= $this->admin_model->showTimeSheet($id1);
         $this->load->view('tsupdate1_1',  $this->data);
         
        
    }
    public function leav() {
        
          $this->session->set_flashdata('message', "<p>.....</p>");
          $this->data['leave']= $this->admin_model->showLeave();
        $this->load->view('leaves',  $this->data);
      
    }
    public function res($i,$j) {
        if($i<>0)
        {
            $status="approved";
            $this->admin_model->setStatus($i,$status);
        }
            
 else {
     $status="rejected";
     $this->admin_model->setStatus($j,$status);
 }
        $this->leav();
    }

    public function addCard() {
        $this->admin_model->putCard();
        $q=  $this->admin_model->getCards();
        $table= $this->admin_model->gets('projects');
        $this->data['cars'] = $q;
        
        $this->data['projects'] = $table;
        $this->data['users']= $this->admin_model->gets('users');
        $this->load->view('home', $this->data);
    }
    public function delrow($tbl,$id) {
        $this->admin_model->del($tbl,$id);
        $this->data['msg']=1;
        $this->data['temp']=$id;
        //$this->index();
        $url=$this->uri->segment(2); 
        $url1=$this->uri->segment(3); 
        if($url=='index' || $url1=='cards' || $url== NULL){
        $this->callController(1);
        }
 else if($url1=='projects') {
     $this->callController(2);
        }
 else {
     $this->callController(3);
 }
        
        //$this->load->view('index', $this->data);
    }
    public function undo($tbl,$id) {
        $this->admin_model->undo($tbl,$id);
        $this->data['msg']=0;
        $this->data['temp']=NULL;
        $url=$this->uri->segment(2); 
       $url1=$this->uri->segment(3); 
        if($url=='index' || $url1=='cards' || $url== NULL){
        $this->callController(1);
        }
 else if($url1=='projects') {
     $this->callController(2);
        }
 else {
     $this->callController(3);
 }
 }
        //$this->load->view('index', $this->data);
    
    public function projects() {
        
         $table= $this->admin_model->gets('projects');
        //$this->data['cars'] = $q;
         $this->load->helper('form');
	$this->load->library('form_validation');
        $this->data['users'] = $this->admin_model->fetch();
        
        $q=  $this->admin_model->getCards();
        $table= $this->admin_model->gets('projects');
        $this->data['cars'] = $q;
        $this->data['projects'] = $table;
        $this->load->view('projects',  $this->data);
        
    }
    public function demo($page,$id) {
        $this->temp();
        $table= $this->admin_model->gets('projects');
        $this->data['projects'] = $table;
        $table1= $this->admin_model->getp('projects',$id);
        $this->data['p'] = $table1;
        $this->data['ids'] = $id;
        $this->load->view($page,  $this->data);
    }
    public function updatep() {
        $this->admin_model->updateP();
        $this->projects();
    }
    public function temp() {
        $this->data['users'] = $this->admin_model->fetch();
        
        $q=  $this->admin_model->getCards();
        $table= $this->admin_model->gets('projects');
        $this->data['cars'] = $q;
        $this->data['projects'] = $table;
    }
    public function viewt() {
        $v=  $this->input->post('id');
        $user = $this->ion_auth->user($v)->row();
        $this->data['uname']=$user->username;
        $this->data['ts']=$this->admin_model->gett($v);
        $this->load->view('viewt',  $this->data);
        $this->load->view('footer');
    }
    public function callController($choice) {
        switch ($choice) {
            case 1:
                $this->index();
            break;
        case 2:
            $this->projects();
            break;
            case 3:
                $this->home('emp');
        
            default:
                $this->home();
                break;
        }
    }
}
