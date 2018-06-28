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
    

	
	
    
    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                
                <div class="row">
				
				<div class="col-md-6">
                        <div class="">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/dashboard">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/sellers"> Seller</a>
                                </li>
                                <li class="active"> Add Service</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-12">
					
					
                        
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								
								 <div class="col-md-6 col-sm-6 col-xs-12">
								    
									<div class="form-group">
                                        <label>Service Name</label>
                                    	<input type="text" class="form-control" placeholder="Service name" name="name"  required="required" maxlength="100" />
                                    </div>
									
								 </div>
                                    
                                   <div class="col-md-6 col-sm-6 col-xs-12">
								       <div class="form-group">
                                        <label>Category Name</label>
                                    	<select name="category" class="form-control" required >
                                    		<option value="">Select Category</option>
                                    		<?php foreach($categories as $category){ ?>
                                    		<option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                                    		<?php } ?>
                                   		</select>
                                    </div>
								   </div>
									
									  
									<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
                                        <label>Sub Category Name </label>
                                    	<select name="subcategory" class="form-control" id="subcategory" required >
                                    		<option value="">Select Sub Category</option>
                                    	
                                   		</select>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Sub Sub Category Name </label>
                                    	<select name="subsubcategory" id="subsubcategory" class="form-control" required >
                                    		<option value="">Select Sub Sub Category</option>
                                    	
                                   		</select>
                                    </div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									
									 <div class="form-group">
                                        <label>Price</label>
                                    	<input type="text" class="form-control" placeholder="Price" name="price" maxlength="10"  required />
                                    </div>
									
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									
									<div class="form-group">
                                        <label>Discount Price</label>
                                    	<input type="text" class="form-control" placeholder="Discount Price" name="discount_price" maxlength="10"  required />
                                    </div>
									
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									
									 <div class="form-group">
                                        <label>Discount%</label>
                                    	<input type="text" class="form-control" placeholder="Discount" name="discount"  readonly  />
                                    </div>
									</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Sort Order</label>
                                    	<input type="number" class="form-control" placeholder="Sort Order" name="sort_order"  required min="1" />
                                    </div>
                                  </div>					
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
									 
                                               
                                            
                                        <label>Availability</label><br>
										 <label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="sunday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Sunday</span>
                                                </label> &nbsp;
												 <label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="monday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Monday</span>
                                                </label>
												&nbsp;
												<label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="tuesday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Tuesday</span>
                                                </label>
												&nbsp;
												<label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="wednesday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Wednesday</span>
                                                </label>
												&nbsp;
												<label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="thursday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Thursday</span>
                                                </label>
												&nbsp;
												<label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="friday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Friday</span>
                                                </label>
												&nbsp;
												<label class="eagle-check custom-checkbox">
                                                    <input class="eagle-check-input" type="checkbox" name="saturday" value="1">
                                                    <span class="eagle-check-indicator"></span>
                                                    <span class="eagle-check-description">Saturday</span>
                                                </label>
                                    	
										
                                    </div>
                                  </div>
								  
								  
								  <div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Featured Service </label><br>
                                    	<label class="radio-inline"><input type="radio" name="display_home" value="1" required >Yes</label>
<label class="radio-inline"><input type="radio" name="display_home" value="0" required >No</label>
										
                                    </div>
                                  </div>
								  
									<div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="form-group">
                                        <label>Description</label>
                                    	 <textarea id="ckeditor" name="description"></textarea>
                                    </div>
									</div>
									
									
									
								  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" >Enable</option>
                                            <option value="0" >Disabled</option>
                                            
                                        </select>
                                    </div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file"  placeholder="Product Image" name="image" required /> <br>
                                         (Product Image Size Should be 650px*650px)
                                    </div>
                                       </div>  
									   <div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Meta Title</label>
                                    	 <input type="text" maxlength="100" class="form-control" name="meta_title" required>
                                    </div>
									</div>
									<div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Meta Keywords</label>
                                    	 <textarea class="form-control" name="meta_keywords" maxlength="250"></textarea>
                                    </div>
									</div>
									  <div class="col-md-12 col-sm-6 col-xs-12">
									 <div class="form-group">
                                        <label>Meta Description</label>
                                    	 <textarea class="form-control" name="meta_description" maxlength="250"></textarea>
                                    </div>
									</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image1</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)
                                    </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image2</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)
                                    </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image3</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)
                                    </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label>Product Thumb Image4</label>
                                        <input type="file"  placeholder="Product Image" name="pimage[]"  /> <br>
                                         (Product Thumb Image Size Should be 650px*650px)
                                    </div>
                                       </div>
                                     <div class="form-group" style="text-align:center">
									 <input type="hidden" name="service_func" value="add">
									 <button class="btn bg-cyan waves-effect" type="submit">Add Service</button>
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



<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
<script src="<?php echo base_url(); ?>plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/ckeditor.js"></script>



<script type="text/javascript">


  $("select[name='category']").change(function(){
      var category = $(this).val();   
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_subcat",
          method: 'POST',
          data: {category:category},
          success: function(data) {			 
          $("#subcategory").html(data);
          }
      });
  });
  
  $("select[name='subcategory']").change(function(){
      var subcategory = $(this).val();   
	  
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_subsubcat",
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

 <script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
			</script>

</body>

</html>