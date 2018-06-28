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
	  <link href="<?php echo base_url(); ?>plugins/raty/jquery.raty.css" rel="stylesheet" />
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
                        <li><strong>My Reviews</strong></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <!-- Breadcrumbs End --> 
         <!-- Main Container -->
         <div class="container myreviews">
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
               <div class="col-sm-8 col-md-8 col-xs-12 profiel-container">
			   <?php  foreach($myreviews as $review){
				 
				    ?>
                  <div class="row-fluid">
                     <!--/col-sm-6-->
                     <div class="col-sm-12">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <span itemscope itemtype="http://schema.org/Review">
                              <h3 class="panel-title" itemprop="name"><?php echo $review['summary']; ?></h3>
                           </div>
                           <!--/panel-heading-->
                           <div class="panel-body" itemprop="reviewBody">
                            <div id="readOnly<?php echo $review['r_id'] ?>"></div>

                              <p><?php echo $review['description']; ?>
                              </p>
                              <div class="pull-right">
                                <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                                 <small>
                                    <span itemprop="name">-- <?php echo $review['name']; ?></span>
                              </span>
                              <!--/author schema -->
                              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                              <meta itemprop="datePublished" content="01-01-2016"><?php echo $review['created']; ?>
                              <span class="pull-right">
                              <span class="reviewRating" itemscope itemtype="http://schema.org/Rating">
                              <meta itemprop="worstRating" content="1">
                              
                              </span><!--/reviewRating-->
                              </div>
                              
                              </small>
                           </div>
                           <!--/panel-body-->
                           
                           <!--/panel-footer-->
                        </div>
                        <!--/panel-->
                     </div>
                     <!--/col-sm-6-->
                  </div>
                  <!--/row (1) -->
                  <hr />
                <?php } ?>
                   <?php if(count($myreviews)==0){ ?> No Reviews <?php } ?>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- Section: services -->
         <!-- /Section: services --> 
         <!-- Footer -->
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
	  <script src="<?php echo base_url(); ?>plugins/raty/jquery.raty.js"></script>
	   <script>
$.fn.raty.defaults.path = '<?php echo base_url(); ?>plugins/raty/images';


$('#default').raty();
$('#score').raty({ score: 0 });
$('#score-callback').raty({
    score: function() {
        return $(this).attr('data-score');
    }
});

$('#half').raty({
    half  : true,
    score    : 2.5,
    hints : [['bad 1/2', 'bad'], ['poor 1/2', 'poor'], ['regular 1/2', 'regular'], ['good 1/2', 'good'], ['gorgeous 1/2', 'gorgeous']]
});
</script>
<?php foreach($myreviews as $rew1){ ?>
<script>
$('#readOnly<?php echo $rew1['r_id'] ?>').raty({ readOnly: true, score: <?php echo $rew1['rating'] ?> });
</script>
<?php } ?>
   </body>
</html>