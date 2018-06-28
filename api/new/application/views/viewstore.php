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
                <li><strong>View Store</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End --> 
      <!-- Main Container -->
      <div class="main-container col2-left-layout">
        <div class="container">
		<?php foreach($categories as $cat){ ?>
          <div class="row">
            <div class="col-main col-sm-12 col-xs-12">
              <div class="shop-inner">
                <div class="page-title">
                  <h2><?php echo $cat['category_name']; ?></h2>
                </div>
                <div class="product-grid-area">
                  <ul class="products-grid">
				  <?php 
				  foreach($products as $prod){
					if($cat['category_id']==$prod['category_id']){  
					   ?>
				  
                    <li class="item col-lg-51 col-md-51 col-sm-6 col-xs-6">
                      <div class="product-item">
                    <div class="item-inner">
                      <div class="icon-sale-label sale-left"><?php echo number_format($prod['discount_percent'],0); ?>% off</div>
                      <?php if($prod['free_bee']==1){  ?><div class="newimg"><img src="<?php echo base_url(); ?>images/brands/new.png" alt="new" class="img-responsive"></div><?php } ?>
                      <div class="product-thumb has-hover-img">
                        <a title="Ipsums Dolors Untra" href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$prod['product_name']); ?>/<?php echo $prod['product_id']; ?>">
                          <figure> <img class="first-img" src="<?php echo base_url().$prod['product_image']; ?>" alt="<?php echo $prod['product_name']; ?>"> </figure>
                        </a>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="brandna"><a href="<?php echo base_url()."brand/".str_replace(" ","-",$prod['brand_name']); ?>"><?php echo $prod['brand_name']; ?></a></div>
                          <div class="item-title"> <a title="<?php echo $prod['product_name']; ?>" href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$prod['product_name']); ?>/<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
							
							<div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> &#2352; <?php echo number_format($prod['discount_price'],2); ?></span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> &#2352; <?php echo number_format($prod['product_price'],2); ?></span> </p>
                              </div>
                              <div class="pro-action">
                                <div class="cart-plus-minus qtywidth">
                                  <label for="qty" class="myqty">Qty:</label>
                                  <div class="numbers-row">
                                    <div onclick="var result = document.getElementById('qty<?php echo $prod['product_id']; ?>'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                    <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty<?php echo $prod['product_id']; ?>" name="qty">
                                    <div onclick="var result = document.getElementById('qty<?php echo $prod['product_id']; ?>'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                  </div>
                                </div>
                                <button type="button" class="add-to-cart-mt btnwidth" data-placement="left" data-toggle="tooltip" data-original-title="Add to Cart" onClick="add_cart('<?php echo $prod['product_id']; ?>');"> <i class="fa fa-shopping-basket"></i></button>
                              </div>
                            </div>
                            
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    </li>
					
                    <?php } } ?>
                   
                    
                  </ul>
                </div>
              </div>
            </div>
          </div><hr>
		  <?php } ?>
         
        </div>
      </div>
      <br>
      <!-- Section: services -->
      <!-- /Section: services --> 
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
  </body>
</html>