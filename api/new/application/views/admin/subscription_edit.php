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
                <div class="row">
                    <div class="col-md-6">
                       
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/dashboard">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/subscriptions">
                                         Subscriptions
                                    </a>
                                </li>
                                <li class="active"> Edit Subscription</li>
                            </ol>
                       
                    </div>

                     
                </div>
                <div class="row">
				
				
                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								<h4>Package Details:</h4>
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Package Id</label>
                                    	<input type="text" class="form-control" placeholder="Package Id" name="pkg_id"  required maxlength="100" value="<?php echo $subscription['pkg_id']; ?>" />
                                    </div>
									</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Title</label>
                                    	<input type="text" class="form-control" placeholder="Title" name="title"  required maxlength="100" value="<?php echo $subscription['title']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Description</label>
										
                                        <input type="text" name="description" class="form-control" value="<?php echo $subscription['description']; ?>" required>
                                    	
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Type</label>
										<select class="form-control" name="type" required>
										<option value="">Select</option>
										<option value="Free"  <?php if($subscription['type']=='Free'){ echo "selected"; } ?>>Free</option>
										<option value="Paid"  <?php if($subscription['type']=='Paid'){ echo "selected"; } ?>>Paid</option>
										</select>
                                    	
                                    </div>
									</div>
									
									
									  
									
									
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Price/Month</label>
                                        <input type="text" class="form-control" placeholder="Price/Month" name="price_m"  required maxlength="10"  value="<?php echo $subscription['price_m']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Price/Quarter</label>
                                        <input type="text" class="form-control" placeholder="Price/Quarter" name="price_q"  required maxlength="10"  value="<?php echo $subscription['price_q']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Price/Half Year</label>
                                        <input type="text" class="form-control" placeholder="Price/Half Year" name="price_h"  required maxlength="10"  value="<?php echo $subscription['price_h']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Price/Year</label>
                                        <input type="text" class="form-control" placeholder="Price/Year" name="price_y"  required maxlength="10" value="<?php echo $subscription['price_y']; ?>" />
                                    </div>
									</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Credits</label>
                                        <input type="text" class="form-control" placeholder="Credits" name="credits"  required  value="<?php echo $subscription['credits']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="Active" <?php if($subscription['status']=='Active'){ echo "selected"; } ?>>Active</option>
                                            <option value="Inactive" <?php if($subscription['status']=='Inactive'){ echo "selected"; } ?>>Inactive</option>
                                            
                                        </select>
                                    </div>
                                </div>
									
									<h4>Features:</h4>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Membership Type</label>
                                        <input type="text" class="form-control" placeholder="Membership Type" name="membership_type"  required value="<?php echo $subscription['membership_type']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Product/Service Uploads</label>
                                        <input type="text" class="form-control" placeholder="Product/Service Uploads" name="product_uploads"  required  value="<?php echo $subscription['product_uploads']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
									 <span class="eagle-check-description">Customer Support:</span>
                                       <label class="eagle-check custom-checkbox">


<input class="eagle-check-input" type="checkbox" value="1" name="customer_support" <?php if($subscription['customer_support']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>
</label>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Guaranteed Shop (Guarantee Icon):</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="guarantee_icon" <?php if($subscription['guarantee_icon']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
									 <span class="eagle-check-description">Send Notifications:</span>
                                       <label class="eagle-check custom-checkbox">


<input class="eagle-check-input" type="checkbox" value="1" name="send_notifications" <?php if($subscription['send_notifications']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>
</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
									 <span class="eagle-check-description">Lead Enquiries via SMS and Calls:</span>
                                       <label class="eagle-check custom-checkbox">


<input class="eagle-check-input" type="checkbox" value="1" name="lead_enquiries" <?php if($subscription['lead_enquiries']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>
</label>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Homepage Featured Products:</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="homepage_feature_products" <?php if($subscription['homepage_feature_products']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
									 <span class="eagle-check-description">Social Media Product Ads:</span>
                                       <label class="eagle-check custom-checkbox">


<input class="eagle-check-input" type="checkbox" value="1" name="social_media_products" <?php if($subscription['social_media_products']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>
</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
									 <span class="eagle-check-description">Searh Result Promoted Products:</span>
                                       <label class="eagle-check custom-checkbox">


<input class="eagle-check-input" type="checkbox" value="1" name="search_result_promoted_products" <?php if($subscription['search_result_promoted_products']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>
</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Product/Service Upload Assist:</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="product_upload_assist" <?php if($subscription['product_upload_assist']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Request for Quotations:</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="request_for_quotations" <?php if($subscription['request_for_quotations']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Service Booking Confirmation:</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="service_booking_confirmation" <?php if($subscription['service_booking_confirmation']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Homepage Banner:</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="homepage_banner" <?php if($subscription['homepage_banner']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                    <span class="eagle-check-description">Category Banner:</span>   <label class="eagle-check custom-checkbox">
									   
<input class="eagle-check-input" type="checkbox" value="1" name="category_banner" <?php if($subscription['category_banner']==1){ echo "checked"; } ?>>
<span class="eagle-check-indicator"></span>

</label>
                                    </div>
									</div>
									
									
									
									
									
                                   <div style="text-align:center">
                                     <div class="form-group">
									 <input type="hidden" name="subscription_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Subscription</button>
									
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

<script>
$('input[name="price_m"]').keyup(function(e)
{
  if (/\D/g.test(this.value))
  {   
    this.value = this.value.replace(/\D/g, '');
  }
  
});
$('input[name="price_q"]').keyup(function(e)
{
  if (/\D/g.test(this.value))
  {   
    this.value = this.value.replace(/\D/g, '');
  }
  
});
$('input[name="price_h"]').keyup(function(e)
{
  if (/\D/g.test(this.value))
  {   
    this.value = this.value.replace(/\D/g, '');
  }
  
});
$('input[name="price_y"]').keyup(function(e)
{
  if (/\D/g.test(this.value))
  {   
    this.value = this.value.replace(/\D/g, '');
  }
  
});
$('input[name="credits"]').keyup(function(e)
{
  if (/\D/g.test(this.value))
  {   
    this.value = this.value.replace(/\D/g, '');
  }
  
});
</script>

</body>

</html>