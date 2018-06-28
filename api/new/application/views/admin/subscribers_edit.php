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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                <div class="row">
                    <div class="col-md-6">
                       
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/dashboard">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/subscribers">
                                         Subscribers
                                    </a>
                                </li>
                                <li class="active"> Add Subscribers</li>
                            </ol>
                       
                    </div>

                     
                </div>
                <div class="row">
				
				
                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Seller</label>
                                    	
										<select name="seller" class="form-control" required>
										<option value="">Select Seller</option>
										<?php foreach($sellers as $seller){ ?>
										<option value="<?php echo $seller['s_id']; ?>" <?php if($subscriber['seller_id']==$seller['s_id']){ echo "selected"; } ?>><?php echo $seller['first_name']; ?> <?php echo $seller['last_name']; ?></option>
										<?php } ?>
										</select>
                                    </div>
									</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Package</label>
                                    	<select name="package" class="form-control" required>
										<option value="">Select Seller</option>
										<?php foreach($subscriptions as $subscription){ ?>
										<option value="<?php echo $subscription['title']; ?>" <?php if($subscriber['package']==$subscription['title']){ echo "selected"; } ?>><?php echo $subscription['title']; ?></option>
										<?php } ?>
										</select>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Price</label>
									<input type="text" class="form-control" placeholder="Price" name="price"  required maxlength="100" value="<?php echo $subscriber['price']; ?>" />
                                    	
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Start Date:</label>
										<input type="text" class="form-control" placeholder="Start Date" name="start_date"  required id="datepicker" value="<?php echo $subscriber['start_date']; ?>" readonly />
                                    	
                                    </div>
									</div>
									
									
									  
									
									
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Expiry Date</label>
                                        <input type="text" class="form-control" placeholder="Expiry Date" name="expiry_date"  required   id="datepicker1" value="<?php echo $subscriber['expiry_date']; ?>" readonly />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Payment Date</label>
                                        <input type="text" class="form-control" placeholder="Payment Date" name="payment_date"  required  id="datepicker2" value="<?php echo $subscriber['payment_date']; ?>" readonly />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Payment Mode</label>
                                        <select name="payment_mode" class="form-control" required>
										<option value="Cash" <?php if($subscriber['payment_mode']=="Cash"){ echo "selected"; } ?>>Cash</option>
										<option value="Franchise Permit" <?php if($subscriber['Franchise Permit']=="Cash"){ echo "selected"; } ?>>Franchise Permit</option>
										<option value="Online" <?php if($subscriber['Online']=="Cash"){ echo "selected"; } ?>>Online</option>
										<option value="Admin Approved" <?php if($subscriber['payment_mode']=="Admin Approved"){ echo "selected"; } ?>>Admin Approved</option>
										</select>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
										<option value="Active" <?php if($subscriber['status']=="Active"){ echo "selected"; } ?>>Active</option>
										<option value="Inactive" <?php if($subscriber['status']=="Inactive"){ echo "selected"; } ?>>Inactive</option>
										
										</select>
                                    </div>
									</div>
									
									
                                   <div style="text-align:center">
                                     <div class="form-group">
									 <input type="hidden" name="subscriber_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Add Subscriber</button>
									
									 </div>
									</div>
                                    
								
                                </form>
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


<script src="<?php echo base_url(); ?>plugins/file-input/js/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>plugins/autosize/autosize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/basic-form-elements.js"></script>
<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('input[name="price"]').keyup(function(e)
{
  if (/\D/g.test(this.value))
  {   
    this.value = this.value.replace(/\D/g, '');
  }
  
});

  $( function() {
    $( "#datepicker" ).datepicker({  dateFormat: 'dd/mm/yy' });
	$( "#datepicker1" ).datepicker({  dateFormat: 'dd/mm/yy' });
	$( "#datepicker2" ).datepicker({  dateFormat: 'dd/mm/yy' });
  } );

</script>

</body>

</html>