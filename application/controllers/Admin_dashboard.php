<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

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
               $data['table_name'] = 'setgoals';
               $query = "where Year = ?  ";
               $data['objective_details'] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018'));
               
               $search_query_obj="where ( Year= ? ) ";
               $data['emp_sub_obj']=$this->common_model->get_all_data_distinct_query('setgoals',$search_query_obj,array('Year'=>'2018'),'Employee_id');

               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? ";
                 $data['tot_obj'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id']));
               }
               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? AND goalset_status = ?";
                 $data['emp_sub_mgr'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id'],'goalset_status'=>'Pending_appr'));
               }
               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? AND goalset_status = ? AND status_flg != ?";
                 $data['mgr_sub_emp'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id'],'goalset_status'=>'submitted_mgr','status_flg'=>'mgr'));
               }
 //print_r($data['mgr_sub_emp'][$i]);die();
               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? AND goalset_status = ? AND status_flg = ?";
                 $data['save_by_mgr'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id'],'goalset_status'=>'submitted_mgr','status_flg'=>'mgr'));
               }
               //print_r($data['save_by_mgr'][$i]);die();
               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? AND goalset_status = ?";
                 $data['Save_by_emp'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id'],'goalset_status'=>'submitted'));
               }

               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? AND goalset_status = ? AND status_flg != ?";
                 $data['emp_tot_obj_Appr_mgr'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id'],'goalset_status'=>'approved','status_flg'=>'accept'));
               }
               
               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                 $data['table_name'] = 'setgoals';
                 $query = "where Year = ? AND Employee_id = ? AND goalset_status = ? AND status_flg = ?";
                 $data['emp_tot_obj_accept'][$i] = $this->common_model->fetch_data_desc('setgoals',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id'],'goalset_status'=>'approved','status_flg'=>'accept'));
               }
               for($i=0;$i<count( $data['emp_sub_obj']);$i++){
                
                 $query = "where Employee_id = ?";
                 $data['Employee_data'][$i] = $this->common_model->fetch_data('Employee',$query,array('Employee_id'=>$data['emp_sub_obj'][$i]['Employee_id']));
               }


               $data['table_name'] = ' pdp';
               $query = "where Year = ?  ";
               $data['pdp_details'] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018'));
               
               $search_query_pdp="where ( Year= ? ) ";
               $data['emp_sub_pdp']=$this->common_model->get_all_data_distinct_query('pdp',$search_query_pdp,array('Year'=>'2018'),'Employee_id');

               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? ";
                 $data['tot_pdp'][$i] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id']));
               }
               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? AND pdp_status = ?";
                 $data['emp_sub_mgr_pdp'][$i] = $this->common_model->fetch_data_desc_pdp(' pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id'],'pdp_status'=>'Pending_appr'));
               }
               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? AND pdp_status = ? AND status_flg != ?";
                 $data['mgr_sub_emp_pdp'][$i] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id'],'pdp_status'=>'submitted_mgr','status_flg'=>'mgr'));
               }
 //print_r($data['mgr_sub_emp'][$i]);die();
               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? AND pdp_status = ? AND status_flg = ?";
                 $data['save_by_mgr_pdp'][$i] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id'],'pdp_status'=>'submitted_mgr','status_flg'=>'mgr'));
               }
               //print_r($data['save_by_mgr'][$i]);die();
               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? AND pdp_status = ?";
                 $data['Save_by_emp_pdp'][$i] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id'],'pdp_status'=>'submitted'));
               }

               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? AND pdp_status = ? AND status_flg != ?";
                 $data['emp_tot_pdp_Appr_mgr_pdp'][$i] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id'],'pdp_status'=>'approved','status_flg'=>'accept'));
               }
               
               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                 $data['table_name'] = ' pdp';
                 $query = "where Year = ? AND Employee_id = ? AND pdp_status = ? AND status_flg = ?";
                 $data['emp_tot_pdp_accept_pdp'][$i] = $this->common_model->fetch_data_desc_pdp('pdp',$query,array('Year'=>'2018','Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id'],'pdp_status'=>'approved','status_flg'=>'accept'));
               }
               for($i=0;$i<count( $data['emp_sub_pdp']);$i++){
                
                 $query = "where Employee_id = ?";
                 $data['Employee_data_pdp'][$i] = $this->common_model->fetch_data('Employee',$query,array('Employee_id'=>$data['emp_sub_pdp'][$i]['Employee_id']));
               }


              






                $log_id= $this->session->userdata['user']['user_id'];

                if($log_id!=""){
                      $this->load->view('admin_header');
	               $this->load->view('admin_dashboard',$data);
                }
                else{
                    	redirect('index.php/Admin_login');
                    	
                }
             
        }
        
        	function view($id)
        	{
        		$data['table_name'] = 'setgoals';
        		$query = "where ( (Employee_id = ?)  AND (Year= ?) ) ";
        		$data['objective_details'] = $this->common_model->fetch_data_desc_status('setgoals',$query,array('Employee_id'=>$id,'Year'=>'2018'));
        		
        		$query = "where Employee_id = ?";
                $data['Employee_data'] = $this->common_model->fetch_data('Employee',$query,array('Employee_id'=>$id));
        		
                // echo "<pre>";
                // print_r($data); echo "</pre>";die();
        
        		if(count($data['objective_details'])>0)
        		{
        			$this->load->view('admin_header');
        			$this->load->view('admin_obj_details',$data);
        		}
                else{
                    
                    $this->load->view('admin_header');
         			$this->load->view('admin_obj_details',$data);
        		
                }
                
                
        	}
        	
        	function pdp_view($id)
        	{
        		$data['table_name'] = 'setgoals';
        		$query = "where ( (Employee_id = ?)  AND (Year= ?) ) ";
        		$data['pdp_details'] = $this->common_model->fetch_data_desc_status_pdp('pdp',$query,array('Employee_id'=>$id,'Year'=>'2018'));
        		
        		$query = "where Employee_id = ?";
                $data['Employee_data'] = $this->common_model->fetch_data('Employee',$query,array('Employee_id'=>$id));
        		
                // echo "<pre>";
                // print_r($data); echo "</pre>";die();
                
                $log_id= $this->session->userdata['user']['user_id'];

                if($log_id!=""){
                    
        		if(count($data['pdp_details'])>0)
        		{
        			$this->load->view('admin_header');
        			$this->load->view('admin_pdp_details',$data);
        		}
                else{
                    
                    $this->load->view('admin_header');
         			$this->load->view('admin_pdp_details',$data);
        		
                }
                }
                 else{
                    	redirect('index.php/Admin_login');
                    	
                }
             
        	}


}