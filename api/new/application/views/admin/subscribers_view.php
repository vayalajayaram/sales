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
	
	<link href="<?php echo base_url(); ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/jquery-datatable/skin/bootstrap/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/jquery-datatable/skin/bootstrap/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/jquery-datatable/skin/bootstrap/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	
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
                               
                                <li class="active"> Subscriptions</li>
                            </ol>
                        </div>
                    </div>
					
					<div class="col-md-6">
					<a href="<?php echo base_url(); ?>admin/subscribers/add"><button class="btn bg-primary waves-effect pull-right" type="button"><i class="fa fa-plus"></i>Add Subscriber</button></a>
					</div>

                     
                </div>
                <!-- Default Tab -->

                

                
                <!-- #END# Default Tab -->
                <!-- Tabs Noborder -->
                
                 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            
                        <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12">
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
                                        <!-- Example Tab Justified Noborder-->
                                        <div class="card-inner">
                                            <div class="demo">
                                              
                                                            
              <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="">
                                                                       
                          <div class="body myedt">
                         <table class="table table-bordered table-striped basic-example dataTable">
                            <thead>
                             <tr>
                             <th>Subscriber ID</th>
                             <th>Name</th>
                             <th>Package</th>
							 <th>Started Date</th>
							 <th>Expiry Date</th>
                             <th>Status</th>
                             <th>Actions</th>
                             </tr>
                            </thead>
                                                                                
                           <tbody>
							<?php foreach($subscribers as $subscriber){ ?>
                            <tr>
                            <td><?php echo $subscriber['scr_id']; ?></td>
                            <td><?php echo $subscriber['first_name']; ?> <?php echo $subscriber['last_name']; ?></td>
                            <td><?php echo $subscriber['package']; ?></td>
							<td><?php echo $subscriber['start_date']; ?></td>
							<td><?php echo $subscriber['expiry_date']; ?></td>
                            <td><?php echo $subscriber['status']; ?></td>
                            <td>
                           
                            <a class="button button-small edit" title="Edit" href="<?php echo base_url(); ?>/admin/subscribers/edit/<?php echo $subscriber['scr_id']; ?>"><i class="fa fa-pencil"></i>  </a>
							<a class="button button-small trash" href="<?php echo base_url(); ?>admin/subscribers/delete/<?php echo $subscriber['scr_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" title="delete">
<i class="fa fa-trash"></i>
</a>
                           
                             </td>
                              </tr>
						<?php } ?>
                                </tbody>
                              </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                       
                                            </div>
                                        </div>
                                        <!-- End Example Tab Justified Noborder-->
                                    </div>
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


</body>

</html>