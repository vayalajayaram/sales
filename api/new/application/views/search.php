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
      <link rel="shortcut icon" href="img-ig/favicon.ico">
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
            <ul class="breadcrumb">
               <li><a href="<?php  echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li>Search</li>
            </ul>
            <div class="row">
               <!--Middle Part Start-->
               <!--Right Part Start -->
               
               <!--Right Part End -->
               <div id="content" class="col-md-12 col-sm-8">
                  <div class="products-category">
                     
                     <!--- Subcategories - -->
                     
                     <!---//Subcategories - -->
                     <!-- Filters -->
                     <div class="product-filter filters-panel">
                        <div class="row">
                           <div class="col-md-2 visible-lg">
                              <div class="view-mode">
                                 <div class="list-view">
                                    <button class="btn btn-default grid " data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list active" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                 </div>
                              </div>
                           </div>
                           <div class="short-by-show form-inline text-right col-md-10 col-sm-10 col-xs-12">
                              <div class="form-group short-by">
                                 <label class="control-label" for="input-sort">Sort By:</label>
                                 <select id="input-sort" class="form-control">
                                    <option value="" selected="selected">Default</option>
                                    <option value="">Name (A - Z)</option>
                                    <option value="">Name (Z - A)</option>
                                    <option value="">Price (Low &gt; High)</option>
                                    <option value="">Price (High &gt; Low)</option>
                                    <option value="">Rating (Highest)</option>
                                    <option value="">Rating (Lowest)</option>
                                    <option value="">Model (A - Z)</option>
                                    <option value="">Model (Z - A)</option>
                                 </select>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     <!-- //end Filters -->
                     <!--changed listings-->
                     <div class="products-list row list">
					 <?php foreach($resultsearch as $product){ ?>
                        <div class="product-layout col-md-3 col-sm-6 col-xs-6">
                           <div class="product-item-container">
                              <div class="left-block">
                                 <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$product['product_name'])); ?>/<?php echo $product['product_id']; ?>/" class="product-image-container lazy second_img ">
                                   
									<img class="img-responsive" alt="<?php echo $product['product_name']; ?>" src="<?php echo base_url(); ?><?php echo $product['product_image']; ?>" data-src="<?php echo base_url(); ?><?php echo $product['product_image']; ?>">
<img class="img_0 img-responsive" alt="<?php echo $product['product_name']; ?>" src="<?php echo base_url(); ?><?php echo $product['product_image']; ?>" data-src="<?php echo base_url(); ?><?php echo $product['product_image']; ?>">
                                    
                                 </a>
                                 <!--Sale Label-->
                                 <!--full quick view block-->
                                 
                                 <!--end full quick view block-->
                              </div>
                              <div class="right-block">
                                 <div class="caption">
                                    <h4><a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$product['product_name'])); ?>/<?php echo $product['product_id']; ?>/"><?php echo $product['product_name']; ?></a></h4>
                                    <div class="ratings">
                                       <div class="rating-box">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                       </div>
                                    </div>
                                    <div class="price">
                                       <span class="price-new"> Rs.<?php echo $product['product_price']; ?></span>
                                       <span class="price-old">र <?php echo $product['discount_price']; ?></span>    
                                       <span class="label label-percent">-<?php echo $product['discount_percent']; ?>%</span>    
                                    </div>
                                    
                                 </div>
                                 <div class="button-group">
                                    <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$product['product_name'])); ?>/<?php echo $product['product_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                    <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                 </div>
                              </div>
                              <!-- right block -->
                           </div>
                        </div>
						<?php } ?>
                        
						 <?php foreach($resultsearch1 as $service){ ?>
                       <div class="product-layout col-md-3 col-sm-6 col-xs-6">
                          <div class="product-item-container">
                            <div class="left-block">
                              <div class="product-image-container second_img ">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$service['service_name'])); ?>/<?php echo $service['service_id']; ?>/">
                                <img src="<?php echo base_url().$service['product_image']; ?>"  alt="<?php echo $service['service_name']; ?>" class="img-responsive" />
                                <img src="<?php echo base_url().$service['product_image']; ?>"  alt="<?php echo $service['service_name']; ?>" class="img_0 img-responsive" />
                                </a>
                              </div>
                              <!--Sale Label-->
                              <span class="label label-sale"><?php echo $service['discount_percent']; ?>% off</span>
                              <!--full quick view block-->
                             
                              <!--end full quick view block-->
                            </div>
                            <div class="right-block">
                              <div class="caption">
                                <h4><a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$service['service_name'])); ?>/<?php echo $service['service_id']; ?>/"><?php echo $service['service_name']; ?></a></h4>
                                <div class="ratings">
                                  <div class="rating-box">
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                  </div>
                                </div>
                                <div class="price">
                                  <span class="price-new"> Rs.<?php echo $service['discount_price']; ?></span> 
                                  <span class="price-old">&#2352; <?php echo $service['price']; ?></span>     
                                </div>
                              </div>
                              <div class="button-group">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$service['service_name'])); ?>/<?php echo $service['service_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                              </div>
                            </div>
                            <!-- right block -->
                          </div>
                        </div>
                       <?php } ?>  
                        
                        
                        
                        
                     </div>
                     <!--// End Changed listings-->
                     <!-- Filters -->
                     <div class="product-filter product-filter-bottom filters-panel" >
                        <div class="row">
                           <div class="col-md-2 hidden-sm hidden-xs">
                           </div>
                           
                           
                        </div>
                     </div>
                     <!-- //end Filters -->
                  </div>
               </div>
            </div>
            <!--Middle Part End-->
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
      
      <script type="text/javascript"><!--
         // Check if Cookie exists
          if($.cookie('display')){
            view = $.cookie('display');
          }else{
            view = 'grid';
          }
          if(view) display(view);
         //-->
      </script> 
   
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