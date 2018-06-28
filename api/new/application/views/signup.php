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


  </head>
  <body class="shop_grid_page">
    <!-- mobile menu -->
    <div id="mobile-menu">
	<div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="images/logo/footer.png"></a> </div>
      <ul>
        <li>
          <a href="#">Kurnool Sona Masoori</a>
        </li>
        <li>
          <a href="#">HMT Rice</a>
        </li>
        <li>
          <a href="#">Brown Rice</a>
        </li>
        <li>
          <a href="#">BPT</a>
        </li>
        <li>
          <a href="#">White Ponni</a>
        </li>
        <li>
          <a href="#">Basmati Rice</a>
        </li>
        <li>
          <a href="#">Korra Rice</a>
        </li>
        <li>
          <a href="#">Idly Ravva</a>
        </li>
        <li><a href="index.html" class="home1">Home</a>
        <li><a href="about_us.html" class="home1">About Us</a>
        <li><a href="contact_us.html" class="home1">Contact Us</a>
        </li>
      </ul>
    </div>
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
                <li><strong>Signup</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Breadcrumbs End --> 
      <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="signupform clearfix">
			<form  method="post" >
              <div class="box-authentication1 clearfix">
                <div class="col-md-12 text-center">
                  <h4>Sign Up</h4>
                 
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="emmail_login">First Name<span class="required">*</span></label>
                  <input id="emmail_login" type="text" class="form-control" required name="fname" maxlength="100" value="<?php echo $_SESSION['data']['fname']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="emmail_login">Last Name<span class="required">*</span></label>
                  <input id="emmail_login" type="text" class="form-control" required name="lname" maxlength="100" value="<?php echo $_SESSION['data']['lname']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="emmail_login">Email ID<span class="required">*</span></label>
                  <input id="emmail_login" type="email" class="form-control" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $_SESSION['data']['email']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="emmail_login">Phone Number<span class="required">*</span></label>
                  <input id="emmail_login" type="text" class="form-control" name="phone" maxlength="13" required value="<?php echo $_SESSION['data']['phone']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="emmail_login">Password<span class="required">*</span></label>
                  <input id="emmail_login" type="password" class="form-control"  name="password"  required maxlength="20" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})" title="At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character' : ''); if(this.checkValidity()) form.copassword.pattern = this.value;" value="<?php echo $_SESSION['data']['password']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="emmail_login">Confirm Password<span class="required">*</span></label>
                  <input id="emmail_login" type="password" class="form-control" name="copassword" required  pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})" title="At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" value="<?php echo $_SESSION['data']['copassword']; ?>">
                </div>
                <div class="col-md-12 text-center">
                  <span>Or Sign Up With Social Media</span>
                </div>
                <div class="col-md-6 socialbtns">
                 <a href="<?php echo $authUrl; ?>"> <button class="button pull-right" type="button"><i class="fa fa-facebook"></i>&nbsp; <span>Sign Up with Facebook</span></button></a>
                </div>
                <div class="col-md-6 socialbtns">
              <a href="<?php echo $loginURL; ?>">    <button class="button pull-right" type="button"><i class="fa fa-google-plus"></i>&nbsp; <span> Sign Up with Google Plus</span></button></a>
                </div>
               
                <div class="col-md-12 text-center">
                  <button class="button" ><i class="fa fa-paper-plane"></i>&nbsp; <span> Submit</span></button>
				  
                </div>
              </div>
			  </form>
			  <button id="popup1" data-toggle="modal" data-target="#login" style="display:none" ></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Main Container End --> 
      <!-- Footer -->
      <?php include_once("footer.php"); ?>
      <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> 
    </div>
  <div id="login" class="modal fade">
    <div class="modal-dialog newsletter-popup">
      <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="modal-body">
          <form id="newsletter-form" method="post" action="<?php echo base_url(); ?>signup/checkotp" >
            <div class="content-subscribe text-center">
              <div class="input-box">
                <input type="text" class="input-text newsletter-subscribe" title="Enter your OTP" name="otp" placeholder="Enter your OTP" required maxlength="6">
              </div>
              <div class="actions">
                <button class="button-subscribe" title="Subscribe" type="submit">Submit</button>
              </div>
            </div>
			<?php if($this->session->flashdata("success")){ ?>
						<div  style="color:#F00; text-align:center">

</button>
 <?php echo $this->session->flashdata("success"); ?>
</div>
<?php } ?>
          </form>
          <div class="subscribe-bottom text-center">
            <span><a href="<?php echo base_url(); ?>signup/resend" style="color: #fff;font-weight: bold;">Resend OTP </a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--End of Newsletter Popup-->
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
    <script type="text/javascript">
      /* <![CDATA[ */   
      var mega_menu = '0';
      
      /* ]]> */
    </script> 
    <!-- jquery.mobile-menu js --> 
    <script type="text/javascript" src="js/mobile-menu.js"></script> 
    <!--jquery-ui.min js --> 
    <script type="text/javascript" src="js/jquery-ui.js"></script> 
    <!-- main js --> 
    <script type="text/javascript" src="js/main.js"></script> 
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script>
$('input[name="phone"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});


</script>

<?php if($this->session->userdata('user_otp')!=""){ ?>
<script>
$( "#popup1" ).click();
</script>
<?php } ?>
  </body>
</html>