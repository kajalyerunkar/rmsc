<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_password extends CI_Controller {
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
		//echo "HI";die();
        $this->load->view('Reset_password');
	}
	public function reset($id){
            $data['id']=$id;
            $this->load->view('Reset_password',$data);

        }
        public function reset_password(){
       $user_id= $_POST['username'];
       $pass=md5($_POST['password']);
//echo $user_id;die();
         $query = $this->db->query(" UPDATE `login` SET `password` ='$pass',`first_login`='1' where (`user_id`='$user_id')");

//echo $query;die();
		if($query>0){
			echo "updated";
		}
		else{
			echo "error";
		}
        }
}
