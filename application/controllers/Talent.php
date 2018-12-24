<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Talent extends CI_Controller {

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
        $table_name='Employee';
        $data['Employee_data'] = $this->common_model->get_all_data($table_name);
        //print_r($data);die();
	    $this->load->view('admin_header');
	    $this->load->view('Talent_master',$data);
	  
	}

    public function view($id){
        //echo $id;die();
        //$data['table_name'] = 'talent_review';
        $query = "where Employee_id = ? ";
        $data['Employee_data'] = $this->common_model->fetch_data('Employee',$query,$id);
        
        $query = "where Employee_id = ? AND Year = ? ";
        $data['Talent_data_edit'] = $this->common_model->fetch_data('talent_review',$query,array('Employee_id'=>$id,'Year'=>'2018'));
        
      //print_r($data['Talent_data_edit']);die();
        //$data['']
        $this->load->view('admin_header');
	    $this->load->view('talent_new',$data);
	    
    }
	public function update(){
		$emp_id=$_POST['emp_id'];
		$data['data'] = array(

				'ansf'=>$_POST['ansf'],
				'anss' => $_POST['anss'],
				'opt1'=>$_POST['opt1'],
				'opt2'=>$_POST['opt2'],
				'emp_id' => $_POST['emp_id'],
				'Year'=>'2018'
			);
							       
	   	print_r($data);
		$table_name = 'talent_review';
		$field_list = 'ans1 = ?,ans2 = ?,opt_ans1 = ?,opt_ans2 = ?';
		$where = 'where Employee_id= ? AND Year = ? ';
		$data['ans_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);
		print_r($data['ans_details']);die();    
	        			

	}

	public function talent_review(){

					$data['data'] = array(

							'ansf'=>$_POST['ansf'],
							'anss' => $_POST['anss'],
							'emp_id'=> $_POST['emp_id'],
							'opt1'=>$_POST['opt1'],
							'opt2'=>$_POST['opt2'],
						
						);
                   //print_r($data);die();
				   $emp_id=$_POST['emp_id'];
				   $query = "where Employee_id = ? AND Year = ?";
				   $data['Talent_data'] = $this->common_model->fetch_data('talent_review',$query,array('Employee_id'=>$emp_id,'Year'=>'2018'));
				   //print_r($data['Talent_data']);die();
				   $emp_id=$_POST['emp_id'];
				   $query = "where Employee_id = ?";
				   $data['Employee_data'] = $this->common_model->fetch_data('Employee',$query,$emp_id);
				   // print_r($data['Employee_data']);
				   
				   if(count($data['Talent_data'])==0){
				         //  print_r(count($data['Employee_data']));die();
						$six_digit_random_number = mt_rand(0, 999999);
						$data['data'] = array(
									         
								 'Employee_id'=>$_POST['emp_id'],
								 'Reporting_mgr_id'=>$data['Employee_data']['0']['ReportingEmpCode'],
								 'ans1'=>$_POST['ansf'],
								 'opt_ans1'=>$_POST['opt1'],
								 'ans2'=>$_POST['anss'],
								 'opt_ans2'=>$_POST['opt2'],
								 'kra_id'=>$six_digit_random_number,
								 'Year' => '2018'
						);
								//print_r($data);die();
								$table_name = 'talent_review';
								$field_list = '(Employee_id,Reporting_mgr_id,ans1,opt_ans1,ans2,opt_ans2,kra_id,Year)';
								$qry = '(?,?,?,?,?,?,?,?)';
								$data['ans_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
								//print_r($data['ans_details']);die();    
				     }
				    else
				        {
				            	echo "error";die();
				        }	
	}
	
}

?>