<?php
class Helper_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
		$this->load->library('form_validation');
		$this->load->helper('security');
	}
	
	function signup($data)
	{
		 $this->db->insert('users',$data);
		 return $this->db->insert_id();		   

	}
	
	function loginMe($email, $password)
    {
        $query = $this->db->get_where("helpers",array("email"=>$email,"password"=>$password));		
		if ($query->num_rows() > 0)
		{
		return $query->row_array();
		}		
		return FALSE;
    }
	
	function loginMe1($email, $password)
    {
        $query = $this->db->get_where("sellers",array("email"=>$email,"password"=>$password,"approved"=>'1'));		
		if ($query->num_rows() > 0)
		{
		return $query->row_array();
		}		
		return FALSE;
    }
	
	 
	 function checkUser($data = array()){
		$this->db->select('c_id');
		$this->db->from('customers');
		$this->db->where(array('email'=>$data['email']));
		$query = $this->db->get();
		$check = $query->num_rows();
		
		if($check > 0){
			$result = $query->row_array();
			$data['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update('customers',$data,array('c_id'=>$result['c_id']));
			$userID = $result['c_id'];
		}else{
			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert('customers',$data);
			$userID = $this->db->insert_id();
		}

		return $userID?$userID:false;
    }
	
	 function checkSeller($data = array())
	 {
		$this->db->select('s_id');
		$this->db->from('sellers');
		$this->db->where(array('email'=>$data['email'],"approved"=>1));
		$query = $this->db->get();
		$check = $query->num_rows();
		
		if($check > 0){
			$result = $query->row_array();		
			$sellerID = $result['s_id'];
			return $sellerID;
		}else{
		return false;	
		}

			 
	 }

	
	function getprofile($id)
	{
	   $sql="select u.*,c.city_name,c.city_id,a.area_name,a.area_id from helpers as u left join city as c on c.city_id=u.city_id left join area as a on a.area_id=u.area_id where u.helper_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function getaddress($id)
	{
	   $sql="select a.*,s.state_name,c.city_name from address as a left join states as s on s.s_id=a.state left join city as c on c.c_id=a.city_id where a.user_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function getaddress1($id)
	{
	   $sql="select a.*,s.state_name,c.city_name from address as a left join states as s on s.s_id=a.state left join city as c on c.c_id=a.city where a.address_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function getstates()
	{
	   $sql="select * from states where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function getorders($hid)
	{
	   $sql="select * from bookings where helper_id='$hid' order by booking_id desc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function orderdetails($id)
	{
		
	   $sql="select b.*,p.image,v.company_name,v.contact_person,v.email,v.phone,v.address,v.area_id,v.city_id from booking_details as b left join products as p on p.prod_id=b.product_id left join vendors as v on v.vendor_id=b.vendor_id where b.booking_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function referafriend($data)
	{
		$this->db->insert('reference',$data);
		return $this->db->insert_id();
	}

	function referavendor($data)
	{
		$this->db->insert('reference',$data);
		return $this->db->insert_id();
	}

	function trackorder($oid)
	{
		$sql="select * from bookings where booking_id='$oid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function enquiries($uid)
	{

	   $sql="select * from enquiry where user_id='$uid'";	
	   $result = $this->db->query($sql);
	   return $result->result_array();

	}
	
	function myreviews($id)
	{
	   $sql="select * from reviews where userid='$id' and status=1";	
	   $result = $this->db->query($sql);
	   return $result->result_array();		
	}
	
	

	
	function changepassword($oldpass,$pass,$user)
	{
		$query = $this->db->get_where("helpers",array("helper_id"=>$user,"password"=>$oldpass));		
		if($query->num_rows()>0)
		{		
		$arr = array('helper_id' => $user);		
		$this->db->where($arr); 
		$this->db->update("helpers", array("password"=>$pass));
	    return $this->db->affected_rows();
		}		
		return '2';

	}

	function changenumber($num,$oldnum,$user)
	{
		$query = $this->db->get_where("users",array("user_id"=>$user,"phone"=>$oldnum));		
		if($query->num_rows()>0)
		{		
		$arr = array('user_id' => $user);		
		$this->db->where($arr); 
		$this->db->update("users", array("phone"=>$num));
	    $sql="select first_name,last_name from users  where user_id='$user'";	
	    $result = $this->db->query($sql);
	    return $result->row_array();	
		}		
		return FALSE;
	}

	function changeemail($email,$oldemail,$user)
	{
		$query = $this->db->get_where("users",array("user_id"=>$user,"email"=>$oldemail));		
		if($query->num_rows()>0)
		{		
		$arr = array('user_id' => $user);		
		$this->db->where($arr); 
		$this->db->update("users", array("email"=>$email));
	    $sql="select first_name,last_name from users  where user_id='$user'";	
	    $result = $this->db->query($sql);
	    return $result->row_array();	
		}		
		return FALSE;
	}
	
	function edituser($id,$data)
	{
		if(!(isset($data[0])))$data[0] = $data;
		$arr = array('helper_id' => $id);		
		$this->db->where($arr); 
		$this->db->update("helpers", $data[0]);			
		return TRUE;
		
	}	

	function wallet($uid)
	{
		$sql="select * from wallet where user_id='$uid' order by wallet_id desc";	
	    $result = $this->db->query($sql);
	    return $result->result_array();	
	}
	
	function addcustomer($data)
	{
	$this->db->insert('users',$data);	
	return $this->db->insert_id();
	}
	
	function addsellers($data)
	{
	$this->db->insert('sellers',$data);	
	return $this->db->insert_id();
	}
	
	function editaddress($data,$id)
	{
		if(!(isset($data[0])))$data[0] = $data;
		$arr = array('address_id' => $id);		
		$this->db->where($arr); 
		$this->db->update("address", $data[0]);		
	//	echo "update".$category_id;print_r($data);die;
		return TRUE;
	}
	
	function deleteaddress($id)
	{
	 $this->db->where('address_id', $id);
     $this->db->delete('address'); 
	}
	
	function ajaxlistarea($cid)
     {
    
	  $sql="select * from area where status=1 and city_id='$cid' order by sort_order asc";	
	     $result = $this->db->query($sql);
	     return $result->result_array();	
   }
   
   function getsubscription1()
   {
	     $sql="select * from subscriptions where sc_id=1";	
	     $result = $this->db->query($sql);
	     return $result->row_array();	
   }
    function getsubscription2()
   {
	     $sql="select * from subscriptions where sc_id=2";	
	     $result = $this->db->query($sql);
	     return $result->row_array();	
   }
    function getsubscription3()
   {
	     $sql="select * from subscriptions where sc_id=3";	
	     $result = $this->db->query($sql);
	     return $result->row_array();	
   }
   
   function addwish($data)
	{
	$this->db->insert('intrests',$data);	
	//return $this->db->insert_id();
	}
   
   function checkDuplicateEmail($email)
   {
	$this->db->where('email', $email);
    $query = $this->db->get('users');
    $count_row = $query->num_rows();
    if ($count_row==0) {   
        return "TRUE"; 
     } else {     
      return "FALSE"; 
     }
	   
   }
   
   function checkDuplicatePhone($phone)
   {
	$this->db->where('phone', $phone);
    $query = $this->db->get('users');
    $count_row = $query->num_rows();
    if($count_row==0)
    {
       return "TRUE";
    } else{
      return "FALSE";

    }
    
	   
   }
   
    function checkEmail($email)
   {
	$this->db->where('email', $email);
    $query = $this->db->get('customers');
    $count_row = $query->num_rows();
    if ($count_row > 0) {   
        return $query->row_array();	
     } else {     
       return FALSE; 
     }
	   
   }
   
   function ajaxusers($cid,$aid)
   {
	   $sql="select * from customers where status=1 and city='$cid' and area='$aid'";	
	     $result = $this->db->query($sql);
	     return $result->result_array(); 
   }

      function ajaxusers1($cid)
      {
	   $sql="select * from customers where status=1 and city IN ($cid)";	
	     $result = $this->db->query($sql);
	     return $result->result_array(); 
      }

    function demo($data)
	{
	$this->db->insert('demo',$data);	
	return $this->db->insert_id();
	}
	
}
?>