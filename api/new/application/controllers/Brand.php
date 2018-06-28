<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand extends CI_Controller {

 	public function __construct()
	{//Core controller constructor
	    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('cart');

	}
	
	public function index()
	{       
		//$this->load->view('about_us');

		$address = 'Ameerpet, Hyderabad, Telangana, India';
        $latLong = $this->getLatLong($address);
        print_r($latLong);
	}
	
	public function view($name)
	{
		$brandname=str_replace("-"," ",$name);
		$data['categories']=$this->category_model->catlist();
		$data['footercategories']=$this->category_model->fcatlist();
		$data['products']=$this->products_model->brandprodlist($brandname);
		$data['footerbrands']=$this->brands_model->fbrandslist();
		$data['settings']=$this->settings_model->getsettings();
		$data['brand_name']=$brandname;
		$data['profile']=$this->user_model->getprofile($this->session->userdata('user_id'));
		$data['searchproducts']=$this->products_model->searchproducts();
		$data['flinks']=$this->settings_model->flinks();
		$this->load->view('brand-products',$data);
	}

	function getLatLong($address){
    if(!empty($address)){
        //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $data['latitude']  = $output->results[0]->geometry->location->lat; 
        $data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given address
        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }else{
        return false;   
    }
}
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */