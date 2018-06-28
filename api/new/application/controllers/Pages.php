<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

 	public function __construct()
	{//Core controller constructor
	    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('cart');
	
		$this->load->model('pages_model');
		$this->load->model('category_model');
		
	}
	public function index()
	{   

	   //$this->pages_model->getdata();  
		
	}
	
	public function about_us()
	{
	    
	  if(webservice_key==$this->input->post('service_key'))
      {
			
		$page=$this->pages_model->getdata('1');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
	
		$page=$this->pages_model->getteams();
		$team_array=array();
		foreach ($page as $prod) 
		{
		 $team_array[$prod['team_id']]['team_id']=urldecode($prod['team_id']);
		 $team_array[$prod['team_id']]['title']=urldecode($prod['title']);
			$team_array[$prod['team_id']]['image']=urldecode($prod['image']);
			$team_array[$prod['team_id']]['name']=urldecode($prod['name']);
			$team_array[$prod['team_id']]['designation']=urldecode($prod['designation']);
			$team_array[$prod['team_id']]['content']=urldecode($prod['content']);
			$team_array[$prod['team_id']]['facebook']=urldecode($prod['facebook']);
			$team_array[$prod['team_id']]['twitter']=urldecode($prod['twitter']);
			$team_array[$prod['team_id']]['google']=urldecode($prod['google']);
			$team_array[$prod['team_id']]['rss']=urldecode($prod['rss']);
			$team_array[$prod['team_id']]['sort_order']=urldecode($prod['sort_order']);
		
		}
		
		$page=$this->pages_model->testimonials();
		$tes_array=array();
		foreach ($page as $prod) 
		{
			$tes_array[$prod['testimonial_id']]['testimonial_id']=urldecode($prod['testimonial_id']);
			$tes_array[$prod['testimonial_id']]['name']=urldecode($prod['testimonial_name']);
			$tes_array[$prod['testimonial_id']]['designation']=urldecode($prod['testimonial_desg']);
			$tes_array[$prod['testimonial_id']]['description']=urldecode($prod['testimonial_desc']);		
			$tes_array[$prod['testimonial_id']]['sort_order']=urldecode($prod['sort_order']);
		}
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"teams"=>$team_array,"testimonials"=>$tes_array,"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "About Us", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
		
	}
	
	public function privacy_policy()
	{
		
	if(webservice_key==$this->input->post('service_key'))
      {
			
		 $page=$this->pages_model->getdata('4');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Privacy Policy", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
	}
	
	
    public function terms_and_conditions()
	{
		
	if(webservice_key==$this->input->post('service_key'))
      {
			
		 $page=$this->pages_model->getdata('3');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Terms and Conditions", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}

public function how_it_works()
	{
	if(webservice_key==$this->input->post('service_key'))
      {
			
		 $page=$this->pages_model->getdata('2');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		
		$page=$this->pages_model->howitwork();       
		$faq_array=array();

		foreach ($page as $prod) 
		{
			$faq_array[$prod['howit_id']]['id']=urldecode($prod['howit_id']);
			$faq_array[$prod['howit_id']]['title']=urldecode($prod['title']);
			$faq_array[$prod['howit_id']]['image']=urldecode($prod['image']);
			$faq_array[$prod['howit_id']]['description']=urldecode($prod['description']);	
			$faq_array[$prod['howit_id']]['alternate_text']=urldecode($prod['alternate_text']);	
			$faq_array[$prod['howit_id']]['type']=urldecode($prod['type']);		
			$faq_array[$prod['howit_id']]['sort_order']=urldecode($prod['sort_order']);
		
		}

		$page1=$this->pages_model->hsteps();       
		$faq_array1=array();

		foreach ($page1 as $prod1) 
		{
			$faq_array1[$prod1['steps_id']]['id']=urldecode($prod1['steps_id']);
			$faq_array1[$prod1['steps_id']]['title']=urldecode($prod1['title']);
			$faq_array1[$prod1['steps_id']]['image']=urldecode($prod1['image']);
			$faq_array1[$prod1['steps_id']]['url']=urldecode($prod1['url']);				
			$faq_array1[$prod1['steps_id']]['sort_order']=urldecode($prod1['sort_order']);
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"how_it_works" => $faq_array,"steps"=>$faq_array1,"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "how it works", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
		
		
	


	}

	public function refund_policy()
	{
	    
	    
	  if(webservice_key==$this->input->post('service_key'))
      {
			
		 $page=$this->pages_model->getdata('5');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Refund Policy", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
		
	
	}
	



	public function contact_us()
	{
		
	
		
		 if(webservice_key==$this->input->post('service_key'))
      {
			
		 $page=$this->pages_model->getdata('6');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Contact Us", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
		
		
	}
	
	
	
	public function faqs()
	{
		
	   if(webservice_key==$this->input->post('service_key'))
       {
			
		 $page=$this->pages_model->getdata('7');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		
		$page=$this->pages_model->getfaqs();
       
		$faq_array=array();

		foreach ($page as $prod) 
		{
			$faq_array[$prod['f_id']]['f_id']=urldecode($prod['f_id']);
			$faq_array[$prod['f_id']]['question']=urldecode($prod['question']);
			$faq_array[$prod['f_id']]['answer']=urldecode($prod['answer']);
			$faq_array[$prod['f_id']]['sort_order']=urldecode($prod['sort_order']);
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"faqs"=>$faq_array,"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Faqs", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }

	}
		
	public function blog()
	{
	    
	   if(webservice_key==$this->input->post('service_key'))
       {
			
		 $page=$this->pages_model->getdata('8');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		
	   $blog=$this->pages_model->getblogs();
       $blog_array=array();

		foreach ($blog as $prod) 
		{
			$blog_array[$prod['blog_id']]['blog_id']=urldecode($prod['blog_id']);
			$blog_array[$prod['blog_id']]['title']=urldecode($prod['title']);
			$blog_array[$prod['blog_id']]['description']=urldecode($prod['content']);
			$blog_array[$prod['blog_id']]['image']=urldecode($prod['image']);
			$blog_array[$prod['blog_id']]['date']=urldecode($prod['date_time']);
			$blog_array[$prod['blog_id']]['posted_by']=urldecode($prod['posted_by']);
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"blog"=>$blog_array,"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Blog Page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
	  
      
	} 

	public function blogdetails()
	{
	    
	    
	    if(webservice_key==$this->input->post('service_key'))
       {
			
		 $page=$this->pages_model->getdata('8');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
	    
		 $user=$this->pages_model->blogdetails($this->input->post('blog_id'));
		
		    $data['blog_details']=array('title' =>$user['title'],'content'=>$user['content'],'image'=>$user['image'],'date_time'=>$user['date_time'],'posted_by'=>$user['posted_by']);
		    
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
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"blog_details"=>$data['blog_details'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
	
	
		$tran_all = array("status" => 1, "message" => "Blog Details", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }

        

	}
	
	
	public function teams()
	{
		
		$page=$this->pages_model->getteams();
        //print_r($page); exit;
		$faq_array=array();

		foreach ($page as $prod) 
		{
			$faq_array[$prod['team_id']]['team_id']=urldecode($prod['team_id']);
			$faq_array[$prod['team_id']]['title']=urldecode($prod['title']);
			$faq_array[$prod['team_id']]['image']=urldecode($prod['image']);
			$faq_array[$prod['team_id']]['name']=urldecode($prod['name']);
			$faq_array[$prod['team_id']]['designation']=urldecode($prod['designation']);
			$faq_array[$prod['team_id']]['content']=urldecode($prod['content']);
			$faq_array[$prod['team_id']]['facebook']=urldecode($prod['facebook']);
			$faq_array[$prod['team_id']]['twitter']=urldecode($prod['twitter']);
			$faq_array[$prod['team_id']]['google']=urldecode($prod['google']);
			$faq_array[$prod['team_id']]['rss']=urldecode($prod['rss']);
			$faq_array[$prod['team_id']]['sort_order']=urldecode($prod['sort_order']);
		
		}

		$tot_arr = array("Teams" => $faq_array);
		$tran_all = array("status" => 1, "message" => "Teams List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

	}
	
	
	public function testimonials()
	{
		
		$page=$this->pages_model->testimonials();
        //print_r($page); exit;
		$faq_array=array();

		foreach ($page as $prod) 
		{
			$faq_array[$prod['testimonial_id']]['testimonial_id']=urldecode($prod['testimonial_id']);
			$faq_array[$prod['testimonial_id']]['name']=urldecode($prod['testimonial_name']);
			$faq_array[$prod['testimonial_id']]['designation']=urldecode($prod['testimonial_desg']);
			$faq_array[$prod['testimonial_id']]['description']=urldecode($prod['testimonial_desc']);		
			$faq_array[$prod['testimonial_id']]['sort_order']=urldecode($prod['sort_order']);
		
		}

		$tot_arr = array("Testimonials" => $faq_array);
		$tran_all = array("status" => 1, "message" => "Testimonials List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

	}
	
	
	public function order_food()
	{
		
	if(webservice_key==$this->input->post('service_key'))
      {
			
		 $page=$this->pages_model->getdata('3');
		 $data['page']=array('name' =>$page['title'],'description'=>$page['content'],'meta_title'=>$page['meta_title'],'meta_keywords'=>$page['meta_keywords'],'meta_description'=>$page['meta_description'],"image"=>$page['extra']);
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
		 
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
		
		$item_types=$this->category_model->item_type();
		$item_array=array();
		foreach ($item_types as $type) 
		{
			$item_array[$type['item_id']]['item_id']=urldecode($type['item_id']);
			$item_array[$type['item_id']]['name']=urldecode($type['name']);
		}
		 
		  $tot_arr = array("services" => $service_Array,"page"=>$data['page'],"cities"=>$city_array,"areas"=>$area_array,"settings"=>
		  $data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>
		  $shopmenu_array,"items"=>$item_array);
	
	
		$tran_all = array("status" => 1, "message" => "Terms and Conditions", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}

     public function delivery_category()
     {  
         $d_cat=$this->category_model->delivery_category($this->input->post('item_type'));
         $dcat_array=array();
         foreach ($d_cat as $type) 
		{
			$dcat_array[$type['cat_id']]['cat_id']=urldecode($type['cat_id']);
			$dcat_array[$type['cat_id']]['title']=urldecode($type['title']);
			$dcat_array[$type['cat_id']]['price_km']=urldecode($type['price_km']);
		}
		$tran_all = array( "del_cat"=>$dcat_array);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
     }

	}
	
			
	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */