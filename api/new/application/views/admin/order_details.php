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
<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
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
                    <h2>Order Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Orders</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
                        
						
                        <div class="card">
                            <div class="body">
                                <table class="table table-hover" id="bootstrap-table">
                                    
                                   <tbody>
								   <tr>
								   <td>
								   <table>
								   <tr>
								   <td >User Name :</td> <td> <?php echo $userdetails['firstname']; ?> <?php echo $userdetails['lastname']; ?></td>  <td style="padding-left:200px;">Email :</td> <td> <?php echo $userdetails['email']; ?></td>
								   </tr>
								  
								    <tr>
								   <td>Phone :</td> <td> <?php echo $userdetails['phone']; ?></td> <td style="padding-left:200px;">address :</td> <td> <?php echo $userdetails['address']; ?></td>
								   </tr>
								   
								    <tr>
								   <td>City :</td> <td> <?php echo $userdetails['city_name']; ?></td> <td style="padding-left:200px;">State :</td> <td> <?php echo $userdetails['state_name']; ?></td>
								   </tr>
								   
								   <tr>
								   <td>Order Date :</td> <td> <?php echo $userdetails['order_date']; ?></td> <td style="padding-left:200px;">Delivery Date :</td> <td> <?php echo $userdetails['delivery_date']; ?></td>
								   </tr>
								   
								   <tr>
								   <td>Delivery Time :</td> <td> <?php echo $userdetails['delivery_time']; ?></td> <td style="padding-left:200px;">Payment Method :</td> <td>  <?php echo $userdetails['payment_mode']; ?></td>
								   </tr>
								   
								   <tr>
								   <td>Comments :</td> <td colspan="3"> <?php echo $userdetails['comments']; ?></td> 
								   </tr>
								   
								   
								   </table>
								   </td>
								   </tr>
                                     <tr>
									 
								   <td colspan="2">
								   
								   <table width="100%" border="0" cellspacing="0" cellpadding="3">
                                            <tr>
                                              <td align="center" bgcolor="#D7D6CC" ><strong>Product Image </strong></td>
                                              <td align="center" bgcolor="#D7D6CC" ><strong>Product Name </strong></td>
											  <td align="center" bgcolor="#D7D6CC" ><strong>Product Price </strong></td>
                                              <td align="center" bgcolor="#D7D6CC"><strong >Quantity</strong></td>
                                              <td align="center" bgcolor="#D7D6CC" ><strong class="text1">Total</strong></td>
                                            </tr>
	                           <?php foreach($orderdetails as $orderdetail){ ?>             
                               <tr>
                               <td width="24%" align="center"><img src="<?php echo base_url().$orderdetail['product_image']; ?>" width="100"> </td>
                               <td width="23%" align="center"><?php echo $orderdetail['product_name']; ?> </td>
							    <td width="29%" align="center">Rs.<?php echo $orderdetail['product_price']; ?> </td>
                               <td width="24%" align="center"><?php echo $orderdetail['quantity']; ?></td>
                               <td width="29%" align="center">Rs.<?php echo $orderdetail['total']; ?> </td>
                               </tr>
							   <?php } ?>	
							   <?php if($userdetails['coupon_amount']!=""){ ?>		
                               <tr>							   
							   	<td colspan="4" align="right"><strong class="content"> Discount Amount : </strong></td>
							   	<td  class="content" align="center"><strong>Rs.<?php echo $userdetails['coupon_amount']; ?></strong></td>
						   	</tr>
							<?php } ?>
							   <tr>							   
							   	<td colspan="4" align="right"><strong class="content"> Total Amount : </strong></td>
							   	<td  class="content" align="center"><strong>Rs.<?php echo $userdetails['total_amount']; ?></strong></td>
						   	</tr>
							<form method="post" id="chane_o_status">
							 <tr>							   
							   	<td colspan="2" align="right"><strong class="content"> Order Status : </strong></td>
								<td colspan="3">
								<select name="order_status" onchange="this.form.submit()">
								<option value="">Select Status</option>
								<option value="Pending" <?php if($userdetails['order_status']=="Pending"){ echo "selected"; } ?>>Pending</option>
								<option value="Success" <?php if($userdetails['order_status']=="Success"){ echo "selected"; } ?>>Success</option>
								<option value="On Transit" <?php if($userdetails['order_status']=="On Transit"){ echo "selected"; } ?>>On Transit</option>
								<option value="Delivered" <?php if($userdetails['order_status']=="Delivered"){ echo "selected"; } ?>>Delivered</option>
								<option value="Cancelled" <?php if($userdetails['order_status']=="Cancelled"){ echo "selected"; } ?>>Cancelled</option>
								</select>
								<input type="hidden" name="order_func" value="change">
								</td>
							   	
						   	</tr>
							
							<tr>							   
							   	<td colspan="2" align="right"><strong class="content"> Order Assignment to Executive : </strong></td>
								<td colspan="3">
								<select name="executive" onchange="this.form.submit()">
								<option value="">Select Executive</option>
								<?php foreach($executives as $executive){ ?>
								<option value="<?php echo $executive['e_id']; ?>" <?php if($userdetails['excutive_id']==$executive['e_id']){ echo "selected"; } ?>><?php echo $executive['first_name']; ?> <?php echo $executive['last_name']; ?></option>
								<?php } ?>
								</select>
								</td>
							   	
						   	</tr>
                            </form>
							</table>
								   </td>
								   </tr>
									
                                    
                                  
                                
                                    </tbody>
                                </table>
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