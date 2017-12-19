<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->utilities->validateSession();
		$this->load->library('Layouts');
		$this->load->model('auth/auths');
	}
	
	
	public function index() {
		//$extraHead = "activateHeadMeanu('topsignin')";
		//$this->layouts->set_extra_head($extraHead);
		$this->layouts->set_title('Home');
		
		$data['getServiceData'] = $this->commonModel->getRecord('services','*',array(),array(),"","","array","1");
		//$this->layouts->add_include('assets/js/main.js')->add_include('assets/css/coustom.css')->add_include('https://www.google.com/recaptcha/api.js',false);
		$this->layouts->dbview('home/main_page',$data);
	}
	
	public function openaddservice(){
		$data['getServiceData'] = "";
		echo $this->load->view('home/addpopup',$data,true);
	}
	
	public function editservice(){
		$id=$this->input->post('id');
		$data['getServiceData'] =  $this->commonModel->getRecord('services','*',array('id'=>$id),array(),"","","array","0");
		echo $this->load->view('home/updatepopup',$data,true);
	}
}
