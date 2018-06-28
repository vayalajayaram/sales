<!DOCTYPE html>
<html lang="en">
   <head>
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
      <!-- Favicon
         ============================================ -->
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
   <body class="res layout-subpage banners-effect-6">
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
         <?php include('header.php') ?>
         <!-- //Header Container  -->
         <!-- Main Container  -->
         <div class="main-container container">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li>My Campaign</li>
            </ul>
            <!--Middle Part End-->
            <div class="row">
                 <?php include('leftside.php') ?>
               <div class="col-sm-9 col-md-9 col-xs-12  profiel-container">

                <div class="col-sm-12" style="margin-bottom: 10px;">
                  <div class="row">
                    <div class="bottom-form pull-right">
                      <a href="<?php echo base_url(); ?>addcampaign" class="btn btn-success"><i class="fa fa-plus-circle"></i> ADD NEW</a>
                    </div>
                  </div>
                </div>

                  <div class="row clearfix">
                     <?php foreach($campaigns as $campaign){ ?>
                     <div class="col-md-12">
                        <div class="col-md-3 col-sm-4 wrimagecard wrimagecard-topimage">
                           <div class="row">
                              <a href="#">
                                 <div class="wrimagecard-topimage_header" style="">
                                    <center><i class="fa fa-calendar" style="color:#795a47"> </i></center>
                                 </div>
                                 <div class="wrimagecard-topimage_title">
                                  <?php  echo $campaign['date']; ?>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-9 col-sm-3">
                           <div class="row citydtl">
                              <div class="col-xs-6">
                                 <div class="city">
                                    <i class="fa fa-map-marker"></i><span>
                                     <?php 
                                     $cmval=explode(",",$campaign['city']);
                                     $count1=count($cmval);
                                     $cnt=1;
                                     foreach ($cities as $city) {

                                       if (in_array($city['c_id'], $cmval)){

                                          echo $city['city_name']; if($cnt<$count1){ echo " , "; }
                                       $cnt++; }
                                     } ?>
                                   </span>
                                 </div>
                              </div>
                             

                              <div class="col-xs-4">
                                 <div class="area">
                                    <i class="fa fa-globe"></i><a> <?php  echo $campaign['website']; ?></a>
                                 </div>
                              </div>

                              <div class="col-xs-2">
                                 <div class="count">
                                    <i class="fa fa-hourglass-start"></i><span> <?php  echo $campaign['number']; ?></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row discription1">
                              <div class="col-md-12">
                                 <?php  echo $campaign['message']; ?>
                                 <div>
                                 <strong>Status</strong> : <?php  if($campaign['status']==1){ echo "Active"; } else { echo "In-active"; } ?>
                               <?php  if($campaign['admin_message']!=""){ ?>  &nbsp; &nbsp;   <strong>Admin Message</strong> :  <?php  echo $campaign['admin_message']; ?> <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- //Main Container -->
      <!-- Footer Container -->
      <?php include('footer.php') ?> 
      <!-- //end Footer Container -->
      </div>
      <!-- modal -->
      <?php include('social.php') ?>
      <?php include('modal-popup.php') ?>  
      <!-- end modal -->
      <!-- Cpanel Block -->
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
      <!-- Theme files
         ============================================ -->
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/so_megamenu.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/addtocart.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/application.js"></script>
      <?php include_once("footersearch.php"); ?>
      <script type='application/ld+json'>
         {
         
             "@context": "http://schema.org",
             "@type": "Organization",
             "name": "eganacsi",
             "url": "http://krivi.website/egn/",
             "logo": "http://krivi.website/egn/img-ig/logo.png",
             "foundingDate": "2017",
             "parentOrganization": [{
                 "@type": "Organization",
                 "name": "eganacsi"
             }],
         
             "address": {
                 "type": "PostalAddress",
                 "streetAddress": "3rd Floor Karle Premium",
                 "addressLocality": "#",
                 "addressRegion": "Hyderabad ",
                 "postalCode": "500 032",
                 "addressCountry": "INDIA"
             },
             "contactPoint": [{
                 "@type": "ContactPoint",
                 "telephone": "+91 99 62 62 53 63",
                 "contactType": "Customer Service ( Call Center)",
                 "email": "eganacsi@gmail.com"
             }],
             "sameAs": [
                   "http://www.facebook.com/eganacsi/",
                   "http://instagram.com/eganacsi/",
                   "http://www.linkedin.com/in/eganacsi/",
                   "http://plus.google.com/eganacsi/"
                 ]
         }
      </script>
   </body>
</html>