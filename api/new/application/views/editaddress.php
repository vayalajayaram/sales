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
      
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a title="Go to Home Page" href="<?php echo base_url(); ?>">Home</a><span>&raquo;</span></li>
              <li><strong>Edit Address</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <section class="addressbook">
      <div class="container">
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
          <div class="col-md-9 col-sm-8 col-xs-12">
		  <form method="post">
            <div>
			<div class="col-md-12">
                <div class="checkout-form-list">
                  <label class="h-input">Address Type <span class="required">*</span></label>                   
                  <input type="text" value="<?php echo $address['title']; ?>" name="title" required maxlength="100">
                </div>
              </div>
              <div class="col-md-6">
                <div class="checkout-form-list">
                  <label>First Name <span class="required">*</span></label>                   
                  <input type="text" value="<?php echo $address['firstname']; ?>" name="fname" required maxlength="100">
                </div>
              </div>
              <div class="col-md-6">
                <div class="checkout-form-list">
                  <label>Last Name <span class="required">*</span></label>                    
                  <input type="text" value="<?php echo $address['lastname']; ?>" name="lname" required maxlength="100">
                </div>
              </div>
              <div class="col-md-6">
                <div class="checkout-form-list">
                  <label>Email Address <span class="required">*</span></label>                    
                  <input type="email" value="<?php echo $address['email']; ?>" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="checkout-form-list">
                  <label>Phone  <span class="required">*</span></label>                   
                  <input type="text" name="phone" required maxlength="10" value="<?php echo $address['phone']; ?>">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="country-select">
                  <label>Choose State<span class="required">*</span></label>
                  <select name="state" id="state" required>
								<option value="">Select State</option>
								<?php foreach($states as $state){ ?>
                                  <option value="<?php echo $state['s_id']; ?>" <?php if($address['state']==$state['s_id']){ echo "selected"; } ?> ><?php echo $state['state_name']; ?></option>
                                 <?php } ?>
                                </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="country-select">
                                <label>Choose City<span class="required">*</span></label>
                                <select id="city" name="city" required>
                                  <option value="">Select City</option>
                                </select>
                              </div>
              </div>
              <div class="col-md-12">
                <div class="checkout-form-list">
                  <label>Address <span class="required">*</span></label>
                  <input type="text" placeholder="Street address" name="address" required maxlength="250" value="<?php echo $address['address']; ?>">
                </div>
              </div>
              <div class="col-md-12 comment">
                <div class="form-element">
                  <label>Comment <em>*</em></label>
                  <textarea name="comments" required><?php echo $address['comments']; ?></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <input name="default_address" type="checkbox" value="1" style="float:left; height:auto;" <?php if($address['default_address']==1){ echo "checked"; } ?>>
                <p style="float:left; margin-left:5px;" data-original-title="" title="">Make this default address</p>
              </div>
              <div class="col-md-6">
                <button class="button pull-right"><i class="fa fa-check"></i>&nbsp; <span>Submit</span></button>
              </div>
            </div>
			</form>
          </div>
		  </div>
        </div>
    </section>
    <!-- Footer -->
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
	<script>
	$(window).load(function() {
	  var sid = $("#state").val();
	
      $.ajax({
          url: "<?php echo base_url();?>/users/ajax_city",
          method: 'POST',
          data: {state:sid,city:'<?php echo $address['city'] ?>'},
          success: function(data) {
          $("#city").html(data);
          }
      });
  });
	 $("select[name='state']").change(function(){
      var sid = $(this).val();
  
      $.ajax({
          url: "<?php echo base_url();?>/users/ajax_city",
          method: 'POST',
          data: {state:sid,city:'<?php echo $address['city']; ?>'},
          success: function(data) {
			// alert(data);
          $("#city").html(data);
          }
      });
  });
  $('input[name="phone"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});
  </script>
  </body>
</html>