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