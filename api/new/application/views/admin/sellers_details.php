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
                                    <a href="<?php echo base_url(); ?>admin/sellers"> Seller</a>
                                </li>
                                <li class="active"> Seller Details</li>
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
                                    <img src="<?php echo base_url(); ?><?php echo $seller['image']; ?>" class="border-trans">
                                </div>
                            </div>
                            <div class="body text-center">
                                    <h4 class="card-title m-t-10"><?php echo $seller['first_name']; ?> <?php echo $seller['last_name']; ?></h4>
                                    <h6 class="card-subtitle">Seller</h6>
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
                                                        <dt>Seller Id</dt>
                                                        <dd><?php echo $seller['seller_id']; ?></dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Full Name</dt>
                                                        <dd><?php echo $seller['first_name']; ?> <?php echo $seller['last_name']; ?></dd>
                                                    </dl>
                                                   
                                                    <dl class="dl-horizontal">
                                                        <dt>Mobile Phone</dt>
                                                        <dd><?php echo $seller['phone']; ?></dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Email Address</dt>
                                                        <dd><?php echo $seller['email']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>City</dt>
                                                        <dd><?php echo $seller['city_name']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>Area</dt>
                                                        <dd><?php echo $seller['area_name']; ?></dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Address Line 1</dt>
                                                        <dd><?php echo $seller['address1']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>Address Line 2</dt>
                                                        <dd><?php echo $seller['address2']; ?></dd>
                                                    </dl>
													 <dl class="dl-horizontal">
                                                        <dt>Status</dt>
                                                        <dd><?php if($seller['status']==1){ echo "Active"; } else { echo "Inactive"; } ?></dd>
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
                                                    
                                                    <li role="presentation"  class="active"><a href="#sellerprofile" data-toggle="tab">Seller Profile</a></li>
                                                    
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    




                                                    <div role="tabpanel" class="tab-pane fade in active" id="sellerprofile">
                                                        <ul class="nav nav-tabs nav-tabs-noborder nav-justified" role="tablist">
                                                            <li role="presentation" class="active"><a href="#products" data-toggle="tab">Products</a></li>
                                                            <li role="presentation"><a href="#services" data-toggle="tab">Services</a></li>
                                                            <li role="presentation"><a href="#gnr" data-toggle="tab">enquiries</a></li>
                                                            <li role="presentation"><a href="#leads" data-toggle="tab">leads</a></li>
                                                            <li role="presentation"><a href="#campaigns" data-toggle="tab">Campaigns</a></li>

                                                        </ul> 

                                                        <div class="tab-content">

                                                            <div role="tabpanel" class="tab-pane fade in active" id="products">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        
                                                                    </div>

                                                                     <div class="col-md-6">
      <a href="<?php echo base_url(); ?>admin/sellers/addproduct/<?php echo $sellerid; ?>"><button type="button" class="btn bg-primary waves-effect pull-right"><i class="fa fa-plus"></i> Add Product </button></a>
                                                                    </div>
                                                                </div>

                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="">
                                                                           
                                <div class="body myedt">
                               <table class="table table-bordered table-striped basic-example dataTable" id="sellerproducts">
                                        <thead>
                                        <tr>
                                         
                                          <th>Product Name</th>
                                          <th>Actual Price</th>
                                          <th>Final Price</th>
                                          <th>Category</th>
                                          <th>Status</th>
                                          <th>Actions</th>
                                          </tr>
                                          </thead>
                                                                                    
                                          <tbody>
										  <?php foreach($products as $product){ ?>
										  <tr>
                                         
                                          <td><?php echo $product['product_name']; ?></td>
                                          <td>Rs.<?php echo $product['product_price']; ?></td>
                                          <td>Rs.<?php echo $product['discount_price']; ?></td>
                                          <td><?php echo $product['category_name']; ?></td>
                                          <td><?php if($product['status']==1){ echo "Active"; } else { echo "Inactive"; } ?></td>
                                          <td>
                                         
                                         <a class="button button-small edit" title="Edit" href="<?php echo base_url(); ?>admin/sellers/editproduct/<?php echo $product['product_id']; ?>"><i class="fa fa-pencil"></i></a>
                                          <a class="button button-small trash" title="delete" href="<?php echo base_url(); ?>admin/sellers/deleteproduct/<?php echo $product['product_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
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


                                                            <div role="tabpanel" class="tab-pane fade" id="services">
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        
                                                                    </div>
                                                                     <div class="col-md-6">
      <a href="<?php echo base_url(); ?>admin/sellers/addservice/<?php echo $sellerid; ?>"><button type="button" class="btn bg-primary waves-effect pull-right"><i class="fa fa-plus"></i> Add Service </button></a>
                                                                    </div>
                                                                </div>

                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="">
                                                                           
                                                                            <div class="body myedt">
                                                                                <table class="table table-bordered table-striped basic-example dataTable" id="sellerservices">
                                                                                    <thead>
                                                                                    <tr>
                                                                                      
                                                                                        <th>Service Name</th>
                                                                                        <th>Actual Price</th>
                                                                                        <th>Final Price</th>
                                                                                        <th>Category</th>
                                                                                        <th>Status</th>
                                                                                        <th>Actions</th>
                                                                                        
                                                                                    </tr>
                                                                                    </thead>
                                                                                    
                                                                                    <tbody>
									<?php foreach($services as $service){ ?>												
                                        <tr>
                                        <td><?php echo $service['service_name']; ?></td>
                                         
                                         <td>Rs.<?php echo $service['price']; ?></td>
                                       <td>Rs.<?php echo $service['discount_price']; ?></td>
                                       <td><?php echo $service['category_name']; ?></td>
                                        <td><?php  if($service['status']==1){ echo "Active"; } else { echo "Inactive"; } ?></td>
                                         <td>
                             
                          <a class="button button-small edit" title="Edit" href="<?php echo base_url(); ?>admin/sellers/editservice/<?php echo $service['service_id']; ?>"> <i class="fa fa-pencil"></i></a>
 <a class="button button-small trash" title="delete"> <i class="fa fa-trash"></i></a>
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

                                                            <div role="tabpanel" class="tab-pane fade" id="gnr">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <ol class="breadcrumb breadcrumb-arrow">
                                                                                    <li>
                                                                                        <a href="javascript:void(0);">
                                                                                            <i class="material-icons">home</i> Home
                                                                                        </a>
                                                                                    </li>
                                                                                    
                                                                                    <li class="active"> Enquiries</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="">
                                                                               
                                                                                <div class="body myedt">
                                                                                    <table class="table table-bordered table-striped basic-example dataTable" id="enquiriesservice">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>En ID</th>
                                                                                            <th>Date & Time</th>
                                                                                            <th>Customer Details</th>
                                                                                            <th>Item Details</th>
                                                                                            <th>Message</th>
                                                                                          
                                                                                        
                                                                                            
                                                                                        </tr>
                                                                                        </thead>
                                                                                        
                                                                                        <tbody>
                                                                                        <?php foreach($enquiries as $enquiry){ ?>
                                                                                            <tr>
                                                                                             <?php  
								      $pr_id = $enquiry['en_id'];
                                      $pr_id1 = sprintf("%04d", $pr_id);
									  ?>
                                                                                              <td>ENQ<?php echo $pr_id1; ?></td>
                                                                                                <td><?php echo $enquiry['datetime']; ?></td>
                                                                                                <td><?php echo $enquiry['c_name']; ?>
                                                                                                <br><?php echo $enquiry['c_phone']; ?>
                                                                                                <br><?php echo $enquiry['c_email']; ?>
                                                                                                </td>
                                                                                              
                                                                                                <td><?php if($enquiry['product_name']!=""){ echo $enquiry['product_name']; } else { echo $enquiry['service_name']; } ?></td>
                                                                                                <td><?php echo $enquiry['message']; ?></td>
                                                                                               
                                                                                                
                                                                                            </tr>
                                                                                            <?php } ?>
                                                                                          
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div role="tabpanel" class="tab-pane fade" id="leads">
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <ol class="breadcrumb breadcrumb-arrow">
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <i class="material-icons">home</i> Home
                                                                                    </a>
                                                                                </li>
                                                                                
                                                                                <li class="active"> Leads</li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="">
                                                                           
                                                                            <div class="body myedt">
                                                                                <table class="table table-bordered table-striped basic-example dataTable" id="leadservice">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>Lead ID</th>
                                                                                        <th>Date & time</th>
                                                                                        <th>Customer Details</th>
                                                                                        <th>Item Details</th>
                                                                                      
                                                                                     
                                                                                     
                                                                                        
                                                                                    </tr>
                                                                                    </thead>
                                                                                    
                                                                                    <tbody>
                                                                                        
                                                                                        <?php foreach($leads as $lead){ ?>
                                                                                        
                                                                                        <tr>
                                                                                         <?php  
								      $pr_id = $lead['en_id'];
                                      $pr_id1 = sprintf("%05d", $pr_id);
									  ?>
                                                                                            <td>#LD<?php echo  $pr_id1; ?></td>
                                                                                            <td><?php echo $lead['datetime']; ?></td>
                                                                                            <td><?php echo $lead['c_name']; ?>
                                                                                            <br><?php echo $lead['c_phone']; ?>
                                                                                            <br><?php echo $lead['c_email']; ?>
                                                                                            </td>
                                                                                            <td><?php if($lead['product_name']!=""){ echo $lead['product_name']; } else { echo $lead['service_name'];} ?></td>
                                                                                           
                                                                                           
                                                                                        </tr>
                                                                                        
                                                                                        <?php } ?>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div role="tabpanel" class="tab-pane fade" id="campaigns">  


                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <ol class="breadcrumb breadcrumb-arrow">
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <i class="material-icons">home</i> Home
                                                                                    </a>
                                                                                </li>
                                                                                
                                                                                <li class="active"> Campaigns</li>
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
                                                                                        <th>Campaign ID</th>
                                                                                        <th>Date & Time</th>
                                                                                        <th>City</th>
                                                                                       
                                                                                        <th>Count</th>
                                                                                         <th>Link</th>
                                                                                          <th>Message</th>
                                                                                     
                                                                                     
                                                                                        
                                                                                    </tr>
                                                                                    </thead>
                                                                                    
                                                                                    <tbody>
                                                                                    <?php foreach($campaigns as $campaign){ ?>
                                                                                        <tr>
                                                                                            <td><?php echo $campaign['cm_id']; ?></td>
                                                                                            <td><?php echo $campaign['date']; ?></td>
                                                                                            <td><?php   $cmval=explode(",",$campaign['city']); 
                                                                                            foreach ($cities as $city) {
                                                                                                 if (in_array($city['c_id'], $cmval)){
                                                                                                       echo $city['city_name']."<br>";
                                                                                                 }
                                                                                          
                                                                                              } ?></td>
                                                                                          
                                                                                          <td><?php echo $campaign['number']; ?></td>
                                                                                           <td><?php echo $campaign['website']; ?></td>
                                                                                            <td><?php echo $campaign['message']; ?></td>
                                                                                            
                                                                                            
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
$('#sellerproducts').dataTable( {
  "columnDefs": [ {

"targets": [5], 
"orderable": false,  
"searchable": false
}],
});

$('#sellerservices').dataTable( {
  "columnDefs": [ {

"targets": [5], 
"orderable": false,  
"searchable": false
}],
});


$('#enquiriesservice').dataTable( {
  
"order": [[ 0, "desc" ]]
} );

$('#leadservice').dataTable( {
  
"order": [[ 0, "desc" ]]
} );

</script>
</body>

</html>