<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php $settings_admin = $this->session->userdata('settings_admin'); echo $settings_admin['meta_title']; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">

    <!--REQUIRED PLUGIN CSS-->
    <link href="<?php echo base_url(); ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/spinkit/spinkit.css" rel="stylesheet">

    <!--REQUIRED THEME CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themes/main_theme.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="theme-indigo light layout-fixed">
<div class="wrapper">
    
    <!-- top navbar-->
    
<?php include_once("header.php"); ?>
    <!-- sidebar-->
    
<?php include_once("leftside.php"); ?>
    
    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="page-header">
                    <h2>Users List</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Users</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if($this->session->flashdata("success")){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
<button class="close" aria-label="Close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
  <?php echo $this->session->flashdata("success"); ?> 
</div>
<?php } ?>
<?php if($this->session->flashdata("success_add")){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
<button class="close" aria-label="Close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
 <?php echo $this->session->flashdata("success_add"); ?>
</div>
<?php } ?>
                       <div class="card" style="background:none;box-shadow:none;margin-bottom:5px; text-align:right; min-height:20px;">
                           <a href="<?php echo base_url(); ?>admin/users/adduser"><button class="btn bg-purple" type="button">Add User</button></a>
                        </div>
						
                        <div class="card">
                            <div class="body">
                               <table class="table table-bordered table-striped table-hover basic-example" id="bootstrap-table">
								<?php if (count($users) > 0 && $users != false) { ?>
            <thead>
                <tr>
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
			
          <tbody>
									<?php 
									 
									  foreach($users as $user){ 
									 
									  ?>
                                    <tr>
									     <td data-field="fname"><?php echo $user['firstName']; ?></td>
                                        <td data-field="lname"><?php echo $user['lastName']; ?></td>
                                        <td data-field="phone"><?php echo $user['phone']; ?></td>
										<td data-field="address"><?php echo $user['address']; ?></td>
										<td data-field="city"><?php echo $user['city_name']; ?></td>
                                        
                                       
                                        <td data-field="actions">
                                          <a href="<?php echo base_url(); ?>admin/users/edituser/<?php echo $user['id']; ?>"><button class="btn bg-cyan waves-effect" type="button">Edit</button></a>
										<a href="<?php echo base_url(); ?>admin/users/deleteuser/<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">  <button class="btn bg-red waves-effect" type="button">Delete</button></a> 
										
										
										 <a href="<?php echo base_url(); ?>admin/address/view/<?php echo $user['id']; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATzSURBVGhD7VhbiBxFFB3f7zfiE6MSMJntx66LUfwwiuKHBvRnRaN+5CPri5mp6nVRMLhqNEKCiAZZkERQUTD+qBHR5GN/YrLb1Z2Xq6BRgx9qFJQ8jI/oup57++6me2eSDdNtrUgfuMzMqVtV93TdW1U9lRIlSuTDFRv6T3MjtQq224v0uFUzaocfqTsklHzAYK/QoG6k/8L3n61ZpPaKmLGOMLhWwmkPPWt6jnGN3g874G9pXCq0NWDeJ+QhvihUe+iOHjkjGUjtFsoqfKNulVV5Q6j2UAopCKWQNGZ/UTuhK+6blQjRe9ztj55FxS/NVpBbCInA9vc9D5IyCBoSFyvILYSePISswyBfpc016gVxsYLCaqQyPnC0G6rLZ+IMIfynip1W90qjLqAaE+qIMeNCOjZrH5M/D9vBVxsKhgPS+/D5jhcFC8T1sChESHWjPpsD4iDUXkqxWUMDJ0pzS9BTR+CrMfEY7EtcMVZ4obrXMfoWJ1J3g1sObieNic8PaQ7p2hK5haAmzpy8tGVMfSwuTahG9UuwGXxKq+fEehHVlzRlUB0dOB4ilojY7d1R78nS1ITcQpLtV38AO7hr8RNWy8QlAwoGK/EJ2n/wR1SH0IcF/BUFic9BoZpQWI3w7Tfu6/ZHGp1CtQQmegk25oR6vlAMEoVVfBrBoC7wYPBK4Maqd95w7fTKeOUo1EyMFfyTDl7pkoHVYqeUwkR/wO9NoSrzhwaOhYCVJI4DmWJOFMwhP9/o+5gzus4dp8CqEAS8lHzSLz9Il9c4gEjvQj0spBVA0PN4LLzbkFDyc+K6x35YKe44BYUIqY48fD6lSjKQ3kcpRq+90jwJBB1CzE8T9zDUyW0cMFLGC4MudgLcOLgx4fWoUDwHc0atFSqD3EKu2ahPQnBNuxYFLS4JkOcUMJ7ysDD0VvdR4qtWCcXwTBDIOG8LJTWU5dLIvyJ0NYnUqxggSptrgsfEg9G5uXYuTYTg3xOKUu034ujcEIoBn/fF9ymh4BssSALVzwiVQWE1Mt2u5Wyqn8cT4YJJv2kbTn4jYKQSOwFU3AiGNoRxPmMEFGDi27hOqAysFTvfkvlg058JhaesdyV99Gpq74gbc6md6kz4xeSHIG9mcUZt4o4tYE0IAQHG5ONv0Rfx7+Tc4FWZSDP0/5yuKfzd6O/Av4t+v6PIv63GejYP1AKFCPGG+y6b3IGM+oVSpdXdCO2PS4DP0u/kCqKWgcP7i96JFRicM/LQOYmvWkrBUxu+r6TUJP5QyC2ErxxG7+dB0mbUVnGZBImjFYP9SvUkdCHIvyK8repBDLI+bXiaWjwygOiFSJW/8fkjDr4bhM6NwmqETmBc32/yTeN6oQ4JTHY/hBxIBKm1tP1SofOhF9Yd3mqNehk+K6TLtLBa7Gl0hvWrkPv0rp9NyQlLVu0tcZ8WMyZkAu5w7WI/1vcg6CVYnScRSM2Ngh7ixeWIUIgQOsQQxMFdCynWFfdfKM1WkFuIt7XvFNrneZC0Gb1NXKygkBVB5+XI9zUZM8ED0mwFBdZI73GU207UuF0oq5jxYi8KpZCp+N8IqY4+eGoiRO8RyiqoNnl+o14Xqn1gy/2GnwrdXOlQs2WmcRce4IZESPbNtC14ob4TS9vybx0bhrT+up0/wFvCM42rMeBzTefKv2moC6xIP9WphFGiRIm2Uan8A5P1VUFegHYqAAAAAElFTkSuQmCC"></a> <a href="<?php echo base_url(); ?>admin/users/orders/<?php echo $user['id']; ?>"> <i class="material-icons md-24" >shopping_cart</i></a>
                                        </td>
                                    </tr>
									<?php  } } else { ?>
                                    
                                  
                                  <tr>
								  <td> No Records Found</td>
								  </tr>
								  <?php } ?>
                                    </tbody>

            
        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER-->
	<footer>
        <span><?php echo $settings_admin['copy_right']; ?> By <b class="col-blue">IGrand</b></span>
    </footer>
</div>
<!-- CORE PLUGIN JS -->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>plugins/modernizr/modernizr.custom.js"></script>
<script src="<?php echo base_url(); ?>plugins/screenfull/dist/screenfull.js"></script>
<script src="<?php echo base_url(); ?>plugins/jQuery-Storage-API/jquery.storageapi.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>plugins/node-waves/waves.js"></script>

<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>

<script src="<?php echo base_url(); ?>plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatable/dataTables.bootstrap.min.js"></script>

    
<script>
$(document).ready(function() {
    
	$('#bootstrap-table').dataTable( {
  "columnDefs": [
    { "orderable": false, "targets": [5] }
  ]
} );
} );

</script>


</body>

</html>