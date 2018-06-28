
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  	<title><?php echo $settings['meta_title']; ?></title>
    <meta name="description" content="<?php echo $settings['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $settings['meta_keywords']; ?>"/>
	  <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.min.css">


  </head>
  <body class="wishlist_page">
    <!-- mobile menu -->
      <?php include_once("mobile.php"); ?>
      <!-- end mobile menu -->
      <div id="page">
     <!-- Header -->
      <?php include_once("header.php"); ?>
      <!-- end header --> 
      <!-- Navbar -->
      <?php include_once("leftside.php"); ?> 
      
      <!-- end nav --> 
      <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="<?php echo base_url(); ?>">Home</a><span>&raquo;</span></li>
                <li><strong>View Order</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End --> 
      <!-- Main Container -->
      <section class="main-container col2-right-layout">
        <div class="main container">
          <div class="row">
            <aside class="sidebar col-md-3 col-sm-4 col-xs-12">
            <div class="sidebar-account block">
              <div class="sidebar-bar-title">
                <h3>My Account</h3>
              </div>
              <div class="block-content">
                <ul>
                  <li><a href="<?php echo base_url(); ?>myprofile">Profile Information</a></li>
                  <li><a href="<?php echo base_url(); ?>myaddressbook">Address Book</a></li>
                  <li><a href="<?php echo base_url(); ?>myorders">My Orders</a></li>
                  <li><a href="<?php echo base_url(); ?>myreviews">My Reviews</a></li>
                  <li><a href="<?php echo base_url(); ?>changepassword">Change Password</a></li>
                  <li><a href="<?php echo base_url(); ?>changenumber">Change Mobile Number</a></li>
                </ul>
              </div>
            </div>
          </aside>
            <div class="col-main col-md-8 col-sm-8 col-xs-12 my">
              <div class="first clearfix">
                <h4>ORDER DETAILS</h4>
                <table class="col-md-12 table-bordered table-condensed">
                  <tbody>
                    <tr>
                      <th>ORDER NUMBER</th>
                      <td>RTD<?php echo $order['order_id']; ?></td>
                    </tr>
                    <tr>
                      <th>Order Date</th>
                      <td><?php echo $order['order_date']; ?></td>
                    </tr>
                    <tr>
                      <th>Order Status</th>
                      <td><?php echo $order['order_status']; ?></td>
                    </tr>
                    <tr>
                      <th>Delivery Address</th>
                      <td><?php echo $user['title']; ?> : <?php echo $user['firstname']; ?> <?php echo $user['lastname']; ?>, <?php echo $user['address']; ?>, <?php echo $user['city_name']; ?>, <?php echo $user['state_name']; ?></td>
                    </tr>
                    <tr>
                      <th>Payment Mode</th>
                      <td><?php echo $order['payment_mode']; ?></td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td class="total">INR.<?php echo number_format($order['total_amount'],2); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="second">
                <h4>ITEMS ORDERED</h4>
                <table class="col-md-12 table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th width="48%">Product Description</th>
                     
                      <th width="12%">Our Price</th>
                      <th width="10%">Quantity</th>
                      <th width="20%">Total (Inc.VAT)</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php foreach($orderdetails as $orderdetail){ ?>
                    <tr>
                      <td data-title="Product Description"><a href="<?php echo base_url() ?>details/<?php echo str_replace(" ","-",$orderdetail['product_name']); ?>/<?php echo $orderdetail['product_id']; ?>" class="product_title" data-original-title="<?php echo $orderdetail['product_name']; ?>" title="<?php echo $orderdetail['product_name']; ?>"><?php echo $orderdetail['product_name']; ?></a></td>
                      
                      <td data-title="Our Price" class="subtotal text-right">
                        र <?php echo number_format($orderdetail['product_price'],2); ?>                                    
                      </td>
                      <td data-title="Quantity" style="text-align:center;">
                       <?php echo $orderdetail['quantity']; ?>                 
                      </td>
                      <td data-title="Total" class="total text-right"> र <?php echo number_format($orderdetail['total'],2); ?></td>
                    </tr>
					<?php } ?>
                    
                    <tr>
                      <td colspan="3" class="tableview"><b data-original-title="" title="">Subtotal</b></td>
                      <td data-title="Subtotal" class="total text-right"><b data-original-title="" title="">Rs.<?php echo number_format($order['order_amount'],2); ?></b></td>
                    </tr>
					<?php if($order['coupon_amount']!=""){ ?>
                    <tr>
                      <td colspan="3" class="tableview"><b data-original-title="" title="">Discount</b></td>
                      <td data-title="Shipping Charges" class="total text-right"><b data-original-title="" title="">- Rs.<?php echo number_format($order['coupon_amount'],2); ?></b></td>
                    </tr>
					<?php } ?>
                    <tr>
                      <td colspan="3" class="grandtotal tableview">Grand Total</td>
                      <td data-title="Grand Total" class="grandtotal text-right">Rs.<?php echo number_format($order['total_amount'],2); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="clearfix"></div>
              <a href="<?php echo base_url() ?>myorders" class="button pull-right" style="margin-top: 15px;"><i class="fa fa-chevron-up"></i>&nbsp; <span>Back to My Orders</span></a>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer -->
      <?php include_once("footer.php"); ?>
      <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> 
    </div>
    <!-- End Footer --> 
    <!-- JS --> 
    <!-- jquery js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
    <!-- bootstrap js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
    <!-- owl.carousel.min js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script> 
    <!-- bxslider js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.js"></script> 
    <!--jquery-slider js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/slider.js"></script> 
    <!-- megamenu js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/megamenu.js"></script> 
    <script type="text/javascript">
      /* <![CDATA[ */   
      var mega_menu = '0';
      
      /* ]]> */
    </script> 
    <!-- jquery.mobile-menu js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/mobile-menu.js"></script> 
    <!--jquery-ui.min js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script> 
    <!-- main js --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-select.min.js"></script>
  </body>
</html>