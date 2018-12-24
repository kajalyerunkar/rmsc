<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expense_master extends CI_Controller {

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
        $table_name='Expenses_list';
        $data['Expense_data'] = $this->common_model->get_all_data($table_name);
        //print_r($data);die();
	    $this->load->view('admin_header');
	    $this->load->view('Expense_master',$data);
	}
	public function add_exp(){
	    $exp_nm=$_POST['exp_nm'];
	    //$exp_id=$six_digit_random_number;
	    $six_digit_random_number = mt_rand(0, 999999);
	    $table_name = 'Expenses_list';
	    $data['data'] = array(
	        'Expense_nm'=>$exp_nm,
	        'exp_id'=>$six_digit_random_number
	        );
	     //   print_r($data);die();
	        
		$field_list = '(Expense_nm,
		exp_id)';
		$qry = '(?,?)';
		$data['emp_report_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
		print_r($data['emp_report_details']);die();
	}
	public function del_emp(){
	    $id=$_POST['exp_id'];
		//echo $id;die();
		$table_name = 'Expenses_list';
		$data = $id;
		$this->common_model->delt_data_record($table_name,$data,'exp_id');
		echo "delete";
		
	}
	public function view($id){
	    // $id=$_POST['exp_id'];
		echo $id;
		$data['table_name'] = 'Expenses_list';
		$query = "where exp_id = ?";
		$data['Expense_data'] = $this->common_model->fetch_data('Expenses_list',$query,$id);
		$this->load->view('admin_header');
	    $this->load->view('Expense_details',$data);
    }
}

?>