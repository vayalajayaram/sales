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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>
  <body class="checkout_page">
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
      <!-- Breadcrumbs -->
      <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="<?php echo base_url(); ?>">Home</a><span>&raquo;</span></li>
                <li><strong>Checkout</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End --> 
      <!-- Main Container -->
	   <?php 			  
	  if($this->cart->contents()!="" && count($this->cart->contents())!=0){
	     ?>
      <section class="main-container col2-right-layout mycheck_out">
        <div class="main container">
          <div class="row">
            <div class="col-main col-sm-10 col-xs-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel-group accordion-faq" id="faq-accordion">
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span>Login to Your Account</a> </div>
                      <div id="question1" class="panel-collapse collapse <?php if($this->session->userdata('user_id')==""){ ?>in<?php } ?>" aria-expanded="false" <?php if($this->session->userdata('user_id')!=""){ ?> style="height: 0px;" <?php } ?>>
                        <div class="panel-body">
                          <div class="page-content checkout-page">
                            <div class="page-title">
                              <h2>Checkout</h2>
                            </div>
                            <h4 class="checkout-sep">1. Checkout Method</h4>
                            <div class="box-border">
							<?php if($this->session->userdata('user_id')==""){ ?>
                              <div class="row">
                                <form action="<?php echo base_url(); ?>checkout/login" method="post">
                                <div class="col-sm-6">
                                  <h5>Login</h5>
                                  <p>Already registered? Please log in below:</p>
                                  <label>Email address</label>
                                  <input type="email" class="form-control input" name="email" required>
                                  <label>Password</label>
                                  <input type="password" class="form-control input" name="password" required>
                                  <p style="float: left;width: 50%">
                                    <a href="#">Forgot your password?</a>
                                  </p>
                                  <p style="float: left;width: 50%;text-align: right;">
                                    <a href="<?php echo base_url() ?>signup">Create new account</a>
                                  </p>
								  <?php if($this->session->flashdata('error')!=""){ ?>
									<div style="color:#F00;"><?php echo $this->session->flashdata('error'); ?></div>
									<?php } ?>
                                  <button class="button"><i class="icon-login"></i>&nbsp; <span>Login</span></button>

                                  <div class="wrapper1">

                                      <i class="fa fa-3x fa-facebook-square"></i>
                                      <i class="fa fa-3x fa-google-plus-square"></i>
                                      
                                    </div>
									
                                </div>
								</form>
                              </div>
							  <?php } else {  ?>
							  
							  <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question6" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span> Delivery Address</a> </div>
					  <?php if($this->session->userdata('user_id')!=""){ ?>
                      <div id="question6" class="panel-collapse collapse <?php if($this->session->userdata('ch_add_id')==""){ ?> in <?php } ?>" aria-expanded="false" <?php if($this->session->userdata('ch_add_id')!=""){ ?> style="height: 0px;" <?php } ?>>
                        <div class="panel-body">
                          <div class="">
                            <div class="col-md-12">
                              <div class="country-select">
                                <label>Choose Address<span class="required">*</span></label>
                                <select name="list" id="list" required>
								
								<?php foreach($address as $addr){ ?>
                                  <option value="<?php echo $addr['address_id']; ?>" <?php if($addr['address_id']==$this->session->userdata('ch_add_id')){ echo "selected"; }  ?>><?php echo $addr['title']; ?></option>
								  <?php } ?>
								  <option value="add">Add New Address</option>
                                </select>
                              </div>
                            </div>
							<?php foreach($address as $addr){ ?>
							<div id="div<?php echo $addr['address_id']; ?>" style="display:none" class="dis_n">
							<form method="post" action="<?php echo base_url() ?>checkout/addesschk">
							<div class="col-md-12">
                              <div class="checkout-form-list">
                                <label>Address Type <span class="required">*</span></label>                   
                                <input type="text"  name="title" id="title" required value="<?php echo $addr['title']; ?>">
                              </div>
                            </div>
							<div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>First Name <span class="required">*</span></label>                   
                                <input type="text" placeholder="" name="fname" id="fname" required value="<?php echo $addr['firstname']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>Last Name <span class="required">*</span></label>                    
                                <input type="text" placeholder="" name="lname" id="lname" required value="<?php echo $addr['lastname']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>Email Address <span class="required">*</span></label>                    
                                <input type="email" placeholder="" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $addr['email']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>Phone  <span class="required">*</span></label>                   
                                <input type="text" name="phone" id="phone" required maxlength="10" value="<?php echo $addr['phone']; ?>">
                              </div>
                            </div>
							<div class="col-md-6">
                              <div class="country-select">
                                <label>Choose State<span class="required">*</span></label>
                                <select name="state" id="state<?php echo $addr['address_id']; ?>" required onChange="chstate('<?php echo $addr['address_id']; ?>')">
								<option value="">Select State</option>
								<?php foreach($states as $state){ ?>
                                  <option value="<?php echo $state['s_id']; ?>" <?php if($addr['state']==$state['s_id']){ echo "selected"; } ?> ><?php echo $state['state_name']; ?></option>
                                 <?php } ?>
                                </select>
                              </div>
                            </div>
							 
                            <div class="col-md-6">
                              <div class="country-select">
                                <label>Choose City<span class="required">*</span></label>
                                <select name="city" id="city<?php echo $addr['address_id']; ?>" required>
                                  <option value="">Select City</option>
                                </select>
								<input type="hidden" id="cityg<?php echo $addr['address_id']; ?>" value="<?php echo $addr['city']; ?>">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" placeholder="Street address" name="address" id="address" required value="<?php echo $addr['address']; ?>">
                              </div>
                            </div>
                            <div class="col-md-12 comment">
                              <div class="form-element">
                                <label>Comment <em>*</em></label>
                                <textarea name="comments" id="comments" required><?php echo $addr['comments']; ?></textarea>
								<input type="hidden" name="aid" value="<?php echo $addr['address_id']; ?>">
                              </div><br>
							  <div class="col-md-6">
                              <button class="button pull-right"><i class="fa fa-check"></i>&nbsp; <span>Continue</span></button>
                            </div>
                            </div>

							</form>

							</div>
							<?php } ?>
							<div id="divadd" style="display:none" class="dis_n">
							<form method="post" action="<?php echo base_url() ?>checkout/addesschk">
							<div class="col-md-12">
                              <div class="checkout-form-list">
                                <label>Address Type <span class="required">*</span></label>                   
                                <input type="text"  name="title" id="title" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>First Name <span class="required">*</span></label>                   
                                <input type="text" placeholder="" name="fname" id="fname" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>Last Name <span class="required">*</span></label>                    
                                <input type="text" placeholder="" name="lname" id="lname" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>Email Address <span class="required">*</span></label>                    
                                <input type="email" placeholder="" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkout-form-list">
                                <label>Phone  <span class="required">*</span></label>                   
                                <input type="text" name="phone" id="phone" required maxlength="10">
                              </div>
                            </div>                          
                            <div class="col-md-6">
                              <div class="country-select">
                                <label>Choose State<span class="required">*</span></label>
                                <select name="state" id="state" required>
								<option value="">Select State</option>
								<?php foreach($states as $state){ ?>
                                  <option value="<?php echo $state['s_id']; ?>" ><?php echo $state['state_name']; ?></option>
                                 <?php } ?>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="country-select">
                                <label>Choose City<span class="required">*</span></label>
                                <select name="city" id="city" required>
                                  <option value="">Select City</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" placeholder="Street address" name="address" id="address" required>
                              </div>
                            </div>
                            <div class="col-md-12 comment">
                              <div class="form-element">
                                <label>Comment <em>*</em></label>
                                <textarea name="comments" id="comments" required></textarea>
								<input type="hidden" name="aid" value="">
                              </div>
                            </div>
							<div class="col-md-6">
                              <button class="button pull-right"><i class="fa fa-check"></i>&nbsp; <span>Continue</span></button>
                            </div>
							</form>
							</div>

                            
                            
                          </div>
                        </div>
                      </div>
					  <?php } ?>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question3" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span> Choose Delivery Slot</a> </div>
					  <?php if($this->session->userdata('user_id')!=""){ ?>
                      <div id="question3" class="panel-collapse collapse <?php if($this->session->userdata('ch_add_id')!="" &&$this->session->userdata('delivery_date')==""){ ?>in<?php } ?>" aria-expanded="false" <?php if($this->session->userdata('ch_add_id')=="" || $this->session->userdata('delivery_date')!=""){ ?> style="height: 0px;"<?php } ?>>
					  <form action="<?php echo base_url() ?>checkout/timeslot" method="post">
                        <div class="panel-body">
                          <div class="col-md-6">
                            <div class="checkout-form-list">
                              <label>Slot Date<span class="required">*</span></label>                   
                              <input type="text"   class="form-control" name="delivery_date" 
                                id="datetimepicker6" required value="<?php echo $this->session->userdata('delivery_date'); ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="country-select">
                              <label>Slot Time<span class="required">*</span></label>
                              <select name="delivery_time" required>
                                <option value="any_time">Any Time</option>
								<?php foreach($timeslots as $slot){ ?>
                                <option value="<?php echo $slot['slot_name']; ?>" <?php if($slot['slot_name']==$this->session->userdata('delivery_time')){ echo "selected"; } ?> ><?php echo $slot['slot_name']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button class="button pull-right"><i class="fa fa-check"></i>&nbsp; <span>Continue</span></button>
                          </div>
                        </div>
						</form>
                      </div>
					  <?php } ?>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question2" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span>Payment Option</a> </div>
					  <?php if($this->session->userdata('user_id')!=""){ ?>
                      <div id="question2" class="panel-collapse collapse <?php if($this->session->userdata('delivery_date')!=""){ ?>in<?php } ?>" aria-expanded="false">
                        <div class="panel-body">
                          <div class="col-md-6">
                            <ul class="no-padding">
                              <li>        
                                <input type="radio" name="payment_method" value="1" checked="">
                                <label for="radio_button_5">Cash on Delivery</label>        
                              </li>
                             
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  <td class="text-left"><strong>Sub-Total</strong>
                                  </td>
                                  <td class="text-right">र <?php echo number_format($this->cart->total(),2); ?></td>
                                </tr>
                                <tr>
                                  <td class="text-left"><strong>Delivery charges</strong>
                                  </td>
                                  <td class="text-right">Free</td>
                                </tr>
								 <?php if($this->session->userdata("discount")!=""){ ?>
                                <tr>
                                <td class="text-left"><strong>Discount</strong>
                               </td>
                          <td class="text-right">र <?php echo number_format($this->session->userdata('discount'),2); ?></td>
                           </tr>
		                	  <?php 
							  $grandtotal=$this->cart->total()-$this->session->userdata("discount");
							  }  else {
								$grandtotal=$this->cart->total();  
							  }
							  
							  ?>
                                
                                <tr class="total">
                                  <td class="text-left"><strong>Total</strong>
                                  </td>
                                  <td class="text-right">र <?php echo number_format($grandtotal,2); ?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-md-6">
                            <a class="button" href="<?php echo base_url() ?>"><i class="fa fa-check"></i>&nbsp; <span>continue shopping</span></a>
                          </div>
                          <div class="col-md-6">
                            
                            <a href="<?php echo base_url() ?>checkout/orderplace" class="button pull-right" ><i class="fa fa-check"></i>&nbsp; <span>Proceed</span></a>
                          </div>
                        </div>
                      </div>
					  <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-12">
              <div class="sideadd">
                <img src="images/ricebags/add.png" class="img-responsive" alt="add">
              </div>
            </div>
          </div>
        </div>
      </section>
	  <?php } else { ?>
	  
	 <section>
	  <div class="main container" style="min-height:100px;">
          <div class="row">
            <div class="col-main col-sm-10 col-xs-12">
	  Cart Is Empty
	  </div>
	  </div>
	  </div>
	  </section>
	  <?php } ?>
      <!-- Main Container End -->
      <!-- Footer -->
      <?php include_once("footer.php"); ?>
      <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> 
    </div>

<div id="myModal2" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="icon-box1">
          <i class="fa fa-check"></i>
        </div>        
        <h4 class="modal-title">Awesome!</h4> 
      </div>
      <div class="modal-body">
        <p class="text-center awesome">your order hasbeen placed successfully</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div> 
    <!-- End Footer --> 
    <!-- JS --> 
    <!-- jquery js --> 
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <!-- bootstrap js --> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <!-- owl.carousel.min js --> 
    <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
    <!-- bxslider js --> 
    <script type="text/javascript" src="js/jquery.bxslider.js"></script> 
    <!--jquery-slider js --> 
    <script type="text/javascript" src="js/slider.js"></script> 
    <!-- megamenu js --> 
    <script type="text/javascript" src="js/megamenu.js"></script> 
    
    <!-- jquery.mobile-menu js --> 
    <script type="text/javascript" src="js/mobile-menu.js"></script> 
    <!--jquery-ui.min js --> 
    <script type="text/javascript" src="js/jquery-ui.js"></script> 
    <!-- main js --> 
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
      $(function () {
          $('#datetimepicker6').datepicker({dateFormat: "dd-mm-yy", minDate : 0}); 
      });
    </script>
	<script>
	$(window).load(function() {
		
	  var lsid = $("#list").val();
	  var sid=$("#state"+lsid+"").val();
	//alert(lsid);
	$("#div"+lsid+"").css("display","block");
	var cityg=$("#cityg"+lsid+"").val();
      $.ajax({
          url: "<?php echo base_url();?>/users/ajax_city",
          method: 'POST',
          data: {state:sid,city:cityg},
          success: function(data) {
          $("#city"+lsid+"").html(data);
          }
      });
  });
	 $("select[name='state']").change(function(){
      var sid = $(this).val();
  
      $.ajax({
          url: "<?php echo base_url();?>/users/ajax_city",
          method: 'POST',
          data: {state:sid,city:''},
          success: function(data) {
			// alert(data);
          $("#city").html(data);
          }
      });
  });
  
  function chstate(lsid)
  {
	   var sid=$("#state"+lsid+"").val();
	   var cityg=$("#cityg"+lsid+"").val();
      $.ajax({
          url: "<?php echo base_url();?>/users/ajax_city",
          method: 'POST',
          data: {state:sid,city:cityg},
          success: function(data) {
          $("#city"+lsid+"").html(data);
          }
      });
  }
  
  $("select[name='list']").change(function(){
      var lsid = $(this).val();
      
	  $("#div"+lsid+"").removeClass("dis_n");
	  $(".dis_n").css("display","none");
      $("#div"+lsid+"").css("display","block");
	   $("#div"+lsid+"").addClass("dis_n");
	   
	    var sid=$("#state"+lsid+"").val();
	   var cityg=$("#cityg"+lsid+"").val();
      $.ajax({
          url: "<?php echo base_url();?>/users/ajax_city",
          method: 'POST',
          data: {state:sid,city:cityg},
          success: function(data) {
          $("#city"+lsid+"").html(data);
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