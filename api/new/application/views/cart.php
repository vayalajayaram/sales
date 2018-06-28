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
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
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
              <li><strong>Cart</strong></li>
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
          <div class="col-main col-sm-12 col-xs-12">
            <div class="my-account">
              <div class="page-title">
                <h2>My Cart</h2>
              </div>
			  <?php 
			  
		       if($this->cart->contents()!="" && count($this->cart->contents())!=0){
		      ?>
              <div class="wishlist-item table-responsive">
                <table class="col-md-12">
                  <thead>
                    <tr>
                      <th class="th-delate">S.No</th>
                      <th class="th-product">Images</th>
                      <th class="th-details">Product Name</th>
                      <th class="th-price">Quantity</th>
                      <th class="th-price">Unit Price</th>
                      <th class="th-price">Total Price</th>
                      <th class="th-delate">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php 
				  $cnt=1;
				  foreach($this->cart->contents() as $data){ ?>
                    <tr>
                      <td class="th-price"><?php echo $cnt; ?></td>
                      <td class="th-product"><a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$data['name']); ?>/<?php echo $data['id']; ?>"><img src="<?php echo base_url().$data['image']; ?>" alt="<?php echo $data['name']; ?>"></a></td>
                      <td class="th-details"><a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$data['name']); ?>/<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a></td>
                      <td class="th-price"><?php echo $data['qty']; ?></td>
                      <td class="th-price">र <?php echo number_format($data['price'],2); ?></td>
                      <td class="th-price">र <?php echo number_format($data['subtotal'],2); ?></td>
                      <td class="th-delate"><a href="<?php echo base_url(); ?>cart/deletecart/<?php echo $data['rowid']; ?>" >X</a></td>
                    </tr>
                    <?php $cnt++; } ?>
                    
                    
                  </tbody>
                </table>
              </div>
			  <?php } else { ?>
			  <div>Cart is empty</div>
			  <?php } ?>
            </div>
          </div>
        </div>
		</div>
    </section>
	 <?php 
	  if($this->cart->contents()!="" && count($this->cart->contents())!=0){
	 ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="addimage">
            <img src="images/about-us/add4.png" alt="add" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-8 col-md-8">
		<?php if($coupon['coupon_code']!=""){ ?>
          <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code ( <?php echo $coupon['coupon_code']; ?> ) 
                  <i class="fa fa-caret-down"></i>
                  </a>
                </h4>
              </div>
              <div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true" style="">
                <div class="panel-body">
                  <form action="<?php echo base_url() ?>shoppingcart/checkcoupon" method="post">
                  <div class="input-group">
                    <input type="text" name="coupon" value="<?php echo $this->session->flashdata('coupon'); ?>" placeholder="Enter your coupon code here" id="input-coupon" class="form-control" required>
					
                    <span class="input-group-btn"><input type="submit" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-warning"></span>
                  </div>
				   <?php if($this->session->flashdata("error")){ ?>
						<div  style="color:#F00; text-align:left">

</button>
 <?php echo $this->session->flashdata("error"); ?>
</div>
<?php } ?>
				  </form>
                </div>
              </div>
            </div>
          </div>
		  <?php } ?>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="text-left"><strong>Sub-Total</strong>
                </td>
                <td class="text-right">र <?php echo number_format($this->cart->total(),2); ?></td>
              </tr>
              <tr>
                <td class="text-left"><strong>Del.chr</strong>
                </td>
                <td class="text-right">र 0.00</td>
              </tr>
			  <?php if($this->session->userdata("discount")!=""){ ?>
              <tr>
                <td class="text-left"><strong>Discount</strong>
                </td>
                <td class="text-right">र <?php echo number_format($this->session->userdata('discount'),2); ?></td>
              </tr>
			  <?php } ?>
            </tbody>
          </table>
          <div class="wishlist-item">
            <a href="<?php echo base_url(); ?>" class="all-cart">Continue Shopping</a> 
            <a href="<?php echo base_url(); ?>checkout" class="all-cart pull-right">Check Out</a> 
          </div>
        </div>
      </div>
    </div>
	 <?php } ?>
	<!-- Footer -->
      <?php include_once("footer.php"); ?>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> </div>
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