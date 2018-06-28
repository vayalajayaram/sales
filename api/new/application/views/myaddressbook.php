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
                <li><strong>Address Book</strong></li>
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
                  <li><a href="my-reviews.html">My Reviews</a></li>
                  <li><a href="<?php echo base_url(); ?>changepassword">Change Password</a></li>
                  <li><a href="<?php echo base_url(); ?>changenumber">Change Mobile Number</a></li>
                </ul>
              </div>
            </div>
          </aside>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="col-md-12">
                <div class="wishlist-item">
                  <a href="<?php echo base_url(); ?>addnewaddress" class="all-cart">Add New</a> 
                </div>
              </div>
			 
			  <?php foreach($address as $adds){ ?>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="hom"><?php echo $adds['title']; ?></div>
                <div class="box clearfix">
                  <div class="add">
                    <div class="chk clearfix">
                      <input name="default_address" type="checkbox" value="1" style="float:left; height:auto;" <?php if($adds['default_address']==1){ echo "checked"; } ?>>
                      <p class="ch" data-original-title="" title=""><?php echo $adds['title']; ?></p>
                    </div>
                    <div class="dtls">
                      <p>Name: <span><?php echo $adds['firstname']; ?> <?php echo $adds['lastname']; ?></span></p>
                      <P>State: <span><?php echo $adds['state_name']; ?></span></P>
                      <p>City: <span><?php echo $adds['city_name']; ?></span></p>
                      <p>Address: <span><?php echo $adds['address']; ?></span></p>
                      <p>Phone:<span><?php echo $adds['phone']; ?></span></p>
                    </div>
                  </div>
                  <div class="add2">
                    <a href="<?php echo base_url() ?>users/editaddress/<?php echo $adds['address_id']; ?>" class="btn btn-primary" data-toggle="tooltip" title="" value="92" data-original-title="Edit Address">
                    <i class="fa fa-pencil"></i>
                    </a>
                    
                    <a href="<?php echo base_url() ?>users/deleteaddress/<?php echo $adds['address_id']; ?>" class="btn btn-primary" title="Delete Address" onclick="return confirm('Are you sure you want to delete this address?');" data-original-title="Delete Address"><i class="fa fa-trash"></i></a>
                                     </div>
                </div>
              </div>
			  <?php } ?>
            </div>
          </div>
        </div>
      </section>
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