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
                                    <a href="<?php echo base_url(); ?>admin/dashboard"> <i class="material-icons">home</i> Home </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/customers"> Customers</a>
                                </li>
                                <li class="active"> Customer Details</li>
                            </ol>
                        </div>
                    </div>

                     
                </div>
                <!-- Default Tab -->

                <div class="row profile">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="bg-cyan padding-30 b-t-radius">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?><?php echo $customer['image']; ?>" class="border-trans">
                                </div>
                            </div>
                            <div class="body text-center">
                                    <h4 class="card-title m-t-10"><?php echo $customer['first_name']; ?> <?php echo $customer['last_name']; ?></h4>
                                    <h6 class="card-subtitle">Customer</h6>
                            </div>
                            
                            <div>
                                <hr class="m-t-0"> </div>
                            
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card mytab">
                            <div class="profile_body">
                                <!-- Nav tabs -->
                                

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="about">
                                        <div class="card-inner">
                                            <h2 class="card-inner-header"><i class="fa fa-address-book m-r-5"></i> Basic Information</h2>
                                            <div class="demo">
                                                <div class="p-l-25">
												  <dl class="dl-horizontal">
                                                        <dt>Customer Id</dt>
                                                        <dd><?php echo $customer['customer_id']; ?></dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Full Name</dt>
                                                        <dd><?php echo $customer['first_name']; ?> <?php echo $customer['last_name']; ?></dd>
                                                    </dl>
                                                   
                                                    <dl class="dl-horizontal">
                                                        <dt>Mobile Phone</dt>
                                                        <dd><?php echo $customer['phone']; ?></dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Email Address</dt>
                                                        <dd><?php echo $customer['email']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>City</dt>
                                                        <dd><?php echo $customer['city_name']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>Area</dt>
                                                        <dd><?php echo $customer['area_name']; ?></dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Address Line 1</dt>
                                                        <dd><?php echo $customer['address1']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>Address Line 2</dt>
                                                        <dd><?php echo $customer['address2']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>Status</dt>
                                                        <dd><?php if($customer['status']==1){ echo "Active"; } else { echo "Inactive"; } ?></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Column -->
                </div>

                
                <!-- #END# Default Tab -->
                <!-- Tabs Noborder -->
                
                 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            
                            <div class="">
                                <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <!-- Example Tab Justified Noborder-->
                                        <div class="card-inner">
                                            <div class="demo">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-tabs-noborder nav-justified" role="tablist">
                                                    <li role="presentation" class="active"><a href="#customerprofile" data-toggle="tab">Customer Profile</a></li>
                                                    
                                                    
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade in active" id="customerprofile">
                                                       
                                                    <ul class="nav nav-tabs nav-tabs-noborder nav-justified" role="tablist">
                                                        
                                                        <li role="presentation" class="active"><a href="#interests" data-toggle="tab">Interests</a></li>
                                                        <li role="presentation"><a href="#enquiries" data-toggle="tab">Enquiries</a></li>
                                                        <li role="presentation"><a href="#notifications" data-toggle="tab">Notifications</a></li>
                                                        

                                                    </ul> 

                                                    <div class="tab-content">

                                                        


                                                        <div role="tabpanel" class="tab-pane fade in active" id="interests">
                                                            
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="">
                                                                        <ol class="breadcrumb breadcrumb-arrow">
                                                                            <li>
                                                                                <a href="javascript:void(0);">
                                                                                    <i class="material-icons">home</i> Home
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <li class="active"> Services</li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                 
                                                            </div>

                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="">
                                                                       
                                                                        <div class="body myedt">
                                                                            <table class="table table-bordered table-striped basic-example dataTable">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Name</th>
                                                                                    <th>Type</th>
                                                                                  
                                                                                  
                                                                                 
                                                                                    
                                                                                </tr>
                                                                                </thead>
                                                                                
                                                                                <tbody>
                                                                                <?php foreach($interests as $interest){ ?>
                                                                                    <tr>
                                                                                        <td><?php echo $interest['id']; ?></td>
                                                                                        <td><?php echo $interest['pname']; ?></td>
                                                                                        <td><?php echo $interest['type']; ?></td>
                                                                                      
                                                                                     
                                                                                        
                                                                                    </tr>
                                                                                   <?php } ?>
                                                                                    
                                                                                    
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            

                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="enquiries">
                                                                
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="">
                                                                           
                                                                            <div class="body myedt">
                                                                                <table class="table table-bordered table-striped basic-example dataTable" id="enquiry">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>Enquiry ID</th>
                                                                                        <th>Date & Time</th>
                                                                                        <th>Seller Details</th>
                                                                                        <th>Item Details</th>
                                                                                        <th>Message</th>
                                                                                       
                                                                                        
                                                                                    </tr>
                                                                                    </thead>
                                                                                    
                                        <tbody>
										<?php foreach($enquiries as $enquirie){ ?>
                                           <tr>
										   <?php
										   $pr_id = $enquirie['en_id'];
                                           $pr_id1 = sprintf("%04d", $pr_id);
                                           
                                           ?>
                                            <td>ENQ<?php echo $pr_id1; ?></td>
                                            <td><?php echo $enquirie['datetime']; ?></td>
                                            <td>
											Company : <?php echo $enquirie['company']; ?><br>
											Phone : <?php echo $enquirie['phone']; ?><br>
											Email : <?php echo $enquirie['email']; ?><br>
											</td>
                                            <td><?php echo $enquirie['product_name']; ?></td>
                                            <td><?php echo $enquirie['message']; ?></td>
                                            </tr>
                                           <?php } ?>                                          
                                                                                        
                                             </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="notifications">
                                                            
                                                            <div class="row">
                                                                
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="">
                                                                       
                                                                        <div class="body myedt">
                                                                            <table class="table table-bordered table-striped basic-example dataTable">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>

Notification ID
</th>
                                                                                    <th>Date & Time</th>
                                                                                    <th>Company Name</th>
                                                                                    <th>Message</th>
                                                                                    <th>Link</th>
                                                                                  
                                                                                    
                                                                                </tr>
                                                                                </thead>
                                                                                
                                                                                <tbody>
                                                                                	<?php foreach($notifications as $notification){ ?>
                                                                                    <tr>
                                                                                        <td><?php echo $notification['cm_id']; ?></td>
                                                                                        <td><?php echo $notification['date']; ?></td>
                                                                                        <td><?php echo $notification['company']; ?></td>
                                                                                        <td><?php echo $notification['message']; ?></td>
                                                                                        <td><?php echo $notification['website']; ?></td>
                                                                                      
                                                                                        
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
$('#enquiry').dataTable( {
  
"order": [[ 0, "desc" ]]
});

$('#sellerservices').dataTable( {
  "columnDefs": [ {

"targets": [5], 
"orderable": false,  
"searchable": false
}],
});

</script>
</body>

</html>