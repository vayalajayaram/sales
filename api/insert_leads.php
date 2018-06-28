<?php
 
// Include confi.php
$con = new mysqli("localhost", "root", "", "sales") or die(mysqli_error());
 
 if(isset($_REQUEST['name']) && (trim($_REQUEST['name']) != "") && 	
	   isset($_REQUEST['email']) && (trim($_REQUEST['email']) != "")&& 	
	   isset($_REQUEST['phone']) && (trim($_REQUEST['phone']) != "")&& 	
	   isset($_REQUEST['title']) && (trim($_REQUEST['title']) != "")&& 	
	   isset($_REQUEST['description']) && (trim($_REQUEST['description']) != "")&& 	
	   isset($_REQUEST['source']) && (trim($_REQUEST['source']) != "")){
		   
 // Get data
 $name = isset($_REQUEST['name']) ? ($_REQUEST['name']) : "";
 $email = isset($_REQUEST['email']) ? ($_REQUEST['email']) : "";
 $phone = isset($_REQUEST['phone']) ? ($_REQUEST['phone']) : "";
 $title = isset($_REQUEST['title']) ? ($_REQUEST['title']) : "";
 $description = isset($_REQUEST['description']) ? ($_REQUEST['description']) : "";
 $source = isset($_REQUEST['source']) ? ($_REQUEST['source']) : "";
 

 // Insert data into data base


  $sql = "INSERT INTO `leads` (`id`,`name`,`email`,`phone`,`title`,`description`,`source`,`status`,`type`, `created`, `staff_id`, `assigned_id`) VALUES
 (NULL, '$name', '$email', '$phone','$title','$description',(SELECT id FROM leadssources where name='$source'),6,0, CONVERT_TZ(now(),'+00:00','+05:30'),1,1)";
 
 $qur = mysqli_query($con,$sql);
  $group_tbl_id = mysqli_insert_id($con);
 // print_r($qur);exit();

 if(!empty($qur)){
 
   $json = ("contact created succesfylly");
 }else{
 $json = ("No Data Found");
 }
 }
 else{
 $json = ("Something went wrong try again");
}
@mysql_close($conn);
 
/* Output header */
 header('Content-type: application/json');
 echo json_encode($json);