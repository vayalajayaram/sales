<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
 
    <title><?php echo  $all['data']['settings']['meta_title'] ;?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo  $all['data']['settings']['meta_keywords'] ;?>"/>
    <meta name="description" content="<?php echo  $all['data']['settings']['meta_description'] ;?>">
    <meta name="author" content="igrandhb">
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="<?php echo  $all['data']['settings']['conical'] ;?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta property="og:title" content="Bolomitrama" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url() ?>" />
    <meta property="og:image" content="<?php echo base_url() ?>assets/ico/favicon.png" />
     <!-- Google™ Analytics -->
    <?php echo $all['data']['settings']['google_analytics'];?>
    <!-- Favicon
      ============================================ -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/favicon.png">
    <!-- Google web fonts
      ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Libs CSS
      ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/themecss/lib.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <!-- Theme CSS
      ============================================ -->
    <link href="<?php echo base_url() ?>assets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/header6.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/footer3.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/extra.css" rel="stylesheet">
    <link id="color_scheme" href="<?php echo base_url() ?>assets/css/home6.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/raty/jquery.raty.css" rel="stylesheet" />
  
    
  </head>
  <body class="common-home res layout-home6">
    <div id="wrapper" class="wrapper-full banners-effect-7">
      <!-- Preloading Screen -->
      <div class="ip-header">
        <p class="ip-logo">
          <a href="index.php">
          <img src="<?php echo base_url() ?>assets/image/demo/logos/logo.png" alt="SW Shoppy">
          </a>
        </p>
        <div class="ip-loader">
          <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
            <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
            <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" style="stroke-dashoffset: 0; stroke-dasharray: 192.617;"></path>
          </svg>
        </div>
      </div>
      <!-- End Preloading Screen -->
      <!-- Header Container  -->
       <?php 
          include('includes/header.php');
          //$this->load->view(includes/header);
       ?>
      <!-- //Header Container  -->
      <!-- Block slideshow  -->
      <section class="so-slideshow">
        
        <div id="so-slideshow">
          <div class="module slideshow no-margin">
            <div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
               <?php  
             //  $your_array=$sliders['data']['sliders'];
function aasort1 (&$array, $key) {
    $sorter=array();
    $ret=array();
    reset($array);
    foreach ($array as $ii => $va) {
        $sorter[$ii]=$va[$key];
    }
    asort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$array[$ii];
    }
    $array=$ret;
}

