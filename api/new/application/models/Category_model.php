<?php
class Category_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
		$this->load->library('form_validation');
		$this->load->helper('security');
	}
	
	function serviceslist()
    {
       $sql="select * from services where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	    return $result->result_array();
    }
	function special_products()
    {
       $sql="select * from products where status='1' and special_product='1'";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }
	
	function feature_products()
    {
       $sql="select * from products where status='1' and feature_product='1'";
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }
	
	function vendorslist($service,$city,$area)
	{
          $service1=str_replace('-',' ',$service);
	   $sql = "SELECT v.* from vendors as v left join products as p on p.vendor_id=v.vendor_id left join services as s on s.service_id=p.service_id WHERE s.title = '$service1' and v.city_id='$city' and FIND_IN_SET('".$area."',v.area_id)  group by v.vendor_id";	
	   
		$result = $this->db->query($sql);		
		return $result->result_array();		
			
	}

	function settings()
	{
		$sql = "SELECT * from settings WHERE s_id = '1' ";	
		$result = $this->db->query($sql);
		if($result && $result->num_rows()>0)
		{
		return $result->row_array();			
		}	
	}
	
	function vendordata($vendor)
	{
	    $vendor1=str_replace('-',' ',$vendor);
		$sql = "SELECT * from vendors WHERE company_name='$vendor1' ";	
		$result = $this->db->query($sql);
		return $result->row_array();			
		
	}
	
	function sliders()
	{
		$sql="select * from sliders where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function vendor_banners($vendor)
	{
	    $vendor1=str_replace('-',' ',$vendor);
	  $sql="select b.* from vendor_banners as b left join vendors as v on v.vendor_id=b.vendor_id where v.company_name='$vendor1' and b.status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();  
	}
	
	function productlist($service,$vendor)
	{
	   $service1=str_replace('-',' ',$service);
	   $vendor1=str_replace('-',' ',$vendor);
	   $sql="select p.*,s.service_type,s.type,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,(SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p left join services as s on s.service_id=p.service_id left join vendors as v on v.vendor_id=p.vendor_id where p.status='1' and s.title='$service1' and v.company_name='$vendor1' order by p.sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function productfilter($service,$vendor,$sort_order,$searchkey)
	{
	   $service1=str_replace('-',' ',$service);
	   $vendor1=str_replace('-',' ',$vendor);
	   if($sort_order=="name-asc")
	   {
	       $qry="order by p.title asc";
	   }
	   if($sort_order=="name-desc")
	   {
	       $qry="order by p.title desc";
	   }
	   if($sort_order=="price-asc")
	   {
	       $qry="order by CAST(p.discount_price as SIGNED INTEGER) asc";
	   }
	   if($sort_order=="price-desc")
	   {
	       $qry="order by CAST(p.discount_price as SIGNED INTEGER) desc";
	   }
	   
	   
	    if($sort_order=="rating-desc" || $sort_order=="rating-asc" || $sort_order=="")
	   {
	       $qry="";
	   }
	   
	   if($searchkey!="")
	   {
	       $search="and p.title like '%".$searchkey."%'";
	   } else {
	       
	       $search="";
	   }
	   
	   
	   $sql="select p.*,s.service_type,s.type,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,  (SELECT COUNT(DISTINCT(r.review_id)) 
	   FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count  from products as p left join services as s  on s.service_id=p.service_id left join 
	   vendors as v on v.vendor_id=p.vendor_id where p.status='1' and s.title='$service1' and v.company_name='$vendor1' $search  $qry ";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	
	
	function productlist1($vendor)
	{
	   $vendor1=str_replace('-',' ',$vendor);
	   $sql="select p.*,s.service_type,s.type,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,
	   (SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p left 
	   join services as s  on s.service_id=p.service_id left join vendors as v on v.vendor_id=p.vendor_id where p.status='1'  and 
	   v.company_name='$vendor1' order by p.sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function productfilter1($vendor,$sort_order,$searchkey)
	{
	  
	   $vendor1=str_replace('-',' ',$vendor);
	   if($sort_order=="name-asc")
	   {
	       $qry="order by p.title asc";
	   }
	   if($sort_order=="name-desc")
	   {
	       $qry="order by p.title desc";
	   }
	   if($sort_order=="price-asc")
	   {
	       $qry="order by CAST(p.discount_price as SIGNED INTEGER) asc";
	   }
	   if($sort_order=="price-desc")
	   {
	       $qry="order by CAST(p.discount_price as SIGNED INTEGER) desc";
	   }
	   
	   
	    if($sort_order=="rating-desc" || $sort_order=="rating-asc" || $sort_order=="")
	   {
	       $qry="";
	   }
	   
	   if($searchkey!="")
	   {
	       $search="and p.title like '%".$searchkey."%'";
	   } else {
	       
	       $search="";
	   }
	   
	   
	   $sql="select p.*,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,  (SELECT COUNT(DISTINCT(r.review_id)) 
	   FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count  from products as p  left join  vendors as v on v.vendor_id=p.vendor_id where 
	   p.status='1'  and v.company_name='$vendor1' $search  $qry ";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function getproduct($pid)
	{
		$sql = "SELECT p.*,v.company_name,v.email,v.phone,v.city_id,v.area_id,v.vendor_id,s.title as service_name from products as p left join vendors as v on v.vendor_id=p.vendor_id left join services as s on s.service_id=p.service_id WHERE p.prod_id = '$pid' ";	
		$result = $this->db->query($sql);		
		return $result->row_array();			
		
	}
	
	function relatedproducts($service,$vendor,$pid)
	{
	   $service1=str_replace('-',' ',$service);
	   $vendor1=str_replace('-',' ',$vendor);
	   $sql="select p.*,s.service_type,s.type,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,(SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p left join services as s on s.service_id=p.service_id left join vendors as v on v.vendor_id=p.vendor_id where p.status='1' and s.title='$service1' and v.company_name='$vendor1' and p.prod_id NOT IN('$pid') order by p.sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function addreview($data)
	{
	$this->db->insert('product_reviews',$data);	
	return $this->db->insert_id();
	}
	
	function prod_reviews($data)
	{
	$this->db->insert('product_reviews',$data);	
	return $this->db->insert_id();
	}
	
	function get_reviews($pid)
	{
	    $sql = "SELECT * FROM product_reviews  WHERE product_id='$pid'";	
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	
	function prate($pid)
	{
		$sql = "SELECT SUM(rating) rate_total,COUNT(DISTINCT(review_id)) rate_count FROM product_reviews  WHERE product_id='$pid'";	
		$result = $this->db->query($sql);
		return $result->row_array();	
	}

	function cart($uid,$session_id)
	{
             
    $this->db->select("*");
    $this->db->from("cart");
    $this->db->where('user_id', $uid);
    $this->db->or_where('session_id ', $session_id);    
    $q = $this->db->get();
    return $q->result_array();	

	}

	function addtocart($data)
	{
	$this->db->insert('cart',$data);	
	return $this->db->insert_id();
	}

	function checkout($uid)
	{
             
    $this->db->select("*");
    $this->db->from("cart");
    $this->db->where('user_id', $uid);
     
    $q = $this->db->get();
    return $q->result_array();	

	}

	function placeorder($data)
	{
	$this->db->insert('bookings',$data);	
	return $this->db->insert_id();
	}


	function cityist()
    {
       $sql="select * from city where status='1' ";
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }

    function areaist()
    {
       $sql="select * from area where status='1' ";
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }

    function getarea($cid)
    {
    	 $sql="select * from area where status='1' and city_id='$cid' ";
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }
    
    function specialoffers()
    {
       $sql="select * from special_offers where status=1";
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }
    
    function partner_insert($data)
	{
	$this->db->insert('partner_with_us',$data);	
	return $this->db->insert_id();
	}
	
	function bmservice()
    {
       $sql="select * from service_types where status='1' ";
	   $result = $this->db->query($sql);
	   return $result->result_array();
    }
    
    function popularservicemenu()
    {
       $sql="select * from popular_service where status='1' ";
	   $result = $this->db->query($sql);
	   return $result->result_array();       
    }
    
    function shoppingmenu()
    {
       $sql="select * from shopping_type where status='1' ";
	   $result = $this->db->query($sql);
	   return $result->result_array();        
    }
    
    function shoppingmenu1($service_id)
    {
       $sql="select p.*,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,(SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p  where p.prod_id IN ($service_id)  order by p.sort_order asc limit 0,3";
	
	   $result = $this->db->query($sql);
	   return $result->result_array();        
    }
    function popularservicemenu1($service_id)
    {
       $sql="select p.*,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,(SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p  where p.prod_id IN ($service_id)  order by p.sort_order asc limit 0,3";
	
	   $result = $this->db->query($sql);
	   return $result->result_array();        
    }
    
	
	function vendorslist1($city,$area)
	{
         
	   $sql = "SELECT v.*,s.service_id from vendors as v left join products as p on p.vendor_id=v.vendor_id left join services as s on s.service_id=p.service_id WHERE  v.city_id='$city' and FIND_IN_SET('".$area."',v.area_id)  ";	
	   
		$result = $this->db->query($sql);		
		return $result->result_array();		
			
	}
	
	function homebanners()
	{
         
	   $sql = "select * from banner";	
		$result = $this->db->query($sql);		
		return $result->result_array();		
			
	}
	
	function popular_services1()
	{
	     $sql = "SELECT title from  services  WHERE  service_type='2' and popular='1' limit 0,3";
	     $result = $this->db->query($sql);		
	     return $result->result_array();	
	}
	
	function popular_services($service)
	{
	   	
	   $sql="select p.*,s.service_type,s.type,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,(SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p left join services as s on s.service_id=p.service_id where p.status='1' and s.title='$service' order by p.sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function popular_products1()
	{
	     $sql = "SELECT title from  services  WHERE  service_type='1' and popular='1' limit 0,3";
	     $result = $this->db->query($sql);		
	     return $result->result_array();	
	}
	
	function popular_products($service)
	{
	   	
	   $sql="select p.*,s.service_type,s.type,(SELECT sum(r.rating) FROM product_reviews r WHERE r.product_id = p.prod_id) as rate_total,(SELECT COUNT(DISTINCT(r.review_id)) FROM product_reviews r WHERE r.product_id = p.prod_id) as  rate_count from products as p left join services as s on s.service_id=p.service_id where p.status='1' and s.title='$service' order by p.sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function trackorder($oid,$email)
	{  
	    $sql="select b.* from bookings as b left join users as u on u.user_id=b.user_id where b.booking_id='$oid' and u.email='$email'";	
	    $result = $this->db->query($sql);
	    $num = $result->num_rows();
	    if($num>0)
	    {
	      $sql="select * from order_logs where booking_id='$oid'";
	      $result = $this->db->query($sql);
	      return $result->result_array();
	    } else {
	      return $num;
	    }
	    
	}
	
    function refer_friend($data)
	{
	    $this->db->insert('refer_friend',$data);	 
	   	return $this->db->insert_id();  
	}
	
	function refer_vendor($data)
	{
	    $this->db->insert('refer_vendor',$data);	 
	   	return $this->db->insert_id();  
	}
	
	function checkrcode($code)
    {
       $sql="select user_id from refer_vendor where code='$code'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();   
      }
	
	function wallet_register($data)
	{
	$this->db->insert('wallet',$data);	
	return $this->db->insert_id();
	}
	function item_type()
	{
	   $sql="select * from item_type where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();   
	}
	
	
	function delivery_category($item)
	{
	   $sql="select * from delivery_category where item_type='$item' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();   
	}
	
	
	function giftslist($vendor)
	{
	   $sql="select * from products_gift where vendor_id='$vendor' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();   
	}
}
?>