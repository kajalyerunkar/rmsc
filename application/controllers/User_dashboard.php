<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

    function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session'); 
		$this->load->helper('form');
		$this->load->model('common_model');
	}
	public function index()
	{
	     
	    $Employee_id=$this->session->userdata['user']['user_id'];

	     $this->load->view('header');
	     $this->load->view('user_dashboard');
	}
}

?>