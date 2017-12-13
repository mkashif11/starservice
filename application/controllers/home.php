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
		//$this->layouts->add_include('assets/js/main.js')->add_include('assets/css/coustom.css')->add_include('https://www.google.com/recaptcha/api.js',false);
		$this->layouts->dbview('home/main_page');
	}
	
	public function openaddservice(){
		echo $this->load->view('home/addpopup', "",true);
	}
}
