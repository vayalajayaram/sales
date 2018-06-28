<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Basic page needs
	============================================ -->
    <title><?php echo $content['meta_title']; ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo $content['meta_keywords']; ?>" />
    <meta name="description" content="<?php echo $content['meta_description']; ?>">
    <link rel="canonical" href="http://krivi.website/egn/">
    <meta name="author" content="irah">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
     <link rel="shortcut icon" href="<?php echo base_url(); ?>img-ig/favicon.ico">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/themecss/lib.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="<?php echo base_url(); ?>css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/footer1.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/header1.css" rel="stylesheet">
		<link id="color_scheme" href="<?php echo base_url(); ?>css/theme.css" rel="stylesheet">
		
	<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
	
   
	
</head>

  <body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->
	<?php include('header.php') ?>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container clearfix">
        <div class="row">
          <div id="content" class="col-sm-12">
            <div class="about-us about-demo-1">
              <div class="row">
                <div class="col-lg-12 col-md-12 about-info">
                  <h1 class="hidden"><span>Terms & Conditions</span></h1>
                  <h2 class="about-title"><span>Terms & Conditions</span></h2>
                  <div class="about-text">
               <?php echo $content['description']; ?>
                  </div>
                                 
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	<!-- //Main Container -->


	<!-- Footer Container -->
	 <?php include('footer.php') ?>
	<!-- //end Footer Container -->

    </div>
	
	<?php include('social.php') ?>
  <?php include('modal-popup.php') ?>
<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/libs.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/application.js"></script>
	
	<?php include_once("footersearch.php"); ?>
</body>
</html>