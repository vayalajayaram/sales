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
   <body class="res layout-subpage banners-effect-6">
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
      <?php include('header.php') ?>
         <!-- //Header Container  -->
         <!-- Main Container  -->
         <div class="main-container container product-service">
            <!--Middle Part End-->

            <div class="row">
              <?php include('leftside.php') ?>
              <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="row">
                  <div class="col-sm-6">
                    <ol class="breadcrumb">
                      <li><a href="<?php echo base_url(); ?>">Home</a></li>
                      <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                      <li class="active"><span>Edit Product</span></li>
                    </ol>
                  </div>
                  <div class="col-sm-6">
                      
                  </div>
                </div>
                <div class="clearfix"></div>
                  <form id="fileupload" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <h3 class="dtls">Product Details</h3>
                      </div>
                      <div class="col-sm-6">
                        <fieldset id="address">
                          <div class="form-group">
                            <label class="control-label">Category</label>
                            <select name="category" id="category" class="form-control" required >
                                    		<option value="">Select Category</option>
                                    		<?php foreach($categories as $category){ ?>
                                    		<option value="<?php echo $category['category_id']; ?>" <?php if($category['category_id']==$product['category_id']){ echo "selected"; } ?> ><?php echo $category['category_name']; ?></option>
                                    		<?php } ?>
                                   		</select>
                          </div>

                          <div class="form-group">
                            <label class="control-label">Sub Sub Category</label>
                            <select name="subsubcategory" id="subsubcategory" class="form-control" required >
                                    		<option value="">Select Sub Sub Category</option>
                                    	
                                   		</select>
                          </div>

                           <div class="form-group">
                            <label  class="control-label">Product Name</label>
                            <input type="text" class="form-control" value="<?php echo $product['product_name']; ?>"  name="name" required>
                          </div>

                          
                          <div class="form-group">
                            <label  class="control-label">Market Price</label>

                            <input type="text" class="form-control"   value="<?php echo $product['product_price']; ?>" name="price" required>
                          </div>
                          
                          

                          
                        </fieldset>
                      </div>
                      <div class="col-sm-6">
                        <fieldset id="shipping-address">

                          <div class="form-group">
                            <label class="control-label">Sub Category</label>
                            <select name="subcategory" class="form-control" id="subcategory" required >
                                    		<option value="">Select Sub Category</option>
                                    	
                                   		</select>
                          </div>

                          <div class="form-group">
                            <label  class="control-label">Product Image</label>
                            <input type="file" class="form-control"   name="image" >
							<img src="<?php echo base_url().$product['product_image']; ?>" width="100">
                          </div>

                          

                         
                          
                          
                          <div class="form-group">
                            <label  class="control-label">Status</label>
                            <select class="form-control"  name="status">
                              <option value="">Please Select </option>
                              <option value="1" <?php if($product['status']==1){ echo "selected"; } ?>>Active</option>
                              <option value="0" <?php if($product['status']==0){ echo "selected"; } ?>>In Active</option>
                            
                            </select>
                          </div>

                          <div class="form-group">
                            <label  class="control-label">Our Price</label>
                            <input type="text" class="form-control" value="<?php echo $product['discount_price']; ?>"  name="discount_price">
                          </div>


                          
                        </fieldset>
                      </div>


                      <div class="col-md-12">
                        <label  class="control-label">Description</label>
                        <textarea name="description" rows="10" id="input-enquiry" class="form-control"><?php echo $product['description']; ?></textarea>
                      </div>


                      <div class="col-xs-12 col-sm-6 col-md-6 radio1">
                        <label class="control-label">Availability: </label>
                        <div class="btn-group btn-group-horizontal" data-toggle="buttons">
                          <label class="btn active">
                            <input type="radio" name="available" value="in_stock" <?php if($product['availability']=="in_stock"){ echo "checked"; } ?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> In Stock</span>
                          </label>
                          <label class="btn">
                            <input type="radio" name="available" value="out_of_stock" <?php if($product['availability']=="out_of_stock"){ echo "checked"; } ?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> Out Stock</span>
                          </label>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6 col-md-6 radio1 text-right">
                        <label class="control-label"> Make it featured product: </label>
                        <div class="btn-group btn-group-horizontal" data-toggle="buttons">
                          <label class="btn active">
                            <input type="radio" name="feature" value="1" <?php if($product['display_home']=="1"){ echo "checked"; } ?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> Yes</span>
                          </label>
                          <label class="btn">
                            <input type="radio" name="feature" value="0" <?php if($product['display_home']=="0"){ echo "checked"; } ?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image1</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)<img src="<?php echo base_url(); ?>uploads/products/product_<?php echo $product['product_id']; ?>_0.jpg" width="100">
                                    </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image2</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)<img src="<?php echo base_url(); ?>uploads/products/product_<?php echo $product['product_id']; ?>_1.jpg" width="100">
                                    </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image3</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)<img src="<?php echo base_url(); ?>uploads/products/product_<?php echo $product['product_id']; ?>_2.jpg" width="100">
                                    </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image4</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)<img src="<?php echo base_url(); ?>uploads/products/product_<?php echo $product['product_id']; ?>_3.jpg" width="100">
                                    </div>
                                       </div>

                    <div class="col-md-12">
                      <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </div>


                    

                    <div class="buttons clearfix">
                      <div class="pull-right">
                        
                          <input type="hidden"  name="discount" value="" readonly  />
                        <input type="hidden" name="prod" value="edit">
                        <input type="submit" class="btn btn-md btn-primary" value="Save Changes">

                      </div>
                    </div>
                  </div>
                  </form>
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
	  <script type="text/javascript">
  
  $(document).ready(function(){
	  var category = $("#category").val();   
	  var subcategory = <?php echo $product['subcategory_id'] ?>;   
      $.ajax({
          url: "<?php echo base_url();?>/dashboard/ajax_subcat",
          method: 'POST',
          data: {category:category,subcategory:subcategory},
          success: function(data) {			 
          $("#subcategory").html(data);
          }
          });
		  var subsubcategory = <?php echo $product['subsubcategory_id'] ?>; 
		  $.ajax({
          url: "<?php echo base_url();?>/dashboard/ajax_subsubcat",
          method: 'POST',
          data: {subcategory:subcategory,subsubcategory:subsubcategory},
          success: function(data) {			 	 
          $("#subsubcategory").html(data);
          }
         });
		 
     });


  $("select[name='category']").change(function(){
      var category = $(this).val(); 
	  var subcategory = <?php echo $product['subcategory_id'] ?>;   
      $.ajax({
          url: "<?php echo base_url();?>/dashboard/ajax_subcat",
          method: 'POST',
          data: {category:category,subcategory:subcategory},
          success: function(data) {			 
          $("#subcategory").html(data);
          }
      });
  });
  
  $("select[name='subcategory']").change(function(){
      var subcategory = $(this).val();   
	  
      $.ajax({
          url: "<?php echo base_url();?>/dashboard/ajax_subsubcat",
          method: 'POST',
          data: {subcategory:subcategory},
          success: function(data) {	
		 	 
          $("#subsubcategory").html(data);
          }
      });
  });
  
  
  $('input[name="price"]').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }
});

$('input[name="discount_price"]').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }
 
 
});

$( 'input[name="discount_price"]' ).mouseout(function() {
  var disprice=$('input[name="discount_price"]').val();
  var price=$('input[name="price"]').val();
  if(disprice!="" && price!="")
  {
	  var per1=(price-disprice)/price;
	  var profits=per1*100;
	  var profits1=profits.toFixed(2);	 
	
	 $('input[name="discount"]').val(profits1);
  }
 
})


$( 'input[name="price"]' ).mouseout(function() {
  var disprice=$('input[name="discount_price"]').val();
  var price=$('input[name="price"]').val();
  if(disprice!="" && price!="")
  {
	  var per1=(price-disprice)/price;
	  var profits=per1*100;
	  var profits1=profits.toFixed(2);	 
	
	 $('input[name="discount"]').val(profits1);
  }
 
})

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