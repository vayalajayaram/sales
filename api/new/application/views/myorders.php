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
              <li><strong>My Order</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <section class="main-container col2-right-layout">
      <div class="main container">
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
          <div class="col-main col-md-9 col-sm-8 col-xs-12">
            <div class="my-account">
              <div class="page-title">
                <h2>My Order</h2>
              </div>
              <div class="wishlist-item table-responsive">
                <table class="col-md-12">
                  <thead>
                    <tr>
                      <th class="">ORDER NUMBER</th>
                      <th class="">ORDER DATE</th>
                      <th class="">PAYMENT METHOD</th>
                      <th class="">STATUS</th>
                      <th class="">TOTAL</th>
                      <th class="">Action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php foreach($orders as $order){ ?>
                    <tr>
                      <td class="th-price">RTD<?php echo $order['order_id'] ?></td>
                      <td class=""><?php echo $order['order_date'] ?></td>
                      <td class=""><?php echo $order['payment_mode'] ?></td>
                      <td class=""><span class="label label-success lb-lg"><?php echo $order['order_status'] ?></span></td>
                      <td class="">र <?php echo number_format($order['total_amount'],2); ?></td>
                      <td class=""><a href="<?php echo base_url() ?>vieworder/<?php echo $order['order_id'] ?>"><span class="label label-primary lb-lg">View Order</span></a></td>
                    </tr>
					<?php } ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
		</div>
    </section>
    <!-- Footer -->
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