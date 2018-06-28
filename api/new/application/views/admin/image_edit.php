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
                <div class="page-header">
                    <h2>Edit Product Images</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/products">Products</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/pimages/view/<?php echo $pimage['product_id']; ?>">Product Images</a></li>
						 <li class="active">Edit Product Images</li>
                    </ol>
                </div>
                <div class="row">
				
				
                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								
								 <div class="form-group">
                                        <label>Image Title</label>
                                    	<input type="text" class="form-control" placeholder="Image Title" name="title"  required value="<?php echo $pimage['image_title']; ?>" maxlength="100" />
                                    </div>
                                     <div class="form-group">
                                        <label>Alternate Text</label>
                                    	<input type="text" class="form-control" placeholder="Alternate Text" name="text"  required value="<?php echo $pimage['alternate_text']; ?>" maxlength="100" />
                                    </div>
                                    
									  
                                   <div class="form-group">
                                        <label>Sort Order</label>
                                    	<input type="number" class="form-control" placeholder="Sort Order" name="sort"  required value="<?php echo $pimage['sort_order']; ?>" min="1" />
                                    </div>
									
									 <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($pimage['status']==1){ echo "selected"; } ?> >Enable</option>
                                            <option value="0" <?php if($pimage['status']==0){ echo "selected"; } ?> >Disabled</option>
                                            
                                        </select>
                                    </div>
                                   <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file"  placeholder="Product Image" name="image"  /> 
										<img src="<?php echo base_url().$pimage['image']; ?>" width="100">
                                    </div>
									
									    
                                     <div class="form-group">
									 <input type="hidden" name="user_func" value="add">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Product Image</button>
									 </div>
                                    <input type="hidden" name="pid" value="<?php echo $pimage['product_id']; ?>">
									<input type="hidden" name="image_func" value="edit">
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


  $("select[name='category']").change(function(){
      var category = $(this).val();
   
      $.ajax({
          url: "<?php echo base_url();?>/admin/products/ajax_subcat",
          method: 'POST',
          data: {category:category},
          success: function(data) {
          $("#subcategory").html(data);
          }
      });
  });
</script>

</body>

</html>