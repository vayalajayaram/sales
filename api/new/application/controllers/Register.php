<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

 	public function __construct()
	{//Core controller constructor
	    parent::__construct();	
		$this->load->model('User_model');			              
				
	}

	public function index()
	{
	
			
		if($this->input->post('phone')!=""){
	
			$datetime=date("Y-m-d H:i:s");
					
			$values=array("name"=>$this->input->post('name'),"email"=>$this->input->post('email'),"phone"=>$this->input->post('phone'),"status"=>'1',"date_time"=>$datetime);

			$id=$this->User_model->addcustomer($values);

			$tot_arr = array("id" => $id);
		    
	    	$tran_all = array("status" => 1, "message" => "User Registration Successfull", "data" => $tot_arr);
		    echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	    	
  
		} else {	

		  $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => "");
		    echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );		
	
		
		}
		
	}

	
	
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */