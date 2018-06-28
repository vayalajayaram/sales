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
<style>
.ajax-load{
    position: fixed;
    top:50%;
	left:50%;
 
    background: #DDD;
    z-index: 1000;
}
</style>

   </head>
   <body class="shop_grid_page">
   <div class="ajax-load text-center" style="display:none">
	<img src="<?php echo base_url(); ?>images/loader.gif">Loading 
   </div>
   
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
                     <li><strong><?php echo $category_name; ?></strong></li>
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
      <div class="col-md-12">
         <div class="category-description std">
            <div class="slider-items-products">
               <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                     <!-- Item -->
					 <?php foreach($catsliders as $catslider){ ?>
                     <div class="item"><img alt="<?php echo $catslider['title']; ?>" src="<?php echo base_url().$catslider['image']; ?>">
                     </div>
					 <?php } ?>
                     <!-- End Item --> 
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
      <div class="shop-inner">
      <div class="page-title">
         <h2><?php echo $category_name; ?></h2>
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
               <select name="sort_price" id="sort_price" onChange="chsort();">
			      <option value="">Select Here</option>
                  <option value="desc" >high to low</option>
                  <option value="asc">low to high</option>
               </select>
            </div>
            
         </div>
      </div>
	  <div id="post-data">
       <div class="product-grid-area" id="divgrid">
      <ul class="products-grid">
	  <?php 
	   if(count($products)>0){
	  foreach($products as $product){
		   
		   ?>
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
		 <?php $catid=$product['category_id']; } } else { ?>
      No Products
	  <?php } ?>
         
      
         
         
         
      </ul>
</div>

       <div class="product-list-area" style="display:none;" id="divlist">
                  <ul class="products-list" id="products-list">
				    <?php 
	   if(count($products)>0){
	  foreach($products as $product){ 
	
	  ?>
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
				
	 </div>
				
<div class="pagination-area">
  
</div>
</div>
</div>
<aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
  <div class="block shop-by-side">
    <div class="sidebar-bar-title">
      <h3>Shop By</h3>
    </div>
    <div class="block-content">
      
      <div class="manufacturer-area">
        <h2 class="saider-bar-title">By Brand</h2>
        <div class="layered-content">
          <ul class="check-box-list">
		   <?php 
		  
		   
function multi_rename_key(&$array, $old_keys, $new_keys)
{
    if(!is_array($array)){
        ($array=="") ? $array=array() : false;
        return $array;
    }
    foreach($array as &$arr){
        if (is_array($old_keys))
        {
            foreach($new_keys as $k => $new_key)
            {
                (isset($old_keys[$k])) ? true : $old_keys[$k]=NULL;
                $arr[$new_key] = (isset($arr[$old_keys[$k]]) ? $arr[$old_keys[$k]] : null);
                unset($arr[$old_keys[$k]]);
            }
        }else{
            $arr[$new_keys] = (isset($arr[$old_keys]) ? $arr[$old_keys] : null);
            unset($arr[$old_keys]);
        }
    }
    return $array;
}
		$cntr=multi_rename_key($count, "brands_id", "b_id");
			
		 //$merge=array_merge_recursive($filterbrands,$cntr);
		 
		 
	
		   foreach($filterbrands as $fbds){ ?>
		   <?php foreach($cntr as $cnt){ if($cnt['b_id']==$fbds['b_id']){ ?>
            <li>
              <input type="checkbox" class="flt_chk" id="jtv<?php echo $fbds['b_id']; ?>" name="brand_f[]" value="<?php echo $fbds['b_id']; ?>" onClick="chsort();">
              <label for="jtv<?php echo $fbds['b_id']; ?>"> <span class="button"></span> <?php echo $fbds['brand_name']; ?><span class="count">
(<?php echo $cnt['num']; ?>)
</span> 
              </label>
            </li>
            <?php }   } ?>
            <?php } ?>
            
            
            
            
          </ul>
        </div>
      </div>
      <div class="size-area">
        <h2 class="saider-bar-title">Weight</h2>
        <div class="size" style="margin-top: 5px;">
          <ul>
		  <?php foreach($weights as $weight){ ?>
            <li><a href="javascript:void();" onClick="chweight('<?php echo $weight['w_id'] ?>');"><?php echo $weight['weight'] ?> Kg</a>
            </li>
           <?php } ?>
          </ul>
        </div>
      </div>


       <div class="size-area  product-price-range ">
        <h2 class="saider-bar-title">Price</h2>
        <div class="block-content">
          <div class="slider-range" >
            <div data-label-reasult="Range:" data-min="0" data-max="2000" data-unit="र" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="700" data-value-max="1500" onClick="chsort();">
              <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 70%;"></span>
            </div>
            <div class="amount-range-price">Range: र 700 - र 1500</div>
			<input type="hidden" name="minprice" id="ch_minprice" value="700">
			<input type="hidden" name="maxprice" id="ch_maxprice" value="1500">
          </div>
        </div>
      </div>


    </div>
  </div>
  
  
</aside>
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

<script>

function chweight(weht)
{
	 var sort_price=$("#sort_price").val(); 
	  
	   var i = 0;
       var arr = [];
       $('.flt_chk:checked').each(function () {
           arr[i++] = $(this).val();
       }); 
	   
	  	var minpr=$("#ch_minprice").val();
	var maxpr=$("#ch_maxprice").val();
	  
	  $.ajax({  url: '<?php echo base_url() ?>/category/pricefilter',
	            method: 'POST',
				data:{catid:'<?php echo $catid; ?>',by_price:sort_price,by_brand:arr,weight:weht,minprice:minpr,maxprice:maxpr},
	            beforeSend: function()
	            {
	              $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {         
	            $('.ajax-load').hide();
				
	            $("#post-data").html(data);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
              alert('server not responding...');
	        });
}
			
function chsort()
{
	  var sort_price=$("#sort_price").val(); 
	  
	   var i = 0;
       var arr = [];
       $('.flt_chk:checked').each(function () {
           arr[i++] = $(this).val();
       }); 
	   
	var minpr=$("#ch_minprice").val();
	var maxpr=$("#ch_maxprice").val();
	  
	  $.ajax({  url: '<?php echo base_url() ?>/category/pricefilter',
	            method: 'POST',
				data:{catid:'<?php echo $catid; ?>',by_price:sort_price,by_brand:arr,minprice:minpr,maxprice:maxpr},
	            beforeSend: function()
	            {
	              $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {         
	            $('.ajax-load').hide();
				
	            $("#post-data").html(data);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
              alert('server not responding...');
	        });
}
</script>
   </body>
</html>