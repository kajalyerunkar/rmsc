<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
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
        $this->load->view('Login');
	}
	public function validate_login(){
//echo "HI";die();
		$data = array($_POST['username'],md5($_POST['password']));
		$sql = "SELECT * FROM login WHERE user_name = ? AND password = ?";
                $data1 = array($_POST['username'] );
                $sql1 = "SELECT * FROM Employee WHERE reporting_mgr1_id = ?"; 
                 $reult1 = $this->db->query($sql1, $data1);
		 $reult = $this->db->query($sql, $data);
                $result1 = $reult1->result_array();
		$result = $reult->result_array();

		if(count($result)>0)
		{
			
                       if(count($result1)>0) {  
                       $user_data = array(
				'user_name' => $result['0']['user_name'], 
				'role' => $result['0']['role'],
				'user_id' => $result['0']['user_id'],
                                'fname' => $result['0']['fname'],
                                'first_login'=>$result['0']['first_login'],
                                'mgr'=>'1'
			);
                        } 
                        else{
                            $user_data = array(
				'user_name' => $result['0']['user_name'], 
				'role' => $result['0']['role'],
				'user_id' => $result['0']['user_id'],
                                'fname' => $result['0']['fname'],
                                'first_login'=>$result['0']['first_login'],
                                'mgr'=>'0'
			);
                         }
			//$CI->session->set_userdata('logged_in', $user_data);
			$this->session->set_userdata('user',$user_data);
			
//print_r($user_data['first_login']);die();
                        if($user_data['first_login']==0){
                             echo $user_data['user_id'];die();
                        }
                        else{

			echo "exist";die();
                         }
		}
		else
		{
			echo "error";die();
		}
	}
function reset_password(){

 $query = "where user_name = ?  ";
 $user_name=$_POST['email_id_reset'];
 
 $data['Employee_data'] = $this->common_model->fetch_data('login',$query,$user_name);
// print_r($data['Employee_data']);die();
if (count($data['Employee_data'])>0) {
$Email_id=$_POST['email_id_reset'];
//echo $Email_id;die();
 $config = Array(       
		'protocol' => 'smtp',
		'smtp_host' => 'mail.kritvainvestments.com',
		'smtp_port' => 25,
		'smtp_user' => 'unipart@kritvainvestments.com',
		'smtp_pass' => 'Unipart@123',
		'smtp_timeout' => '4',
		'mailtype'  => 'html',
		'charset'   => 'iso-8859-1'
		);

		

		 $this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('unipart@kritvainvestments.com', 'Unipart PMS');
		

		$this->email->to($Email_id);  // replace it with receiver mail id
//$this->email->cc($data['employee_data']['0']['reporting_mgr1_id']);  // replace it with receiver mail id
		$this->email->subject('Unipart PMS Forgot Password'); // replace it with relevant subject

		//$body = $this->load->view('obj_sub_mail.php',$data,TRUE);
//print_r($body);die();
		$this->email->message("Please Click on this link to reset password : ".'http://kritvainvestments.com/unipart/index.php/Reset_password/reset/'.$data['Employee_data']['0']['user_id']);  
		if($this->email->send()){
echo "Notification Send";die();
}
else{
echo "err";die();
}
}

}

function logout()
	{
		$this->session->unset_userdata('user_data');
		$this->session->sess_destroy();
		redirect('index.php/Login');
	}

}



