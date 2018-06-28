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
	<div class="main-container container">
		
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-title">
					<h2>Contact Us</h2>
				</div>
				
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7612.978417917968!2d78.448335!3d17.436284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87a28da16c51358e!2siGRAND+IT+Solutions+Private+Limited!5e0!3m2!1sen!2sin!4v1516367489660" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="info-contact clearfix">
					<div class="col-lg-4 col-sm-4 col-xs-12 info-store">
						<div class="row">
							<div class="name-store">
								<h3>Your Store</h3>
							</div>
							<address>
								<div class="address clearfix form-group">
									<div class="icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="text"><?php echo $content['description']; ?></div>
								</div>
								<div class="phone form-group">
									<div class="icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="text">Phone : <?php echo $settings['phone']; ?> </div>
								</div>
								
							</address>
						</div>
					</div>
					<div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
							<fieldset>
								<legend>Contact Form</legend>
								<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-name">Your Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" value="" id="input-name" class="form-control" required>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
								<div class="col-sm-10">
									<input type="email" name="email" value="" id="input-email" class="form-control" required>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
									<div class="col-sm-10">
										<textarea name="message" rows="10" id="input-enquiry" class="form-control" required></textarea>
									</div>
								</div>
							</fieldset>
							<div class="buttons">
								<div class="pull-right">
									<button class="btn btn-default buttonGray" type="submit">
										<span>Submit</span>
									</button>
								</div>
							</div>
						</form>
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