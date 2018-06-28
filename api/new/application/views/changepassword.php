<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php echo $settings['meta_title']; ?></title>
    <meta name="description" content="<?php echo $settings['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $settings['meta_keywords']; ?>"/>
    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Style -->
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">


  </head>
  <body class="wishlist_page">
    <!-- mobile menu -->
    
        <?php include_once("mobile.php"); ?>
      <!-- end mobile menu -->
      <div id="page">
      <!-- Header -->
      <?php include_once("header.php"); ?>
      <!-- end header --> 
      <!-- Navbar -->
      <?php include_once("leftside.php"); ?>
      
      <!-- end nav --> 
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a title="Go to Home Page" href="<?php echo base_url(); ?>">Home</a><span>&raquo;</span></li>
              <li><strong>Change Password</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <section class="addressbook">
      <div class="container">
        <div class="row">
          <aside class="sidebar col-sm-3 col-xs-12">
            <div class="sidebar-account block">
              <div class="sidebar-bar-title">
                <h3>My Account</h3>
              </div>
              <div class="block-content">
                <ul>
                  <li><a href="<?php echo base_url(); ?>myprofile">Profile Information</a></li>
                  <li><a href="<?php echo base_url(); ?>myaddressbook">Address Book</a></li>
                  <li><a href="<?php echo base_url(); ?>myorders">My Orders</a></li>
                  <li><a href="<?php echo base_url(); ?>myreviews">My Reviews</a></li>
                  <li><a href="<?php echo base_url(); ?>changepassword">Change Password</a></li>
                  <li><a href="<?php echo base_url(); ?>changenumber">Change Mobile Number</a></li>
                </ul>
              </div>
            </div>
          </aside>
          <div class="col-md-6 col-sm-6 col-xs-12">
		  <form action="" method="post">
            <div class="">
              <div class="col-md-12">
                <div class="checkout-form-list">
                  <label>Old Password <span class="required">*</span></label>                   
                  <input type="password" placeholder="Old Password" name="oldpassword" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="checkout-form-list">
                  <label>New Password <span class="required">*</span></label>                    
                  <input type="password" placeholder="Password At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" name="password"  required maxlength="20" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})" title="At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character' : ''); if(this.checkValidity()) form.cpassword.pattern = this.value;">
                </div>
              </div>
              <div class="col-md-12">
                <div class="checkout-form-list">
                  <label>Confirm Password <span class="required">*</span></label>                    
                  <input type="password" placeholder="Confirm Password" name="cpassword"  required maxlength="20" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})" title="At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');">
                </div>
              </div>
			  <?php if($this->session->flashdata('error')!=""){ ?>
			  <div style="color:#F00; text-align:center"><?php echo $this->session->flashdata('error'); ?></div>
			  <?php } ?>
              <div class="col-md-12">
                <button class="button pull-right"><i class="fa fa-check"></i>&nbsp; <span>Submit</span></button>
              </div>
            </div>
			</form>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            
          </div>
        </div>
		</div>
    </section>
    <!-- Footer -->
      <?php include_once("footer.php"); ?>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> </div>
    <!-- End Footer --> 
    <!-- JS --> 
    <!-- jquery js --> 
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <!-- bootstrap js --> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <!-- owl.carousel.min js --> 
    <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
    <!-- bxslider js --> 
    <script type="text/javascript" src="js/jquery.bxslider.js"></script> 
    <!--jquery-slider js --> 
    <script type="text/javascript" src="js/slider.js"></script> 
    <!-- megamenu js --> 
    <script type="text/javascript" src="js/megamenu.js"></script> 
    <script type="text/javascript">
      /* <![CDATA[ */   
      var mega_menu = '0';
      
      /* ]]> */
    </script> 
    <!-- jquery.mobile-menu js --> 
    <script type="text/javascript" src="js/mobile-menu.js"></script> 
    <!--jquery-ui.min js --> 
    <script type="text/javascript" src="js/jquery-ui.js"></script> 
    <!-- main js --> 
    <script type="text/javascript" src="js/main.js"></script> 
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
  </body>
</html>