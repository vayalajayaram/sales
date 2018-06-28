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
                                    <a href="<?php echo base_url(); ?>admin/admin_users">
                                         Admins
                                    </a>
                                </li>
                                <li class="active"> Edit Admin</li>
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
                                        <label>Name</label>
                                    	<input type="text" class="form-control" placeholder="Name" name="name"  required maxlength="100" value="<?php echo $admin['admin_name']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                        <label>Email</label>
                                    	<input type="text" class="form-control" placeholder="Email" name="email"   required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $admin['admin_email']; ?>" />
                                    </div>
									</div>
									
									
									  
									
									
									
									
									
									
									
									
									<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Phone</label>
                                    	<input type="text" class="form-control" placeholder="Phone" name="phone"  required maxlength="10" pattern="[0-9]{10}" value="<?php echo $admin['admin_mobile']; ?>" />
                                    </div>
									</div>
									
									
									
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" size="1" name="type" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($admin['user_type']==1){ echo "selected"; } ?> >Super Admin</option>
                                            <option value="0" <?php if($admin['user_type']==0){ echo "selected"; } ?> >Admin User</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <?php $chv=explode(",",$admin['allow_to_use']); ?>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                        <label>Allow To Use</label>
                                    	<ul class="list-inline">
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="categories"
                                                     <?php  if(in_array('categories',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Categories</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="city"   <?php  if(in_array('city',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">City,Area</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox"  class="eagle-check-input" name="chval[]" value="faqs"   <?php  if(in_array('faqs',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Faqs</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="banners"   <?php  if(in_array('banners',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Banners</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="collections"   <?php  if(in_array('collections',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Collections</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="customers"   <?php  if(in_array('customers',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Customers</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="sellers"   <?php  if(in_array('sellers',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Sellers</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="subscriptions"   <?php  if(in_array('subscriptions',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Subscriptions</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="subscribers"   <?php  if(in_array('subscribers',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Subscribers</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="sliders"   <?php  if(in_array('sliders',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Sliders</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <ul class="list-inline">
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="leads"   <?php  if(in_array('leads',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Leads</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox" class="eagle-check-input" name="chval[]" value="campaigns"   <?php  if(in_array('campaigns',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Campaigns</span>
                                                </label>
                                            </li>
                                            <li class="eagle-checkbox">
                                                <label class="eagle-check custom-checkbox">
                                                    <input type="checkbox"  class="eagle-check-input" name="chval[]" value="settings"   <?php  if(in_array('settings',$chv,true)){ echo "checked"; } ?>>
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Website Settings</span>
                                                </label>
                                            </li>
                                            
                                            
                                            
                                            
                                        </ul>
                                    </div>
									</div>
                                   <div style="text-align:center">
                                     <div class="form-group">
									 <input type="hidden" name="admin_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Admin</button>
									 
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
  
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_city",
          method: 'POST',
          data: {city:cid},
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