<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
    <title><?php echo $settings['meta_title']; ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo $settings['meta_keywords']; ?>" />
    <meta name="description" content="<?php echo $settings['meta_description']; ?>">
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
	<div class="main-container container">
		
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<h3>Got Questions? We've Got Answers!</h3>
				<p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Allamco laboris nisi ut aliquip ex ea commodo consequat. Aser velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum.</p>
				<p>
					<br>
				</p>
				<div class="row">
					<div class="col-sm-12">
						<ul class="yt-accordion">
                        <?php foreach($faqs as $faq){ ?>
							<li class="accordion-group">
								<h3 class="accordion-heading"><i class="fa fa-plus-square"></i><span><?php echo $faq['faq_name']; ?></span></h3>
								<div class="accordion-inner">
									<?php echo $faq['description']; ?>
								</div>
							</li>
						<?php } ?>
						</ul>
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