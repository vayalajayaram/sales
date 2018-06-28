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
	

    <link href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />


    
   	<style>
	.form-control1 {
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;   
    width:20%;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    
}
.form-control1::-moz-placeholder {
    color: #999;
    opacity: 1;
}
	</style>

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
                    <h2>Media List</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Media</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if($this->session->flashdata("success")){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
<button class="close" aria-label="Close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
  <?php echo $this->session->flashdata("success"); ?> 
</div>
<?php } ?>
<?php if($this->session->flashdata("success_add")){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
<button class="close" aria-label="Close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
 <?php echo $this->session->flashdata("success_add"); ?>
</div>
<?php } ?>
                      <div class="card" style="background:none;box-shadow:none;margin-bottom:5px;  min-height:20px; text-align:right">            
<a href="<?php echo base_url(); ?>admin/media/addmedia"><button class="btn bg-purple" type="button">Add Media</button></a></div> 
						
                       
						
                        <div class="card">
                            <div class="body"><?php if (count($medias) > 0 && $medias != false) { ?>
                                <table class="table table-bordered table-striped table-hover basic-example" id="bootstrap-table">
                                    <thead>
									
                                    <tr>
									 <th>Faq Name</th>
                                    
                                     <th>Sort Order</th>
                                     <th>Status</th>
                                     <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php 
									 
									  foreach($medias as $media){ 
									 
									  ?>
                                    <tr>
									    <td data-field="name"><?php echo $media['media_name']; ?></td>
                                        
                                        
										
										<td data-field="name"><?php echo $media['sort_order']; ?></td>
										                                        
                                        <td data-field="status"><?php if($media['status']==1){ echo "Enable"; } else { echo "Disabled"; } ?></td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>admin/media/editmedia/<?php echo $media['m_id']; ?>"><button class="btn bg-cyan waves-effect" type="button">Edit</button></a>
										<a href="<?php echo base_url(); ?>admin/media/deletemedia/<?php echo $media['m_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">  <button class="btn bg-red waves-effect" type="button">Delete</button></a> 
                                        </td>
                                    </tr>
									<?php  }  ?>
                                                                
								
                                    </tbody>
                                </table>
								<?php } else { ?>
								No Records Found
								<?php } ?>
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


<!--<script src="<?php echo base_url(); ?>plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatable/dataTables.bootstrap.min.js"></script>-->

    
<script>
$(document).ready(function() {
    
	$('#bootstrap-table').dataTable( {
  "columnDefs": [
    { "orderable": false, "targets": [4,5,6] }
  ]
} );
} );



</script>
    
<script>
$( document ).ready(function() {
    $(".alert").fadeOut(5000);
});
</script>

</body>

</html>