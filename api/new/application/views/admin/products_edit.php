<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php $settings_admin = $this->session->userdata('settings_admin'); echo $settings_admin['meta_title']; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">

    <!--REQUIRED PLUGIN CSS-->
    <link href="<?php echo base_url(); ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/spinkit/spinkit.css" rel="stylesheet">

    <!--REQUIRED THEME CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themes/main_theme.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="theme-indigo light layout-fixed">
<div class="wrapper">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="sk-wave">
                <div class="sk-rect sk-rect1 bg-cyan"></div>
                <div class="sk-rect sk-rect2 bg-cyan"></div>
                <div class="sk-rect sk-rect3 bg-cyan"></div>
                <div class="sk-rect sk-rect4 bg-cyan"></div>
                <div class="sk-rect sk-rect5 bg-cyan"></div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- top navbar-->
    
<?php include_once("header.php"); ?>
    <!-- sidebar-->
    
<?php include_once("leftside.php"); ?>
    <!-- sidebar-->

    
    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="page-header">
                    <h2>Edit Product</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/products">Products</a></li>
                        <li class="active">Edit Product</li>
                    </ol>
                </div>
                <div class="row">
				
				
                    <div class="col-md-12">
                        <div class="card" style="background:none;box-shadow:none;margin-bottom:5px; text-align:right; min-height:20px;">
                          
<a href="<?php echo base_url(); ?>admin/products/"><button class="btn bg-purple" type="button">View Products</button></a>

</div>
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								<div class="col-md-6 col-sm-6 col-xs-12">
								 <div class="form-group">
                                        <label>Product Name</label>
                                    	<input type="text" class="form-control" placeholder="Product name" name="name"  required value="<?php echo $products['product_name']; ?>" />
                                    </div>
                                    </div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                    	<select name="category" class="form-control" required  id="category">
                                    		<option value="">Select Category</option>
                                    		<?php foreach($categories as $category){ ?>
                                    		<option value="<?php echo $category['category_id']; ?>" <?php if($products['category_id']==$category['category_id']) { echo "selected"; } ?>><?php echo $category['category_name']; ?></option>
                                    		<?php } ?>
                                   		</select>
                                    </div>
									</div>
									  <div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Brand</label>
                                    	<select name="brand" class="form-control" required >
                                    		<option value="">Select Brand</option>
                                    		<?php foreach($brands as $brand){ ?>
                                    		<option value="<?php echo $brand['b_id']; ?>" <?php if($brand['b_id']==$products['brands_id']){ echo "selected"; } ?>><?php echo $brand['brand_name']; ?></option>
                                    		<?php } ?>
                                   		</select>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Item Code</label>
                                    	<input type="text" class="form-control" placeholder="Item Code" name="item"  required value="<?php echo $products['item_code']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Price</label>
                                    	<input type="text" class="form-control" placeholder="Price" name="price"  required value="<?php echo $products['product_price']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Discount Price</label>
                                    	<input type="text" class="form-control" placeholder="Discount Price" name="discount_price"  required value="<?php echo $products['discount_price']; ?>" />
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Discount%</label>
                                    	<input type="text" class="form-control" placeholder="Discount" name="discount"  required value="<?php echo $products['discount_percent']; ?>" readonly />
                                    </div>
									</div>
								
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Total Stock</label>
                                    	<input type="text" class="form-control" placeholder="Total Stock" name="stock"  required value="<?php echo $products['total_stock']; ?>" />
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Availability</label><br>
                                    	<label class="radio-inline"><input type="radio" name="available" value="in_stock" required <?php if($products['availability']=="in_stock"){ echo "checked"; } ?>>In Stock</label>
<label class="radio-inline"><input type="radio" name="available" value="out_of_stock" required <?php if($products['availability']=="out_of_stock"){ echo "checked"; } ?> >Out Of Stock</label>
										
                                    </div>
                                  </div>
								  
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Sort Order</label>
                                    	<input type="number" class="form-control" placeholder="Sort Order" name="sort_order"  required value="<?php echo $products['sort_order']; ?>" min="1" />
                                    </div>
                                  </div>
								  <div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Free Bee</label><br>
                                    	<label class="radio-inline"><input type="radio" name="free_bee" value="1" required <?php if($products['free_bee']=="1"){ echo "checked"; } ?>>Yes</label>
