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

    
	public function index($go='list',$_id='') {
		$this->data['title'] = "Admin";
		$do = get_arg($_POST,'do');
		$id = get_arg($_POST,'id');
		$this->data['id']=$_id;
		$this->data['page']=$go;
		switch($go){
			case 'list':
				$this->go_page_list();
				break;
			case 'add':
				$this->data['do']='save';
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/record', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
			case 'modify':
				$this->go_page_view();
				break;
			case 'diet':
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/diet', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
			case 'diet_print':
					$morning=get_arg($_POST,"morning");
					$this->data['diet']['morning']=$morning;
					$dc1=get_arg($_POST,"dc1");
				$this->data['diet']['dc1'] = $this->admin_model->get_diet($dc1);
					$dc2=get_arg($_POST,"dc2");
				$this->data['diet']['dc2'] = $this->admin_model->get_diet($dc2);
					$dc3=get_arg($_POST,"dc3");
				$this->data['diet']['dc3'] = $this->admin_model->get_diet($dc3);
					$dc4=get_arg($_POST,"dc4");
				$this->data['diet']['dc4'] = $this->admin_model->get_diet($dc4);
					$dc5=get_arg($_POST,"dc5");
				$this->data['diet']['dc5'] = $this->admin_model->get_diet($dc5);
	
				//print_r($this->data['diet']);exit;
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/page/diet_print', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
		}
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
				$this->load->view('admin/html/header', $this->data,'');
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/list', $this->data);
				$this->load->view('admin/html/footer', $this->data);
		LOG_MSG('INFO',"go_page_list(): END");
	}
	function go_page_view($mode="EDIT") {
		global $ROW, $TEMPLATE;
		LOG_MSG('INFO',"go_page_view(): START mode=[$mode]");
		// Don't load for add mode or when reloading the form
		if ( $mode != "ADD" && (!isset($ROW[0]) || get_arg($ROW[0],'STATUS') !== 'RELOAD') ) {
			// Get the Page ID
			$page_id=$this->data['id'];
			
			// Get from DB
			$ROW=$this->admin_model->db_page_select($page_id);
			if ( $ROW[0]['STATUS'] != "OK" ) {
				add_msg("ERROR","There was an error loading the Page. Please try again later. ");
				return;
			}
			// No rows found
			if ( $ROW[0]['NROWS'] == 0 ) {
				add_msg("ERROR","No Pages found! <br />Click on <strong>Add Page</strong> to create a one."); 
				return;
			}
		}
		$disabled="";
		// Setup display parameters
		switch($mode) {
			case "ADD":
					$_do="add";
					break;
			case "EDIT":
					$_do="save";
					break;
			case "DELETE":
					$_do="remove";
					$disabled="disabled";
					break;
			case "VIEW":
			default:
					$disabled="disabled";
					break;
		}
		$this->data['rows'] = $ROW;
		$this->load->view('admin/html/header', $this->data);
		$this->load->view('admin/html/topbar', $this->data);
		$this->load->view('admin/html/leftnav', $this->data);
		$this->load->view('admin/page/record', $this->data);
		$this->load->view('admin/html/footer', $this->data);
		LOG_MSG('INFO',"go_page_view(): END");
	}
	public function page($go='list',$_id='') { 
		$this->data['title'] = "Admin";
		$do = get_arg($_POST,'do');
		$id = get_arg($_POST,'id');
		switch($go){
			case 'list':
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/list', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
			case 'add':
				$this->data['do']='save';
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/record', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
			case 'modify':
				$this->data['do']='update';
				$this->data['id']=$_id;
				$this->data['rows'] = $this->admin_model->page_list($_id);
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/record', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
			case 'diet':
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/html/topbar', $this->data);
				$this->load->view('admin/html/leftnav', $this->data);
				$this->load->view('admin/page/diet', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
			case 'diet_print':
					$morning=get_arg($_POST,"morning");
					$this->data['diet']['morning']=$morning;
					$dc1=get_arg($_POST,"dc1");
				$this->data['diet']['dc1'] = $this->admin_model->get_diet($dc1);
					$dc2=get_arg($_POST,"dc2");
				$this->data['diet']['dc2'] = $this->admin_model->get_diet($dc2);
					$dc3=get_arg($_POST,"dc3");
				$this->data['diet']['dc3'] = $this->admin_model->get_diet($dc3);
					$dc4=get_arg($_POST,"dc4");
				$this->data['diet']['dc4'] = $this->admin_model->get_diet($dc4);
					$dc5=get_arg($_POST,"dc5");
				$this->data['diet']['dc5'] = $this->admin_model->get_diet($dc5);
	
				//print_r($this->data['diet']);exit;
				$this->load->view('admin/html/header', $this->data);
				$this->load->view('admin/page/diet_print', $this->data);
				$this->load->view('admin/html/footer', $this->data);
				break;
		}
	} 
    public function removepage() {
		$id=$_POST['id'];
		$resp = $this->admin_model->removepage($id);
		if ( $resp == 1 ) echo "Deleted";
		else echo "error";
		exit;
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
/**********************************************************************/
/*                       SELECT MULTIPLE records                      */
/**********************************************************************/
/**********************************************************************/
/*                      SELECT SINGLE record                         */
/**********************************************************************/
// mode: which mode should the form be displayed? 
//		 EDIT/ADD/DELETE/SEARCH
//		 default mode = EDIT

/**********************************************************************/
/*                         ADD/UPDATE LISTING                         */
/**********************************************************************/
function do_page_save($mode="ADD") {
	if(!has_user_permission(__FUNCTION__,$mode)) return;
	global $GO,$ROW;
	LOG_MSG('INFO',"do_page_save(): START (mode=$mode)");
	if ($mode == 'ADD') { $GO='list'; }
	// Get all the args from $_POST
	$page_id=get_arg($_POST,"page_id");
	$name=make_clean_url(get_arg($_POST,"name"));
	$title=get_arg($_POST,"title");
	$content=get_arg($_POST,"content");
	$type=get_arg($_POST,"type");
	LOG_MSG('DEBUG',"do_page_save(): Got args");
	if ( $type != 'HTML' && $type != 'CODE' ) $type='HTML';
	// Validate parameters
	if (!validate("Name",$name,1,100,"varchar") ||
		!validate("Title",$title,1,100,"varchar") ||
		!validate("Content",$content,0,65536,"text") ||
		!validate("Type",$type,1,20,"varchar")) {
		LOG_MSG('ERROR',"do_page_save(): Validate args failed!");
		 return;
	} 
	LOG_MSG('DEBUG',"do_page_save(): Validated args");
	##################################################
	#                 DB INSERT                      #
	##################################################
	switch($mode) {
		case "ADD":
			$ROW=db_page_insert(
								$name,
								$title,
								$content,
								$type);
			if ( $ROW['STATUS'] != "OK" ) {
				switch ($ROW["SQL_ERROR_CODE"]) {
					case 1062: // unique key
						add_msg("ERROR","The Page <strong>$name</strong> is already in use. Please enter a different Page");
						break;
					default:
						add_msg("ERROR","There was an error adding the Page <strong>$name</strong>.");
						break;
				}
				LOG_MSG('ERROR',"do_page_save(): Add args failed!");
				return;
			}
			add_msg("SUCCESS","New Page <strong>$name</strong> added successfully");
			break;
		case "UPDATE":
			// Validate page_id
			if ( !validate("Page Id",$page_id,1,11,"int") ) { 
				LOG_MSG('ERROR',"do_page_save(): Validate arguments failed");
				return;
			}
			$ROW=db_page_update(
								$page_id,
								$name,
								$title,
								$content,
								$type);
			if ( $ROW['STATUS'] != "OK" ) {
				add_msg("ERROR","There was an error updating the Page <strong>$name</strong> .");
				return;
			}
			add_msg("SUCCESS","Page <strong>$name</strong> updated successfully");
			break;
	}
	// on success show the list
	//$GO="list";
	LOG_MSG('INFO',"do_page_save(): END");
}
/**********************************************************************/
/*                           DELETE LISTING                           */
/**********************************************************************/
function do_page_delete_json() {
	global $ROW,$ERROR_MESSAGE;
	$json_response=array();
	$json_response['status']='ERROR';
	// CHECK USER ACCESSIBILITY
	if(!has_user_permission(__FUNCTION__)) {
		$json_response['message']=$ERROR_MESSAGE;
		echo json_encode($json_response);
		exit;
	}
	LOG_MSG('INFO',"do_page_delete_json(): START");
	$page_id=get_arg($_POST,"page_id");
	$name=get_arg($_POST,"name");
	LOG_MSG('INFO',"do_page_delete_json(): Got arguments");
	// Validate page_id
	if (!validate("Page Id",$page_id,1,11,"int") ||
		!validate("Name",$name,1,100,"varchar")) {
			$json_response['message']=$ERROR_MESSAGE;
			echo json_encode($json_response);
			LOG_MSG('ERROR',"do_page_delete_json(): Validate Arguments Failed! ".print_r($_POST,true));
			exit;
	}
	##################################################
	#                 DB DELETE                      #
	##################################################
	$ROW=db_page_delete($page_id);
	if ( $ROW['STATUS'] != "OK" || $ROW['NROWS'] == 0 ) {
		if ($ROW["SQL_ERROR_CODE"] == 1451 ) {
			$json_response['message']="The Page $name is currently used by other entities in the system and cannot be removed.";
		} else {
			$json_response['message']="There was an error removing the Page $name";
		}
		echo json_encode($json_response);
		LOG_MSG('ERROR',"do_page_delete_json(): Delete row failed");
		exit;
	}
	$json_response['page_id']=$page_id;
	$json_response['status']='OK';
	echo json_encode($json_response);// Send json response to response handler
	LOG_MSG('INFO',"do_page_delete_json(): Page $name have been removed successfully.");
	LOG_MSG('INFO',"do_page_delete_json(): END");
	exit;
}