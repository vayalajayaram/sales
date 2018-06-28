<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gnr extends CI_Controller {

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

	
		$data['categories']=$this->category_model->catlist();
		$data['subcategories']=$this->category_model->subcatlist();
		$data['subsubcategories']=$this->category_model->subsubcatlist();
		$cat_Array = array();
		$subcat_Array=array();
		$subsubcat_Array=array();
		foreach($data['categories'] as $cat)
		{
		$cat_Array[$cat['category_id']]['category_id'] = urldecode($cat['category_id']);
		$cat_Array[$cat['category_id']]['category_name'] = urldecode($cat['category_name']);
		$cat_Array[$cat['category_id']]['sort_order'] = urldecode($cat['sort_order']);
		$cat_Array[$cat['category_id']]['category_image'] = urldecode(base_url().$cat['category_image']);	
		}
		foreach($data['subcategories'] as $subcat)
		{
		$subcat_Array[$subcat['subcategory_id']]['subcategory_id'] = urldecode($subcat['subcategory_id']);
		$subcat_Array[$subcat['subcategory_id']]['category_id'] = urldecode($subcat['category_id']);
		$subcat_Array[$subcat['subcategory_id']]['subcategory_name'] = urldecode($subcat['subcategory_name']);
		$subcat_Array[$subcat['subcategory_id']]['sort_order'] = urldecode($subcat['sort_order']);
		
		}
		foreach($data['subsubcategories'] as $subsubcat)
		{
					
		$subsubcat_Array[$subsubcat['subsubcategory_id']]['subsubcategory_id'] = urldecode($subsubcat['subsubcategory_id']);
		$subsubcat_Array[$subsubcat['subsubcategory_id']]['category_id'] = urldecode($subsubcat['category_id']);
		$subsubcat_Array[$subsubcat['subsubcategory_id']]['subcategory_id'] = urldecode($subsubcat['subcategory_id']);
		$subsubcat_Array[$subsubcat['category_id']]['subsubcategory_name'] = urldecode($subsubcat['name']);
		$subsubcat_Array[$subsubcat['category_id']]['sort_order'] = urldecode($subsubcat['sort_order']);
		
		}
			$tot_arr = array(
			        "categories" => $cat_Array,	
					"subcategories" => $subcat_Array,	
					"subsubcategories" => $subsubcat_Array				
					);
		$tran_all = array("status" => 1, "message" => "Categories ", "data" => $tot_arr);
		echo json_encode($tran_all, JSON_UNESCAPED_SLASHES );
	}
	
	public function intrests()
	{
		

		  $result = $this->user_model->loginMe($_POST['email'], $_POST['password']);
		  print_r($result);
	}
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */