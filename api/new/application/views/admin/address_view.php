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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="theme-indigo light layout-fixed">
<div class="wrapper">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="sk-wave">
                <div class="sk-rect sk-rect1 bg-cyan"></div>
                <div class="sk-rect sk-rect2 bg-cyan"></div>
                <div class="sk-rect sk-rect3 bg-cyan"></div>
                <div class="sk-rect sk-rect4 bg-cyan"></div>
                <div class="sk-rect sk-rect5 bg-cyan"></div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
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
                    <h2>Address List</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>admin/users/">Users</a></li>
						<li class="active">address</li>
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

<?php if($this->session->flashdata("delete")){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
<button class="close" aria-label="Close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
 <?php echo $this->session->flashdata("delete"); ?>
</div>
<?php } ?>
<div class="card" style="background:none;box-shadow:none;margin-bottom:5px; text-align:right; min-height:20px;">
                           <a href="<?php echo base_url(); ?>admin/address/addaddress/<?php echo $uid; ?>"><button class="btn bg-purple" type="button">Add Address</button></a>
                        </div>
						
                        <div class="card">
                            <div class="body">
                                <table class="table table-hover" id="bootstrap-table">
                                    <thead>
									<?php if (count($address) > 0 && $address != false) { ?>
                                    <tr >
									 <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
										 <th>address</th>
                                        <th>City</th>                                       
                                        <th>State</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php 
									 
									  foreach($address as $addr){ 
									 
									  ?>
                                    <tr>
									     <td data-field="fname"><?php echo $addr['firstname']; ?></td>
                                        <td data-field="lname"><?php echo $addr['lastname']; ?></td>
                                        <td data-field="phone"><?php echo $addr['phone']; ?></td>
                                        <td data-field="address"><?php echo $addr['address']; ?></td>
                                        <td data-field="city"><?php echo $addr['city_name']; ?></td>
                                        <td data-field="state"><?php echo $addr['state_name']; ?></td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>admin/address/editaddress/<?php echo $addr['address_id']; ?>"><button class="btn bg-cyan waves-effect" type="button">Edit</button></a>
										<a href="<?php echo base_url(); ?>admin/address/deleteaddress/<?php echo $uid; ?>-<?php echo $addr['address_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">  <button class="btn bg-red waves-effect" type="button">Delete</button></a>
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



</body>

</html>