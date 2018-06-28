<?php
class Cart_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
		$this->load->library('form_validation');
		$this->load->helper('security');
	}
	
	
	function addresslist($uid)
    {
       $sql="select * from address where user_id='$uid'";	
	   $result = $this->db->query($sql);
	    return $result->result_array();
    }
    
    function findaddress($aid)
    {
        
       $sql="select * from address where address_id='$aid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array(); 
    }
	
	function edit_address($data,$id)
	{
	    if(!(isset($data[0])))$data[0] = $data;
		$arr = array('address_id' => $id);		
		$this->db->where($arr); 
		$this->db->update("address", $data[0]);			
		return TRUE;
	}
	
	
	function add_address($data)
	{
		$this->db->insert('address',$data);
		return $this->db->insert_id();
	}
	
	function delete_address($id)
	{
	  $this->db->where('address_id', $id);
      $this->db->delete('address'); 
	}
	
	function charges1($pid)
	{
	   $sql="select d.price_km from products as p left join  delivery_category as d on d.cat_id=p.delivery_category where p.prod_id='$pid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function find_v_address($pid)
	{
	   $sql="select * from vendors where vendor_id='$pid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function address_location($lid)
	{
	   $sql="select * from address where address_id='$lid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	function getservice1($sid)
	{
	   $sql="select * from services where service_id='$sid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();	    
	}
	function coupon($coupon)
	{
	   $sql="select * from special_offers where coupan_code='$coupon'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();  
	}
	function order_insert($data)
	{
		$this->db->insert('bookings',$data);
		return $this->db->insert_id();
	}
	
	function ord_details($data)
	{
	  	$this->db->insert('booking_details',$data);
		return $this->db->insert_id();  
	}
	
	function orderlogs($data)
	{
	   	$this->db->insert('order_logs',$data);	 
	   	return $this->db->insert_id();  
	}
	
	function getservicen($sid)
	{
	   $sql="select * from services where service_id='$sid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();  
	}
}
