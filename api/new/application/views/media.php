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
                <li><strong>In The Media
</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End -->
      <div class="container">
        <div class="row">
          <div class="faq-page" style="width:100%">
            <div class="col-xs-12">
              <div class="page-title">
                <h2>In The Media
</h2>
              </div>
            </div>
            <div class="col-xs-12 col-sm-9">
              <div class="panel-group accordion-faq" id="faq-accordion">
			  <?php 
			  $cnt=1;
			  foreach($media as $mda){ ?>
                <div class="panel">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question<?php echo $cnt; ?>"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span><?php echo $mda['media_name']; ?> </a> </div>
                  <div id="question<?php echo $cnt; ?>" class="panel-collapse collapse">
                    <div class="panel-body"> 
					<?php echo $mda['description']; ?>
                    </div>
                  </div>
                </div>
				<?php $cnt++; } ?>
                
                
                
                
                
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="content-box color-effect-1">
                <h3>One More Question?</h3>
                <div class="box-icon-wrap box-icon-effect-1 box-icon-effect-1a">
                  <div class="box-icon"><i class="fa fa-question"></i></div>
                </div>
                <p>If you have more questions, send us a message and we will answer you as soon as possible.</p>

                <div class="text-left faqi">
                  <span class="fa fa-envelope"> <b><?php echo $settings['email']; ?><b></span>

                  <span class="fa fa-phone"> <b><?php echo $settings['mobile']; ?><b></span>
                </div>
              </div>
            </div>
          </div>
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