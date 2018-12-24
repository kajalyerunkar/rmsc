<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_master extends CI_Controller {

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
      $log_id= $this->session->userdata['user']['user_id'];
      $query = "where Employee_id = ?";
      $data['Employee_data'] = $this->common_model->get_all_data('Employee');
      if($log_id!="")
      {
        $this->load->view('admin_header');
        $this->load->view('employee_master',$data);
      }
      else
      {
              redirect('index.php/Admin_login');
                    	
      }
  }
  public function NewEmp(){


      $log_id= $this->session->userdata['user']['user_id'];
      if($log_id!=""){
       $this->load->view('admin_header');
       $this->load->view('employee_profile');
      }
      else{
                    	redirect('index.php/Admin_login');
                    	
                }
  }
    function del_emp()
  {
    $id=$_POST['emp_id'];
    //echo $id;die();
    $table_name = 'Employee';
    $data = $id;
    $this->common_model->delt_data_record($table_name,$data,'Employee_id');
    echo "delete";
    //redirect('index.php/Setgoal');
  }
       function AddEmp(){
           $query = "where Employee_id = ?";
       $data['employee_data'] = $this->common_model->fetch_data('Employee',$query,$_POST['emp_id']);
           
           if(isset($data['employee_data']) && count($data['employee_data'])==0){
           $data['data'] = array(
              'Employee_id'=>$_POST['emp_id'],
              'emp_fname'=>$_POST['emp_fname'] ,
              'emp_mname'=>$_POST['emp_mname'] ,
              'emp_lname'=>$_POST['emp_lname'] ,
              'ReportingEmpCode'=>$_POST['reporting_id'] ,
              'ReportingEmpName'=>$_POST['reprt_nm'] ,
              'department'=>$_POST['department'] ,
              'designation'=>$_POST['designation'] ,
              'doj'=>$_POST['doj'] ,
              'date_of_ext'=>$_POST['doe'] ,
              'email_id'=> $_POST['email_id'],
              'reporting_mgr1_id'=>$_POST['report_email']
              );
             $table_name = 'Employee';
             $field_list='(Employee_id,
             emp_fname,
             emp_mname,
             emp_lname,
             ReportingEmpCode,
             ReportingEmpName,
             department,
             designation,
             doj,
             date_of_ext,
             email_id,
             reporting_mgr1_id)';
             $qry = '(?,?,?,?,?,?,?,?,?,?,?,?)';
             $data['emp_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
            // print_r("added");die();
           }
           else{
              
               //$data['data'] = array(
              $emp_fname="'".$_POST['emp_fname']."'";
              $emp_mname="'".$_POST['emp_mname']."'";
              $emp_lname="'".$_POST['emp_lname']."'"; 
              $ReportingEmpName="'".$_POST['reprt_nm']."'";
              $department="'".$_POST['department']."'" ;
              $designation="'".$_POST['designation']."'" ;
              $doj="'".$_POST['doj']."'" ;
              $date_of_ext="'".$_POST['doe']."'" ;
              $email_id= "'".$_POST['email_id']."'";
              $reporting_mgr1_id="'".$_POST['report_email']."'";
              $reporting_mgr2_id="'".""."'";
            //   $Employee_id="'".$_POST['emp_id'];
            
              $id="'".$_POST['emp_id']."'";
            $query = $this->db->query(" UPDATE `Employee` SET `emp_fname` =$emp_fname,`emp_mname` =$emp_mname,`emp_lname` =$emp_lname,`ReportingEmpName`=$ReportingEmpName,`department`=$department,`designation`=$designation,`doj`=$doj,`date_of_ext`=$date_of_ext,`email_id`=$email_id,`reporting_mgr1_id`=$reporting_mgr1_id,`reporting_mgr2_id`=$reporting_mgr2_id where (`Employee_id` = $id)");
            echo "updated";
           }
       }
       function view($id)
  {
    $query = "where Employee_id = ?";
    $data['Employee_data'] = $this->common_model->fetch_data('Employee',$query,$id);
        
    if(count($data['Employee_data'])>0)
    {
      $log_id= $this->session->userdata['user']['user_id'];
      if($log_id!=""){
      $this->load->view('admin_header');
      $this->load->view('employee_profile',$data);
      }
      else{
                    	redirect('index.php/Admin_login');
                    	
                }
      //$this->load->view('footer');
    }
  }
  
  function ReptDetails(){
        $emp_id=$_POST['rep_id'];
         $query = "where Employee_id = ?";
     $data['employee_data'] = $this->common_model->fetch_data('Employee',$query,$emp_id);
     if(count($data['employee_data'])>0){
            $rept_nm=$data['employee_data']['0']['emp_fname']." ".$data['employee_data']['0']['emp_lname'];
            $rept_email=$data['employee_data']['0']['email_id'];
            $report_details=$rept_nm."-".$rept_email;
            echo $report_details;die();
        }
        else{
            echo "error";die();
        }
     }
     
    function autosearch(){
        // $emp_id=$_POST['rept_id'];
        // $emp_id= "'".$emp_id."%'";
        // //print_r($emp_id);die();
        // $query = "where Employee_id  LIKE  ";
        // $data['employee_data'] = $this->common_model->fetch_data_like('Employee',$query,$emp_id);
        $emp_id=$_POST['rept_id'];
        $emp_id= "'".$emp_id."%'";
         $query = "where Employee_id LIKE ";
         $data['employee_data'] = $this->common_model->fetch_data_like('Employee',$query,$emp_id);
       // print_r($data['employee_data']);die();
        
    }
   
  
}