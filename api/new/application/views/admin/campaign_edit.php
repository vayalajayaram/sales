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
                                    <a href="<?php echo base_url(); ?>admin/campaigns">
                                         Campaigns
                                    </a>
                                </li>
                                <li class="active"> Edit Campaign</li>
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
                                        <label>Seller Name</label> :
                                    	<?php echo $campaign['first_name']; ?> <?php echo $campaign['last_name']; ?>
                                    </div>
									</div>
								
								
									
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Email</label> :
                                    	<?php echo $campaign['email']; ?>
                                    </div>
									</div>
									
									
									  
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>City</label> :  <?php $count1=count($city); $cnt=1; foreach ($city as $city1) {
                                        echo $city1['city_name']; if($cnt<$count1){ echo " , "; }
                                       $cnt++; }  ?>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Area</label>: <?php echo $area['area_name']; ?>
                                    </div>
									</div>
									
									
									
									
									<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Phone</label>: <?php echo $campaign['phone']; ?>
                                    	
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Campaign Count</label>: <?php echo $campaign['number']; ?>
                                    	
										
                                    </div>
									</div>
									
									<div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="form-group">
                                        <label>Campaign Message</label>: <?php echo $campaign['message']; ?>
                                    	
										
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($campaign['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="0" <?php if($campaign['status']==0){ echo "selected"; } ?>>Inactive</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Message</label>
                                        <textarea  class="form-control" name="admin_message"><?php echo $campaign['admin_message']; ?></textarea>
                                        
                                    </div>
                                </div>
                                   <div style="text-align:center">
                                     <div class="form-group">
									 <input type="hidden" name="campaign_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Campaign</button>
									
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
</script>

</body>

</html>