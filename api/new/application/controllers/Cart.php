<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

 	public function __construct()
	{//Core controller constructor
	    parent::__construct();
		$this->load->model('category_model');	
		$this->load->model('cart_model');
	}
	
	
		
    public function index()
	{
	    
	  if(webservice_key==$this->input->post('service_key'))
      {

	 $data['services']=$this->category_model->serviceslist();
     $service_Array = array();
      
     foreach($data['services'] as $cat)
		{
		$service_Array[$cat['service_id']]['service_id'] = urldecode($cat['service_id']);
		$service_Array[$cat['service_id']]['title'] = urldecode($cat['title']);
		$service_Array[$cat['service_id']]['type'] = urldecode($cat['type']);
		$service_Array[$cat['service_id']]['service_type'] = urldecode($cat['service_type']);
		$service_Array[$cat['service_id']]['sort_order'] = urldecode($cat['sort_order']);
		$service_Array[$cat['service_id']]['new'] = urldecode($cat['new']);
		$service_Array[$cat['service_id']]['image'] = urldecode($cat['image']);	
		}	

		$sliders['sliders']=$this->category_model->sliders();
		$sliders_array=array();


		foreach ($sliders['sliders'] as $slider) {
			$sliders_array[$slider['slider_id']]['title']=urldecode($slider['title']);
			$sliders_array[$slider['slider_id']]['image']=urldecode($slider['image']);
			$sliders_array[$slider['slider_id']]['alternate_text']=urldecode($slider['alternate_text']);
			$sliders_array[$slider['slider_id']]['url']=urldecode($slider['url']);
			$sliders_array[$slider['slider_id']]['sort_order'] = urldecode($slider['sort_order']);
			$sliders_array[$slider['slider_id']]['description'] = urldecode($slider['description']);
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
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>
		 $settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],
		 'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );

		 $tot_arr = array("services" => $service_Array,"sliders"=>$sliders_array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>
		 $data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Home Page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}
	
	
	
	public function address()
	{

	  if(webservice_key==$this->input->post('service_key'))
      {

     $data['services']=$this->category_model->serviceslist();
     $service_Array = array();
      
     foreach($data['services'] as $cat)
	{
		$service_Array[$cat['service_id']]['service_id'] = urldecode($cat['service_id']);
		$service_Array[$cat['service_id']]['title'] = urldecode($cat['title']);
		$service_Array[$cat['service_id']]['type'] = urldecode($cat['type']);
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
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>
		 $settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],
		 'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		
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
		$user_id=$this->input->post('user_id');
		$address=$this->cart_model->addresslist($user_id);       
        $address_array=array();
		foreach ($address as $addr) 
		{
		  $address_array[$addr['address_id']]['address_id']=urldecode($addr['address_id']);
		  $address_array[$addr['address_id']]['title']=urldecode($addr['title']);
		  $address_array[$addr['address_id']]['firstname']=urldecode($addr['firstname']);
		  $address_array[$addr['address_id']]['lastname']=urldecode($addr['lastname']);
		  $address_array[$addr['address_id']]['email']=urldecode($addr['email']);
		  $address_array[$addr['address_id']]['address']=urldecode($addr['address']);
		  $address_array[$addr['address_id']]['area']=urldecode($addr['area']);
		  $address_array[$addr['address_id']]['city']=urldecode($addr['city']);
		  $address_array[$addr['address_id']]['phone']=urldecode($addr['phone']);
		  $address_array[$addr['address_id']]['default_address']=urldecode($addr['default_address']);
		  $address_array[$addr['address_id']]['comments']=urldecode($addr['comments']);
		}
		

		 $tot_arr = array("services" => $service_Array,"address"=>$address_array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>
		 $data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Address page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" =>"authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }

	}
	
	
	public function editaddress()
	{

	  if(webservice_key==$this->input->post('service_key'))
      {

       $data['services']=$this->category_model->serviceslist();
       $service_Array = array();
      
        foreach($data['services'] as $cat)
	    {
		$service_Array[$cat['service_id']]['service_id'] = urldecode($cat['service_id']);
		$service_Array[$cat['service_id']]['title'] = urldecode($cat['title']);
		$service_Array[$cat['service_id']]['type'] = urldecode($cat['type']);
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
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>
		 $settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],
		 'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		
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
		
		$adrs_id=$this->input->post('address_id');
		$address=$this->cart_model->findaddress($adrs_id);     
		
		 $data['address']= array('address_id' =>$address['address_id'],'title'=>$address['title'],'firstname'=>$address['firstname'],
		 'lastname'=>$address['lastname'],'email'=>$address['email'],'address'=>$address['address'],'area'=>$address['area'],'city'=>
		 $address['city'],'phone'=>$address['phone'],'comments'=>$address['comments'],'address1'=>$address['address1']);
		 
		 $tot_arr = array("services" => $service_Array,"selectaddress"=> $data['address'],"cities"=>$city_array,"areas"=>$area_array,
		 "settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>
		 $shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Address page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" =>"authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }

	}  
	
	public function edit_address()
	{
	    	 
	   if(webservice_key==$this->input->post('service_key'))
       {

        $data['address']= array('title'=>$this->input->post('title'),'firstname'=>$this->input->post('firstname'),'lastname'=>
        $this->input->post('lastname'),'email'=>$this->input->post('email'),'address'=>$this->input->post('address'),'area'=>
        $this->input->post('area'),'city'=>$this->input->post('city'),'phone'=>$this->input->post('phone'),'comments'=>
        $this->input->post('comments'),'address1'=>$this->input->post('address1'));
		 
		 $result=$this->cart_model->edit_address($data['address'],$this->input->post('address_id'));

		$tran_all = array("status" => 1, "message" => "Address Edit page");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
       } else {
          
        $tran_all = array("status" => 0, "message" =>"authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
       }
      
	}
	
	public function add_address()
	{
	    	 
	   if(webservice_key==$this->input->post('service_key'))
       {

        $data['address']= array('user_id'=>$this->input->post('user_id'),'title'=>$this->input->post('title'),'firstname'=>
        $this->input->post('firstname'),'lastname'=>$this->input->post('lastname'),'email'=>$this->input->post('email'),'address'=>
        $this->input->post('address'),'area'=>$this->input->post('area'),'city'=>$this->input->post('city'),'phone'=>
        $this->input->post('phone'),'comments'=>$this->input->post('comments'),'address1'=>$this->input->post('address1'));
		 
		 $result=$this->cart_model->add_address($data['address']);

		$tran_all = array("status" => 1, "message" => "Address Add page","address_id"=> $result);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
       } else {
          
        $tran_all = array("status" => 0, "message" =>"authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
       }
      
	}
	
	public function delete_address()
	{
	    	 
	   if(webservice_key==$this->input->post('service_key'))
       {

      
		 
		 $result=$this->cart_model->delete_address($this->input->post('address_id'));

		$tran_all = array("status" => 1, "message" => "Address Deleted");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
       } else {
          
        $tran_all = array("status" => 0, "message" =>"authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
       }
      
	}
	
	
	public function checkout()
	{
	    
	  if(webservice_key==$this->input->post('service_key'))
      {

	 $data['services']=$this->category_model->serviceslist();
     $service_Array = array();
      
     foreach($data['services'] as $cat)
		{
		$service_Array[$cat['service_id']]['service_id'] = urldecode($cat['service_id']);
		$service_Array[$cat['service_id']]['title'] = urldecode($cat['title']);
		$service_Array[$cat['service_id']]['type'] = urldecode($cat['type']);
		$service_Array[$cat['service_id']]['service_type'] = urldecode($cat['service_type']);
		$service_Array[$cat['service_id']]['sort_order'] = urldecode($cat['sort_order']);
		$service_Array[$cat['service_id']]['new'] = urldecode($cat['new']);
		$service_Array[$cat['service_id']]['image'] = urldecode($cat['image']);	
		}	

		$sliders['sliders']=$this->category_model->sliders();
		$sliders_array=array();


		foreach ($sliders['sliders'] as $slider) {
			$sliders_array[$slider['slider_id']]['title']=urldecode($slider['title']);
			$sliders_array[$slider['slider_id']]['image']=urldecode($slider['image']);
			$sliders_array[$slider['slider_id']]['alternate_text']=urldecode($slider['alternate_text']);
			$sliders_array[$slider['slider_id']]['url']=urldecode($slider['url']);
			$sliders_array[$slider['slider_id']]['sort_order'] = urldecode($slider['sort_order']);
			$sliders_array[$slider['slider_id']]['description'] = urldecode($slider['description']);
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
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>
		 $settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],
		 'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'],"gst"=>$settings['gst'] );
		 
		
		 $cart_prod=explode(',',$this->input->post('cart_prod_id'));
		 $cart_vendor=explode(',',$this->input->post('cart_vendor_id'));
		 $cart_service=explode(',',$this->input->post('cart_service_id'));
		 for($i=0;$i<count($cart_prod);$i++)
		 {
		    $charges1=$this->cart_model->charges1($cart_prod[$i]);
		    $v_add=$this->cart_model->find_v_address($cart_vendor[$i]);
		    $add_l=$this->cart_model->address_location($this->input->post('address_id'));
		    $serv1=$this->cart_model->getservice1($cart_service[$i]);
		    $addl_chs[$i]['adl_price']=urldecode($charges1['price_km']);
		    $addl_chs[$i]['prod_id']=urldecode($cart_prod[$i]);
		    $addl_chs[$i]['vendor_address']=urldecode($v_add['address']);
		    $addl_chs[$i]['user_address']=urldecode($add_l['address']);
		    $addl_chs[$i]['service_type']=urldecode($serv1['service_type']);
		    $addl_chs[$i]['allow_commision']=urldecode($serv1['allow_commision']);
		    
		 }
		 
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
		 
		$tot_arr = array("services" => $service_Array,"sliders"=>$sliders_array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>
		$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"addl_charges"=>$addl_chs,"service_menu"=>$servicemenu_array,
		"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Home Page", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}
	public function getservicen()
	{
	    $cpn=$this->cart_model->getservicen($this->input->post('service_id'));
	    $ser_ar=array("service_type"=>$cpn['service_type'],"commision_type"=>$cpn['commision_type'],"allow_commision"=>$cpn['allow_commision']
	    ,"commision_value"=>$cpn['commision_value']);
	   $tran_all = array("status" => 0, "message" => "Coupon Appllied ", "data" => $ser_ar);
	     echo json_encode($tran_all, JSON_UNESCAPED_SLASHES ); 
	    
	}
	public function coupon()
	{
	    
	  if(webservice_key==$this->input->post('service_key'))
      {
        $cpn=$this->cart_model->coupon($this->input->post('coupon'));
        
        
        if($cpn['offer_id']!="")
        {
           $today=date("Y-m-d");
          
           if($cpn['start_date']<=$today && $today<=$cpn['end_date'])
           {
               if($cpn['type']==1)
               {
                   $coupon_amount=$cpn['value'];
               } else {
                   $coupon_amount=($cpn['value']*$this->input->post('carttotal'))/100;
               }
         $tran_all = array("status" => 0, "message" => "Coupon Appllied ", "data" => $coupon_amount);
	     echo json_encode($tran_all, JSON_UNESCAPED_SLASHES ); 
               
           } else {
         $tran_all = array("status" => 0, "message" => "Coupon Expired", "data" => '');
	     echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );  
           }
            
        } else {
            
		$tran_all = array("status" => 0, "message" => "Invalid Coupon", "data" => '');
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES ); 
        }
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}
	
	public function placeorder()
	{
	  if(webservice_key==$this->input->post('service_key'))
      {
          
        $data=array("user_id"=>$this->input->post('user_id'),"address_id"=>$this->input->post('address_id'),"date_time"=>
        $this->input->post('date_time'),"total_amount"=>$this->input->post('total_amount'),"sub_total"=>$this->input->post('sub_total'),
        "additional_charges"=>$this->input->post('additional_charges'),"gst"=>$this->input->post('gst'),"coupon_amount"=>
        $this->input->post('coupon_amount'),"status"=>$this->input->post('status'),"payment_mode"=>$this->input->post('payment_mode'));
		$oid=$this->cart_model->order_insert($data);
		if($oid!=""){
		foreach($this->input->post('details') as $data){
				if($data['type']=="cake")
				{
				   $spec='Cake Type : '.$data['type_of_cake'].' <br>
				          Cake Weight : '.$data['weight_of_cake'].' <br>
				          Cake Flavour : '.$data['cake_favour'].' <br>
				          Message : '.$data['message'].'
				          '; 
				          	$data1=array("booking_id"=>$oid,"vendor_id"=>$data['vendor_id'],"product_id"=>$data['id'],"product_name"=>$data['name'],
				"price"=>$data['price'],"quantity"=>$data['qty'],"total_price"=>$data['subtotal'],"type"=>$data['type'],"product_image"=>
				$data['image'],"specifications"=>$spec);
				$id=$this->cart_model->ord_details($data1);
				} else if($data['type']!="") {
				    	$data2=array("booking_id"=>$oid,"vendor_id"=>$data['vendor_id'],"product_id"=>$data['id'],"product_name"=>$data['name'],
				"price"=>$data['price'],"quantity"=>$data['qty'],"total_price"=>$data['subtotal'],"type"=>$data['type'],"product_image"=>
				$data['image']);
		
				$id=$this->cart_model->ord_details($data2);
				
				} else {
				    	$data2=array("booking_id"=>$oid,"vendor_id"=>$data['vendor_id'],"product_id"=>$data['id'],"product_name"=>$data['name'],
				"price"=>$data['price'],"quantity"=>$data['qty'],"total_price"=>$data['subtotal'],"product_image"=>$data['image']);
				}
			
				
			}
		}
		
		$odata= $data=array("booking_id"=>$oid,"status"=>'Booked',"date_time"=>$this->input->post('date_time'));
		
		$odlogs=$this->cart_model->orderlogs($odata);
		
		 $tran_all = array("status" => 1, "message" => "Order Success","data"=>$oid);
		 echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
	}
	
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */