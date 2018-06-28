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
                                    <a href="<?php echo base_url(); ?>admin/sellers">
                                         Sellers
                                    </a>
                                </li>
                                <li class="active"> Edit Seller</li>
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
                                        <label>Company Name</label>
                                    	<input type="text" class="form-control" placeholder="Company Name" name="company"  required maxlength="100" value="<?php echo $seller['company']; ?>" />
                                    </div>
									</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Seller Credits</label>
                                    	<input type="text" class="form-control" placeholder="Seller Credits" name="credits"  required value="<?php echo $seller['credits']; ?>" />
                                    </div>
									</div>
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                       <label>Approved</label>
                                    	<select class="form-control"  name="approved" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($seller['approved']==1){ echo "selected"; } ?> >Yes</option>
                                            <option value="0" <?php if($seller['approved']==0){ echo "selected"; } ?>>No</option>                                            
                                        </select>
                                    </div>
									</div>
								
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>First Name</label>
                                    	<input type="text" class="form-control" placeholder="First name" name="fname"  required maxlength="100" value="<?php echo $seller['first_name']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Last Name</label>
                                    	<input type="text" class="form-control" placeholder="Last name" name="lname" maxlength="100" required value="<?php echo $seller['last_name']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Email</label>
                                    	<input type="text" class="form-control" placeholder="Email" name="email"   required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $seller['email']; ?>" />
                                    </div>
									</div>
									
									
									  
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>City</label>
                                        <select class="form-control" name="city" id="city" required>
                                            <option value="">Please select</option>
											<?php foreach($cities as $city){ ?>
                                            <option value="<?php echo $city['c_id']; ?>" <?php if($seller['city']==$city['c_id']){ echo "selected"; } ?> ><?php echo $city['city_name']; ?></option>
                                            <?php } ?>                                            
                                        </select>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Area</label>
                                        <select class="form-control" name="area" id="area" required>
                                            <option value="">Please select</option>                                           
                                            
                                        </select>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Address 1</label>
                                    	<textarea class="form-control" name="address1" required><?php echo $seller['address1']; ?></textarea>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Address 2</label>
                                    	<textarea class="form-control" name="address2" ><?php echo $seller['address2']; ?></textarea>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Phone</label>
                                    	<input type="text" class="form-control" placeholder="Phone" name="phone"  required maxlength="10" pattern="[0-9]{10}" value="<?php echo $seller['phone']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Image</label>
                                    	
										<input type="file" name="image" class="form-control"><img src="<?php echo base_url(); ?><?php echo $seller['image']; ?>" width="50">
                                    </div>
									</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Verified</label>
                                    	<select class="form-control"  name="ticks" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($seller['ticks']==1){ echo "selected"; } ?> >Yes</option>
                                            <option value="0" <?php if($seller['ticks']==0){ echo "selected"; } ?>>No</option>                                            
                                        </select>
                                    </div>
									</div>
									
									
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($seller['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="0" <?php if($seller['status']==0){ echo "selected"; } ?>>Inactive</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                   <div style="text-align:center">
                                     <div class="form-group">
									 <input type="hidden" name="seller_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Seller</button>
									
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

<script type="text/javascript">


  $("select[name='city']").change(function(){
      var cid = $(this).val();  
	   var area = '<?php echo $seller['area'] ?>';
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_city",
          method: 'POST',
           data: {city:cid,area:area},
          success: function(data) {			
          $("#area").html(data);
          }
      });
  });
  
  $(document).ready(function(){
	  var cid = $("#city").val();
	  var area = '<?php echo $seller['area'] ?>';  
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_city",
          method: 'POST',
          data: {city:cid,area:area},
          success: function(data) {	
		  	
          $("#area").html(data);
          }
      });
	  });
  
$('input[name="phone"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});
$('input[name="credits"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});
</script>

</body>

</html>