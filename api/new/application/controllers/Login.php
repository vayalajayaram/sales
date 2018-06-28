<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {//Core controller constructor
      parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->library('cart'); 
    $this->load->model('user_model');              
        
  }

  public function index()
  {
     if($this->input->post('email')!=NULL){
      
            $email = $this->input->post('email');
            $password = $this->input->post('password');          
            $result = $this->user_model->loginMe($email, $password);
            
      if($result!=NULL)
      {


      $tot_arr = array("user_id" => $result['user_id'],"first_name"=>$result['first_name'],"last_name"=>$result['last_name']);
        
        $tran_all = array("status" => 1, "message" => "Customer Login Successfull", "data" => $tot_arr);
        echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
        
        
      } else {
        
            $tran_all = array("status" => 0, "message" => "Email or password mismatch", "data" => "");
        echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
        
      }
      
      } else {

        $tran_all = array("status" => 0, "message" => "Post Value authenticate problem", "data" => "");
        echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
        
    
      }
  }
  
  public function sliders()
 {

  $id=$this->input->post('category');
   $result = $this->user_model->sliderslog($id);

   $service_Array = array();
      
     foreach($result as $cat)
    {
    $service_Array[$cat['sliderlog_id']]['slider_id'] = urldecode($cat['sliderlog_id']);
    $service_Array[$cat['sliderlog_id']]['title'] = urldecode($cat['title']);
    $service_Array[$cat['sliderlog_id']]['alt'] = urldecode($cat['alt']);
    $service_Array[$cat['sliderlog_id']]['sort_order'] = urldecode($cat['sort_order']);  
    $service_Array[$cat['sliderlog_id']]['image'] = urldecode($cat['image']); 
    }

    $tot_arr = array("Sliders" => $service_Array);
    $tran_all = array("status" => 1, "message" => "Sliders List ", "data" => $tot_arr);
    echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

 } 


  public function checkDuplicate()
  {

    
    $checkDuplicatePhone=$this->user_model->checkDuplicatePhone1($this->input->post('phone'));
        if($checkDuplicatePhone=="TRUE" ){ 

            $tran_all = array("status" => 0, "message" => "Phone Number Not Exists", "data" => "");
        echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

        } else {
             $tot_arr = array("user_id" => $checkDuplicatePhone['user_id']);
            $tran_all = array("status" => 1, "message" => "OTP sent your phone number", "data" => $tot_arr);
        echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

        }

  }
  
  
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */