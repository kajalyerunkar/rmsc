<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eligibility extends CI_Controller {

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
        $this->load->view('Eligibility',$data);
      }
      else
      {
              redirect('index.php/Admin_login');
                    	
      }

 }
 
 
//  public function category($catg_nm){ 
       
//           $data['table_name'] ='expense_type';
//           $query = "where exp_type = ?";
//           $data['expense_heads'] = $this->common_model->fetch_data('expense_type',$query,$catg_nm);
//           //print_r($data['expense_heads']);die();

//           if(isset($data['expense_heads']) && count($data['expense_heads'])>0){
      
//           $this->load->view('admin_header');
//           $this->load->view('Eligibility',$data);
            
//           }  
      
//      }   
          
// public function exp_type($catg_nm){

//         //print_r($catg_nm);
//         $data=array();
//         $table_name = 'employee_master1';
//         //$column_name = "'".$catg_nm."'";
//         $column_name = "$catg_nm";
//         $data['col']=$column_name;
//         $search_query="where 1";
//         $data['data_catg_wise']=$this->common_model->get_all_data_distinct_query($table_name,$search_query,$data,$column_name);
//         // echo "<pre>";
//         // print_r($data['data_catg_wise']);
//         // echo "</pre>";

//         if(isset($data['data_catg_wise']) && count($data['data_catg_wise'])>0){
      
//             $this->load->view('admin_header');
//             $this->load->view('Eligibility',$data);
            
//         }  
         
//   }

  public function exp_type(){
    $data['data'] = array(

        'exp_type'=>$_POST['exp'],
        'catg_nm' => $_POST['cat'],
      );
      //print_r($data);
      $exp_type = $_POST['exp'];
      print_r($exp_type);
      $catg = $_POST['cat'];
       print_r($catg);
      

          $data['table_name'] ='expense_type';
          $query = "where exp_type = ?";
          $data['expense_heads'] = $this->common_model->fetch_data('expense_type',$query,$exp_type);
          print_r($data['expense_heads']);

          if(isset($data['expense_heads']) && count($data['expense_heads'])>0){
      
            $this->load->view('admin_header');
            $this->load->view('Eligibility',$data);
            print_r("hello");
            
          }  
          ////////
          
          $data=array();
         $table_name = 'employee_master1';
         $column_name = "$catg";
         $data['col']=$column_name;
         $search_query="where 1";
         $data['data_catg_wise']=$this->common_model->get_all_data_distinct_query($table_name,$search_query,$data,$column_name);
        // echo "<pre>";
        // print_r($data['data_catg_wise']);
        // echo "</pre>";

        if(isset($data['data_catg_wise']) && count($data['data_catg_wise'])>0){
      
            $this->load->view('admin_header');
            $this->load->view('Eligibility',$data);
            
        }  


  }
  
   
}

?>