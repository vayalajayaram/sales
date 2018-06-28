<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
   <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.min.css">


   </head>
   <body class="shop_grid_page">
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
                     <li><strong><?php echo $brand_name; ?></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumbs End --> 
      <!-- Main Container -->
      <div class="main-container col2-left-layout">
    <div class="container">
    <div class="row">
    
    <div class="col-main col-sm-12 col-xs-12">
    <div class="shop-inner">
    <div class="page-title">
      <h2><?php echo $brand_name; ?></h2>
    </div>
    <div class="toolbar">
      <div class="view-mode">
        <ul>
               <li class="active"> <a href="javascript:void();" id="gridlink"> <i class="fa fa-th-large"></i> </a> </li>
               <li> <a href="javascript:void();" id="listlink"> <i class="fa fa-th-list"></i> </a> </li>
        </ul>
      </div>
      <div class="sorter">
        <div class="short-by">
          <label>Sort By Price:</label>
          <select>
            <option selected="selected">Select Here</option>
            <option >high to low</option>
            <option>low to high</option>
          </select>
        </div>
        <div class="short-by page">
          <label>Show:</label>
          <select>
            <option selected="selected">18</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
          </select>
        </div>
      </div>
    </div>
    <div class="product-grid-area" id="divgrid">
        
        <ul class="products-grid">
          <?php 
		  if(count($products)>0){
		  foreach($products as $product){ ?>
         <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
            <div class="product-item">
              <div class="item-inner">
                 <div class="product-thumb has-hover-img">
                    <div class="icon-sale-label sale-left"><?php echo number_format($product['discount_percent'],0); ?>% off</div>
                    <?php if($product['free_bee']==1){  ?><div class="newimg"><img src="<?php echo base_url(); ?>images/brands/new.png" alt="new" class="img-responsive"></div><?php } ?>
                    <figure> <a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$product['product_name']); ?>/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['product_image']; ?>" alt=""></a> </figure>
                    <div class="item-info">
                       <div class="info-inner">
                          <div class="brandna"><a href="<?php echo base_url()."brand/".str_replace(" ","-",$product['brand_name']); ?>"><?php echo $product['brand_name']; ?></a></div>
                          <div class="item-title"> <a title="<?php echo $product['product_name']; ?>" href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$product['product_name']); ?>/<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></a> </div>
                          <div class="item-content">
                             <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                             <div class="item-price">
<div class="price-box">
<p class="special-price">
<span class="price-label">Special Price</span>
<span class="price"> र <?php echo number_format($product['discount_price'],2); ?></span>
</p>
<p class="old-price">
<span class="price-label">Regular Price:</span>
<span class="price"> र <?php echo number_format($product['product_price'],2); ?></span>
</p>
</div>
</div>
                             <div class="text-center">
                                <div class="pro-action clearfix">
                                   <div class="cart-plus-minus qtywidth">
                                      <label for="qty" class="myqty">Qty:</label>
                                      <div class="numbers-row">
                                         <div onclick="var result = document.getElementById('qty<?php echo $product['product_id']; ?>'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                         <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty<?php echo $product['product_id']; ?>" name="qty">
                                         <div onclick="var result = document.getElementById('qty<?php echo $product['product_id']; ?>'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                      </div>
                                   </div>
                                   <button type="button" class="add-to-cart-mt btnwidth" data-placement="left" data-toggle="tooltip" data-original-title="Add to Cart" onClick="add_cart('<?php echo $product['product_id']; ?>');"> <i class="fa fa-shopping-basket"></i>
                                   </button>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
         </li>
		 <?php } } else { ?>
      No Products
	  <?php } ?>
         
      </ul>
      
    </div>
	<div class="product-list-area" style="display:none;" id="divlist">
                  <ul class="products-list" id="products-list">
				    <?php 
	   if(count($products)>0){
	  foreach($products as $product){ ?>
                    <li class="item ">
                      <div class="product-img">
                        <div class="icon-sale-label sale-left"><?php echo number_format($product['discount_percent'],0); ?>% off</div>
                         <?php if($product['free_bee']==1){  ?><div class="newimg"><img src="<?php echo base_url(); ?>images/brands/new.png" alt="new" class="img-responsive"></div><?php } ?>
                        
                          <figure> <a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$product['product_name']); ?>/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['product_image']; ?>" alt=""></a></figure>
                        
                      </div>
                      <div class="product-shop">
                        <div class="brandna"><a href="<?php echo base_url()."brand/".str_replace(" ","-",$product['brand_name']); ?>"><?php echo $product['brand_name']; ?></a></div>
                        <h2 class="product-name"><a title="<?php echo $product['product_name']; ?>" href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$product['product_name']); ?>/<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></a></h2>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price-label"></span> <span class="price"> र <?php echo number_format($product['discount_price'],2); ?> </span> </p>
                          <p class="old-price"> <span class="price-label"></span> <span class="price"> र <?php echo number_format($product['product_price'],2); ?> </span> </p>
                        </div>
                        <div class="desc std">
                          <p><?php echo substr($product['description'],0,200); ?> .... <a class="link-learn" title="Learn More" href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$product['product_name']); ?>/<?php echo $product['product_id']; ?>">Learn More</a> 
                          </p>
                        </div>
                        <div class="actions">
                          <button class="button cart-button" title="Add to Cart" type="button" onClick="add_cart('<?php echo $product['product_id']; ?>');"><i class="fa fa-shopping-basket"></i><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </li>
                   <?php } } else { ?>
      No Products
	  <?php } ?>

                    
                  </ul>
                </div>
<div class="pagination-area">

</div>
</div>
</div>

</div>
</div>
</div>
<!-- Main Container End -->
<!-- Footer -->
      <?php include_once("footer.php"); ?>
      <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> </div>
      <!-- End Footer --> 
      <!-- JS --> 
      <!-- jquery js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
      <!-- bootstrap js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
      <!-- owl.carousel.min js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script> 
      <!-- bxslider js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.js"></script> 
      <!-- megamenu js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/megamenu.js"></script> 
      <script type="text/javascript">
         /* <![CDATA[ */   
         var mega_menu = '0';
         
         /* ]]> */
      </script> 
      <!-- jquery.mobile-menu js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/mobile-menu.js"></script> 
      <!--jquery-ui.min js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script> 
      <!-- main js --> 
      <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-select.min.js"></script>
	  <script>
    $(document).ready(function(){
		
        $("#gridlink").click(function() {
            $("#divlist").hide();
            $("#divgrid").show();
			$("#listlink").parent().removeClass('active');
			$("#gridlink").parent().addClass('active');
        });
        $("#listlink").click(function() {
            $("#divlist").show();
            $("#divgrid").hide();
			
			$("#gridlink").parent().removeClass('active');
			$("#listlink").parent().addClass('active');
        });
    })
</script>
   </body>
</html>