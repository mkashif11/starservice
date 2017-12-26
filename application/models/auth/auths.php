<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auths extends CI_Model {
	
	public function __construct() {
        parent::__construct();
		$this->load->model('common/commonModel');
	}
	
	function login($userId,$paswd){
		$where = "(username = '".$userId."' or  email='".$userId."') and passwd='".md5($paswd)."'";
		$res  = $this->commonModel->getRecord('users','*',$where,'','','','array',0);
		if($res){
			return $res;
		}else{
			return false;
		}
	}
	
	function insert_user($data){
		$data['date_added'] = date('Y-m-d H:i:s');
		$res  = $this->commonModel->insertRecord('users',$data);
		if($res){
			$profile_data = array(
				'users_id' => $res,
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'email_univ' => $data['email'],
				'added_by' => $res,
				'date_added' => date('Y-m-d H:i:s'),
			);
			$up_res = $this->commonModel->insertRecord('user_profile',$profile_data);
		}
		
		if($res && $up_res){
			return $res;
		}else{
			return false;
		}
	}
	
	function getServiceSetails($id='0'){
		if($id){
			$sql="select t1.id,t1.name,t1.contact,t1.address,t1.product_cat_id,t1.product_details,t1.notes,
			t1.purchase_date,t2.id serviceid,t2.service_date,t2.done_status,t2.service_completed_by,t2.service_note,t2.service_note
			from services t1 left join service_details t2 on
			t1.id=t2.service_id where t1.id=$id and t1.status='1'";
			$resultSet=$this->db->query($sql);
			if($resultSet->num_rows()>0){
				return $resultSet->result_array();
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
		
}
?>
