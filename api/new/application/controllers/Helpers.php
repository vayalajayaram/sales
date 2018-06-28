<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helpers extends CI_Controller {

 	public function __construct()
	{//Core controller constructor
	    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('cart');	
		$this->load->model('helper_model');
		$this->load->model('user_model');
		$this->load->model('category_model');
				
	}

	public function index()
	{
		 if($this->input->post('email')!=NULL){       		


			
            $email = $this->input->post('email');
            $password = $this->input->post('password');	         
            $result = $this->helper_model->loginMe($email, $password);
			if($result!=NULL)
			{


			$tot_arr = array("helper_id" => $result['helper_id']);
		    
	    	$tran_all = array("status" => 1, "message" => "Helper Login Successfull", "data" => $tot_arr);
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


	public function myprofile()
	{	
	    $helper_id=$this->input->post('helper_id');

	    if($this->input->post('helper_id')!="")
	    {
		$user=$this->helper_model->getprofile($helper_id);
		
		$data=array('name' =>$user['name'],'phone'=>$user['phone'],'city'=>$user['city_name'],'area'=>$user['area_name'],'image'=>$user['photo'],'account_name'=>$user['account_name'],'account_number'=>$user['account_number'],'email'=>$user['email'],'bank_name'=>$user['bank_name'],'city_id'=>$user['city_id'],'area_id'=>$user['area_id'],'aadhaar_number'=>$user['aadhaar_number']);
		$tran_all = array("status" => 1, "message" => "My Profile", "data" => $data);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

		} else {
           
        $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

		}
	}
	
public function editprofile()
	{	
	if(!(empty($_POST)) && ($_POST['name'] != ""))
		{ 
			
		    if($_POST['image']!="")
			{
				$data=array("name"=>$this->input->post('name'),"account_name"=>$this->input->post('account_name'),"city_id"=>$this->input->post('city'),"photo"=>$this->input->post('image'),"area_id"=>$this->input->post('area'),"account_number"=>$this->input->post('account_number'),"bank_name"=>$this->input->post('bank_name'),"aadhaar_number"=>$this->input->post('aadhaar_number'),"phone"=>$this->input->post('phone'));
			} else {
				$data=array("name"=>$this->input->post('name'),"account_name"=>$this->input->post('account_name'),"city_id"=>$this->input->post('city'),"area_id"=>$this->input->post('area'),"account_number"=>$this->input->post('account_number'),"bank_name"=>$this->input->post('bank_name'),"aadhaar_number"=>$this->input->post('aadhaar_number'),"phone"=>$this->input->post('phone'));

			}	
			$this->helper_model->edituser($this->input->post('helper_id'),$data);	
				
		$tran_all = array("status" => 1, "message" => "Helper Update successfully", "data" => $data);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );		
			
			
		} else {

	    $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	      
		}
	}
	
	
	
	
	
public function changepassword()
	{
		if($this->input->post('oldpassword')!=""){
		    
			
			$chk=$this->helper_model->changepassword($this->input->post('oldpassword'),$this->input->post('password'),$this->input->post('helper_id'));
		
		if((int)$chk==0 || (int)$chk==1)
		    {
		      $tran_all = array("status" => 1, "message" => "Password Changed Successfully", "data" => $chk);
		     echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );	
		     
		    } else {		
				
		        $tran_all = array("status" => 0, "message" => "Old Password is Wrong", "data" => '');
	        	echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
			}				
		} else {
		
                $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');
	        	echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		}
	}
	
	public function myorders()
	{
	    
	  if(webservice_key==$this->input->post('service_key'))
      {

	 $data['services']=$this->category_model->serviceslist();
     $service_Array = array();
      
     foreach($data['services'] as $cat)
		{
		$service_Array[$cat['service_id']]['service_id'] = urldecode($cat['service_id']);
		$service_Array[$cat['service_id']]['title'] = urldecode($cat['title']);
		$service_Array[$cat['service_id']]['service_type'] = urldecode($cat['service_type']);
		$service_Array[$cat['service_id']]['sort_order'] = urldecode($cat['sort_order']);
		$service_Array[$cat['service_id']]['new'] = urldecode($cat['new']);
		$service_Array[$cat['service_id']]['image'] = urldecode($cat['image']);	
		}	

		$city=$this->category_model->cityist();       
        $city_array=array();
		foreach ($city as $prod) 
		{
		$city_array[$prod['city_id']]['city_id']=urldecode($prod['city_id']);
		$city_array[$prod['city_id']]['city_name']=urldecode($prod['city_name']);
		$city_array[$prod['city_id']]['sort_order']=urldecode($prod['sort_order']);	
			$city_array[$prod['city_id']]['image']=urldecode($prod['city_image']);	
		}

		$areas=$this->category_model->areaist();       
        $area_array=array();
		foreach ($areas as $prod) 
		{
			$area_array[$prod['area_id']]['area_id']=urldecode($prod['area_id']);
			$area_array[$prod['area_id']]['city_id']=urldecode($prod['city_id']);
			$area_array[$prod['area_id']]['area_name']=urldecode($prod['area_name']);
			$area_array[$prod['area_id']]['sort_order']=urldecode($prod['sort_order']);
			$area_array[$prod['area_id']]['langlat']=urldecode($prod['area_lg_lt']);
			$area_array[$prod['area_id']]['category']=urldecode($prod['category']);
		}
		
		$bmservice=$this->category_model->bmservice();       
        $bms_array=array();
		foreach ($bmservice as $prod1) 
		{
		  $bms_array[$prod1['id']]['id']=urldecode($prod1['id']);
		  $bms_array[$prod1['id']]['name']=urldecode($prod1['service_type']);
		  $bms_array[$prod1['id']]['image']=urldecode($prod1['image']);
		  $bms_array[$prod1['id']]['alt']=urldecode($prod1['alt']);
		  $bms_array[$prod1['id']]['services']=urldecode($prod1['service_id']);
		}
		
		$city=$this->input->post('city');
        $area=$this->input->post('area');
		$vendors=$this->category_model->vendorslist1($city,$area);
		 $vendor_array=array();
		foreach ($vendors as $prod) 
		{
			$vendor_array[$prod['vendor_id']]['vendor_id']=urldecode($prod['vendor_id']);
			$vendor_array[$prod['vendor_id']]['name']=urldecode($prod['company_name']);
			$vendor_array[$prod['vendor_id']]['service_id']=urldecode($prod['service_id']);
		}
		
		$bookings=$this->helper_model->getorders($this->input->post('helper_id'));
		  $wallet_Array = array();
          foreach($bookings as $cat)
		  {
		   $wallet_Array[$cat['booking_id']]['order_id'] = urldecode($cat['booking_id']);
		   $wallet_Array[$cat['booking_id']]['amount'] = urldecode($cat['total_amount']);
		   $wallet_Array[$cat['booking_id']]['sub_total'] = urldecode($cat['sub_total']);
		   $wallet_Array[$cat['booking_id']]['additional_charges'] = urldecode($cat['additional_charges']);
		   $wallet_Array[$cat['booking_id']]['gst'] = urldecode($cat['gst']);
		   $wallet_Array[$cat['booking_id']]['coupon_amount'] = urldecode($cat['coupon_amount']);
		   $wallet_Array[$cat['booking_id']]['payment_mode'] = urldecode($cat['payment_mode']);
		   $wallet_Array[$cat['booking_id']]['date_time'] = urldecode($cat['date_time']);
		   $wallet_Array[$cat['booking_id']]['status'] = urldecode($cat['status']);	
		   $wallet_Array[$cat['booking_id']]['address_id'] = urldecode($cat['address_id']);	
		  }
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
		 	$shoppingmenu=$this->category_model->shoppingmenu();       
        $shopmenu_array=array();
		foreach ($shoppingmenu as $prod1) 
		{
		  $shopmenu_array[$prod1['id']]['id']=urldecode($prod1['id']);
		  $shopmenu_array[$prod1['id']]['title']=urldecode($prod1['title']);
		  $shopmenu_array[$prod1['id']]['service_id']=urldecode($prod1['service_id']);
		   if($prod1['id']==5)
		  {
		    $shoppingmenu1=$this->category_model->shoppingmenu1($prod1['service_id']);
		    $shopmenu_array1=array();
	    	foreach ($shoppingmenu1 as $prod2) 
		    {
		    $shopmenu_array1[$prod2['prod_id']]['prod_id']=urldecode($prod2['prod_id']);
		    $shopmenu_array1[$prod2['prod_id']]['title']=urldecode($prod2['title']);
		    $shopmenu_array1[$prod2['prod_id']]['price']=urldecode($prod2['actual_price']);
		    $shopmenu_array1[$prod2['prod_id']]['discount_price']=urldecode($prod2['discount_price']);
		    $shopmenu_array1[$prod2['prod_id']]['image']=urldecode($prod2['image']);
		    $shopmenu_array1[$prod2['prod_id']]['rate_total']=urldecode($prod2['rate_total']);
		    $shopmenu_array1[$prod2['prod_id']]['rate_count']=urldecode($prod2['rate_count']);
	    	}
		  $shopmenu_array[$prod1['id']]['products']= $shopmenu_array1;
		  }
		}
		
		$popularservicemenu=$this->category_model->popularservicemenu();       
        $servicemenu_array=array();
		foreach ($popularservicemenu as $prod1) 
		{
		  $servicemenu_array[$prod1['id']]['id']=urldecode($prod1['id']);
		  $servicemenu_array[$prod1['id']]['title']=urldecode($prod1['title']);
		  $servicemenu_array[$prod1['id']]['popluar_service_id']=urldecode($prod1['popluar_service_id']);
		   if($prod1['id']==5)
		  {
		    $popularservicemenu1=$this->category_model->popularservicemenu1($prod1['popluar_service_id']);
		    $servicemenu_array1=array();
	    	foreach ($popularservicemenu1 as $prod2) 
		    {
		    $servicemenu_array1[$prod2['prod_id']]['prod_id']=urldecode($prod2['prod_id']);
		    $servicemenu_array1[$prod2['prod_id']]['title']=urldecode($prod2['title']);
		    $servicemenu_array1[$prod2['prod_id']]['price']=urldecode($prod2['actual_price']);
		    $servicemenu_array1[$prod2['prod_id']]['discount_price']=urldecode($prod2['discount_price']);
		    $servicemenu_array1[$prod2['prod_id']]['image']=urldecode($prod2['image']);
		    $servicemenu_array1[$prod2['prod_id']]['rate_total']=urldecode($prod2['rate_total']);
		    $servicemenu_array1[$prod2['prod_id']]['rate_count']=urldecode($prod2['rate_count']);
	    	}
		  $servicemenu_array[$prod1['id']]['products']= $servicemenu_array1;
		  }
		}



		 $tot_arr = array("services" => $service_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"bookings"=>$wallet_Array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Helper Orders Page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
		
	}
	
	 public function orderdetails()
	{
	    
	  if(webservice_key==$this->input->post('service_key'))
      {

	 $data['services']=$this->category_model->serviceslist();
     $service_Array = array();
      
      foreach($data['services'] as $cat)
		{
		$service_Array[$cat['service_id']]['service_id'] = urldecode($cat['service_id']);
		$service_Array[$cat['service_id']]['title'] = urldecode($cat['title']);
		$service_Array[$cat['service_id']]['service_type'] = urldecode($cat['service_type']);
		$service_Array[$cat['service_id']]['sort_order'] = urldecode($cat['sort_order']);
		$service_Array[$cat['service_id']]['new'] = urldecode($cat['new']);
		$service_Array[$cat['service_id']]['image'] = urldecode($cat['image']);	
		}	

		$city=$this->category_model->cityist();       
        $city_array=array();
		foreach ($city as $prod) 
		{
		$city_array[$prod['city_id']]['city_id']=urldecode($prod['city_id']);
		$city_array[$prod['city_id']]['city_name']=urldecode($prod['city_name']);
		$city_array[$prod['city_id']]['sort_order']=urldecode($prod['sort_order']);	
			$city_array[$prod['city_id']]['image']=urldecode($prod['city_image']);	
		}

		$areas=$this->category_model->areaist();       
        $area_array=array();
		foreach ($areas as $prod) 
		{
			$area_array[$prod['area_id']]['area_id']=urldecode($prod['area_id']);
			$area_array[$prod['area_id']]['city_id']=urldecode($prod['city_id']);
			$area_array[$prod['area_id']]['area_name']=urldecode($prod['area_name']);
			$area_array[$prod['area_id']]['sort_order']=urldecode($prod['sort_order']);
			$area_array[$prod['area_id']]['langlat']=urldecode($prod['area_lg_lt']);
			$area_array[$prod['area_id']]['category']=urldecode($prod['category']);
		}
		
		$bmservice=$this->category_model->bmservice();       
        $bms_array=array();
		foreach ($bmservice as $prod1) 
		{
		  $bms_array[$prod1['id']]['id']=urldecode($prod1['id']);
		  $bms_array[$prod1['id']]['name']=urldecode($prod1['service_type']);
		  $bms_array[$prod1['id']]['image']=urldecode($prod1['image']);
		  $bms_array[$prod1['id']]['alt']=urldecode($prod1['alt']);
		  $bms_array[$prod1['id']]['services']=urldecode($prod1['service_id']);
		}
		
		$city=$this->input->post('city');
        $area=$this->input->post('area');
		$vendors=$this->category_model->vendorslist1($city,$area);
		 $vendor_array=array();
		foreach ($vendors as $prod) 
		{
			$vendor_array[$prod['vendor_id']]['vendor_id']=urldecode($prod['vendor_id']);
			$vendor_array[$prod['vendor_id']]['name']=urldecode($prod['company_name']);
			$vendor_array[$prod['vendor_id']]['service_id']=urldecode($prod['service_id']);
		}
		
		$book_data=$this->user_model->orderdata($this->input->post('order_id'));	
		 
		  
		$data['booking_data']=array('user_id'=>$book_data['user_id'],'address_id'=>$book_data['address_id'],'amount'=>$book_data['total_amount']
		,'sub_total'=>$book_data['sub_total'],'additional_charges'=>$book_data['additional_charges'],'gst'=>$book_data['gst'],'coupon_amount'=>$book_data['coupon_amount'],'payment_mode'=>$book_data['payment_mode']
		,'date_time'=>$book_data['date_time'],'status'=>$book_data['status']);
		
		$user_data=$this->user_model->userdata($book_data['user_id']);
		
		$data['user_data']=array('first_name'=>$user_data['first_name'],'last_name'=>$user_data['last_name'],'email'=>$user_data['email']
		,'phone'=>$user_data['phone'],'city_id'=>$user_data['city_id'],'area_id'=>$user_data['area_id']);
		
		$address_data=$this->user_model->addressdata($book_data['address_id']);
		
		$data['address_data']=array('firstname'=>$address_data['firstname'],'lastname'=>$address_data['lastname'],'email'=>$address_data['email']
		,'phone'=>$address_data['phone'],'address'=>$address_data['address'],'address1'=>$address_data['address1'],'city'=>$address_data['city'],'area'=>$address_data['area'],'country'=>$address_data['country'],'comments'=>$address_data['comments']);
		
		  $bookings=$this->helper_model->orderdetails($this->input->post('order_id'));	
		  $wallet_Array = array();
          foreach($bookings as $cat)
		  {
		   $wallet_Array[$cat['bd_id']]['booking_id'] = urldecode($cat['booking_id']);
		   $wallet_Array[$cat['bd_id']]['product_id'] = urldecode($cat['product_id']);
		   $wallet_Array[$cat['bd_id']]['vendor_id'] = urldecode($cat['vendor_id']);
		   $wallet_Array[$cat['bd_id']]['product_name'] = urldecode($cat['product_name']);	
		   $wallet_Array[$cat['bd_id']]['price'] = urldecode($cat['price']);	
		   $wallet_Array[$cat['bd_id']]['quantity'] = urldecode($cat['quantity']);	
		   $wallet_Array[$cat['bd_id']]['total_price'] = urldecode($cat['total_price']);
		   $wallet_Array[$cat['bd_id']]['image'] = urldecode($cat['image']);
		   $wallet_Array[$cat['bd_id']]['company_name'] = urldecode($cat['company_name']);
		   $wallet_Array[$cat['bd_id']]['contact_person'] = urldecode($cat['contact_person']);
		   $wallet_Array[$cat['bd_id']]['email'] = urldecode($cat['email']);
		   $wallet_Array[$cat['bd_id']]['phone'] = urldecode($cat['phone']);
		   $wallet_Array[$cat['bd_id']]['address'] = urldecode($cat['address']);
		   $wallet_Array[$cat['bd_id']]['area_id'] = urldecode($cat['area_id']);
		   $wallet_Array[$cat['bd_id']]['city_id'] = urldecode($cat['city_id']);
		  }
		  
		  $booking_history=$this->user_model->bookinghistory($this->input->post('order_id'));	
		  $bookinghistory=array();
		  foreach($booking_history as $bkhs)
		  {
		   $bookinghistory[$bkhs['orderlogs_id']]['orderlogs_id'] = urldecode($bkhs['orderlogs_id']);
		   $bookinghistory[$bkhs['orderlogs_id']]['status'] = urldecode($bkhs['status']);
		   $bookinghistory[$bkhs['orderlogs_id']]['date_time'] = urldecode($bkhs['date_time']);
		  }
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
         
          	$shoppingmenu=$this->category_model->shoppingmenu();       
        $shopmenu_array=array();
		foreach ($shoppingmenu as $prod1) 
		{
		  $shopmenu_array[$prod1['id']]['id']=urldecode($prod1['id']);
		  $shopmenu_array[$prod1['id']]['title']=urldecode($prod1['title']);
		  $shopmenu_array[$prod1['id']]['service_id']=urldecode($prod1['service_id']);
		   if($prod1['id']==5)
		  {
		    $shoppingmenu1=$this->category_model->shoppingmenu1($prod1['service_id']);
		    $shopmenu_array1=array();
	    	foreach ($shoppingmenu1 as $prod2) 
		    {
		    $shopmenu_array1[$prod2['prod_id']]['prod_id']=urldecode($prod2['prod_id']);
		    $shopmenu_array1[$prod2['prod_id']]['title']=urldecode($prod2['title']);
		    $shopmenu_array1[$prod2['prod_id']]['price']=urldecode($prod2['actual_price']);
		    $shopmenu_array1[$prod2['prod_id']]['discount_price']=urldecode($prod2['discount_price']);
		    $shopmenu_array1[$prod2['prod_id']]['image']=urldecode($prod2['image']);
		    $shopmenu_array1[$prod2['prod_id']]['rate_total']=urldecode($prod2['rate_total']);
		    $shopmenu_array1[$prod2['prod_id']]['rate_count']=urldecode($prod2['rate_count']);
	    	}
		  $shopmenu_array[$prod1['id']]['products']= $shopmenu_array1;
		  }
		}
		
		$popularservicemenu=$this->category_model->popularservicemenu();       
        $servicemenu_array=array();
		foreach ($popularservicemenu as $prod1) 
		{
		  $servicemenu_array[$prod1['id']]['id']=urldecode($prod1['id']);
		  $servicemenu_array[$prod1['id']]['title']=urldecode($prod1['title']);
		  $servicemenu_array[$prod1['id']]['popluar_service_id']=urldecode($prod1['popluar_service_id']);
		   if($prod1['id']==5)
		  {
		    $popularservicemenu1=$this->category_model->popularservicemenu1($prod1['popluar_service_id']);
		    $servicemenu_array1=array();
	    	foreach ($popularservicemenu1 as $prod2) 
		    {
		    $servicemenu_array1[$prod2['prod_id']]['prod_id']=urldecode($prod2['prod_id']);
		    $servicemenu_array1[$prod2['prod_id']]['title']=urldecode($prod2['title']);
		    $servicemenu_array1[$prod2['prod_id']]['price']=urldecode($prod2['actual_price']);
		    $servicemenu_array1[$prod2['prod_id']]['discount_price']=urldecode($prod2['discount_price']);
		    $servicemenu_array1[$prod2['prod_id']]['image']=urldecode($prod2['image']);
		    $servicemenu_array1[$prod2['prod_id']]['rate_total']=urldecode($prod2['rate_total']);
		    $servicemenu_array1[$prod2['prod_id']]['rate_count']=urldecode($prod2['rate_count']);
	    	}
		  $servicemenu_array[$prod1['id']]['products']= $servicemenu_array1;
		  }
		}
		
		 $tot_arr = array("services" => $service_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"booking_details"=>$wallet_Array,"booking_data"=>$data['booking_data'],"user_data"=>$data['user_data'],"address_data"=>$data['address_data'],"bookinghistory"=>$bookinghistory,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Helper Order Details Page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
		
	}
	
	
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */