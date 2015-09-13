<?php
class Employee extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
                $this->load->model('emp_model');
                $this->load->model('admin_model');
                $this->load->library('ion_auth');
                $this->data['message'] = "";
                $this->data['msg'] = "";
                $this->data['title'] = "..";
                if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
                if ($this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'Have a nice day');
			redirect('admin');
		}
                 $this->data['users']= $this->admin_model->gets('users');
                $user = $this->ion_auth->user()->row();
		$this->data['userx']= $user->username;
                $this->data['idx']= $user->id;
                  $this->data['message'] = $this->session->flashdata('message');
    }
    public function index() {
        
        $this->data['dash']=$this->emp_model->getDash();
         $this->data['title'] = 'Employee Dashboard';
        $this->load->view('dashboard',  $this->data);
    }
    public function emphome() {
        $this->data['title'] = 'Employee Home';
      $this->data['dash']=$this->emp_model->getDash();
        $this->load->view('dashboard',  $this->data);
    }
    public function timesh()
    {
        
        $user = $this->ion_auth->user()->row();
		$data['uname']= $user->username;
                $this->data['title'] = 'TimeSheet';
        //$this->load->view('header');
                $user = $this->ion_auth->user()->row();
		$id1= $user->id;
                
                $this->data['timesheet']= $this->emp_model->showTimeSheet($id1);
                 $user = $this->ion_auth->user()->row();
        $id=$user->id;
        $this->data['uname']=$user->username;
        $this->data['ts']=$this->admin_model->gett($id);
        $this->data['f1'] = $this->emp_model->check();
                
        $this->load->view('timesheet',  $this->data);
                
    }
  
    public function timesheet()
    {
        $this->data['title'] = 'TimeSheet';
       $this->emp_model->enterTimeSheet();
       
      $this->session->set_flashdata('message', "<p>Timesheet updated successfully.</p>");
        $this->emphome();
    }
    public function bupdate()
    {
        $this->data['title'] = 'update daily time Sheet';
        $this->load->view('tsupdate',  $this->data);
    }
    public function update()
    {
        $this->data['title'] = 'daily time Sheet';
        
        $this->emp_model->updateTimeSheet();
      $this->session->set_flashdata('message', "<p>Timesheet updated successfully.</p>");
        $this->emphome();
        
        
   
    }
    public function showts()
    {
        $user = $this->ion_auth->user()->row();
		$id1= $user->id;
                
                $this->data['title'] = 'daily Time Sheet Update';
                $this->data['timesheet']= $this->emp_model->showTimeSheet($id1);
         $this->load->view('tsupdate1',  $this->data);
         
        
    }
    public function apply_leave() {
        $this->data['title'] = 'Apply for leave';
        $this->load->view('apply_for_leave',  $this->data);
    }
    public function leave() {
        $this->data['title'] = 'Apply for leave';
   $fl = $this->emp_model->enterLeave();
      if($fl === TRUE)
      {   
          $this->session->set_flashdata('message', "<p>Leave Submited wait for approval.</p>");
          $this->data['leave']= $this->emp_model->showLeave(0);
          $this->load->view('leavelist',  $this->data);
      }
    }
//    public function mt() {
//        $this->data['title'] = 'Monthly Time Sheet';
//        $temp=$this->emp_model->generateMonthlyTimeSheet();
//        $d="";
//        $z="";
//        foreach ($temp as $key => $value) {
//            
//            if($value['project_name']<>$d){
//                $z=$z."<br>".$value['project_name'];
//            }
// else {
//     $d=$value['project_name'];
// }
// 
//        }
//        $this->data['mt']=$d;
//        
//        $this->load->view('mtimesheet',  $this->data);
//    }
    public function viewt() {
        
       
        $this->load->view('empviewt',  $this->data);
        $this->load->view('footer');
    }
 public function delrow($tbl,$id) {
        $this->admin_model->del($tbl,$id);
        $this->data['msg']=1;
        $this->data['temp']=$id;
        //$this->index();
        $url=$this->uri->segment(2); 
        $url1=$this->uri->segment(3); 
       if($url=='index' || $url1=='apply_leave' || $url== NULL){
        $this->callController(1);
        }
        
        //$this->load->view('index', $this->data);
    }
    public function undo($tbl,$id) {
        $this->admin_model->undo($tbl,$id);
        $this->data['msg']=0;
        $this->data['temp']=NULL;
        $url=$this->uri->segment(2); 
       $url1=$this->uri->segment(3); 
        if($url=='index' || $url1=='apply_leave' || $url== NULL){
        $this->callController(1);
        }
 }
  public function callController($choice) {
        switch ($choice) {
            case 1:
                $this->leave();
            break;
       
            default:
                $this->index();
                break;
        }
    }
}