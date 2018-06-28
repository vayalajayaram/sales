<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo $getsubsubbanner['meta_title']; ?></title>
      <meta charset="utf-8">
      <meta name="keywords" content="<?php echo $getsubsubbanner['meta_keywords']; ?>" />
      <meta name="description" content="<?php echo $getsubsubbanner['meta_description']; ?>">
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
      <link href="<?php echo base_url(); ?>plugins/raty/jquery.raty.css" rel="stylesheet" />
   </head>
   <body class="res layout-subpage">
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
        <?php include('header.php') ?>
         <!-- //Header Container  -->
         <!-- Main Container  -->
         <div class="main-container container">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li>Products</li>
            </ul>
            <div class="row">
               <!--Middle Part Start-->
               <!--Right Part Start -->
               <aside class="col-sm-4 col-md-3" id="column-left">
                  <div class="module latest-product titleLine">
                     <h1 class="hidden">My Account</h1>
                     <h2 class="hidden">My Account</h2>
                     <div class="faq-accordion">
                        <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                           <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingOne">
                                 <h4 class="panel-title">
                                    <a class="method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-filter"></i> Filters <i class="fa fa-caret-down"></i></a>
                                 </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="">
                                 <div class="module latest-product titleLine">
                                    <h1 class="hidden">My Account</h1>
                                    <h2 class="hidden">My Account</h2>
                                    <h3 class="modtitle"> </h3>
                                    <div class="modcontent ">
                                       <form class="type_2">
                                          <div class="table_layout filter-shopby chng-border">
                                             <div class="table_row">
                                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell" style="z-index: 103;">
                                                   <h3 class="dtls">Search</h3>
                                                   <input class="form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                   <fieldset>
                                                      <legend>Sub Category</legend>
                                                      <ul class="checkboxes_list">
                                                         <li>
                                                            <input type="checkbox" checked="" name="category" id="category_1">
                                                            <label for="category_1">Plumbing</label>
                                                         </li>
                                                         <li>
                                                            <input type="checkbox" name="category" id="category_2">
                                                            <label for="category_2">Gardening</label>
                                                         </li>
                                                         <li>
                                                            <input type="checkbox" name="category" id="category_3">
                                                            <label for="category_3">Electrical</label>
                                                         </li>
                                                         <li>
                                                            <input type="checkbox" name="category" id="category_4">
                                                            <label for="category_4">Cleaning</label>
                                                         </li>
                                                      </ul>
                                                   </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                   <fieldset>
                                                      <legend>Manufacturer</legend>
                                                      <ul class="checkboxes_list">
                                                         <li>
                                                            <input type="checkbox" checked="" name="manufacturer" id="manufacturer_1">
                                                            <label for="manufacturer_1">Manufacturer 1</label>
                                                         </li>
                                                         <li>
                                                            <input type="checkbox" name="manufacturer" id="manufacturer_2">
                                                            <label for="manufacturer_2">Manufacturer 2</label>
                                                         </li>
                                                         <li>
                                                            <input type="checkbox" name="manufacturer" id="manufacturer_3">
                                                            <label for="manufacturer_3">Manufacturer 3</label>
                                                         </li>
                                                      </ul>
                                                   </fieldset>
                                                </div>
                                                <div class="table_cell">
                                                   <fieldset>
                                                      <legend>Price</legend>
                                                      <div class="range">
                                                         Range :
                                                         <span class="min_val">$28.00</span> - 
                                                         <span class="max_val">$517.32</span>
                                                         <input type="hidden" name="" class="min_value" value="28.00">
                                                         <input type="hidden" name="" class="max_value" value="517.32">
                                                      </div>
                                                      <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                         <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                         <span class="ui-slider-handle ui-state-default ui-corner-all" style="left: 3.15795%;"></span>
                                                         <span class="ui-slider-handle ui-state-default ui-corner-all" style="left: 89.0051%;"></span>
                                                         <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 3.15795%; width: 93.6859%;"></div>
                                                         <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 3.15795%; width: 84.0295%;"></div>
                                                         <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 3.15795%; width: 85.8471%;"></div>
                                                      </div>
                                                   </fieldset>
                                                </div>
                                             </div>
                                             <!--/ .table_row -->
                                             <footer class="bottom_box">
                                                <div class="buttons_row">
                                                   <button type="submit" class="button_grey button_submit">Search</button>
                                                   <button type="reset" class="button_grey filter_reset">Reset</button>
                                                </div>
                                             </footer>
                                          </div>
                                          <!--/ .table_layout -->
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  
               </aside>
               <!--Right Part End -->
               <div id="content" class="col-md-9 col-sm-8">
                  <div class="products-category">
                     <div class="category-derc">
                        <div class="row">
                           <div class="col-sm-12">
                              <p><img src="<?php echo base_url().$getsubsubbanner['banner']; ?>" alt="<?php echo $getsubsubbanner['name']; ?>"><br></p>
                           </div>
                        </div>
                     </div>
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
					 <?php foreach($products as $product){ ?>
                        <div class="product-layout col-md-4 col-sm-6 col-xs-6">
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
                                       <div class="box-review form-group">
                                   <div id="preadOnly<?php echo $product['product_id']; ?>" class="star-image"></div>
                                   </div>
                                    </div>
                                    <div class="price">
                                       <span class="price-new"> Rs.<?php echo $product['product_price']; ?></span>
                                       <span class="price-old">र <?php echo $product['discount_price']; ?></span>    
                                       <span class="label label-percent"><?php echo number_format($product['discount_percent'],0); ?>%</span>    
                                    </div>
                                    
                                 </div>
                                 <div class="button-group">
                                    <a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$product['product_name'])); ?>/<?php echo $product['product_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                     <?php if($this->session->userdata('customer_id')==""){ ?>
                                <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list" onclick="wishlist.add('<?php echo base_url(); ?>','<?php echo $product['product_name']; ?>');"><i class="fa fa-heart"></i></button>
                                <?php } else { ?>
                                <form action="<?php echo base_url(); ?>home/intrests" method="post" style="display:inline;">
                                   <button class="wishlist"  type="submit" data-toggle="tooltip" data-original-title="Wish list" ><i class="fa fa-heart"></i></button>
                                   <input type="hidden" name="pname" value="<?php echo $product['product_name']; ?>">
                                   <input type="hidden" name="pid" value="<?php echo $product['product_id']; ?>">
                                   <input type="hidden" name="pimage" value="<?php echo $product['product_image']; ?>">
                                    <input type="hidden" name="type" value="product">
                                   </form>
                                <?php } ?>
                                 </div>
                              </div>
                              <!-- right block -->
                           </div>
                        </div>
						<?php } ?>
                        
						 <?php foreach($services as $service){ ?>
                       <div class="product-layout col-md-4 col-sm-6 col-xs-6">
                          <div class="product-item-container">
                            <div class="left-block">
                              <div class="product-image-container second_img ">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$service['service_name'])); ?>/<?php echo $service['service_id']; ?>/">
                                <img src="<?php echo base_url().$service['product_image']; ?>"  alt="<?php echo $service['service_name']; ?>" class="img-responsive" />
                                <img src="<?php echo base_url().$service['product_image']; ?>"  alt="<?php echo $service['service_name']; ?>" class="img_0 img-responsive" />
                                </a>
                              </div>
                              <!--Sale Label-->
                              <span class="label label-sale"><?php echo number_format($service['discount_percent'],0); ?>% off</span>
                              <!--full quick view block-->
                             
                              <!--end full quick view block-->
                            </div>
                            <div class="right-block">
                              <div class="caption">
                                <h4><a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$service['service_name'])); ?>/<?php echo $service['service_id']; ?>/"><?php echo $service['service_name']; ?></a></h4>
                                <div class="ratings">
                                  <div class="box-review form-group">
                                   <div id="sreadOnly<?php echo $service['service_id']; ?>" class="star-image"></div>
                                   </div>
                                </div>
                                <div class="price">
                                  <span class="price-new"> Rs.<?php echo $service['discount_price']; ?></span> 
                                  <span class="price-old">&#2352; <?php echo $service['price']; ?></span>     
                                </div>
                              </div>
                              <div class="button-group">
                                <a href="<?php echo base_url(); ?>sdetails/<?php echo strtolower(str_replace(" ","-",$service['service_name'])); ?>/<?php echo $service['service_id']; ?>/" class="addToCart"><i class="fa fa-shopping-cart"></i> <span class="">Book Now</span></a>
                                <?php if($this->session->userdata('customer_id')==""){ ?>
                                 <button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Wish list"><i class="fa fa-heart-o"></i></button>
                                <?php } else { ?>
                                
                                  <form action="<?php echo base_url(); ?>home/intrests" method="post" style="display:inline;">
                                        <button class="wishlist" type="submit" data-toggle="tooltip" data-original-title="Wish list"><i class="fa fa-heart-o"></i></button>                           

                                   <input type="hidden" name="pname" value="<?php echo $service['service_name']; ?>">
                                   <input type="hidden" name="pid" value="<?php echo $service['service_id']; ?>">
                                   <input type="hidden" name="pimage" value="<?php echo $service['product_image']; ?>">
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

foreach($products as $prod){
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

foreach($services as $prod){
if($prod['rate_total']=="")
	{ ?>
$('#sreadOnly<?php echo $prod['service_id']; ?>').raty({ readOnly: true, score: 0 });
<?php
	} else {
	$rtl=$prod['rate_total'];	
	$rate=$rtl/$prod['rate_count'];
	?>
	$('#sreadOnly<?php echo $prod['service_id']; ?>').raty({ readOnly: true, score: <?php echo $rate; ?> });
	<?php } ?>

<?php } ?>
</script>
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