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
                               
                                <li class="active"> Leads</li>
                            </ol>
                        </div>
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
                             <th>Lead ID</th>
                               <th>Date & Time</th>
                             <th>Customer Details</th>
                             <th>Item Details</th>
							  <th>Message</th>
                             <th>Asigned To</th>
                             <th>Actions</th>
                             </tr>
                            </thead>
                                                                                
                           <tbody>
							<?php foreach($leads as $lead){ ?>
                            <tr>
                              <?php  
								      $pr_id = $lead['en_id'];
                                      $pr_id1 = sprintf("%04d", $pr_id);
									  ?>
                            <td>LD<?php echo $pr_id1; ?></td>
                              <td><?php echo $lead['datetime']; ?></td>
                            <td><?php echo $lead['c_name']; ?><br> <?php echo $lead['c_phone']; ?> <br> <?php echo $lead['c_email']; ?></td>
                            <td><?php if($lead['product_name']!=""){ echo $lead['product_name']; } else { echo $lead['service_name']; } ?></td>
							<td><?php echo $lead['message']; ?></td>
                            <td><?php if($lead['assign']=="") {echo "0";} else {$exp=explode(",",$lead['assign']); echo count($exp);} ?></td>
                            <td>
                         
                            <a class="button button-small edit" title="Edit" href="<?php echo base_url(); ?>/admin/leads/edit/<?php echo $lead['en_id']; ?>"><i class="fa fa-pencil"></i>  </a>
                       
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

<script src="<?php echo base_url(); ?>plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/extensions/export/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/extensions/export/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/extensions/export/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/extensions/export/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-datatable/extensions/export/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>
<script>
$('.dataTable').dataTable( {
  "columnDefs": [ {

"targets": [6], 
"orderable": false,  
"searchable": false

}],
"order": [[ 0, "desc" ]]
} );

</script>
</body>

</html>