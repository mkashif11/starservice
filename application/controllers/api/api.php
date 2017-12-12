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
}
