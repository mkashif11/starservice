<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . "Libraries/REST_Controller.php");

class Api extends REST_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('Layouts');
		$this->load->model('auth/auths');
	}
	
	
	public function signin_post() {
		$user = $this->post('user');
		$passwd = $this->post('passwd');
		$userData = $this->auths->login($user,$passwd);

		if($userData){
			
			if( $userData['active_flag']=='0' ) {
				$this->response(array("status"=>"error","msg"=>"User not active"),401);
			} else if( $userData['active_flag']=='2' ) {
				$this->response(array("status"=>"error","msg"=>"User not found"),404);
			} else {
			// set session
				$sess_data = array('login' => TRUE, 'uname' => $userData['first_name'], 'uid' => $userData['id'], 'active_status' => $userData['active_flag'], 'email' => $userData['email'], 'mobile' => $userData['mobile'], 'user_name' => $userData['username']);
				$this->utilities->setSession($sess_data);
				$this->response(array("status"=>"success","msg"=>"Login successful","data"=>$sess_data),200);
			}
		}else{
			$this->response(array("status"=>"error","msg"=>"Please enter correct user and password"),403);
		}
	}
	
	public function service_put() {
		$putArr = Array();
		$putArr['name'] = $this->put('name');
		$putArr['contact'] = $this->put('contact');
		$putArr['service_date'] = $this->utilities->convertDateFormatForDbase($this->put('sdate'));
		$putArr['address'] = $this->put('address');
		$putArr['added_by'] = $this->utilities->getSessionUserData('uid');
		$putArr['date_modified'] = date("Y-m-d H:i:s");
		
		$up_res = $this->commonModel->insertRecord('services',$putArr);
		if($up_res){
			$this->response(array("status"=>"success","msg"=>"Service recorded successfully.","data"=>$up_res),200);
		}else{
			$this->response(array("status"=>"error","msg"=>"Service not recorded.","data"=>""),200);
		}
	}
	
	public function updateservice_post() {
		$postArr = Array();
		//echo $this->post('sdate');die;
		$postArr['name'] = $this->post('name');
		$postArr['contact'] = $this->post('contact');
		$postArr['service_date'] = $this->utilities->convertDateFormatForDbase($this->post('sdate'));
		$postArr['address'] = $this->post('address');
		$postArr['updated_by'] = $this->utilities->getSessionUserData('uid');
		$postArr['date_modified'] = date("Y-m-d H:i:s");
		
		$up_res = $this->commonModel->updateRecord('services',$postArr,array("id"=>$this->post('id')));
		if($up_res){
			$this->response(array("status"=>"success","msg"=>"Service record update successfully.","data"=>$up_res),200);
		}else{
			$this->response(array("status"=>"error","msg"=>"Service not updated.","data"=>""),200);
		}
	}
	
	
	
}