//aasort1($your_array,"sort_order");
               foreach ($all['data']['sliders'] as $slider) {
                  ?>
              <div class="yt-content-slide">
                <a href="<?php echo $slider['url'] ?>"><img src="<?php echo image_url().$slider['image']; ?>" alt="<?php echo $slider['alternate_text']; ?>" class="img-responsive"></a>
                <div class="overlay"></div>

                <div class="slider-disc hidden-xs hidden-sm">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                       <?php echo $slider['description']; ?>
                        <a href="<?php echo $slider['url'] ?>" class="s-btn1 animated fadeInDown">Book now</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <?php } ?>
             
            
          </div>
        </div>
        </div>
     
      </section>
     
      <br>
      <!-- //Block slideshow  -->
      <!-- Main Container  -->
      <div class="main-container ">
        <div class="container">
          <div class=" clearfix">
            <div class="col-lg-12 content-box ">
              <div class="row row-featured row-featured-category">
                <div class="col-lg-12  box-title no-border">
                  <div class="inner">
                    <h1><span>BOLOMITRAMA</span>
                      DELIVERIES & HELPERS
                    </h1>
                  </div>
                </div>
                <?php  
                foreach ($all['data']['services'] as $list) {
                  ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category" style="height: 162px;">
                  <a href="<?php echo base_url(); ?><?php echo str_replace(" ","-",$list['title']); ?>/vendors">
                    <img src="<?php echo image_url().$list['image']; ?>" class="img-responsive" alt="img" >
                    <h6> <?php echo $list['title']; ?> </h6>
                   <?php if($list['new']==1){ ?> <span class="label label-sale">New</span> <?php } ?>
                  </a>
                  <div class="actions">
                    <div class="action-buttons">
                      <div class="add-to-cart">
                        <a href="<?php echo base_url(); ?><?php echo str_replace(" ","-",$list['title']); ?>/vendors">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
               
               
                
               
            </div>
          </div>
        </div>
      </div>
      <!-- //Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mybtn1 text-center">
           
            </div>
          </div>
        </div>
      </div>
      <!-- Block Spotlight1  -->
      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <div class="module static-image module--5x">
              <div class="banners">
                  <?php  foreach ($all['data']['home_banners'] as $list1) {
                  if($list1['type']==1){
                  ?>
                <div>
                  <a href="<?php echo $list1['url']; ?>"><img src="<?php echo image_url().$list1['banner_image']; ?>" alt="<?php echo $list1['alt']; ?>"></a>
                </div>
                <?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //Block Spotlight1  -->
      <!-- Block Spotlight2  -->
      <section class="main-container clearfix"><!-- new tabs section -->
        <div class="container">

          <div class="col-lg-12  box-title no-border content-box">
                  <div class="inner">
                    <h1><span>SERVICES ON </span>
                      BOLOMITRAMA 
                    </h1>
                  </div>
          </div>

          <div class="col-md-12 new-tabs">
            <ul class="nav nav-tabs">
                <?php 
			$cnt=1;
			foreach($all['data']['hp_services'] as $hmsr1){ ?>
              <li <?php if($cnt==1){ ?>class="active"<?php } ?>><a data-toggle="tab" href="#home<?php echo $cnt; ?>"><?php echo $hmsr1['title']; ?></a></li>
              <?php $cnt++; } ?>
            </ul>

            <div class="tab-content">
             <?php 
			$cnt1=1;
					
			foreach($all['data']['hp_services'] as $hmsr){ ?>
             <?php if($cnt1==1){ ?>
              <div id="home1" class="tab-pane fade in active">
                <div class="module tab-slider titleLine">
                  <div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
                    <div class="ltabs-wrap ">
                      <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="1" data-md="1" data-sm="1" data-xs="1" data-margin="0">
                        <!--Begin Tabs-->
                        <div class="ltabs-tabs-wrap tabs-wrap__Line hidden">
                          <span class="ltabs-tab-selected">Jewelry &amp; Watches   </span> <span class="ltabs-tab-arrow">▼</span>
                          <div class="item-sub-cat  item-sub-cat__divided">
                            <ul class="ltabs-tabs cf">
                              <li class="ltabs-tab tab-sel" data-category-id="61" data-active-content=".items-category-61"> <span class="ltabs-tab-label">Baloon Decorations</span> </li>
                              
                            </ul>
                          </div>
                        </div>
                        <!-- End Tabs-->
                      </div>
                      <div class="ltabs-items-container">
                        <!--Begin Items-->
                        <div class="ltabs-items  ltabs-items-selected items-category-61 products-list grid" data-total="10">
                          <div class="ltabs-items-inner ltabs-slider ">
                            <div class="item-wrap">
                              <div class="row">
                                 <?php 							  
							  $cnt2=1;
							  foreach($hmsr['categorieslevelone'] as $hmpr){ 
							  if($cnt2==1){								
							  ?>
                               <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ltabs-slider__gallery">
                                  <div class="ltabs-item product-layout product_1846281811484147376">
                                    <div class="product-item-container">
                                      <div class="left-block">
                                        <div class="product-image-container  ">
                                          <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" /> </div>
                                        <!--Sale Label-->
                                        <!--full quick view block-->
                                        <a class="quickview"  href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>">  Quickview</a>
                                        <!--end full quick view block-->
                                      </div>
                                      <div class="right-block">
                                        <div class="caption">
                                          <h4><a href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                         
                                            <div class="ratings" id="preadOnlyy<?php echo $hmpr['prod_id']; ?>">
                                            
                                            </div>
                                        
                                          <div class="price">
                                            <!-- <span class="price-new">&#2352; 97.00</span>  -->
                                          </div>
                                        </div>
                                        <div class="button-group">
                                          <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="btn btn-finish btn-primary">Book Now</a>
                                         
                                        </div>
                                      </div>
                                      <!-- right block -->
                                      <div class="thumbs-product">
                                        <div class="item-img thumb-active" data-src="<?php echo image_url().$hmpr['image']; ?>"><img src="<?php echo image_url().$hmpr['image']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div>
                                        <?php if($hmpr['image2']!=""){ ?><div class="item-img" data-src="<?php echo image_url().$hmpr['image2']; ?>"><img src="<?php echo image_url().$hmpr['image2']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div> <?php } ?>
                                        <?php if($hmpr['image3']!=""){ ?><div class="item-img" data-src="<?php echo image_url().$hmpr['image3']; ?>"><img src="<?php echo image_url().$hmpr['image3']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div><?php } ?>
                                       <?php if($hmpr['image4']!=""){ ?> <div class="item-img" data-src="<?php echo image_url().$hmpr['image4']; ?>"><img src="<?php echo image_url().$hmpr['image4']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div><?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>                                
                              <?php } $cnt2++; } ?>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                  <div class="right-container">
                                    <div class="row">
                                    <?php 
									 $cnt=1;
									 foreach($hmsr['categorieslevelone'] as $hmpr){
										  if($cnt!=1){
										  ?>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="ltabs-item product-layout ">
                                          <div class="product-item-container">
                                            <div class="left-block">
                                              <div class="product-image-container second_img ">
                                                <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" />
                                                <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img_0 img-responsive" />
                                              </div>
                                              <!--Sale Label-->
                                              <!--full quick view block-->
                                              <a class="quickview"   href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>">  Quickview</a>
                                              <!--end full quick view block-->
                                            </div>
                                            <div class="right-block">
                                              <div class="caption">
                                                <h4><a href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                               
                                                  <div class="ratings" id="preadOnlyy<?php echo $hmpr['prod_id']; ?>">
                                                    
                                                  </div>
                                              
                                                <!-- <div class="price">
                                                  <span class="price-new">&#2352; 97.00</span> 
                                                  </div> -->
                                              </div>
                                              <div class="button-group">
                                            <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="btn btn-finish btn-primary">Book Now</a>
                                               
                                              </div>
                                            </div>
                                            <!-- right block -->
                                          </div>
                                        </div>
                                      </div>
                                    <?php } $cnt++; } ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- second section -->
                            
                            <!-- end second section -->
                          </div>
                        </div>
                        
                      </div>
                      <!--End Items-->
                    </div>
                  </div>
                </div>
              </div>
              <?php } if($cnt1==2){ ?>
              <div id="home2" class="tab-pane fade">
                <div class="module tab-slider titleLine">
                  <div id="so_listing_tabs_3" class="so-listing-tabs first-load module">
                    <div class="ltabs-wrap ">
                      <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="1" data-md="1" data-sm="1" data-xs="1" data-margin="0">
                        <!--Begin Tabs-->
                        <div class="ltabs-tabs-wrap tabs-wrap__Line hidden">
                          <span class="ltabs-tab-selected">Jewelry &amp; Watches   </span> <span class="ltabs-tab-arrow">▼</span>
                          <div class="item-sub-cat  item-sub-cat__divided">
                            <ul class="ltabs-tabs cf">
                              <li class="ltabs-tab tab-sel" data-category-id="61" data-active-content=".items-category-61"> <span class="ltabs-tab-label">Baloon Decorations</span> </li>
                              
                            </ul>
                          </div>
                        </div>
                        <!-- End Tabs-->
                      </div>
                      <div class="ltabs-items-container">
                        <!--Begin Items-->
                        <div class="ltabs-items  ltabs-items-selected items-category-62 products-list grid" data-total="10">
                          <div class="ltabs-items-inner ltabs-slider ">
                             <div class="item-wrap">
                              <div class="row">
                                 <?php 							  
							  $cnt2=1;
							  foreach($hmsr['categorieslevelone'] as $hmpr){ 
							  if($cnt2==1){								
							  ?>
                               <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ltabs-slider__gallery">
                                  <div class="ltabs-item product-layout product_1846281811484147374">
                                    <div class="product-item-container">
                                      <div class="left-block">
                                        <div class="product-image-container  ">
                                          <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" /> </div>
                                        <!--Sale Label-->
                                        <!--full quick view block-->
                                        <a class="quickview"   href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>">  Quickview</a>
                                        <!--end full quick view block-->
                                      </div>
                                      <div class="right-block">
                                        <div class="caption">
                                          <h4><a href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                         
                                            <div class="ratings" id="preadOnlyy<?php echo $hmpr['prod_id']; ?>">
                                            
                                            </div>
                                        
                                          <div class="price">
                                            <!-- <span class="price-new">&#2352; 97.00</span>  -->
                                          </div>
                                        </div>
                                        <div class="button-group">
                                           <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="btn btn-finish btn-primary">Book Now</a>
                                         
                                        </div>
                                      </div>
                                      <!-- right block -->
                                      <div class="thumbs-product">
                                        <div class="item-img thumb-active" data-src="<?php echo image_url().$hmpr['image']; ?>"><img src="<?php echo image_url().$hmpr['image']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div>
                                        <?php if($hmpr['image2']!=""){ ?><div class="item-img" data-src="<?php echo image_url().$hmpr['image2']; ?>"><img src="<?php echo image_url().$hmpr['image2']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div> <?php } ?>
                                        <?php if($hmpr['image3']!=""){ ?><div class="item-img" data-src="<?php echo image_url().$hmpr['image3']; ?>"><img src="<?php echo image_url().$hmpr['image3']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div><?php } ?>
                                       <?php if($hmpr['image4']!=""){ ?> <div class="item-img" data-src="<?php echo image_url().$hmpr['image4']; ?>"><img src="<?php echo image_url().$hmpr['image4']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div><?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>                                
                              <?php } $cnt2++; } ?>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                  <div class="right-container">
                                    <div class="row">
                                    <?php 
									 $cnt=1;
									 foreach($hmsr['categorieslevelone'] as $hmpr){
										  if($cnt!=1){
										  ?>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="ltabs-item product-layout ">
                                          <div class="product-item-container">
                                            <div class="left-block">
                                              <div class="product-image-container second_img ">
                                                <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" />
                                                <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img_0 img-responsive" />
                                              </div>
                                              <!--Sale Label-->
                                              <!--full quick view block-->
                                              <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                              <!--end full quick view block-->
                                            </div>
                                            <div class="right-block">
                                              <div class="caption">
                                                <h4><a href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                               
                                                  <div class="ratings" id="preadOnlyy<?php echo $hmpr['prod_id']; ?>">
                                                    
                                                  </div>
                                              
                                                <!-- <div class="price">
                                                  <span class="price-new">&#2352; 97.00</span> 
                                                  </div> -->
                                              </div>
                                              <div class="button-group">
                                                <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="btn btn-finish btn-primary">Book Now</a>
                                               
                                              </div>
                                            </div>
                                            <!-- right block -->
                                          </div>
                                        </div>
                                      </div>
                                    <?php } $cnt++; } ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- second section -->
                            
                            <!-- end second section -->
                          </div>
                        </div>
                        
                      </div>
                      <!--End Items-->
                    </div>
                  </div>
                </div>
              </div>
               <?php } if($cnt1==3){ ?>
               <div id="home3" class="tab-pane fade ">
               <div class="module tab-slider titleLine">
                  <div id="so_listing_tabs_4" class="so-listing-tabs first-load module">
                    <div class="ltabs-wrap ">
                      <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="1" data-md="1" data-sm="1" data-xs="1" data-margin="0">
                        <!--Begin Tabs-->
                        <div class="ltabs-tabs-wrap tabs-wrap__Line hidden">
                          <span class="ltabs-tab-selected">Jewelry &amp; Watches   </span> <span class="ltabs-tab-arrow">▼</span>
                          <div class="item-sub-cat  item-sub-cat__divided">
                            <ul class="ltabs-tabs cf">
                              <li class="ltabs-tab tab-sel" data-category-id="61" data-active-content=".items-category-61"> <span class="ltabs-tab-label">Baloon Decorations</span> </li>
                              
                            </ul>
                          </div>
                        </div>
                        <!-- End Tabs-->
                      </div>
                      <div class="ltabs-items-container">
                        <!--Begin Items-->
                        <div class="ltabs-items  ltabs-items-selected items-category-66 products-list grid" data-total="10">
                          <div class="ltabs-items-inner ltabs-slider ">
                            
                            <!-- second section -->
                            <div class="item-wrap">
                                <div class="row">
                                   <?php 							  
							  $cnt2=1;
							  foreach($hmsr['categorieslevelone'] as $hmpr){ 
							  if($cnt2==1){								
							  ?>
                               <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ltabs-slider__gallery">
                                  <div class="ltabs-item product-layout product_1846281811484147375">
                                    <div class="product-item-container">
                                      <div class="left-block">
                                        <div class="product-image-container  ">
                                          <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" /> </div>
                                        <!--Sale Label-->
                                        <!--full quick view block-->
                                        <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                        <!--end full quick view block-->
                                      </div>
                                      <div class="right-block">
                                        <div class="caption">
                                          <h4><a href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                         
                                            <div class="ratings" id="preadOnlyy<?php echo $hmpr['prod_id']; ?>">
                                            
                                            </div>
                                        
                                          <div class="price">
                                            <!-- <span class="price-new">&#2352; 97.00</span>  -->
                                          </div>
                                        </div>
                                        <div class="button-group clearfix">
                                          <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="btn btn-finish btn-primary">Book Now</a>
                                         
                                        </div>
                                      </div>
                                      <!-- right block -->
                                      <div class="thumbs-product">
                                        <div class="item-img thumb-active" data-src="<?php echo image_url().$hmpr['image']; ?>"><img src="<?php echo image_url().$hmpr['image']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div>
                                        <?php if($hmpr['image2']!=""){ ?><div class="item-img" data-src="<?php echo image_url().$hmpr['image2']; ?>"><img src="<?php echo image_url().$hmpr['image2']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div> <?php } ?>
                                        <?php if($hmpr['image3']!=""){ ?><div class="item-img" data-src="<?php echo image_url().$hmpr['image3']; ?>"><img src="<?php echo image_url().$hmpr['image3']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div><?php } ?>
                                       <?php if($hmpr['image4']!=""){ ?> <div class="item-img" data-src="<?php echo image_url().$hmpr['image4']; ?>"><img src="<?php echo image_url().$hmpr['image4']; ?>" alt="<?php echo $hmpr['title']; ?>" style="width:80px;"></div><?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>                                
                              <?php } $cnt2++; } ?>
                                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                  <div class="right-container">
                                    <div class="row">
                                    <?php 
									 $cnt=1;
									 foreach($hmsr['categorieslevelone'] as $hmpr){
										  if($cnt!=1){
										  ?>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="ltabs-item product-layout ">
                                          <div class="product-item-container">
                                            <div class="left-block">
                                              <div class="product-image-container second_img ">
                                                <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" />
                                                <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img_0 img-responsive" />
                                              </div>
                                              <!--Sale Label-->
                                              <!--full quick view block-->
                                              <a class="quickview"   href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>">  Quickview</a>
                                              <!--end full quick view block-->
                                            </div>
                                            <div class="right-block">
                                              <div class="caption">
                                                <h4><a href="<?php echo base_url() ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                               
                                                  <div class="ratings" id="preadOnlyy<?php echo $hmpr['prod_id']; ?>">
                                                    
                                                  </div>
                                              
                                            
                                              </div>
                                              <div class="button-group">
                                                <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="btn btn-finish btn-primary">Book Now</a>
                                               
                                              </div>
                                            </div>
                                            <!-- right block -->
                                          </div>
                                        </div>
                                      </div>
                                    <?php } $cnt++; } ?>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>
                            <!-- end second section -->
                          </div>
                        </div>
                        
                      </div>
                      <!--End Items-->
                    </div>
                  </div>
                </div>
              </div>
              
              <?php } $cnt1++;  } ?>
            </div>
          </div>


          <div class="row">
            <div id="content" class="clearfix">
              <div class="col-xs-12 clearfix">
                
                <div class="">
                  <div class="modcontent clearfix">
                    <div class="yt-content-slider slider-brand--home6"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="6" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                      <?php foreach($all['data']['vendors'] as $vendor){ ?>
                      <div class="yt-content-slide">
                        <a title="<?php echo $vendor['name'] ?>" href="<?php echo base_url(); ?>vendors/<?php echo str_replace(" ","-",$vendor['name']); ?>"><img src="<?php echo image_url().$vendor['image']; ?>" alt="<?php echo $vendor['name'] ?>"></a>
                      </div>
                      <?php } ?>
                      
                    </div> 
                  </div>
                </div>
                <!-- carousel -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mybtn1 text-center">
             
            </div>
          </div>
        </div>
      </div>
      <section class="so-spotlight2">
        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <div class="module static-image module--5x">
                <div class="banners">
                   <div class="banners">
                  <?php  foreach ($all['data']['home_banners'] as $list1) {
                  if($list1['type']==2){
                  ?>
                <div>
                  <a href="<?php echo $list1['url']; ?>"><img src="<?php echo image_url().$list1['banner_image']; ?>" alt="<?php echo $list1['alt']; ?>"></a>
                </div>
                <?php } } ?>
              </div>
                </div>
              </div>

           <div class="col-lg-12  box-title no-border content-box">
                  <div class="inner">
                    <h1><span>shop ON </span>
                      BOLOMITRAMA 
                    </h1>
                  </div>
              </div>

              


              <div class="col-md-12 new-tabs"><!-- new tabs2 -->
                  <div class="row">
                    <ul class="nav nav-tabs">
                     <?php 
			$cnt=1;
			foreach($all['data']['hp_products'] as $hmpr1){ ?>
              <li <?php if($cnt==1){ ?>class="active"<?php } ?>><a data-toggle="tab" href="#gnprod<?php echo $cnt; ?>"><?php echo $hmpr1['title']; ?></a></li>
              <?php $cnt++; } ?>
                   
                    </ul>

                    <div class="tab-content">
                      <?php 
		            	$cnt1=1;
			           foreach($all['data']['hp_products'] as $hmpr1){ ?>
                      <div id="gnprod<?php echo $cnt1; ?>" class="tab-pane fade <?php if($cnt1==1){ ?>in active<?php } ?>">
                          <div class="latest-blog-curosel clearfix">
                            
                            <div class="first-load module">
                              <!-- <div class="loadeding"></div> -->
                              <div class="ltabs-wrap">
                                
                                <div class="ltabs-items-container">
                                  <!--Begin Items-->
                                  <div class="ltabs-items ltabs-items-loaded items-category-2 products-list grid ltabs-items-selected" data-total="10">
                                    <div class="ltabs-items-inner ltabs-slider">
                                    <?php  foreach($hmpr1['categorieslevelone'] as $hmpr){  ?>
                                      <div class="ltabs-item product-layout col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-item-container">
                                          <div class="left-block">
                                            <div class="product-image-container second_img ">
                                              <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img-responsive" />
                                              <img src="<?php echo image_url().$hmpr['image']; ?>"  alt="<?php echo $hmpr['title']; ?>" class="img_0 img-responsive" />
                                            </div>
                                            <!--Sale Label-->
                                            
                                            <!--full quick view block-->
                                            <a class="quickview"   href="<?php echo base_url(); ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>">  Quickview</a>
                                            <!--end full quick view block-->
                                          </div>
                                          <div class="right-block">
                                            <div class="caption">
                                              <h4><a href="<?php echo base_url(); ?>product/<?php echo str_replace(" ","-",$hmpr['title']); ?>/<?php echo $hmpr['prod_id']; ?>"><?php echo $hmpr['title']; ?></a></h4>
                                              <div class="ratings" id="preadOnlyp<?php echo $hmpr['prod_id']; ?>">
                                                
                                              </div>
                                              <div class="price">
                                                <span class="price-new">&#2352; <?php echo $hmpr['discount_price']; ?></span> 
                                                <span class="price-old">&#2352; <?php echo $hmpr['actual_price']; ?></span>     
                                              </div>
                                            </div>
                                            <div class="button-group">
                                              <a href="javascript:void();" onClick="add_cart('<?php echo $hmpr['prod_id']; ?>');" class="addToCart" data-toggle="tooltip" title="Add to Cart">
                                              <i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span>
                                              </a>
                                              <?php if($hmpr['allow_apointment']==1){ ?>
                                              <a href="javascript:void();" onClick="add_demo('<?php echo $hmpr['prod_id']; ?>');" class="compare"  data-toggle="tooltip" title=""  data-original-title="Book Demo"><i class="fa fa-calendar"></i></a>
                                              <?php } ?>
                                            </div>
                                          </div>
                                          <!-- right block -->
                                        </div>
                                      </div>
                                    <?php } ?>

                                    </div>
                                  </div>
                                  
                                </div>
                                <!--End Items-->
                              </div>
                            </div>
                          </div>
                      </div>
                        <?php $cnt1++; } ?>
                      
                    </div>
                  </div>
              </div><!-- end new tabs2 -->
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mybtn1 text-center">
            
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="content-top" class="clearfix" >
            <div class="module customhtml ">
              <div class="modcontent clearfix">
                <div class="services-v1">
                  <div class="policy policy2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="policy-inner">
                      <span class="ico-policy"></span>
                      <a href="#">
                        <h2>on time shipping</h2>
                        on all orders
                      </a>
                    </div>
                  </div>
                  <div class="policy policy3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="policy-inner">
                      <span class="ico-policy"></span>
                      <a href="#">
                        <h2>365 days services</h2>
                        on all orders 
                      </a>
                    </div>
                  </div>
                  <div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="policy-inner">
                      <span class="ico-policy"></span>
                      <h2>lowest price</h2>
                      <a href="#">on all orders</a>
                    </div>
                  </div>
                  <div class="policy policy4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="policy-inner">
                      <span class="ico-policy"></span>
                      <a href="#">
                        <h2>safe shopping</h2>
                        guarantee 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
      <!-- Footer Container -->
      <?php include('includes/footer.php') ?>
      <!-- //end Footer Container -->
    </div>

    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header ">
            <?php if($this->session->userdata('location_name')!="") { ?>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <?php }else{ ?>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
            <?php } ?>
            <span class="modal-title" id="lineModalLabel">
            Choose Your City
            </span>
          </div>
          <div class="modal-body clearfix">

            
            <ul class="yt-accordion">
                  <li class="accordion-group">
                    <h3 class="accordion-heading active"><i class="fa fa-plus-square"></i><span>Select your city</span></h3>
                    <div class="accordion-inner" id="citydisplay">
                      <div class="mycontent">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="popular-city">
                      <ul class="clearfix">
                        <?php foreach($all['data']['cities'] as $city){ ?>
                        <li>
                          <a href="javascript:void();" onclick="changecity('<?php echo $city["city_id"]; ?>','<?php echo $city["city_name"]; ?>');"><img src="<?php echo image_url().$city['image']; ?>" alt="<?php echo $city['city_name']; ?>" class="img-responsive">
                          <span><?php echo $city['city_name']; ?></span>
                          </a>
                        </li>
                        <?php } ?>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    </div>
                  </li>
                  <li class="accordion-group">
                    <h3 class="accordion-heading"><i class="fa fa-plus-square"></i><span>Select your area</span></h3>
                    <div class="accordion-inner" style="display: none;" id="areadisplay">
                      <div class="panel panel-default">
                    <div class="panel-heading">
                      Select Area
                    </div>
                    <div class="panel-body popular-city">
                      <ul class="clearfix" id="arealist">
                       
                      </ul>
                    </div>
                  </div>
                    </div>
                  </li>
                  
                </ul>

            


          </div>
        </div>
      </div>
    </div>

    <!-- Social widgets -->
    <section class="social-widgets visible-lg">
      <ul class="items">
        <li class="item item-01 facebook">
          <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>FACEBOOK</h5>
            </div>
            <div class="loading">
              <img src="<?php echo base_url() ?>assets/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
            </div>
          </div>
        </li>
        <li class="item item-02 twitter">
          <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>TWITTER FEEDS</h5>
            </div>
            <div class="loading">
              <img src="<?php echo base_url() ?>assets/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
            </div>
          </div>
        </li>
        <li class="item item-03 youtube">
          <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>YouTube</h5>
            </div>
            <div class="loading"> <img src="<?php echo base_url() ?>assets/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
          </div>
        </li>
      </ul>
    </section>
    <!-- End Social widgets -->

    <div class="map-location">
      <div id="myModal6" class="modal fade">
        <div class="modal-dialog modal-newsletter">
          <div class="modal-content">
            <form action="/examples/actions/confirmation.php" method="post">
              <div class="">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
              </div>
              <div class="modal-body text-center">
                <div class="input-group">
                  <input type="text" class="form-control" id="txtPlaces" placeholder="Enter your Location">
                  <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </span>
                </div>
              </div>
            </form>     
          </div>
        </div>
      </div>
    </div>
   

    <!-- Include Libs & Plugins
      ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/libs.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr/modernizr-2.6.2.min.js"></script>
    <!-- Theme files
      ============================================ -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/application.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/homepage.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/addtocart.js"></script>  
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/pathLoader.js"></script> 
    <script type="text/javascript">
      $(function () {
          $('#datetimepicker4').datetimepicker({ pickTime: false }); 
      });
    </script>
    <script type="text/javascript">
     function changecity(city,name)
     {
        
          $.ajax({url:"<?php echo base_url();?>welcome/get_area",type:"POST",data:{'city' :city,'c_name':name},dataType:'html',
                               success:function(data){
                                 $("#citydisplay").css("display","none");
                                $("#areadisplay").css("display","block");
                                 $('#arealist').html(data);
                                 
                               
                               },
                               error:function(){
                                 alert(data);
                               }
                            });

     }

     function changearea(area_name,area_id)
     {
           $.ajax({url:"<?php echo base_url();?>welcome/location",type:"POST",data:{'area_name' :area_name,'area_id':area_id},dataType:'html',
                               success:function(data){
                               $( ".close" ).click();
                                 $('#location').html(data);
                               
                               },
                               error:function(){
                                 alert(data);
                               }
                            });
     }

     <?php if($this->session->userdata('location_name')=="") { ?>
       $("#se-pop").click();
      <?php } ?>
    </script>

    <script type='application/ld+json'>
      {
      
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "Bolomitrama",
          "url": "<?php echo base_url() ?>",
          "foundingDate": "2017",
          "parentOrganization": [{
              "@type": "Organization",
              "name": "Bolomitrama"
          }],
      
          "address": {
              "type": "PostalAddress",
              "streetAddress": "3rd Floor Karle Premium",
              "addressLocality": "Level 4, Kapil Towers, Financial District",
              "addressRegion": "Hyderabad ",
              "postalCode": "500 032",
              "addressCountry": "INDIA"
          },
          "contactPoint": [{
              "@type": "ContactPoint",
              "telephone": "+91 99 62 62 53 63",
              "contactType": "Customer Service ( Call Center)",
              "email": "bolomitrama@gmail.com"
          }],
          "sameAs": [
      
              "https://www.facebook.com/Bolomitrama.com/",
              "https://en.wikipedia.org/wiki/Bolomitrama.com/"
          ]
      }
    </script>
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuO6kbZhgwxdbPcdwCHlQvSyD3M2C7a7s&sensor=false&libraries=places"></script>
    <script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function () {

    var options = {
               types: ['geocode'],
               componentRestrictions: {country: "IN"}
                 };

    var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'),options);
    google.maps.event.addListener(places, 'place_changed', function () {

    var place = places.getPlace();
    var address = place.formatted_address;
               });

    var places1 = new google.maps.places.Autocomplete(document.getElementById('txtPlaces1'),options);

    google.maps.event.addListener(places1, 'place_changed', function () {
           var place1 = places1.getPlace();
           var address1 = place1.formatted_address;
               });
      });

    </script>
    
    
    <script src="<?php echo base_url(); ?>assets/raty/jquery.raty.js"></script>
	  
<script>
$.fn.raty.defaults.path = '<?php echo base_url(); ?>assets/raty/images';
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
<script>
<?php foreach($all['data']['hp_services'] as $gnrate){  
foreach($gnrate['categorieslevelone'] as $review){
   ?>

<?php  if($review['rate_count']== '' || $review['rate_count']== 0 ){ ?>
$('#preadOnlyy<?php echo $review['prod_id']?>').raty({ readOnly: true, score: 0 });
<?php }else{?>

<?php $ra =$review['rate_total']/$review['rate_count']; ?>
$('#preadOnlyy<?php echo $review['prod_id']?>').raty({ readOnly: true, score: '<?php echo $ra ?>' });
<?php }?>

<?php } } ?>
</script> 

<script>
<?php foreach($all['data']['hp_products'] as $gnrate1){  
foreach($gnrate1['categorieslevelone'] as $review){
   ?>

<?php  if($review['rate_count']== '' || $review['rate_count']== 0 ){ ?>
$('#preadOnlyp<?php echo $review['prod_id']?>').raty({ readOnly: true, score: 0 });
<?php }else{?>

<?php $ra =$review['rate_total']/$review['rate_count']; ?>
$('#preadOnlyp<?php echo $review['prod_id']?>').raty({ readOnly: true, score: '<?php echo $ra ?>' });
<?php }?>

<?php } } ?>
</script> 

<script>
function add_cart(p_id=""){
	
	var quantity = '1';
	
	$.ajax({
		type:"post",
		url:"<?php echo base_url(); ?>cart/ajax_cart",
		data:{action:'add',p_id:p_id,quantity:quantity},
		success:function(result){			
			$('#cart').html(result);
		 $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
		}
	});
}


function add_demo(p_id=""){
	
	var quantity = '1';
	
	$.ajax({
		type:"post",
		url:"<?php echo base_url(); ?>cart/ajax_cart",
		data:{action:'add',type:'Appointment',p_id:p_id,quantity:quantity},
		success:function(result){			
			$('#cart').html(result);
		 $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
		}
	});
}

</script>
    

  </body>
</html>