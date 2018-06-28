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
                    <h2>Add Sub Sub Category</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
						 <li><a href="<?php echo base_url(); ?>admin/subsubcategories">Sub Sub Category</a></li>
                        <li class="active">Add Sub Sub Category</li>
                    </ol>
                </div>
                <div class="row">
				
				
                    <div class="col-md-6">
                        
                        <div class="card">
                            
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								
								 <div class="form-group">
                                        <label>Sub Sub Category Name</label>
                                        <input type="text" class="form-control" placeholder="Sub Sub Category name" name="name"  required />
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Category Name</label>
                                    	<select name="category" class="form-control" required id="category">
                                    		<option value="">Select Category</option>
                                    		<?php foreach($categories as $category){ ?>
                                    		<option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                                    		<?php } ?>
                                   		</select>
                                    </div>
									
									 <div class="form-group">
                                        <label>Sub Category Name</label>
                                    	<select name="subcategory" class="form-control" id="subcategory" required>
                                    		<option value="">Select Sub Category</option>
                                    		
                                   		</select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sort Order</label>
                                        <input type="number" class="form-control" placeholder="Sort Order" name="sort_order" value="" required min="1" />
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" >Active</option>
                                            <option value="0" >Inactive</option>
                                            
                                        </select>
                                    </div>
									
									<div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" placeholder="Meta Title" name="meta_title"  required />
                                    </div>
									
									<div class="form-group">
                                        <label>Meta Keywords</label>                                       
										<textarea name="meta_keywords" class="form-control"></textarea>
                                    </div>
									
									<div class="form-group">
                                        <label>Meta Description</label>                                       
										<textarea name="meta_description" class="form-control"></textarea>
                                    </div>
                                   
								   <div class="form-group">
                                        <label>Banner</label>
                                        
										<input type="file" name="banner" class="form-control" required>(Image Size Should be 870px*260px)
                                    </div>
                                          
                                     <div class="form-group">
									 <input type="hidden" name="subsubcategory_func" value="add">
									 <button class="btn bg-cyan waves-effect" type="submit">Add Sub Sub Category</button>
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
<script>
$('#category').on('change', function() {
  var catid=this.value;
  
  $.ajax({
		type:"post",
		url:"<?php echo base_url(); ?>admin/subsubcategories/change",
		data:{action:'add',catid:catid},
		success:function(result){
		
			$('#subcategory').html(result);
		
		}
	});
});

</script>
</body>

</html>