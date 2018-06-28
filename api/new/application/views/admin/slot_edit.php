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

       <!--THIS PAGE LEVEL CSS-->
    <link href="<?php echo base_url(); ?>plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/boootstrap-datepicker/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/bootstrap-daterange/daterangepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/clockface/css/clockface.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/clockpicker/clockpicker.css" rel="stylesheet" />

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
                    <h2>Edit Slot</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Slot</li>
                    </ol>
                </div>
                <div class="row">
				
				
                    <div class="col-md-6">
                        
                        <div class="card">
                            <?php $name=explode(" - ",$brand['slot_name']); ?>
                            <div class="body">
                                <form  method="post" enctype="multipart/form-data">
								
								 <div class="form-group">
                                        <label>Slot From</label>
                                    	<input type="text" class="form-control" placeholder="Slot Form" name="name[]" id="time" required  value="<?php echo $name[0]; ?>" />
                                    </div>
                                    									
								<div class="form-group">
                                        <label>Slot To</label>
                                    	<input type="text" class="form-control" placeholder="Slot Form" name="name[]" id="time1" required  value="<?php echo $name[1]; ?>" />
                                    </div>	
                                   
									
									 <div class="form-group">
                                        <label>Sort Order</label>
                                    	
										<input type="number" class="form-control"  placeholder="Slot Sort Order" name="sort_order" min="1" required value="<?php echo $brand['sort_order']; ?>">
                                    </div>
									
                                    <div class="form-group">
                                        <label>City Status</label>
                                        <select class="form-control" size="1" name="status" required>
                                            <option value="">Please select</option>
                                            <option value="1" <?php if($brand['status']==1){ echo "selected"; } ?> >Enable</option>
                                            <option value="0" <?php if($brand['status']==0){ echo "selected"; } ?> >Disabled</option>
                                            
                                        </select>
                                    </div>
                                   
                                          
                                     <div class="form-group">
									 <input type="hidden" name="slot_func" value="edit">
									 <button class="btn bg-cyan waves-effect" type="submit">Edit Slot</button>
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


<!-- THIS PAGE LEVEL JS -->
<script src="<?php echo base_url(); ?>plugins/momentjs/moment.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>plugins/boootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootstrap-datetime-picker/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootstrap-daterange/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>plugins/clockface/js/clockface.js"></script>
<script src="<?php echo base_url(); ?>plugins/clockpicker/clockpicker.js"></script>

<script src="<?php echo base_url(); ?>assets/js/pages/forms/date-time-picker-custom.js"></script>

<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>


</body>

</html>