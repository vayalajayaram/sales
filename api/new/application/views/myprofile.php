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
  <body class="about_us_page">
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
      <!-- Breadcrumbs -->
      <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="<?php echo base_url(); ?>">Home</a><span>&raquo;</span></li>
                <li><strong>My Profile</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Breadcrumbs End --> 
      <!-- Main Container -->
      <div class="container">
        <div class="row">
          <aside class="sidebar col-md-3 col-sm-4 col-xs-12">
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
          <div class="col-sm-8 col-md-9 col-xs-12 profiel-container">
         
              <div class="profiel-header">
                <h3>
                  <b> PROFILE</b> <br>
                  <small>This information will let us know more about you.</small>
                </h3>
                <hr>
              </div>
              <div class="clear">
                <div class="col-sm-4">
                  <div class="picture-container">
                    <div class="picture">
                      <img src="images/about-us/team.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="profile">
                     
                    </div>
                    <!--<h6>Choose Picture</h6>-->
                    <h3><?php echo $profile['firstName']; ?> <?php echo $profile['lastName']; ?></h3>
                  </div>
                </div>
                <div class="col-sm-8 padding-top-25">
                  <div class="pp">
                    <span>Name</span>
                  </div>
                  <div class="dd">
                    <span>:</span>
                  </div>
                  <div class="aa">
                    <span><?php echo $profile['firstName']; ?> <?php echo $profile['lastName']; ?></span>
                  </div>
                  <div class="pp">
                    <span>Email</span>
                  </div>
                  <div class="dd">
                    <span>:</span>
                  </div>
                  <div class="aa">
                    <span><?php echo $profile['email']; ?></span>
                  </div>
                  <div class="pp">
                    <span>Phone</span>
                  </div>
                  <div class="dd">
                    <span>:</span>
                  </div>
                  <div class="aa">
                    <span><?php echo $profile['phone']; ?></span><br>
                  </div>
                  
                  <div class="pp">
                    <span>Address</span>
                  </div>
                  <div class="dd">
                    <span>:</span>
                  </div>
                  <div class="aa">
                    <span><?php echo $profile['address']; ?></span><br>
                  </div>
				  <div class="pp">
                    <span>City</span>
                  </div>
                  <div class="dd">
                    <span>:</span>
                  </div>
                  <div class="aa">
                    <span><?php echo $profile['city_name']; ?></span><br>
                  </div>
                  <div class="pp">
                    <span>State</span>
                  </div>
                  <div class="dd">
                    <span>:</span>
                  </div>
                  <div class="aa">
                    <span><?php echo $profile['state_name']; ?></span>
                  </div>
                </div>
                <div class="edit-btn text-left">
                  <a href="edit-profile" class="button" style="margin:10px 10px;"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Edit Profile</span></a>
                </div>
              </div>
            
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- Section: services -->
      <!-- /Section: services --> 
      <!-- Footer -->
       <?php include_once("footer.php"); ?>
      <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> 
    </div>
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
    <!-- Slider Js --> 
    <script type="text/javascript" src="js/revolution-slider.js"></script> 
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
    <!-- countdown js --> 
    <script type="text/javascript" src="js/countdown.js"></script> 
  </body>
</html>