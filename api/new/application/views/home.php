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


    <!-- twitter card -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@Ramrakesh">
    <meta name="twitter:title" content="eGanacsi here to help you with all the kinds of Services in Hyderabad/">
    <meta name="twitter:description" content="eGanacsi here to help you with all the kinds of Services in Hyderabad/Chennai/Bangalore.">
    <meta name="twitter:image" content="http://krivi.website/egn/img-ig/logo.png">
    <meta name="twitter:label1" content="">
    <meta name="twitter:data1" content="">
    <meta name="twitter:label2" content="">
    <meta name="twitter:data2" content="">
    <!-- end twitter card -->
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.min.css">
    <!-- Theme CSS
      ============================================ -->
    <link href="<?php echo base_url(); ?>css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/themecss/so-categories.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/footer1.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/header1.css" rel="stylesheet">
    <link id="color_scheme" href="<?php echo base_url(); ?>css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/raty/jquery.raty.css" rel="stylesheet" />
  </head>
  <body class="common-home res layout-home1">
    
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- end preloader -->

    <div id="wrapper" class="wrapper-full banners-effect-7">
      <!-- Header Container  -->
      <?php include('header.php') ?>
      <!-- //Header Container  -->
      <!-- Block Spotlight1  -->
      <section class="so-spotlight1 ">
        <div class="container">
          <div class="row">
            <div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
              <div class="slider-container ">
                <div class="module first-block">
                  <div class="modcontent clearfix">
                 
                  </div>
                </div>
                <div id="so-slideshow" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 two-block">
                  <div class="module no-margin">
                    <div class="yt-content-slider yt-content-slider--arrow1"  data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.3" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
					 <?php foreach($sliders as $slider){ ?>
                      <div class="yt-content-slide"> <a href="<?php  if(strpos($slider['link'],'http://')==true || strpos($slider['link'],'https://')==true) { echo $slider['link']; } else { echo 'http://'.$slider['link']; } ?>" target="_blank"><img src="<?php echo base_url().$slider['image']; ?>" alt="<?php echo $slider['name']; ?>" class="img-responsive"></a>
                      </div>
                     <?php } ?>
                    </div>
                    <div class="loadeding"></div>
                  </div>
                </div>
                <div class="module col-md-4  hidden-sm hidden-xs three-block ">
                  <div class="modcontent clearfix">
                    <div class="htmlcontent-block">
                      <ul class="htmlcontent-home">
                      <?php
					   foreach($banners as $banner){ 
					   if($banner['bid']==1 || $banner['bid']==2 || $banner['bid']==3){
					  ?>
                        <li>
                          <div class="banners">
                            <div>
                              <a href="<?php echo $banner['link']; ?>"><img src="<?php echo base_url().$banner['image']; ?>" alt="<?php echo $banner['name']; ?>"></a>
                            </div>
                          </div>
                        </li>
                        <?php } } ?>
                        
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="module hidden-xs col-sm-12 four-block">
                  <div class="modcontent clearfix">
                    <div class="policy-detail">
                      <div class="banner-policy">
                      <?php foreach($snss as $sns){ ?>
                        <div class="policy policy1" ><a href="<?php echo $sns['link']; ?>"> <span class="ico-policy" style="background-image:url(<?php echo base_url().$sns['image']; ?>); background-repeat:no-repeat;">&nbsp;</span> <?php echo $sns['name']; ?> </a></div>
                        <?php } ?>
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //Block Spotlight1  -->
      <!-- Main Container  -->
      <div class="main-container container">
        <div class="row">
          <div id="content" class="col-sm-12">
            <div class="module mybanner">
              <div class="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="addbanner">
                     <?php
					   foreach($banners as $banner){ 
					   if($banner['bid']==4){
					  ?>
                     <a href="<?php echo $banner['link']; ?>"><img src="<?php echo base_url().$banner['image']; ?>" alt="<?php echo $banner['name']; ?>"></a>
                      <?php } } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="module tab-slider titleLine">
              <h1 class="modtitle hidden">Popular PRODUCTS</h1>
              <h2 class="modtitle hidden">Popular PRODUCTS</h2>
              <h3 class="modtitle">Popular PRODUCTS</h3>
              <div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
                <div class="loadeding"></div>
                <div class="ltabs-wrap">
                  <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3" data-xs="2" data-margin="30">
                    <!--Begin Tabs-->
                    <div class="ltabs-tabs-wrap">
                      <span class="ltabs-tab-selected">Jewelry &amp; Watches  </span> <span class="ltabs-tab-arrow">▼</span>
                      <div class="item-sub-cat">
                        <ul class="ltabs-tabs cf">
                           <li class="view-all-btn"> <span class="ltabs-tab-label"> <a href="<?php echo base_url(); ?>featureproducts">View all</a>    </span> </li>
                           
                          <li class="ltabs-tab tab-sel hidden" data-category-id="22" data-active-content=".items-category-20"> <span class="ltabs-tab-label"> <a href="<?php echo base_url(); ?>featureproducts">View all</a>    </span> </li>
                          <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18">  </li>
                          <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25">  </li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Tabs-->
                  </div>
                  <div class="ltabs-items-container">
                    <!--Begin Items-->
                    
                    <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
                      <div class="ltabs-items-inner ltabs-slider ">
					  <?php foreach($ftrproducts as $pproduct){ ?>
                        <div class="ltabs-item product-layout">
                          <div class="product-item-container">
                            <div class="left-block">
                              <div class="product-image-container second_img ">
                                <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$pproduct['product_name'])); ?>/<?php echo $pproduct['product_id']; ?>/">
                                <img src="<?php echo base_url().$pproduct['product_image']; ?>"  alt="<?php echo $pproduct['product_name']; ?>" class="img-responsive" />
                                <img src="<?php echo base_url().$pproduct['product_image']; ?>"  alt="<?php echo $pproduct['product_name']; ?>" class="img_0 img-responsive" />
                                </a>
                              </div>
                              <!--Sale Label-->
                              <span class="label label-sale"><?php echo number_format($pproduct['discount_percent'],0); ?>% off</span>
                              <!--full quick view block-->
                             
                              <!--end full quick view block-->
                            </div>
                            <div class="right-block">
                              <div class="caption">
                                <h4><a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$pproduct['product_name'])); ?>/<?php echo $pproduct['product_id']; ?>/"><?php echo $pproduct['product_name']; ?></a></h4>
                                <div class="ratings">
                                 <div class="box-review form-group">
                                   <div id="preadOnly<?php echo $pproduct['product_id']; ?>" class="star-image"></div>
                                   </div>
                                </div>
                                <div class="price">
                                  <span class="price-new"> Rs.<?php echo $pproduct['discount_price']; ?></span> 
                                  <span class="price-old">&#2352; <?php echo $pproduct['product_price']; ?></span>     
                                </div>
                              </div>
                           
                              <div class="button-group">
                                <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$pproduct['product_name'])); ?>/<?php echo $pproduct['product_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Shop Now</span></a>
                                <?php if($this->session->userdata('customer_id')==""){ ?>
                                <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list" onclick="wishlist.add('<?php echo base_url(); ?>','<?php echo $pproduct['product_name']; ?>');"><i class="fa fa-heart"></i></button>
                                <?php } else { ?>
                                <form action="<?php echo base_url(); ?>home/intrests" method="post" style="display:inline;">
                                   <button class="wishlist"  type="submit" data-toggle="tooltip" data-original-title="Wish list" ><i class="fa fa-heart"></i></button>
                                   <input type="hidden" name="pname" value="<?php echo $pproduct['product_name']; ?>">
                                   <input type="hidden" name="pid" value="<?php echo $pproduct['product_id']; ?>">
                                   <input type="hidden" name="pimage" value="<?php echo $pproduct['product_image']; ?>">
                                    <input type="hidden" name="type" value="product">
                                   </form>
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

            <div class="module mybanner">
              <div class="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="addbanner">
                       <?php
					   foreach($banners as $banner){ 
					   if($banner['bid']==5){
					  ?>
                     <a href="<?php echo $banner['link']; ?>"><img src="<?php echo base_url().$banner['image']; ?>" alt="<?php echo $banner['name']; ?>"></a>
                      <?php } } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="module tab-slider titleLine">
              <h3 class="modtitle">Popular Service </h3>
              <div id="so_listing_tabs_7" class="so-listing-tabs first-load module">
                <div class="loadeding"></div>
                <div class="ltabs-wrap">
                  <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3" data-xs="2" data-margin="30">
                    <!--Begin Tabs-->
                    <div class="ltabs-tabs-wrap">
                      <span class="ltabs-tab-selected">Jewelry &amp; Watches  </span> <span class="ltabs-tab-arrow">▼</span>
                      <div class="item-sub-cat">
                        <ul class="ltabs-tabs cf">
                        <li class="view-all-btn"> <a href="<?php echo base_url(); ?>featureservices"> <span class="ltabs-tab-label">View all </span> </a></li>
                        
                         <li class="ltabs-tab tab-sel hidden" data-category-id="22" data-active-content=".items-category-20"> <a href="<?php echo base_url(); ?>featureservices"> <span class="ltabs-tab-label">View all </span> </a></li>
                          <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18">  </li>
                          <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"></li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Tabs-->
                  </div>
                  <div class="ltabs-items-container">
                    <!--Begin Items-->
                    <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
                      <div class="ltabs-items-inner ltabs-slider ">
					   <?php foreach($ftrservices as $pservice){ ?>
                        <div class="ltabs-item product-layout">
                          <div class="product-item-container">
                            <div class="left-block">
                              <div class="product-image-container second_img ">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$pservice['service_name'])); ?>/<?php echo $pservice['service_id']; ?>/">
                                <img src="<?php echo base_url().$pservice['product_image']; ?>"  alt="<?php echo $pservice['service_name']; ?>" class="img-responsive" />
                                <img src="<?php echo base_url().$pservice['product_image']; ?>"  alt="<?php echo $pservice['service_name']; ?>" class="img_0 img-responsive" />
                                </a>
                              </div>
                              <!--Sale Label-->
                              <span class="label label-sale"><?php echo number_format($pservice['discount_percent'],0); ?>% off</span>
                              <!--full quick view block-->
                             
                              <!--end full quick view block-->
                            </div>
                            <div class="right-block">
                              <div class="caption">
                                <h4><a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$pservice['service_name'])); ?>/<?php echo $pservice['service_id']; ?>/"><?php echo $pservice['service_name']; ?></a></h4>
                                <div class="ratings">
                                  <div class="box-review form-group">
                                   <div id="sreadOnly<?php echo $pservice['service_id']; ?>" class="star-image"></div>
                                   </div>
                                </div>
                                <div class="price">
                                  <span class="price-new"> Rs.<?php echo $pservice['discount_price']; ?></span> 
                                  <span class="price-old">&#2352; <?php echo $pservice['price']; ?></span>     
                                </div>
                              </div>
                              <div class="button-group">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$pservice['service_name'])); ?>/<?php echo $pservice['service_id']; ?>/" class="addToCart service" ><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                  <?php if($this->session->userdata('customer_id')==""){ ?>
                                 <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list"><i class="fa fa-heart-o"></i></button>
                                <?php } else { ?>
                                
                                  <form action="<?php echo base_url(); ?>home/intrests" method="post" style="display:inline;">
                                        <button class="wishlist" type="submit" data-toggle="tooltip" data-original-title="Wish list"><i class="fa fa-heart-o"></i></button>                           

                                   <input type="hidden" name="pname" value="<?php echo $pservice['service_name']; ?>">
                                   <input type="hidden" name="pid" value="<?php echo $pservice['service_id']; ?>">
                                   <input type="hidden" name="pimage" value="<?php echo $pservice['product_image']; ?>">
                                    <input type="hidden" name="type" value="service">
                                   </form>
                                
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

            <div class="module ">
              <div class="modcontent clearfix">
                <div class="banner-wraps ">
                  <div class="m-banner row">
                   <?php
					   foreach($banners as $banner){ 
					   if($banner['bid']==6 || $banner['bid']==7 || $banner['bid']==8){
					  ?>
                    <div class="banner htmlconten1 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <div class="banners">
                        <div>
                        <a href="<?php echo $banner['link']; ?>"><img src="<?php echo base_url().$banner['image']; ?>" alt="<?php echo $banner['name']; ?>"></a>
                        </div>
                      </div>
                    </div>
                    <?php } } ?>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
                    
            <div class="module tab-slider titleLine">
              <h3 class="modtitle">featured products</h3>
              <div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
                <div class="loadeding"></div>
                <div class="ltabs-wrap">
                  <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3" data-xs="2" data-margin="30">
                    <!--Begin Tabs-->
                    <div class="ltabs-tabs-wrap">
                      <span class="ltabs-tab-selected">Jewelry &amp; Watches  </span> <span class="ltabs-tab-arrow">▼</span>
                      <div class="item-sub-cat">
                        <ul class="ltabs-tabs cf">
                        
                        <li class="view-all-btn"> <span class="ltabs-tab-label"><a href="<?php echo base_url(); ?>featureproducts">View all </a>           </span> </li>
                        
                          <li class="ltabs-tab tab-sel hidden" data-category-id="22" data-active-content=".items-category-20"> <span class="ltabs-tab-label"><a href="<?php echo base_url(); ?>featureproducts">View all </a>           </span> </li>
                          <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18">  </li>
                          <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"></li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Tabs-->
                  </div>
                  <div class="ltabs-items-container">
                    <!--Begin Items-->
                    <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
                      <div class="ltabs-items-inner ltabs-slider ">
                        <?php foreach($ftrproducts as $pproduct){ ?>
                        <div class="ltabs-item product-layout">
                          <div class="product-item-container">
                            <div class="left-block">
                              <div class="product-image-container second_img ">
                                <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$pproduct['product_name'])); ?>/<?php echo $pproduct['product_id']; ?>/">
                                <img src="<?php echo base_url().$pproduct['product_image']; ?>"  alt="<?php echo $pproduct['product_name']; ?>" class="img-responsive" />
                                <img src="<?php echo base_url().$pproduct['product_image']; ?>"  alt="<?php echo $pproduct['product_name']; ?>" class="img_0 img-responsive" />
                                </a>
                              </div>
                              <!--Sale Label-->
                              <span class="label label-sale"><?php echo number_format($pproduct['discount_percent'],0); ?>% off</span>
                              <!--full quick view block-->
                             
                              <!--end full quick view block-->
                            </div>
                            <div class="right-block">
                              <div class="caption">
                                <h4><a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$pproduct['product_name'])); ?>/<?php echo $pproduct['product_id']; ?>/"><?php echo $pproduct['product_name']; ?></a></h4>
                                <div class="ratings">
                                  <div class="box-review form-group">
                                   <div id="ppreadOnly<?php echo $pproduct['product_id']; ?>" class="star-image"></div>
                                   </div>
                                </div>
                                <div class="price">
                                  <span class="price-new"> Rs.<?php echo $pproduct['discount_price']; ?></span> 
                                  <span class="price-old">&#2352; <?php echo $pproduct['product_price']; ?></span>     
                                </div>
                              </div>
                              <div class="button-group">
                                <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$pproduct['product_name'])); ?>/<?php echo $pproduct['product_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Shop Now</span></a>
                                <?php if($this->session->userdata('customer_id')==""){ ?>
                                <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list" onclick="wishlist.add('<?php echo base_url(); ?>','<?php echo $pproduct['product_name']; ?>');"><i class="fa fa-heart"></i></button>
                                <?php } else { ?>
                                <form action="<?php echo base_url(); ?>home/intrests" method="post" style="display:inline;">
                                   <button class="wishlist"  type="submit" data-toggle="tooltip" data-original-title="Wish list" ><i class="fa fa-heart"></i></button>
                                   <input type="hidden" name="pname" value="<?php echo $pproduct['product_name']; ?>">
                                   <input type="hidden" name="pid" value="<?php echo $pproduct['product_id']; ?>">
                                   <input type="hidden" name="pimage" value="<?php echo $pproduct['product_image']; ?>">
                                    <input type="hidden" name="type" value="product">
                                   </form>
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
            
            
                  
            <div class="module tab-slider titleLine">
              <h3 class="modtitle">Featured Services</h3>
              <div id="so_listing_tabs_5" class="so-listing-tabs first-load module">
                <div class="loadeding"></div>
                <div class="ltabs-wrap">
                  <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3" data-xs="2" data-margin="30">
                    <!--Begin Tabs-->
                    <div class="ltabs-tabs-wrap">
                      <span class="ltabs-tab-selected">Jewelry &amp; Watches  </span> <span class="ltabs-tab-arrow">▼</span>
                      <div class="item-sub-cat">
                        <ul class="ltabs-tabs cf">
                        
                        <li class="view-all-btn"> <span class="ltabs-tab-label"><a href="<?php echo base_url(); ?>featureservices">View all</a> </span> </li>
                        
                          <li class="ltabs-tab tab-sel hidden" data-category-id="22" data-active-content=".items-category-20"> <span class="ltabs-tab-label"><a href="<?php echo base_url(); ?>featureservices">View all</a> </span> </li>
                          <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18">  </li>
                          <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"></li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Tabs-->
                  </div>
                  <div class="ltabs-items-container">
                    <!--Begin Items-->
                    <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
                      <div class="ltabs-items-inner ltabs-slider ">
					   <?php foreach($ftrservices as $pservice){ ?>
                        <div class="ltabs-item product-layout">
                          <div class="product-item-container">
                            <div class="left-block">
                              <div class="product-image-container second_img ">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$pservice['service_name'])); ?>/<?php echo $pservice['service_id']; ?>/">
                                <img src="<?php echo base_url().$pservice['product_image']; ?>"  alt="<?php echo $pservice['service_name']; ?>" class="img-responsive" />
                                <img src="<?php echo base_url().$pservice['product_image']; ?>"  alt="<?php echo $pservice['service_name']; ?>" class="img_0 img-responsive" />
                                </a>
                              </div>
                              <!--Sale Label-->
                              <span class="label label-sale"><?php echo number_format($pservice['discount_percent'],0); ?>% off</span>
                              <!--full quick view block-->
                             
                              <!--end full quick view block-->
                            </div>
                            <div class="right-block">
                              <div class="caption">
                                <h4><a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$pservice['service_name'])); ?>/<?php echo $pservice['service_id']; ?>/"><?php echo $pservice['service_name']; ?></a></h4>
                                <div class="ratings">
                                  <div class="box-review form-group">
                                   <div id="ssreadOnly<?php echo $pservice['service_id']; ?>" class="star-image"></div>
                                   </div>
                                </div>
                                <div class="price">
                                  <span class="price-new"> Rs.<?php echo $pservice['discount_price']; ?></span> 
                                  <span class="price-old">&#2352; <?php echo $pservice['price']; ?></span>     
                                </div>
                              </div>
                              <div class="button-group">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$pservice['service_name'])); ?>/<?php echo $pservice['service_id']; ?>/" class="addToCart service" ><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                  <?php if($this->session->userdata('customer_id')==""){ ?>
                                 <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list"><i class="fa fa-heart-o"></i></button>
                                <?php } else { ?>
                                
                                  <form action="<?php echo base_url(); ?>home/intrests" method="post" style="display:inline;">
                                         <button class="wishlist" type="submit" data-toggle="tooltip" data-original-title="Wish list"><i class="fa fa-heart-o"></i></button>                

                                   <input type="hidden" name="pname" value="<?php echo $pservice['service_name']; ?>">
                                   <input type="hidden" name="pid" value="<?php echo $pservice['service_id']; ?>">
                                   <input type="hidden" name="pimage" value="<?php echo $pservice['product_image']; ?>">
                                    <input type="hidden" name="type" value="service">
                                   </form>
                                
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
            
            
            
            <div class="module no-margin titleLine ">
              <h3 class="modtitle">COLLECTIONS</h3>
              <div class="modcontent clearfix">
                <div id="collections_block" class="clearfix  block">
                  <ul class="width6">
                  <?php foreach($collections as $cns){ ?>
                    <li class="collect collection_0">
                      <div class="color_co"><a href="<?php echo $cns['url'] ?>" style="background:url(<?php echo base_url().$cns['image'] ?>);"><?php echo $cns['name'] ?></a> </div>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //Main Container -->
      <!-- Block Spotlight3  -->
     
      <!-- //Block Spotlight3  -->
      
    <!-- Footer Container -->
    <?php include('footer.php') ?>
      <!-- //end Footer Container -->
    </div>
    <!-- Social widgets -->
    <?php include('social.php') ?>
    <!-- End Social widgets -->
    <!-- modal -->
    <?php include('modal-popup.php');  ?>
    <!-- end modal -->
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
    <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr/modernizr-2.6.2.min.js"></script>
    <!-- Theme files
      ============================================ -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/application.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/homepage.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/addtocart.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/so_megamenu.js"></script>

    <script type="text/javascript">
         $(function () {
             $('#datetimepicker6').datetimepicker();
         });
      </script>
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

<script>
<?php

foreach($ftrproducts as $prod){
if($prod['rate_total']=="")
	{ ?>
$('#preadOnly<?php echo $prod['product_id']; ?>').raty({ readOnly: true, score: 0 });
<?php
	} else {
	$rtl=$prod['rate_total'];	
	$rate=$rtl/$prod['rate_count'];
	?>
	$('#preadOnly<?php echo $prod['product_id']; ?>').raty({ readOnly: true, score: <?php echo $rate; ?> });
	<?php } ?>

<?php } ?>
</script>

<script>
<?php

foreach($ftrproducts as $prod){
if($prod['rate_total']=="")
	{ ?>
$('#ppreadOnly<?php echo $prod['product_id']; ?>').raty({ readOnly: true, score: 0 });
<?php
	} else {
	$rtl=$prod['rate_total'];	
	$rate=$rtl/$prod['rate_count'];
	?>
	$('#ppreadOnly<?php echo $prod['product_id']; ?>').raty({ readOnly: true, score: <?php echo $rate; ?> });
	<?php } ?>

<?php } ?>
</script>


<script>
<?php

foreach($ftrservices as $serv){
if($serv['rate_total']=="")
	{ ?>
$('#sreadOnly<?php echo $serv['service_id']; ?>').raty({ readOnly: true, score: 0 });
<?php
	} else {
	$rtl=$serv['rate_total'];	
	$rate=$rtl/$serv['rate_count'];
	?>
	$('#sreadOnly<?php echo $serv['service_id']; ?>').raty({ readOnly: true, score: <?php echo $rate; ?> });
	<?php } ?>

<?php } ?>
</script>

<script>
<?php

foreach($ftrservices as $serv){
if($serv['rate_total']=="")
	{ ?>
$('#ssreadOnly<?php echo $serv['service_id']; ?>').raty({ readOnly: true, score: 0 });
<?php
	} else {
	$rtl=$serv['rate_total'];	
	$rate=$rtl/$serv['rate_count'];
	?>
	$('#ssreadOnly<?php echo $serv['service_id']; ?>').raty({ readOnly: true, score: <?php echo $rate; ?> });
	<?php } ?>

<?php } ?>
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