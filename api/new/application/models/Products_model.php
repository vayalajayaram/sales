<?php
class Products_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
		$this->load->library('form_validation');
		$this->load->helper('security');
	}
	
	function prodlist($name)
	{
	   $sql="select p.*,s.subsubcategory_id,(SELECT sum(r.rate) FROM rating r WHERE r.p_id = p.product_id) as rate_total,(SELECT COUNT(DISTINCT(r.r_id)) FROM rating r WHERE r.p_id = p.product_id) as  rate_count from products as p left join subsubcategories as s on s.subsubcategory_id=p.subsubcategory_id  where s.name='$name'";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function servlist($name)
	{
	   $sql="select p.*,s.subsubcategory_id,(SELECT sum(r.rate) FROM rating r WHERE r.s_id = p.service_id) as rate_total,(SELECT COUNT(DISTINCT(r.r_id)) FROM rating r WHERE r.s_id = p.service_id) as  rate_count from services as p left join subsubcategories as s on s.subsubcategory_id=p.subsubcategory_id  where s.name='$name'";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	
	function getprod($id)
	{
	$sql="select p.*,s.* from products as p left join sellers as s on s.s_id=p.seller_id where p.product_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	function getservice($id)
	{
	$sql="select p.*,p.price as price1,s.* from services as p left join sellers as s on s.s_id=p.seller_id where p.service_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function getprod1($id)
	{
	$sql="select * from products where product_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	function getservice1($id)
	{
	$sql="select * from services  where service_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	function arealist()
	{
	$sql="select * from area where status=1 order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	function citylist()
	{
	$sql="select * from city where status=1 order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function insertcustomer($data)
	{
		$this->db->insert('customers', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	}
	
	function addenquiry($data)
	{
		$this->db->insert('enquiries', $data);
	}
	function checkcustomer($no)
	{
		$sql="select * from customers where phone='$no' ";	
	    $result = $this->db->query($sql);
	   if($result && $result->num_rows()>0)
		{
		return $result->row_array();			
		} else {
		return FALSE;	
		}
	}
	
	function pplist()
	{
	    $sql="select * from products where status='1' ";	
	    $result = $this->db->query($sql);	
		return $result->result_array();
	}
	
	function pslist()
	{
	    $sql="select * from services where status='1' ";	
	    $result = $this->db->query($sql);	
		return $result->result_array();
	}
	
	function ftrproducts()
	{
	    $sql="select p.*,(SELECT sum(r.rate) FROM rating r WHERE r.p_id = p.product_id) as rate_total,(SELECT COUNT(DISTINCT(r.r_id)) FROM rating r WHERE r.p_id = p.product_id) as  rate_count from products p where display_home=1 and status='1' ORDER BY RAND() ";	
	    $result = $this->db->query($sql);	
		return $result->result_array();
	}
	
	function ftrservices()
	{
	    $sql="select s.*,(SELECT sum(r.rate) FROM rating r WHERE r.s_id = s.service_id) as rate_total,(SELECT COUNT(DISTINCT(r.r_id)) FROM rating r WHERE r.s_id = s.service_id) as  rate_count from services s where display_home=1 and status='1' ORDER BY RAND()";	
	    $result = $this->db->query($sql);	
		return $result->result_array();
	}
	
	function getcust($id)
	{
		 $sql="select * from customers where c_id='$id' and status='1' ";	
	    $result = $this->db->query($sql);	
		return $result->row_array();
	}
	function addproduct($data)
	{
	$this->db->insert('products', $data);	
	return $this->db->insert_id();
	}
	
	function editproduct($id,$data)
	{
		if(!(isset($data[0])))$data[0] = $data;
		$arr = array('product_id' => $id);		
		$this->db->where($arr); 
		$this->db->update("products", $data[0]);
		return TRUE;
		
	}	
	
	function deleteproduct($id)
	{
	  $this->db->where('product_id', $id);
      $this->db->delete('products'); 
	}
	function addservice($data)
	{
		$this->db->insert('services', $data);	
		return $this->db->insert_id();
	}
	
	function editservice($id,$data)
	{
		if(!(isset($data[0])))$data[0] = $data;
		$arr = array('service_id' => $id);		
		$this->db->where($arr); 
		$this->db->update("services", $data[0]);
		return TRUE;
		
	}	
	
	function deleteservice($id)
	{
	  $this->db->where('service_id', $id);
      $this->db->delete('services'); 
	}
	
	function addlead($data)
	{
		$this->db->insert('leads', $data);
	}
	
	function getleadlist($id)
	{
		$sql = "SELECT * FROM leads  WHERE  FIND_IN_SET('$id', assign)";	
		$result = $this->db->query($sql);
		return $result->result_array();		
	}
	
	function dashboardleads($id)
	{
		$sql = "SELECT * FROM leads  WHERE  FIND_IN_SET('$id', assign) order by en_id desc";	
		$result = $this->db->query($sql);
		return $result->result_array();		
	}
		
	function searchprod()
	{
		$sql = "SELECT product_name FROM products  WHERE status=1 and deleted_id=0";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function searchser()
	{
		$sql = "SELECT service_name FROM services  WHERE status=1";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	function resultsearch($key)
	{
		$sql = "SELECT * FROM products  WHERE product_name like ('%$key%') and status=1";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function resultsearch1($key)
	{
		$sql = "SELECT * FROM services  WHERE service_name like ('%$key%') and status=1";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function collections()
	{
		$sql = "SELECT * FROM collections  WHERE status=1 order by sort_order asc";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function enquiries($id)
	{
		$sql = "SELECT * FROM enquiries where customer_id='$id' order by en_id desc";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function notifications($id)
	{
		$sql = "SELECT c.*,s.company,s.first_name,s.last_name FROM campaign as c left join sellers as s on s.s_id=c.seller_id WHERE FIND_IN_SET('$id', c.customers) and c.status=1 order by c.cm_id desc";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	
	function cities()
	{
		$sql = "SELECT * FROM city  WHERE status=1 order by sort_order asc";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function areas()
	{
		$sql = "SELECT * FROM area  WHERE status=1 order by sort_order asc";	
		$result = $this->db->query($sql);
		return $result->result_array();	
	}
	
	function rating($data)
	{
		$this->db->insert('rating', $data);
	}
	
	function prate($pid)
	{
		$sql = "SELECT SUM(rate) rate_total,COUNT(DISTINCT(r_id)) rate_count FROM rating  WHERE p_id='$pid'";	
		$result = $this->db->query($sql);
		return $result->row_array();	
	}
	
	function srate($sid)
	{
		$sql = "SELECT SUM(rate) rate_total,COUNT(DISTINCT(r_id)) rate_count FROM rating  WHERE s_id='$sid'";	
		$result = $this->db->query($sql);
		return $result->row_array();	
	}
	
}
?>