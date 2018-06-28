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

    <!--THIS PAGE LEVEL CSS-->
    <link href="<?php echo base_url(); ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!--REQUIRED THEME CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themes/main_theme.css" rel="stylesheet" />

   
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
                    <h2>Website Settings</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Website Settings</li>
                    </ol>
                </div>
				<?php if($this->session->flashdata("success")){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
<button class="close" aria-label="Close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
 <?php echo $this->session->flashdata("success"); ?>
</div>
<?php } ?>
                <div class="card">
                            
                            <div class="body">
							<div class="demo-masked-input">
                                <form  method="post" enctype="multipart/form-data">
								
								 <div class="form-group">
                                        <label>Company Name</label>
                                    	<input type="text" class="form-control" placeholder="Company name" name="name"  required value="<?php echo $settings['company_name']; ?>" />
                                    </div>
									
								<div class="form-group">
                                    <label>Logo</label>                                    	
									<input type="file" name="image" class="form-control">
									(Logo Size should be 182px*65px)<img src="<?php echo base_url().$settings['logo']; ?>">
                                 </div>
								 
								<div class="form-group">
                                    <label>Small Logo</label>                                    	
									<input type="file" name="logo" class="form-control">
									(Logo Size should be 182px*65px)<img src="<?php echo base_url().$settings['another_logo']; ?>">
                                 </div>
                                    									
                                   <div class="form-group">
                                        <label>Address</label>
                                    	
										<textarea name="address" class="form-control" required><?php echo $settings['address']; ?></textarea>
                                    </div>
									
									 <div class="form-group">
                                        <label>Phone Number</label>
										
               <!-- <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00" >-->
			   <input type="text" class="form-control" placeholder="Phone Number" name="phone"  required value="<?php echo $settings['phone']; ?>" maxlength="12" />												
														
                         </div>
						 
						 <div class="form-group">
                                        <label>Mobile Number</label>
										
               <!-- <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00" >-->
			   <input type="text" class="form-control" placeholder="Mobile Number" name="mobile"  required value="<?php echo $settings['mobile']; ?>" maxlength="14" />												
														
                         </div>
									
									<div class="form-group">
                                        <label>Email</label>
                                    	<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $settings['email']; ?>"  required />
                                    </div>
									
									 <div class="form-group">
                                        <label>Payment Method</label>
                                    	<?php  
										$payment_method = explode(",", $settings['payment_method']);
										
										 ?>
										<select name="payment_method[]" class="form-control" multiple >
										<option value="Cash_On_Delivery" <?php for($i=0;$i<count($payment_method);$i++){ if($payment_method[$i]=="Cash_On_Delivery"){ echo "selected"; } } ?> >Cash On Delivery</option>
										<option value="Card_On_Delivery" <?php for($i=0;$i<count($payment_method);$i++){ if($payment_method[$i]=="Card_On_Delivery"){ echo "selected"; } } ?>>Card On Delivery</option>
										<option value="Online_Payment" <?php for($i=0;$i<count($payment_method);$i++){ if($payment_method[$i]=="Online_Payment"){ echo "selected"; } } ?>>Online Payment</option>
										</select>
                                    </div>
									
									
									
									<div class="form-group">
                                        <label>Facebook</label>
                                    	<input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?php echo $settings['facebook']; ?>" required />
                                    </div>
									
									<div class="form-group">
                                        <label>Twitter</label>
                                    	<input type="text" class="form-control" placeholder="Twitter" name="twitter" value="<?php echo $settings['twitter']; ?>" required />
                                    </div>
									
									<div class="form-group">
                                        <label>Google Plus</label>
                                    	<input type="text" class="form-control" placeholder="Google Plus" name="gplus" value="<?php echo $settings['gplus']; ?>" required />
                                    </div>
                                    
                                    	<div class="form-group">
                                        <label>Youtube</label>
                                    	<input type="text" class="form-control" placeholder="Youtube" name="youtube" value="<?php echo $settings['youtube']; ?>" required />
                                    </div>
									
									<div class="form-group">
                                        <label>Copy Right</label>
                                    	<input type="text" class="form-control" placeholder="Google Plus" name="copy_right" value="<?php echo $settings['copy_right']; ?>" required />
                                    </div>
									<div class="form-group">
                                        <label>Meta Title</label>
                                    	<input type="text" class="form-control" placeholder="Google Plus" name="meta_title" value="<?php echo $settings['meta_title']; ?>" required />
                                    </div>
									<div class="form-group">
                                        <label>Meta Keywords</label>
                                    
										<textarea class="form-control" name="meta_keywords"><?php echo $settings['meta_keywords']; ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label>Meta Description</label>
                                    	
										<textarea class="form-control" name="meta_description"><?php echo $settings['meta_description']; ?></textarea>
                                    </div>
									
																		 
									
                                     <div class="form-group">
									 <input type="hidden" name="settings_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Update Settings</button>
									 </div>
									 
									 							 
									 
                                    
                                </form>
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

<!-- THIS PAGE LEVEL JS -->
<script src="<?php echo base_url(); ?>plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/masked-input.js"></script>

<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
<script>
$('input[name="phone"]').keyup(function(e){
  if (/[^\d\+\ \-]/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/[^\d\+\ \-]/g, '');
  }  
});
$('input[name="mobile"]').keyup(function(e){
  if (/[^\d\+\ \-]/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/[^\d\+\ \-]/g, '');
  }  
});
$('input[name="prod_max_limit"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});

</script>
</body>

</html>