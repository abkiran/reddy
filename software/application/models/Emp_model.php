<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class emp_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
           $this->load->library('ion_auth');
           
   
    }
    public function putDash($umail,$uname,$type,$msg,$dt) {
        $datestring = "%H:%i %a";
$time = time();

$dt= mdate($datestring, $time);

        $data =  array(
          'emp_id'=>$umail,
            'username'=>$uname,
            'type'=>$type,
            'msg'=>$msg,
            'date'=>$dt
        );
        $this->db->insert('dashboard',$data);
        
    }
    public function enterTimeSheet()
    {
             $user = $this->ion_auth->user()->row();
		$id= $user->id;
                $uname= $user->username;
                $type="timesheet";
                $msg="updated timesheet";
                $datestring= "%d-%m-%Y";
               $time=  time();
        $dt = mdate($datestring, $time);
        $data = array(
             'date'=>  $dt,
             'emp_id'=> $id,
             'project_name'=>$this->input->post('project_name'),
             'task_desc'=>$this->input->post('task_desc'),
             'start'=>  $this->input->post('start'),
             'end'=> $this->input->post('end'),
             'task_status'=>  $this->input->post('task_status'),
             'total_time'=> $this->input->post('total_time')                           
             );
         
         $this->emp_model->putDash($id,$uname,$type,$msg,$dt);
         return $this->db->insert('timesheet', $data);  
    }
    public function updateTimeSheet()
    {
             $user = $this->ion_auth->user()->row();
		$id= $user->id;
                $uname= $user->username;
                $type="timesheet";
                $msg="";
                $datestring= "%d-%m-%Y";
               $time=  time();
        $dt = mdate($datestring, $time);
        
         $data = array(
             
             'project_name'=>$this->input->post('project_name'),
             'task_desc'=>$this->input->post('task_desc'),
             'start'=>  $this->input->post('start'),
             'end'=> $this->input->post('end'),
             'task_status'=>  $this->input->post('task_status'),
             'total_time'=> $this->input->post('total_time')                           
             );
         $this->db->where(array('emp_id' => $id,'date'=>$dt));
         $this->db->update('timesheet', $data);  
         
         
    }
    public function showTimeSheet($id)
    {
        $datestring= "%d-%m-%Y";
               $time=  time();
        $date1 = mdate($datestring, $time);
        $data=array('date' => $date1, 'emp_id'=>$id);
        $query= $this->db->get_where('timesheet',$data);
        return $query->row_array();
    }
   
    public function enterLeave()
    {
        $user = $this->ion_auth->user()->row();
        $id= $user->id;
     
        $time= $this->input->post('date_from');
      
        $time1= $this->input->post('date_to');
        if($time <> 0 && $time1 <> 0)
        {
        //$to = mdate($datestring, $time1);
         $data = array(
             
             'emp_id'=> $id,
             'leave_desc'=>$this->input->post('reason'),
             'type_of_leave'=>$this->input->post('leave_type'),
             'date_from'=>  $time,
             'date_to'=> $time1,
             'feedback'=>  $this->input->post('feedback')
                 
             );
         
         $this->db->insert('apply_leave', $data);  
         
        $user = $this->ion_auth->user()->row();
		$id= $user->id;
                $uname= $user->username;
                $type="leave";
                $msg="Applied for leave";
                $datestring= "%d-%m-%Y";
               $time=  time();
        $dt = mdate($datestring, $time);
        $datestring= "%d-%m-%Y";
        $time=  time();
        $dt = mdate($datestring, $time);
        $this->putDash($id, $uname, $type, $msg, $dt);
        }
         return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function showLeave() {
        //$query=  $this->db->where('status',$st);
        $lim=7;
        $user = $this->ion_auth->user()->row();
        $id= $user->id;
        $query= $this->db->where('emp_id',$id);
        $query= $this->db->where('is_deleted',0);
        $query= $this->db->order_by('id','desc');
        $query=$this->db->get('apply_leave',$lim);
        return $query->result_array();
        
    }
    public function getDash() {
        $lim=20;
        $query= $this->db->order_by('s_no','desc');
        $query= $this->db->get('dashboard',$lim);
        return $query->result_array();
    }
    
 
    public function check() {
        $user = $this->ion_auth->user()->row();
		$umail= $user->id;
                $datestring= "%d-%m-%Y";
               $time=  time();
        $dt = mdate($datestring, $time);
        $query = $this->db->get_where('timesheet',  array('emp_id'=>$umail, 'date'=>$dt));
        return $query->num_rows();
    }
    public function generateMonthlyTimeSheet() {
        $user = $this->ion_auth->user()->row();
		$umail= $user->email;
                $uname= $user->username;
        $query= $this->db->get_where('timesheet',array('emp_id' => $umail));
        return $query->result_array();
        
    }
    public function del($tbl,$id) {
        $this->db->where(array('id'=>$id));
        $data=array('is_deleted'=>'1');
        $this->db->update($tbl,$data );
    }
    public function undo($tbl,$id) {
        $this->db->where(array('id'=>$id));
        $data=array('is_deleted'=>'0');
        $this->db->update($tbl,$data );
    }
}