<label class="radio-inline"><input type="radio" name="free_bee" value="0" required <?php if($products['free_bee']=="0"){ echo "checked"; } ?> >No</label>
										
                                    </div>
                                  </div>
								  <div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Display In Home Page</label><br>
                                    	<label class="radio-inline"><input type="radio" name="display_home" value="1" required <?php if($products['display_home']=="1"){ echo "checked"; } ?>>Yes</label>
<label class="radio-inline"><input type="radio" name="display_home" value="0" required <?php if($products['display_home']=="0"){ echo "checked"; } ?> >No</label>
										
                                    </div>
                                  </div>
								  <div class="col-md-12 col-sm-12 col-xs-12">								
									 <div class="form-group">
                                        <label>Weight</label>
                                    	
										<select name="weight" class="form-control" required>
										<option value="">Select Weight</option>
										<?php foreach($weights as $weight){ ?>
										<option value="<?php echo $weight['w_id']; ?>" <?php if($products['weight']==$weight['w_id']){ echo "selected"; } ?> ><?php echo $weight['weight']; ?></option>
										<?php } ?>
										</select>
                                    </div>
									</div>
									<div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Description</label>
                                    	 <textarea id="ckeditor" name="description"><?php echo $products['description']; ?></textarea>
                                    </div>
									</div>
									
									
									<div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Cooking Tips</label>
                                    	 <textarea id="editor1" name="cooking_tips"><?php echo $products['cooking_tips']; ?></textarea>
										 
                                    </div>
									</div>
									
									
							   <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($products['display_status']==1) { echo "selected"; } ?>>Enable</option>
                                            <option value="0" <?php if($products['display_status']==0) { echo "selected"; } ?>>Disabled</option>
                                            
                                        </select>
                                    </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file"  placeholder="Product Image" name="image" /><img src="<?php echo base_url().$products['product_image']; ?>"  width="100" >  <br>
(Product Image Size Should be 650px*650px)                                  </div>
                                 </div>
								 <div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Meta Title</label>
                                    	 <input type="text" class="form-control" name="meta_title" maxlength="100" value="<?php echo $products['meta_title']; ?>" required >
                                    </div>
									</div>
									<div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Meta Keywords</label>
                                    	 <textarea class="form-control" name="meta_keywords" maxlength="250"><?php echo $products['meta_keywords']; ?></textarea>
                                    </div>
									</div>
									  <div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Meta Description</label>
                                    	 <textarea class="form-control" name="meta_description" maxlength="250"><?php echo $products['meta_description']; ?></textarea>
                                    </div>
									</div>
                                     <div class="form-group" style="text-align:center">
									 <input type="hidden" name="product_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Product</button>
									 </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER-->
	<footer>
        <span><?php echo $settings_admin['copy_right']; ?> By <b class="col-blue">IGrand</b></span>
    </footer>
</div>
<!-- CORE PLUGIN JS -->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>plugins/modernizr/modernizr.custom.js"></script>
<script src="<?php echo base_url(); ?>plugins/screenfull/dist/screenfull.js"></script>
<script src="<?php echo base_url(); ?>plugins/jQuery-Storage-API/jquery.storageapi.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>plugins/node-waves/waves.js"></script>


<script src="<?php echo base_url(); ?>plugins/file-input/js/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>plugins/autosize/autosize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/basic-form-elements.js"></script>
<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
<script src="<?php echo base_url(); ?>plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/ckeditor.js"></script>

<script type="text/javascript">
  
 

$('input[name="discount_price"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});

$('input[name="price"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {    
    this.value = this.value.replace(/\D/g, '');
  }  
});

$('input[name="weight"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {    
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

 <script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
			</script>

</body>

</html>