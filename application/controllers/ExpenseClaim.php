<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ExpenseClaim extends CI_Controller {

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

// 		$data['table_name'] = 'Expense_report';
// 		$query = "where Employee_id = ? AND Year=?";
// 		$year=date("Y");
// 		$data['Expense_report_data'] = $this->common_model->fetch_data('Expense_report',$query,array('Employee'=>$Employee_id,'Year'=>$year));
		
// 		$Employee_id=$this->session->userdata['user']['user_id'];
// 	    $data['table_name'] = 'Employee';
// 		$query = "where Employee_id = ?";
// 		$data['employee_data'] = $this->common_model->fetch_data('Employee',$query,$Employee_id);
// 	 	$data['cost_center_data'] = $this->common_model->get_all_data_distinct('cost_center','cost_center');
	 	

	     $this->load->view('header');
	     $this->load->view('Expense_claim');
	}
	public function add_expense_report(){
	    // echo "hiiiii";die();
	     $Employee_id=$this->session->userdata['user']['user_id'];
	     
	     //echo $Employee_id;
	}
}

?>