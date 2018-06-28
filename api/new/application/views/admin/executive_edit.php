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
                    <h2>Edit Executive</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Executives</li>
                    </ol>
                </div>
                <div class="row">
				
				
                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>First Name</label>
                                    	<input type="text" class="form-control" placeholder="First name" name="fname"  required value="<?php echo $executive['first_name']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Last Name</label>
                                    	<input type="text" class="form-control" placeholder="Last name" name="lname"  required value="<?php echo $executive['last_name']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Email</label>
                                    	<input type="email" class="form-control" placeholder="Email" name="email"  required value="<?php echo $executive['email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                    </div>
									</div>
									  
									  <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Phone Number</label>
                                    	<input type="text" class="form-control" placeholder="Phone Number" name="phone"  required value="<?php echo $executive['phone']; ?>" maxlength="10" pattern="[0-9]{10}" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Alternate Phone</label>
                                    	<input type="text" class="form-control" placeholder="Alternate Phone" name="altphone"  required value="<?php echo $executive['alt_phone']; ?>" maxlength="10" pattern="[0-9]{10}" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Executive Code</label>
                                    	<input type="text" class="form-control" placeholder="Executive Code" name="code" required value="<?php echo $executive['code']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Id Proof</label>
                                    	<input type="file" class="form-control" name="id_proof"  />
										(Image Size Should be 550px*550px)
										<img src="<?php echo base_url().$executive['id_proof']; ?>" width="100">
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Address Proof</label>
                                    	<input type="file" class="form-control" name="address_proof"  />
										(Image Size Should be 550px*550px)
										<img src="<?php echo base_url().$executive['address_proof']; ?>" width="100">
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">									                                  
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control"  name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($executive['status']==1){ echo "selected"; } ?> >Enable</option>
                                            <option value="0" <?php if($executive['status']==0){ echo "selected"; } ?> >Disabled</option>                                            
                                        </select>
                                    </div>
                                </div>
                                          
                                     <div class="form-group">
									 <input type="hidden" name="executive_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Executive</button>
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
<script src="<?php echo base_url(); ?>plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/ckeditor.js"></script>

<script type="text/javascript">


  $("select[name='category']").change(function(){
      var category = $(this).val();
   
      $.ajax({
          url: "<?php echo base_url();?>/admin/products/ajax_subcat",
          method: 'POST',
          data: {category:category},
          success: function(data) {
          $("#subcategory").html(data);
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
$('input[name="altphone"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});
</script>

</body>

</html>