<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Layouts');
		$this->load->model('auth/auths');
	}

	public function index() {
		//$extraHead = "activateHeadMeanu('topdashboard,topdashboardhead,intopdashboard')";
		//$this->layouts->set_extra_head($extraHead);
		$this->layouts->set_title('welcome');
		$this->layouts->add_include('assets/js/main.js')->add_include('assets/css/coustom.css');
		$this->layouts->view('index');
	}

}