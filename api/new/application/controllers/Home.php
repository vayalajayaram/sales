<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

 	public function __construct()
	{//Core controller constructor
	    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->model('category_model');
		$this->load->model('products_model');		
		$this->load->model('user_model');
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
		
		$city=$this->input->post('city');
        $area=$this->input->post('area');
		$vendors=$this->category_model->vendorslist1($city,$area);
		 $vendor_array=array();
		foreach ($vendors as $prod) 
		{
			$vendor_array[$prod['vendor_id']]['vendor_id']=urldecode($prod['vendor_id']);
			$vendor_array[$prod['vendor_id']]['name']=urldecode($prod['company_name']);
			$vendor_array[$prod['vendor_id']]['service_id']=urldecode($prod['service_id']);
			$vendor_array[$prod['vendor_id']]['image']=urldecode($prod['photo']);
		}
		
		$homebanners=$this->category_model->homebanners();
		$hbanner=array();
		foreach($homebanners as $banner)
		{
		    $hbanner[$banner['banner_id']]['banner_id']=urldecode($banner['banner_id']);
		    $hbanner[$banner['banner_id']]['banner_image']=urldecode($banner['banner_image']);
		    $hbanner[$banner['banner_id']]['alt']=urldecode($banner['alt']);
		    $hbanner[$banner['banner_id']]['type']=urldecode($banner['type']);
		    $hbanner[$banner['banner_id']]['url']=urldecode($banner['url']);
		}
		
	    $popular_services1=$this->category_model->popular_services1();
        $sub_cat=array();
		foreach($popular_services1 as $ps1)
		{
		$popular_services=$this->category_model->popular_services($ps1['title']);
		$pservices=array();
		foreach($popular_services as $service)
		{
		 array_push($pservices, $service);
		}
		$ps1['categorieslevelone'] = $pservices;
        array_push($sub_cat, $ps1);    
		}
		
		
		$popular_products1=$this->category_model->popular_products1();
        $pp_cat=array();
		foreach($popular_products1 as $pp1)
		{
		$popular_products=$this->category_model->popular_products($pp1['title']);
		$pproducts=array();
		foreach($popular_products as $product)
		{
		 array_push($pproducts, $product);
		}
		$pp1['categorieslevelone'] = $pproducts;
        array_push($pp_cat, $pp1);    
		}
	
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>
		 $settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],
		 'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );

		 $tot_arr = array("services" => $service_Array,"sliders"=>$sliders_array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>
		 $data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"home_banners"=>$hbanner,"hp_services"=>$sub_cat,"hp_products"=>
		 $pp_cat,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Home Page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}
	
	public function services()
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
			$vendor_array[$prod['vendor_id']]['rating']=urldecode($prod['rating']);
		}
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>
		 $settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],
		 'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );
        
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

	$tot_arr = array("services" => $service_Array,"bm_services"=>$bms_array,"settings"=>$data['settings'],"vendors"=>$vendor_array,
	"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);
		$tran_all = array("status" => 1, "message" => "Services List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

	}
	
	public function settings()
	{
		
		 $settings=$this->category_model->settings();
		 $data= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],'phone2'=>
		 $settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],'facebook'=>$settings['facebook'],
		 'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],
		 'meta_title'=>$settings['meta_title'],'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],
		 "google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'],"gst"=>$settings['gst']);
		$tran_all = array("status" => 1, "message" => "Settings", "data" => $data);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
	}

	public function sliders()
	{
		$sliders['sliders']=$this->category_model->sliders();
		$sliders_array=array();


		foreach ($sliders['sliders'] as $slider) {
			$sliders_array[$slider['slider_id']]['title']=urldecode($slider['title']);
			$sliders_array[$slider['slider_id']]['image']=urldecode($slider['image']);
			$sliders_array[$slider['slider_id']]['alternate_text']=urldecode($slider['alternate_text']);
			$sliders_array[$slider['slider_id']]['url']=urldecode($slider['url']);
			$service_Array[$slider['slider_id']]['sort_order'] = urldecode($slider['sort_order']);
		}

		$tot_arr = array("sliders" => $sliders_array);
		$tran_all = array("status" => 1, "message" => "Sliders List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

	}

	public function special_products()
	{
      $fproducts=$this->category_model->special_products();
      
      $product_array=array();


		foreach ($fproducts as $prod) {
			$product_array[$prod['prod_id']]['title']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
		}

		$tot_arr = array("Special Products" => $product_array);
		$tran_all = array("status" => 1, "message" => "Special Products List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

	}


	public function feature_products()
	{
      $fproducts=$this->category_model->feature_products();
      
      $product_array=array();


		foreach ($fproducts as $prod) 
		{
			$product_array[$prod['prod_id']]['title']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
		}

		$tot_arr = array("Feature Products" => $product_array);
		$tran_all = array("status" => 1, "message" => "Feature Products List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

	}
	
	public function vendors()
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

		$service=$this->input->post('service');
        $city=$this->input->post('city');
        $area=$this->input->post('area');
		$vendors=$this->category_model->vendorslist($service,$city,$area);
		 $vendor_array=array();
		foreach ($vendors as $prod) 
		{
			$vendor_array[$prod['vendor_id']]['vendor_id']=urldecode($prod['vendor_id']);
			$vendor_array[$prod['vendor_id']]['name']=urldecode($prod['company_name']);
			$vendor_array[$prod['vendor_id']]['image']=urldecode($prod['photo']);
			$vendor_array[$prod['vendor_id']]['city']=urldecode($prod['city_id']);
			$vendor_array[$prod['vendor_id']]['area']=urldecode($prod['area_id']);
			$vendor_array[$prod['vendor_id']]['rating']=urldecode($prod['rating']);
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
		$vendors1=$this->category_model->vendorslist1($city,$area);
		$vendor_array1=array();
		foreach ($vendors1 as $prod) 
		{
			$vendor_array1[$prod['vendor_id']]['vendor_id']=urldecode($prod['vendor_id']);
			$vendor_array1[$prod['vendor_id']]['name']=urldecode($prod['company_name']);
			$vendor_array1[$prod['vendor_id']]['service_id']=urldecode($prod['service_id']);
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
		
		 $tot_arr = array("services" => $service_Array,"vendors1"=>$vendor_array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>
		 $data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array1,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Vendors page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }

	}    
       
	

    public function productlist()
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

	   $service=$this->input->post('service');
       $vendor=$this->input->post('vendor');
       
       $vbs1=$this->category_model->vendor_banners($vendor);       
        $venb_array=array();
		foreach ($vbs1 as $vbs) 
		{
		$venb_array[$vbs['banner_id']]['banner_id']=urldecode($vbs['banner_id']);
		$venb_array[$vbs['banner_id']]['image']=urldecode($vbs['image']);
			$venb_array[$vbs['banner_id']]['alt']=urldecode($vbs['alt']);
		$venb_array[$vbs['banner_id']]['sort_order']=urldecode($vbs['sort_order']);	
			
		}

       $products=$this->category_model->productlist($service,$vendor);
       
        $product_array=array();

		foreach ($products as $prod) 
		{
			$product_array[$prod['prod_id']]['prod_id']=urldecode($prod['prod_id']);
			$product_array[$prod['prod_id']]['name']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['image2']=urldecode($prod['image2']);
			$product_array[$prod['prod_id']]['image3']=urldecode($prod['image3']);
			$product_array[$prod['prod_id']]['image4']=urldecode($prod['image4']);
			$product_array[$prod['prod_id']]['image5']=urldecode($prod['image5']);
			$product_array[$prod['prod_id']]['availability']=urldecode($prod['availability']);
			$product_array[$prod['prod_id']]['description']=urldecode($prod['description']);
			$product_array[$prod['prod_id']]['rate_total']=urldecode($prod['rate_total']);
			$product_array[$prod['prod_id']]['rate_count']=urldecode($prod['rate_count']);
		    $product_array[$prod['prod_id']]['service_type']=urldecode($prod['service_type']);
		    $product_array[$prod['prod_id']]['type']=urldecode($prod['type']);
		    $product_array[$prod['prod_id']]['variation_title']=urldecode($prod['variation_title']);
		    $product_array[$prod['prod_id']]['variation_titlev2']=urldecode($prod['variation_titlev2']);
		    $product_array[$prod['prod_id']]['variation_titlev3']=urldecode($prod['variation_titlev3']);
		    $product_array[$prod['prod_id']]['variation_titlev4']=urldecode($prod['variation_titlev4']);
		    $product_array[$prod['prod_id']]['variation_titlev5']=urldecode($prod['variation_titlev5']);
		    $product_array[$prod['prod_id']]['allow_appointment']=urldecode($prod['allow_apointment']);
		}

	     $vendor=$this->category_model->vendordata($vendor);
	     
	     $data['vendor']= array('vendor_id' =>$vendor['vendor_id'],'vendor_cname' =>$vendor['company_name'],'vendor_pname'=>$vendor['contact_person'],'phone'=>$vendor['phone'],
	     'email'=>$vendor['email'],'city'=>$vendor['city_id'],'area'=>$vendor['area_id'],'image'=>$vendor['photo'],'rating'=>$vendor['rating']);
	     
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

		 $tot_arr = array("services" => $service_Array,"products"=>$product_array,"vendor_banners"=>$venb_array,"vendor"=>$data['vendor'],
		 "cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,
		 "service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "products page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }


	}
	
	public function productfilter()
	{

	if(webservice_key==$this->input->post('service_key'))
      {
     
	   $service=$this->input->post('service');
       $vendor=$this->input->post('vendor');
       $sort_order=$this->input->post('sort_order');
       $searchkey=$this->input->post('searchkey');
      
       $products=$this->category_model->productfilter($service,$vendor,$sort_order,$searchkey);
       
        $product_array=array();

		foreach ($products as $prod) 
		{
		    if($prod['rate_total']==0 || $prod['rate_total']==""){
		        $rate=0;
		    } else {
		    $rate=$prod['rate_total']/$prod['rate_count'];
		    }
			$product_array[$prod['prod_id']]['prod_id']=urldecode($prod['prod_id']);
			$product_array[$prod['prod_id']]['name']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['image2']=urldecode($prod['image2']);
			$product_array[$prod['prod_id']]['image3']=urldecode($prod['image3']);
			$product_array[$prod['prod_id']]['image4']=urldecode($prod['image4']);
			$product_array[$prod['prod_id']]['image5']=urldecode($prod['image5']);
			$product_array[$prod['prod_id']]['availability']=urldecode($prod['availability']);
			$product_array[$prod['prod_id']]['description']=urldecode($prod['description']);
			$product_array[$prod['prod_id']]['rate_total']=urldecode($prod['rate_total']);
			$product_array[$prod['prod_id']]['rate_count']=urldecode($prod['rate_count']);
			$product_array[$prod['prod_id']]['rating']=urldecode($rate);
		    $product_array[$prod['prod_id']]['service_type']=urldecode($prod['service_type']);
		    $product_array[$prod['prod_id']]['type']=urldecode($prod['type']);
		    $product_array[$prod['prod_id']]['allow_appointment']=urldecode($prod['allow_apointment']);
		}
	     

		$tot_arr = array("products"=>$product_array);
		$tran_all = array("status" => 1, "message" => "products page", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }


	}
	
	public function productlist1()
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

	  
       $vendor=$this->input->post('vendor');
       
       $vbs1=$this->category_model->vendor_banners($vendor);       
        $venb_array=array();
		foreach ($vbs1 as $vbs) 
		{
		$venb_array[$vbs['banner_id']]['banner_id']=urldecode($vbs['banner_id']);
		$venb_array[$vbs['banner_id']]['image']=urldecode($vbs['image']);
			$venb_array[$vbs['banner_id']]['alt']=urldecode($vbs['alt']);
		$venb_array[$vbs['banner_id']]['sort_order']=urldecode($vbs['sort_order']);	
			
		}

       $products=$this->category_model->productlist1($vendor);
       
        $product_array=array();

		foreach ($products as $prod) 
		{
			$product_array[$prod['prod_id']]['prod_id']=urldecode($prod['prod_id']);
			$product_array[$prod['prod_id']]['name']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['image2']=urldecode($prod['image2']);
			$product_array[$prod['prod_id']]['image3']=urldecode($prod['image3']);
			$product_array[$prod['prod_id']]['image4']=urldecode($prod['image4']);
			$product_array[$prod['prod_id']]['image5']=urldecode($prod['image5']);
			$product_array[$prod['prod_id']]['availability']=urldecode($prod['availability']);
			$product_array[$prod['prod_id']]['description']=urldecode($prod['description']);
			$product_array[$prod['prod_id']]['rate_total']=urldecode($prod['rate_total']);
			$product_array[$prod['prod_id']]['rate_count']=urldecode($prod['rate_count']);
			$product_array[$prod['prod_id']]['type']=urldecode($prod['type']);
		    $product_array[$prod['prod_id']]['allow_appointment']=urldecode($prod['allow_apointment']);
		    $product_array[$prod['prod_id']]['variation_title']=urldecode($prod['variation_title']);
		    $product_array[$prod['prod_id']]['variation_titlev2']=urldecode($prod['variation_titlev2']);
		    $product_array[$prod['prod_id']]['variation_titlev3']=urldecode($prod['variation_titlev3']);
		    $product_array[$prod['prod_id']]['variation_titlev4']=urldecode($prod['variation_titlev4']);
		    $product_array[$prod['prod_id']]['variation_titlev5']=urldecode($prod['variation_titlev5']);
		}

	     $vendor=$this->category_model->vendordata($vendor);
	     
	     $data['vendor']= array('vendor_id' =>$vendor['vendor_id'],'vendor_cname' =>$vendor['company_name'],'vendor_pname'=>$vendor['contact_person'],'phone'=>$vendor['phone'],
	     'email'=>$vendor['email'],'city'=>$vendor['city_id'],'area'=>$vendor['area_id'],'image'=>$vendor['photo'],'rating'=>$vendor['rating']);
	     
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

		 $tot_arr = array("services" => $service_Array,"products"=>$product_array,"vendor_banners"=>$venb_array,"vendor"=>$data['vendor'],
		 "cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,
		 "service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "products page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }


	}
	
	public function productfilter1()
	{

	if(webservice_key==$this->input->post('service_key'))
      {
     
	 
       $vendor=$this->input->post('vendor');
       $sort_order=$this->input->post('sort_order');
       $searchkey=$this->input->post('searchkey');
      
       $products=$this->category_model->productfilter1($vendor,$sort_order,$searchkey);
       
        $product_array=array();

		foreach ($products as $prod) 
		{
		    if($prod['rate_total']==0 || $prod['rate_total']==""){
		        $rate=0;
		    } else {
		    $rate=$prod['rate_total']/$prod['rate_count'];
		    }
			$product_array[$prod['prod_id']]['prod_id']=urldecode($prod['prod_id']);
			$product_array[$prod['prod_id']]['name']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['image2']=urldecode($prod['image2']);
			$product_array[$prod['prod_id']]['image3']=urldecode($prod['image3']);
			$product_array[$prod['prod_id']]['image4']=urldecode($prod['image4']);
			$product_array[$prod['prod_id']]['image5']=urldecode($prod['image5']);
			$product_array[$prod['prod_id']]['availability']=urldecode($prod['availability']);
			$product_array[$prod['prod_id']]['description']=urldecode($prod['description']);
			$product_array[$prod['prod_id']]['rate_total']=urldecode($prod['rate_total']);
			$product_array[$prod['prod_id']]['rate_count']=urldecode($prod['rate_count']);
			$product_array[$prod['prod_id']]['rating']=urldecode($rate);
			$product_array[$prod['prod_id']]['type']=urldecode($prod['type']);
		    $product_array[$prod['prod_id']]['allow_appointment']=urldecode($prod['allow_apointment']);
		}
	     

		$tot_arr = array("products"=>$product_array);
		$tran_all = array("status" => 1, "message" => "products page", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
        $tran_all = array("status" => 0, "message" => "authentication problem");
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }


	}
	
	public function productdetails()
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

	   $pid=$this->input->post('product_id');

		 $prod=$this->category_model->getproduct($pid);

		 $data['details']= array('prod_id'=>$prod['prod_id'],'service_id'=>$prod['service_id'],'name' =>$prod['title'],'price'=>
		 $prod['actual_price'],'discount_price'=>$prod['discount_price'],'image'=>$prod['image'],'image2'=>$prod['image2'],'image3'=>
		 $prod['image3'],'image4'=>$prod['image4'],'image5'=>$prod['image5'],'availability'=>$prod['availability'],'description'=>
		 $prod['description'],'tags'=>$prod['tags'],'vendor_name'=>$prod['company_name'],'vendor_email'=>$prod['email'],'vendor_phone'=>
		 $prod['phone'],'vendor_city'=>$prod['city_id'],'vendor_area'=>$prod['area_id'],'vendor_id'=>$prod['vendor_id'],'service_name'=>
		 $prod['service_name'],"pricename"=>$prod['p_pricename'],"specifname"=>$prod['p_specifname'],"variation_title"=>
		 $prod['variation_title'],"spname"=>$prod['p_spname'],"appointment_price"=>$prod['appointment_price']);
		 
		$reviews=$this->category_model->get_reviews($pid);       
        $review_array=array();
		foreach ($reviews as $review) 
		{
			$review_array[$review['review_id']]['review_id']=urldecode($review['review_id']);
			$review_array[$review['review_id']]['name']=urldecode($review['name']);
			$review_array[$review['review_id']]['review']=urldecode($review['review']);
			$review_array[$review['review_id']]['rating']=urldecode($review['rating']);
			$review_array[$review['review_id']]['date']=urldecode($review['date_time']);
		
		}
		
		$rate=$this->category_model->prate($pid);
		
		$rating=array("rate_total"=>$rate['rate_total'],"rate_count"=>$rate['rate_count']);
		
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
		   $service=str_replace(" ","-",$data['details']['service_name']);
		   $vendor=str_replace(" ","-",$data['details']['vendor_name']);
		   $relatedproducts=$this->category_model->relatedproducts($service,$vendor,$pid);
		   
		 $product_array=array();

		foreach ($relatedproducts as $prod) 
		{
			$product_array[$prod['prod_id']]['prod_id']=urldecode($prod['prod_id']);
			$product_array[$prod['prod_id']]['name']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['image2']=urldecode($prod['image2']);
			$product_array[$prod['prod_id']]['image3']=urldecode($prod['image3']);
			$product_array[$prod['prod_id']]['image4']=urldecode($prod['image4']);
			$product_array[$prod['prod_id']]['image5']=urldecode($prod['image5']);
			$product_array[$prod['prod_id']]['availability']=urldecode($prod['availability']);
			$product_array[$prod['prod_id']]['description']=urldecode($prod['description']);
			$product_array[$prod['prod_id']]['rate_total']=urldecode($prod['rate_total']);
			$product_array[$prod['prod_id']]['rate_count']=urldecode($prod['rate_count']);
			$product_array[$prod['prod_id']]['type']=urldecode($prod['type']);
		    $product_array[$prod['prod_id']]['allow_appointment']=urldecode($prod['allow_apointment']);
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

		 $tot_arr = array("services" => $service_Array,"product_details"=>$data['details'],"cities"=>$city_array,"product_reviews"=>
		 $review_array,"rating"=>$rating,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"relatedproducts"=>$product_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "product Details page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }	

	}
	
	public function cakedetails()
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

	   $pid=$this->input->post('product_id');

		 $prod=$this->category_model->getproduct($pid);

		 $data['details']= array('prod_id'=>$prod['prod_id'],'service_id'=>$prod['service_id'],'name' =>$prod['title'],'price'=>
		 $prod['actual_price'],'discount_price'=>$prod['discount_price'],'image'=>$prod['image'],'image2'=>$prod['image2'],'image3'=>
		 $prod['image3'],'image4'=>$prod['image4'],'image5'=>$prod['image5'],'availability'=>$prod['availability'],'description'=>
		 $prod['description'],'tags'=>$prod['tags'],'vendor_name'=>$prod['company_name'],'vendor_email'=>$prod['email'],'vendor_phone'=>
		 $prod['phone'],'vendor_city'=>$prod['city_id'],'vendor_area'=>$prod['area_id'],'vendor_id'=>$prod['vendor_id'],'service_name'=>
		 $prod['service_name'],"specifname"=>$prod['p_specifname'],"spname"=>$prod['p_spname'],"appointment_price"=>
		 $prod['appointment_price'],"variation_heading"=>$prod['p_pricename'],"variation_title"=>$prod['variation_title'],"variation_price"=>
		 $prod['variation_price'],"variation_heading2"=>$prod['variationv2'],"variation_titlev2"=>
		 $prod['variation_titlev2'],"variation_price2"=>$prod['variation_pricev2'],"variation_heading3"=>$prod['variationv3'],"variation_titlev3"=>
		 $prod['variation_titlev3'],"variation_price3"=>$prod['variation_pricev3'],"variation_heading4"=>$prod['variationv4'],"variation_titlev4"=>
		 $prod['variation_titlev4'],"variation_price4"=>$prod['variation_pricev4'],"variation_heading5"=>$prod['variationv5'],"variation_titlev5"=>
		 $prod['variation_titlev5'],"variation_price5"=>$prod['variation_pricev5']);
		 
		$reviews=$this->category_model->get_reviews($pid);       
        $review_array=array();
		foreach ($reviews as $review) 
		{
			$review_array[$review['review_id']]['review_id']=urldecode($review['review_id']);
			$review_array[$review['review_id']]['name']=urldecode($review['name']);
			$review_array[$review['review_id']]['review']=urldecode($review['review']);
			$review_array[$review['review_id']]['rating']=urldecode($review['rating']);
			$review_array[$review['review_id']]['date']=urldecode($review['date_time']);
		
		}
		
		$rate=$this->category_model->prate($pid);
		
		$rating=array("rate_total"=>$rate['rate_total'],"rate_count"=>$rate['rate_count']);
		
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
		   $service=str_replace(" ","-",$data['details']['service_name']);
		   $vendor=str_replace(" ","-",$data['details']['vendor_name']);
		   $relatedproducts=$this->category_model->relatedproducts($service,$vendor,$pid);
		   
		 $product_array=array();

		foreach ($relatedproducts as $prod) 
		{
			$product_array[$prod['prod_id']]['prod_id']=urldecode($prod['prod_id']);
			$product_array[$prod['prod_id']]['name']=urldecode($prod['title']);
			$product_array[$prod['prod_id']]['price']=urldecode($prod['actual_price']);
			$product_array[$prod['prod_id']]['discount_price']=urldecode($prod['discount_price']);
			$product_array[$prod['prod_id']]['image']=urldecode($prod['image']);
			$product_array[$prod['prod_id']]['image2']=urldecode($prod['image2']);
			$product_array[$prod['prod_id']]['image3']=urldecode($prod['image3']);
			$product_array[$prod['prod_id']]['image4']=urldecode($prod['image4']);
			$product_array[$prod['prod_id']]['image5']=urldecode($prod['image5']);
			$product_array[$prod['prod_id']]['availability']=urldecode($prod['availability']);
			$product_array[$prod['prod_id']]['description']=urldecode($prod['description']);
			$product_array[$prod['prod_id']]['rate_total']=urldecode($prod['rate_total']);
			$product_array[$prod['prod_id']]['rate_count']=urldecode($prod['rate_count']);
			$product_array[$prod['prod_id']]['type']=urldecode($prod['type']);
		    $product_array[$prod['prod_id']]['allow_appointment']=urldecode($prod['allow_apointment']);
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

		 $tot_arr = array("services" => $service_Array,"product_details"=>$data['details'],"cities"=>$city_array,"product_reviews"=>
		 $review_array,"rating"=>$rating,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"=>$bms_array,"vendors"=>
		 $vendor_array,"relatedproducts"=>$product_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "product Details page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }	

	}
	
	public function product_reviews()
	{		
		

	 if(webservice_key==$this->input->post('service_key'))
      {
			$values=array("product_id"=>$this->input->post('product_id'),"user_id"=>$this->input->post('user_id'),"name"=>
			$this->input->post('name'),"review"=>$this->input->post('review'),"rating"=>$this->input->post('score'),"date_time"=>$this->input->post('date'));
			
				$id=$this->category_model->addreview($values);

        if($id==NULL)
        {
            	$tran_all = array("status" => 0, "message" => "Add Review not success");
        } else {
		$tran_all = array("status" => 1, "message" => "Add Review Success");
        }
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }	

	}

    public function cart()
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

	  

       
	    $uid=$this->input->post('user_id');
    	$session_id=$this->input->post('session_id');

    	$carts=$this->category_model->cart($uid,$session_id);
       
    	 $cart_array1=array();

		foreach ($carts as $cart1) 
		{
			$cart_array1[$cart1['cart_id']]['prod_id']=urldecode($cart1['prod_id']);
			$cart_array1[$cart1['cart_id']]['product_name']=urldecode($cart1['product_name']);
			$cart_array1[$cart1['cart_id']]['price']=urldecode($cart1['price']);
			$cart_array1[$cart1['cart_id']]['quantity']=urldecode($cart1['quantity']);
			$cart_array1[$cart1['cart_id']]['total_price']=urldecode($cart1['total_price']);
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

		 $tot_arr = array("services" => $service_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],
		 "bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array);

		$tran_all = array("status" => 1, "message" => "products page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
    

	
    }

    public function addtocart()
    {
    	if($this->input->post('prod_id')!="")
    	{
    		$data=array("user_id"=>$this->input->post('user_id'),"session_id"=>$this->input->post('session_id'),"prod_id"=>
    		$this->input->post('prod_id'),"product_name"=>$this->input->post('product_name'),"price"=>$this->input->post('price'),
    		"quantity"=>$this->input->post('quantity'),"total_price"=>$this->input->post('total_price'),"date_time"=>$this->input->post('date_time'));
    		$cart=$this->category_model->addtocart($data);

    	$tran_all = array("status" => 1, "message" => "Cart Update successfully", "data" => $data);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );		

    	} else {

        $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

    	}
    }

    public function checkout()
    {
    	if($this->input->post('user_id')!="")
    	{
    	$uid=$this->input->post('user_id');
    	

    	$carts=$this->category_model->checkout($uid);
       
    	 $cart_array1=array();

		foreach ($carts as $cart1) 
		{
			$cart_array1[$cart1['cart_id']]['prod_id']=urldecode($cart1['prod_id']);
			$cart_array1[$cart1['cart_id']]['product_name']=urldecode($cart1['product_name']);
			$cart_array1[$cart1['cart_id']]['price']=urldecode($cart1['price']);
			$cart_array1[$cart1['cart_id']]['quantity']=urldecode($cart1['quantity']);
			$cart_array1[$cart1['cart_id']]['total_price']=urldecode($cart1['total_price']);
		}

		$tot_arr = array("Checkout" => $cart_array1);
		$tran_all = array("status" => 1, "message" => "Checkout List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

    	} else {

        $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

    	}
    }

    public function placeorder()
    {
    	if($this->input->post('total_amount')!="" && $this->input->post('user_id')!="")
    	{

    		$data=array("user_id"=>$this->input->post('user_id'),"booking_type"=>$this->input->post('booking_type'),"total_amount"=>
    		$this->input->post('total_amount'),"sub_total"=>$this->input->post('sub_total'),"additional_charges"=>
    		$this->input->post('additional_charges'),"gst"=>$this->input->post('gst'),"status"=>$this->input->post('status'),
    		"date_time"=>$this->input->post('date_time'));
    		$order=$this->category_model->placeorder($data);



    	$tran_all = array("status" => 1, "message" => "Booking successfully", "data" => '');
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );		

    	} else {

        $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );

    	}
    }

    public function prod_reviews()
    {
    	if($this->input->post('product_id')!=""){
			$data=array("product_id"=>$this->input->post('product_id'),"name"=>$this->input->post('name'),"review"=>
			$this->input->post('review'),"rating"=>$this->input->post('rating'));

		  $refer=$this->category_model->prod_reviews($data);	

		  $tran_all = array("status" => 1, "message" => "Product Review Successfull", "data" => '');
		  echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );	
			
		} else {
		
		    $tran_all = array("status" => 0, "message" => "Post value authentication problem", "data" => '');
	        echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		}
    }


    public function city()
	{      

       $products=$this->category_model->cityist();       
        $product_array=array();
		foreach ($products as $prod) 
		{
			$product_array[$prod['city_id']]['city_id']=urldecode($prod['city_id']);
			$product_array[$prod['city_id']]['city_name']=urldecode($prod['city_name']);
			$product_array[$prod['city_id']]['sort_order']=urldecode($prod['sort_order']);
				$product_array[$prod['city_id']]['image']=urldecode($prod['city_image']);
			
		}

		$tot_arr = array("Cities" => $product_array);
		$tran_all = array("status" => 1, "message" => "Cities List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	}
	

	public function area()
	{      

       $products=$this->category_model->areaist();       
        $product_array=array();
		foreach ($products as $prod) 
		{
			$product_array[$prod['area_id']]['area_id']=urldecode($prod['area_id']);
			$product_array[$prod['area_id']]['city_id']=urldecode($prod['city_id']);
			$product_array[$prod['area_id']]['area_name']=urldecode($prod['area_name']);
			$product_array[$prod['area_id']]['sort_order']=urldecode($prod['sort_order']);
			$product_array[$prod['area_id']]['langlat']=urldecode($prod['area_lg_lt']);
			$product_array[$prod['area_id']]['category']=urldecode($prod['category']);
		}

		$tot_arr = array("Areas" => $product_array);
		$tran_all = array("status" => 1, "message" => "Areas List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	}

	public function getarea()
	{      
       $city_id=$this->input->post('city_id');
      
       $products=$this->category_model->getarea($city_id);     
     
        $product_array=array();
		foreach ($products as $prod) 
		{
			$product_array[$prod['area_id']]['area_id']=urldecode($prod['area_id']);
			$product_array[$prod['area_id']]['city_id']=urldecode($prod['city_id']);
			$product_array[$prod['area_id']]['area_name']=urldecode($prod['area_name']);
			$product_array[$prod['area_id']]['sort_order']=urldecode($prod['sort_order']);
			$product_array[$prod['area_id']]['langlat']=urldecode($prod['area_lg_lt']);
			$product_array[$prod['area_id']]['category']=urldecode($prod['category']);
		}

		$tot_arr = array("Areas" => $product_array);
		$tran_all = array("status" => 1, "message" => "Areas List ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	}
	
	public function specialoffers()
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

		$data['specialoffers']=$this->category_model->specialoffers();
        $spoff_Array = array();
      
        foreach($data['specialoffers'] as $cat)
		{
		$spoff_Array[$cat['offer_id']]['offer_id'] = urldecode($cat['offer_id']);
		$spoff_Array[$cat['offer_id']]['offer_name'] = urldecode($cat['offer_name']);
		$spoff_Array[$cat['offer_id']]['coupan_code'] = urldecode($cat['coupan_code']);
		$spoff_Array[$cat['offer_id']]['start_date'] = urldecode($cat['start_date']);
		$spoff_Array[$cat['offer_id']]['end_date'] = urldecode($cat['end_date']);
		$spoff_Array[$cat['offer_id']]['description'] = urldecode($cat['description']);
		$spoff_Array[$cat['offer_id']]['image'] = urldecode($cat['image']);
		$spoff_Array[$cat['offer_id']]['type'] = urldecode($cat['type']);
		$spoff_Array[$cat['offer_id']]['value'] = urldecode($cat['value']);	
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
		 $settings['meta_description'],"google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'],"gst"=>
		 $settings['gst']);
		 
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

		 $tot_arr = array("services" => $service_Array,"specialoffers"=>$spoff_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"
		 =>$data['settings'],"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>
		 $shopmenu_array);

		$tran_all = array("status" => 1, "message" => "special offers page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
	}
	
	
	public function partner_with_us()
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
	  
       $result = $this->user_model->sliderslog(4);
       $slider_Array = array();      
       foreach($result as $cat)
       {
       $slider_Array[$cat['sliderlog_id']]['slider_id'] = urldecode($cat['sliderlog_id']);
       $slider_Array[$cat['sliderlog_id']]['title'] = urldecode($cat['title']);
       $slider_Array[$cat['sliderlog_id']]['alt'] = urldecode($cat['alt']);
       $slider_Array[$cat['sliderlog_id']]['sort_order'] = urldecode($cat['sort_order']);  
       $slider_Array[$cat['sliderlog_id']]['image'] = urldecode($cat['image']); 
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

		 $tot_arr = array("services" => $service_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],
		 "sliders"=>$slider_Array,"bm_services"=>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>
		 $shopmenu_array);

		$tran_all = array("status" => 1, "message" => "Partner With Us", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
	}
	
	
	public function pwu_submit()
	{

		if(webservice_key==$this->input->post('service_key'))
		{ 
			
		    if($_POST['image']!="")
			{
				$data=array("refference_code"=>$this->input->post('refference_code'),"company_name"=>$this->input->post('company_name'),
				"person_name"=>$this->input->post('person_name'),"phone"=>$this->input->post('phone'),"services"=>
				$this->input->post('services'),"password"=>$this->input->post('password'),"cities"=>$this->input->post('cities'),"image"=>
				$this->input->post('image'));
			} else {
				$data=array("refference_code"=>$this->input->post('refference_code'),"company_name"=>$this->input->post('company_name'),
				"person_name"=>$this->input->post('person_name'),"phone"=>$this->input->post('phone'),"services"=>
				$this->input->post('services'),"password"=>$this->input->post('password'),"cities"=>$this->input->post('cities'));
			}	
			$id=$this->category_model->partner_insert($data);	
	    if($id!="")	
	    {
		$tran_all = array("status" => 1, "message" => "Partner Insert Successfull");
	    } else {
	        	$tran_all = array("status" => 0, "message" => "Partner Insert Successfull");
	    }
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );		
			
			
		} else {

	    $tran_all = array("status" => 0, "message" => "Authentication Problem", "data" => '');

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	      
		}
	}
	
	
	public function bmservices()
	{      

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

		$tot_arr = array("bm_services" => $bms_array);
		$tran_all = array("status" => 1, "message" => "Bolo Mitrama Delivery ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	}
	
	
	public function trackorder()
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
		
		
		
		
	    $popular_services1=$this->category_model->popular_services1();
        $sub_cat=array();
		foreach($popular_services1 as $ps1)
		{
		$popular_services=$this->category_model->popular_services($ps1['title']);
		$pservices=array();
		foreach($popular_services as $service)
		{
		 array_push($pservices, $service);
		}
		$ps1['categorieslevelone'] = $pservices;
        array_push($sub_cat, $ps1);    
		}
		
		
		$popular_products1=$this->category_model->popular_products1();
        $pp_cat=array();
		foreach($popular_products1 as $pp1)
		{
		$popular_products=$this->category_model->popular_products($pp1['title']);
		$pproducts=array();
		foreach($popular_products as $product)
		{
		 array_push($pproducts, $product);
		}
		$pp1['categorieslevelone'] = $pproducts;
        array_push($pp_cat, $pp1);    
		}
		
		$trackorder=$this->category_model->trackorder($this->input->post('order_id'),$this->input->post('email'));       
       if($trackorder!=0){
           $trackord_array=array();
	       foreach ($trackorder as $tcord) 
	       {
		     $trackord_array[$tcord['orderlogs_id']]['orderlogs_id']=urldecode($tcord['orderlogs_id']);
		     $trackord_array[$tcord['orderlogs_id']]['date_time']=urldecode($tcord['date_time']);
		     $trackord_array[$tcord['orderlogs_id']]['status']=urldecode($tcord['status']);
		
	       }
	      } else {
	          $trackord_array=0; 
	      }
		
		 $settings=$this->category_model->settings();
		 $data['settings']= array('website_name' =>$settings['website_name'],'email'=>$settings['email'],'phone1'=>$settings['phone1'],
		 'phone2'=>$settings['phone2'],'whatsapp'=>$settings['whatsapp'],'footer_title'=>$settings['footer_title'],
		 'facebook'=>$settings['facebook'],'twitter'=>$settings['twitter'],'google_plus'=>$settings['google_plus'],
		 'pintrest'=>$settings['pintrest'],'logo'=>$settings['logo'],'meta_title'=>$settings['meta_title'],
		 'meta_keywords'=>$settings['meta_keywords'],'meta_description'=>$settings['meta_description'],
		 "google_analytics"=>$settings['google_analytics'],"conical"=>$settings['conical'] );

		 $tot_arr = array("services" => $service_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],
		 "bm_services"=>$bms_array,"hp_services"=>$sub_cat,"hp_products"=>$pp_cat,"service_menu"=>$servicemenu_array,
		 "shop_menu"=>$shopmenu_array,"track_order"=>$trackord_array);

		$tran_all = array("status" => 1, "message" => "Track Order Page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }
      
	}
	
	public function refer_friend()
	{
	    if(webservice_key==$this->input->post('service_key'))
        {
	    $data=array("user_id"=>$this->input->post('user_id'),"code"=>$this->input->post('code'),"name"=>$this->input->post('name'),"email"=>
	    $this->input->post('email'));
	    $result=$this->category_model->refer_friend($data);
        }
	}
	
	public function refer_vendor()
	{
	    if(webservice_key==$this->input->post('service_key'))
        {
	    $data=array("user_id"=>$this->input->post('user_id'),"code"=>$this->input->post('code'),"name"=>$this->input->post('name'),"email"=>
	    $this->input->post('email'));
	    $result=$this->category_model->refer_vendor($data);
        }
	}
	
	
	public function checkrcode()
	{
	    $checkcode=$this->category_model->checkrcode($this->input->post('code'));
	    $tran_all = array("status" => 1, "message" => "Refer Friend", "data" => $checkcode);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	}
	
	public function wallet()
	{
	    $wdata=array("user_id"=>$this->input->post('user_id'),"type"=>'credit',"transection"=>$this->input->post('transection'),"date_time"=>
	    $this->input->post('date_time'),"amount"=>$this->input->post('amount'));
	    $checkcode=$this->category_model->wallet_register($wdata);
	
	}
	
	public function gifts()
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

	   $service=$this->input->post('service');
       $vendor=$this->input->post('vendor');
       

	    
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
		
		$gifts=$this->category_model->giftslist($this->input->post('vendor_id'));
		$gifts_array=array();
		foreach ($gifts as $prod) 
		{
			$gifts_array[$prod['giftprod_id']]['giftprod_id']=urldecode($prod['giftprod_id']);
			$gifts_array[$prod['giftprod_id']]['title']=urldecode($prod['title']);
			$gifts_array[$prod['giftprod_id']]['price']=urldecode($prod['actual_price']);
			$gifts_array[$prod['giftprod_id']]['discount_price']=urldecode($prod['discount_price']);
			$gifts_array[$prod['giftprod_id']]['image']=urldecode($prod['image']);
			$gifts_array[$prod['giftprod_id']]['availability']=urldecode($prod['availability']);
			$gifts_array[$prod['giftprod_id']]['description']=urldecode($prod['description']);
			$gifts_array[$prod['giftprod_id']]['stock']=urldecode($prod['stock']);
			$gifts_array[$prod['giftprod_id']]['vendor_id']=urldecode($prod['vendor_id']);
		}

		 $tot_arr = array("services" => $service_Array,"cities"=>$city_array,"areas"=>$area_array,"settings"=>$data['settings'],"bm_services"
		 =>$bms_array,"vendors"=>$vendor_array,"service_menu"=>$servicemenu_array,"shop_menu"=>$shopmenu_array,"gifts"=>$gifts_array);

		$tran_all = array("status" => 1, "message" => "products page", "data" => $tot_arr);

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
		
      } else {
          
         $tran_all = array("status" => 0, "message" => "authentication problem");

		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
      }


	}
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */