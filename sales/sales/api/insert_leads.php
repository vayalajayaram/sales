<?php

include_once('config.php');
 
if($_SERVER['REQUEST_METHOD'] == "POST"){

 $name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
 $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
 $phone = isset($_POST['phone']) ? mysql_real_escape_string($_POST['phone']) : "";
 $title = isset($_POST['title']) ? mysql_real_escape_string($_POST['title']) : "";
 $description = isset($_POST['description']) ? mysql_real_escape_string($_POST['description']) : "";
 $city = isset($_POST['city']) ? mysql_real_escape_string($_POST['city']) : "";
 $status = isset($_POST['status']) ? mysql_real_escape_string($_POST['status']) : "";
 $source = isset($_POST['source']) ? mysql_real_escape_string($_POST['source']) : "";
 //$staff_id = isset($_POST['staff_id']) ? mysql_real_escape_string($_POST['staff_id']) : "";
 //$assigned_id = isset($_POST['assigned_id']) ? mysql_real_escape_string($_POST['assigned_id']) : "";
 

 $sql = "INSERT INTO `sales_crm`.`leads` (`id`, `name`, `email`, `phone`,`title`, `description`, `city`, `status`, `source`, `created`, `staff_id`, `assigned_id`) 
 VALUES (NULL, '$name', '$email', '$phone','$title', '$description', '$city', 1 , (SELECT id FROM sales_crm.leadssources where name='$source'), CONVERT_TZ(now(),'+00:00','+05:30'),1,1);";
 $qur = mysql_query($sql);
 if($qur){
 $json = array("status" => 1, "msg" => "Done User added!");
 }else{
 $json = array("status" => 0, "msg" => "Error adding user!");
 }
}else{
 $json = array("status" => 0, "msg" => "Request method not accepted");
}
 
@mysql_close($conn);

 header('Content-type: application/json');
 echo json_encode($json);