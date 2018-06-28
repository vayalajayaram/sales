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
  <body class="faq_page">
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
                <li><strong>Testimonials</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End -->

          <div class="container">
            <div class="row">
              <div class="col-md-12">.
			  <?php 
			  $cnt=1;
			  foreach($testimonials as $testimonial){ ?>
               
				
                <div class="thumbnail adjust1 clearfix">
                  <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-circle img-responsive" src="images/about-us/testimonial.png"> </div>
                  <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="caption">
                      <p class="">"<?php echo $testimonial['description']; ?>"</p>

                      
                      <p class="rig"><strong><?php echo $testimonial['name']; ?></strong></p>
                    </div>
                  </div>
                </div>
				
				<?php $cnt++; } ?>
                
                
                
                
                
              </div>


              <!-- End Testimonials Box --> 
              <!-- Latest news start -->
            </div>
          </div>
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