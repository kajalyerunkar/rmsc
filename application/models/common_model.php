<?php

class common_model extends CI_Model
{
	
    function __construct()
    {
        parent::__construct();
    }

    function get_all_data($table_name)
	{
		$sql = $this->db->query("select * from ".$table_name);
		return $sql->result_array();
	}

	function get_all_data_distinct($table_name,$column)
	{
		$sql = $this->db->query("SELECT DISTINCT ".$column." FROM ".$table_name);
		print_r($sql);die();
		return $sql->result_array();
	}

	function get_all_data_distinct_query($table,$search_query,$data,$column)
	{
		$query = "SELECT DISTINCT ".$column." FROM ".$table.' '.$search_query;
		print_r($query);
		$sql = $this->db->query($query,$data);
		return $sql->result_array();
	}

         function fetch_data_like($table_name,$where,$data)
	{
		$sql = "select * from Employee $where $data" ;
		//print_r($sql);
		$result = $this->db->query($sql,$data);
		return $result->result_array();
	}

	function save_data($data)
	{		
		$sql = $this->db->insert_string($data['table_name'],$data['details']);
		$this->db->query($sql);
		if($this->db->affected_rows()>0)
		{
			echo "success";
		}
		else
		{
			echo "error";
		}	
	}

	function fetch_data_desc($table_name,$where,$data)
	{
		$sql = "select * from ".$table_name.' '.$where."ORDER BY `goalset_status`";
		$result = $this->db->query($sql,$data);
		// print_r($sql);die();
		return $result->result_array();
	}

		function fetch_data_desc_pdp($table_name,$where,$data)
	{
		$sql = "select * from ".$table_name.' '.$where."ORDER BY `pdp_status`";
		$result = $this->db->query($sql,$data);
		// print_r($sql);die();
		return $result->result_array();
	}


        function fetch_data($table_name,$where,$data)
	{
		$sql = "select * from ".$table_name.' '.$where;
		$result = $this->db->query($sql,$data);
		//print_r($sql);die();
		return $result->result_array();
	}
    
		function multiple_fetch_data($table_name,$list)
	{
		$sql = 'select * from '.$table_name. ' where cust_id NOT IN ('  . $list .')';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

		function fetch_data_query($query,$data)
	{
		$result = $this->db->query($query,$data);
		return $result->result_array();
	}

    	function insertData($data){ 
   // print_r($data);die();
    
        $this->db->insert('setgoals',$data); // insert data into `trn_employee` 

        echo "done";die();
        //table 
    }

		function save_data_record($table_name,$list,$qry,$data)
	{
		//print_r($data);die();
		$query = 'INSERT INTO '.$table_name.$list.'  VALUES '.$qry;
		//echo $query;die();
		$this->db->query($query,$data);
		//echo "hi";
		if($this->db->affected_rows()>0)
			{
				echo "added";
			}
			else
			{
				echo "error";
			}
	}

		function edit_data_record($table_name,$list,$where,$data)
	{
		
		$query = 'UPDATE '.$table_name.' SET '.$list.$where;
		//echo $query;die();
		$this->db->query($query,$data);		
	}

		function delt_data_record($table_name,$data,$field_name)
	{
		$this->db->where($field_name,$data);		
		$this->db->delete($table_name);
	}
	
	// function selectData(){
	// 		//return "testing";
	// 		$query= $this->db->get('Employee_expense_details');
			
	// 		if($query->result_id->num_rows>0){
				
	// 			$ans=$query->result_array();
		
	// 			return $ans;
	// 		}
	// 		else{
	// 			return 0;
	// 		}
	// 	}


	function upload_image($fileName)
{
	print_r($filename);die();
if($filename!='' ){
      $filename1 = explode(',',$filename);
  foreach($filename1 as $file){
  $file_data = array(
  'name' => $file,
  'datetime' => date('Y-m-d h:i:s')
  );
  $this->db->insert('uploaded_files', $file_data);
  }
  }
}






}
?>