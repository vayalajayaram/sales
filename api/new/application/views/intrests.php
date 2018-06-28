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
         <div class="main-container container towtabs">
            <!--Middle Part End-->
               <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li>Wishlist</li>
            </ul>

            <div class="row company-profile">               
                <?php include('leftside.php') ?>
              <div class="col-sm-9 col-md-9 col-xs-12">
                  <div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-heart"></i>  <span>Products Of Your Interest</span></a></li>
                      
                      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-heart"></i>  <span>Services of Your Interest</span></a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">

                      <div role="tabpanel" class="tab-pane active" id="home">
                        

                        <div class="products-list row grid">
                        <?php 
						foreach($intrests as $intrest){ 
						if($intrest['type']=="product"){
						?>
                        <div class="product-layout col-md-4 col-sm-6 col-xs-6">
                           <div class="product-item-container">
                              <div class="left-block">
                                 <a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$intrest['pname']); ?>/<?php echo $intrest['p_id']; ?>/" class="product-image-container lazy second_img  lazy-loaded">
                                    <img data-src="<?php echo base_url().$intrest['pimage']; ?>" src="<?php echo base_url().$intrest['pimage']; ?>" alt="<?php echo $intrest['pname']; ?>" class="img-responsive">
                                    <img data-src="<?php echo base_url().$intrest['pimage']; ?>" src="<?php echo base_url().$intrest['pimage']; ?>" alt="<?php echo $intrest['pname']; ?>" class="img_0 img-responsive">
                                 </a>
                                 <!--Sale Label-->
                                 <!--full quick view block-->
                                 
                                 <!--end full quick view block-->
                              </div>
                              <div class="right-block">
                                 <div class="caption">
                                    <h4><a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$intrest['pname']); ?>/<?php echo $intrest['p_id']; ?>/"><?php echo $intrest['pname']; ?></a></h4>
                                    
                                    
                                    
                                 </div>
                                 <div class="button-group">
                                    <a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$intrest['pname']); ?>/<?php echo $intrest['p_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                 
                                 
                                 </div>
                              </div>
                              <!-- right block -->
                           </div>
                        </div>
                        <?php } } ?>
                     
                     </div>

                      </div>


                      

                      <div role="tabpanel" class="tab-pane" id="messages">
                         
                         <div class="products-list row grid">
                            <?php 
						foreach($intrests as $intrest){ 
						if($intrest['type']=="service"){
						?>
                        <div class="product-layout col-md-4 col-sm-6 col-xs-6">
                           <div class="product-item-container">
                              <div class="left-block">
                                 <a href="<?php echo base_url(); ?>sdetails/<?php echo str_replace(" ","-",$intrest['pname']); ?>/<?php echo $intrest['p_id']; ?>/" class="product-image-container lazy second_img  lazy-loaded">
                                    <img data-src="<?php echo base_url().$intrest['pimage']; ?>" src="<?php echo base_url().$intrest['pimage']; ?>" alt="<?php echo $intrest['pname']; ?>" class="img-responsive">
                                    <img data-src="<?php echo base_url().$intrest['pimage']; ?>" src="<?php echo base_url().$intrest['pimage']; ?>" alt="<?php echo $intrest['pname']; ?>" class="img_0 img-responsive">
                                 </a>
                                 <!--Sale Label-->
                                 <!--full quick view block-->
                                 
                                 <!--end full quick view block-->
                              </div>
                              <div class="right-block">
                                 <div class="caption">
                                    <h4><a href="<?php echo base_url(); ?>sdetails/<?php echo str_replace(" ","-",$intrest['pname']); ?>/<?php echo $intrest['p_id']; ?>/"><?php echo $intrest['pname']; ?></a></h4>
                                    
                                    
                                    
                                 </div>
                                 <div class="button-group">
                                    <a href="<?php echo base_url(); ?>sdetails/<?php echo str_replace(" ","-",$intrest['pname']); ?>/<?php echo $intrest['p_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                 
                                 
                                 </div>
                              </div>
                              <!-- right block -->
                           </div>
                        </div>
                        <?php } } ?>
                        
                        
                        
                        
                        
                        
                     </div>
                      </div>

                    </div>
                  </div>
              </div>
            </div>


        </div><br>
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