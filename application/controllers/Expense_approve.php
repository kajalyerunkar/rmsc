<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expense_approve extends CI_Controller {

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
		//echo "HI";die();

		$data['table_name'] = 'Employee';
		$query = "where Employee_id = ?";
		$data['Emp_details'] = $this->common_model->fetch_data('Employee',$query,$Employee_id);
		$search_query_obj="where ( Year= ? AND Reporting_id =?)";

		 $table_name='employee_expense_details';
		$data['emp_sub_obj']=$this->common_model->get_all_data_distinct_query('employee_expense_details',$search_query_obj,array('Year'=>'2018','Reporting_id'=>$Employee_id),'Employee_id');

		//print_r($data['emp_sub_obj']);
		if(isset($data['emp_sub_obj']) && count($data['emp_sub_obj'])>0){
             for($i=0;$i< count($data['emp_sub_obj']);$i++){
                 $Emp_id = $data['emp_sub_obj'][$i]['Employee_id'];
                // print_r($Emp_id);
                 $query = "where Employee_id = ?  ";
        	     $data['Team_data'][$i] = $this->common_model->fetch_data('employee_expense_details',$query,$Emp_id);
             }
         }
         //print_r($data['Team_data']);
		$this->load->view('header');
		$this->load->view('Employee_list',$data);
		//$this->load->model('Common_model1');
	}

	public function view($id)
	{	
		//echo "hello";
	    $Employee_id =$this->session->userdata['user']['user_id'];
        $this->load->view('header');
	    $this->load->view('Mgr_appr_view');
	}

	public function show($id){

		//echo($id);
		
		$data['table_name'] = 'employee_expense_details';
		$query = "where exp_id = ?";
		$data['edit_objective_details'] = $this->common_model->fetch_data('employee_expense_details',$query,$id);
		//print_r($data['edit_objective_details']['0']['Employee_id']);die();
		$Employee_id=$data['edit_objective_details']['0']['Employee_id'];
		$data['Employee_id']=$Employee_id;
			$rept_id=$data['edit_objective_details']['0']['Reporting_id'];
		//$data['flag']='edit';

        $data['table_name'] = 'Employee';
		$query = "where Employee_id = ?";
		$data['Employee_data'] = $this->common_model->fetch_data('Employee',$query,$Employee_id);
		//print_r($data['Employee_data']);
		$data['table_name'] = 'employee_expense_details';
		$query ="where Reporting_id = ? AND Year=? AND Employee_id=? AND Exp_type=? AND Month=? AND exp_id=?";
		$year=date("Y");
		$data['objective_details'] =$this->common_model->fetch_data('employee_expense_details',$query,array('Reporting_id'=>$rept_id,'Year'=>$year,'Employee_id'=>$Employee_id,'Exp_type'=>$data['edit_objective_details']['0']['Exp_type'],'Month'=>$data['edit_objective_details']['0']['Month'],'exp_id'=>$data['edit_objective_details']['0']['exp_id']));
		//print_r($data['edit_objective_details']);

		$table_name='employee_expense_details';
        $where="where Reporting_id = ? ";
        $data['emp_list']=$this->common_model->get_all_data_distinct_query($table_name,$where,$rept_id,'Employee_id');
        // print_r($data['emp_list']);die();
         if(isset($data['emp_list']) && count($data['emp_list'])>0){
             for($i=0;$i< count($data['emp_list']);$i++){
                 $Emp_id = $data['emp_list'][$i]['Employee_id'];
                 //print_r($Emp_id);
                 $query = "where Employee_id = ?  ";
        	     $data['Team_data'][$i] = $this->common_model->fetch_data('Employee',$query,$Emp_id);
             }
         } 
         //print_r($data['Team_data']);die();

		if(count($data['edit_objective_details'])>0)
		{
			
			$this->load->view('header');
			$this->load->view('Employee_list',$data);
			//echo "hello";
			//$this->load->view('footer');
		}
   
	}

	public function update(){
		$data['data'] = array(

				'mgr_remark'=>$_POST['mag_review'],
				'exp_id' => $_POST['exp_id'],
			);
							       
	   //print_r($data);
		$table_name = 'employee_expense_details';
		$field_list = 'mgr_remark = ?';
		$where = 'where exp_id = ?';
		$data['ans_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);
		//print_r($data['ans_details']);

	}
	
	
}
?>