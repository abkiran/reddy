<?php
class Admin_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		   $this->load->library('ion_auth');
	}
	// SELECT
	function db_page_select(
				$page_id="",
				$name="",
				$title="",
				$content="",
				$type="") {
		LOG_MSG('INFO',"db_page_select: START { 
								page_id=[$page_id],
								name=[$name],
								title=[$title],
								content=[$content]	
								type=[$type]\n}");
		$is_search=false;
		$where_clause="";
		$params_arr=array();
		if ( $page_id !== "" ) { 
			$where_clause.="WHERE page_id = ? ";
			array_push($params_arr,$page_id);
		} else {
			$where_clause.="WHERE is_active = 1 ";
		}
		LOG_MSG('INFO',"db_page_select(): WHERE CLAUSE = [$where_clause]");
		$resp=$this->db->query("SELECT 
							page_id,
							name,
							title,
							content,
							type
						FROM 
						tPage
						".$where_clause
						." ORDER BY
							page_id ASC "
						,$params_arr);
		$resp=$resp->result_array();
		
		$resp[0]['IS_SEARCH']=$is_search;
		LOG_MSG('INFO',"db_page_select(): END");
		return $resp;
	}
	// INSERT
	function db_page_insert(
								$name,
								$title,
								$content='',
								$type) {
		$param_arr=_init_db_params();
		LOG_MSG('INFO',"db_page_insert(): START { 
								name=[$name],
								content=[$content]
								type=[$type]\n}");
		// Add params to params_arr
		$param_arr=_db_prepare_param($param_arr,"s","name",$name);
		$param_arr=_db_prepare_param($param_arr,"s","title",$title);
		$param_arr=_db_prepare_param($param_arr,"s","content",$content);
		$param_arr=_db_prepare_param($param_arr,"s","type",$type);
		$param_arr=_db_prepare_param($param_arr,"i","shop_id",SHOP_ID);
		$resp=execSQL("INSERT INTO 
							tPage
								(".$param_arr['fields'].")
							VALUES
								(".$param_arr['placeholders'].")"
						,$param_arr['params'], 
						true);
		LOG_MSG('INFO',"db_page_insert(): END");
		return $resp;
	}
	// UPDATE
	function db_page_update(	
								$page_id,
								$name,
								$title,
								$content,
								$type) {
		$param_arr=_init_db_params();
		LOG_MSG('INFO',"db_page_update(): START {
								page_id=[$page_id],
								name=[$name],
								title=[$title],
								content=[$content]
								type=[$type]\n}");
		// Add params to params_arr
		$param_arr=_db_prepare_param($param_arr,"s","title",$title);
		$param_arr=_db_prepare_param($param_arr,"s","content",$content);
		// Only Super user can update type
		if (!is_superuser()) {
			$param_arr=_db_prepare_param($param_arr,"s","type",$type);
			$param_arr=_db_prepare_param($param_arr,"s","name",$name);
		}
		// For the where clause
		$where_clause=" WHERE page_id=? AND shop_id=".SHOP_ID;
		$param_arr=_db_prepare_param($param_arr,"i","page_id",$page_id,true);
		$resp=execSQL("UPDATE  
							tPage
						SET ".$param_arr['update_fields']
						.$where_clause
						,$param_arr['params'], 
						true);
		LOG_MSG('INFO',"db_page_update(): END");
		return $resp;
	}
	// DELETE
	function db_page_delete($page_id) {
		$param_arr=_init_db_params();
		LOG_MSG('INFO',"db_page_delete(): START { page_id=[$page_id]");
		// For the where clause
		$where_clause=" WHERE page_id=? AND shop_id=".SHOP_ID;
		$param_arr=_db_prepare_param($param_arr,"i","page_id",$page_id,true);
		$resp=execSQL("DELETE FROM  
							tPage"
						.$where_clause
						,$param_arr['params'], 
						true);
		LOG_MSG('INFO',"db_page_delete(): END");
		return $resp;
	}
}