<?php
class Pages_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
		$this->load->library('form_validation');
		$this->load->helper('security');
	}
	
	
	
	function getdata($id)
	{
	   $sql="select * from pages where page_id='$id'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();
	}
	
	function getfaqs()
	{
	   $sql="select * from faq where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function getblogs()
	{
	   $sql="select * from blog where status='1' order by blog_id desc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function blogdetails($bid)
	{
       $sql="select * from blog where blog_id='$bid'";	
	   $result = $this->db->query($sql);
	   return $result->row_array();       
	}

	function getteams()
	{
		 $sql="select * from team where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	
	function media()
	{
	   $sql="select * from media where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}
	function testimonials()
	{
	   $sql="select * from testimonial where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function howitwork()
	{
		 $sql="select * from howitwork where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();
	}

	function hsteps()
	{
	 $sql="select * from how_it_works_steps where status='1' order by sort_order asc";	
	   $result = $this->db->query($sql);
	   return $result->result_array();	
	}
	
	function checkusertype($link,$cur_user)
	{	
		$str_link = "";foreach($link as $eachlink)
		{ 
			$str_link .= $eachlink."/";
		}
		if(isset($link[2]))$str_link = $link[2];
		else $str_link = "";
//		echo $str_link;
	//	$user_types = $this->getAlluserTypes();
		$extrawhere = "";
		if($str_link != "login")
		{
		//	$extrawhere = " AND ( allowed_links = '*' OR allowed_links = 'login' OR FIND_IN_SET('".$str_link."',allowed_links))";
		}	
		$sql = "SELECT * FROM backend_usertype 
				WHERE user_type_id = '".$cur_user[0]['user_type']."' ".$extrawhere;		
	//	echo $sql;die;						
		$query = $this->db->query($sql);
	//	echo "<pre>"; print_r($query->result_array());die;
		if ($query->num_rows() > 0)
		{
			$data = $query->result_array();
		//	echo $str_link;echo "  ".$data[0]["allowed_links"];
			if(in_array($str_link,explode(",",$data[0]["allowed_links"])) || $str_link == "login" || $str_link == "" || $data[0]["allowed_links"] == "*")
			{
				return array("display_name"=>$data[0]['user_type_dpname'],"allowedmodules"=>$data[0]['allowed_links']);
			}			
		}		
		return FALSE;
	}
	
	public function checkfrontendUser($username,$passwd)
	{
		$sql = "
			SELECT * FROM ".DBPREFIX."_users
			WHERE (
						`userid` = '".$username."'
						OR
						`email` = '".$username."'
				  )
				  AND `password` = '".$passwd."'
		";		
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0)
		{
			return $result->result_array();
		}		
		return FALSE;
	}
	
	public function new_users_no()
	{
	   $sql="select * from users";	
	   $result = $this->db->query($sql);
	   return $result->num_rows();
	}
	
	public function updateadmin($time,$id,$ip)
	{
		$sql="update backend_users set last_login='$time',lastlogin_ip='$ip' where admin_id='$id'";
		 $result = $this->db->query($sql);
		 
	}
	
	public function loginattempt()
	{
	$email = trim(xss_clean($this->input->post('email')));
    $password = trim(xss_clean($this->input->post('password')));
	$time = date("Y-m-d H:i:s");;
	$ip = $_SERVER['REMOTE_ADDR'];
    $data = array(
        'email'=>$email,
        'password'=>$password,
		'datetime'=>$time,
		'ip'=>$ip
    );

    $this->db->insert('admin_login_attempts',$data);
		
	}
}
?>