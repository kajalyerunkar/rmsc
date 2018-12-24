<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expense_approve1 extends CI_Controller {

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
	    $this->load->view('Employee_list1');
	}
	public function view($id)
	{
	    $Employee_id=$this->session->userdata['user']['user_id'];
        $this->load->view('header');
	    $this->load->view('Mgr_appr_view');
	}
}