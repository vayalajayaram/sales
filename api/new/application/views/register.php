<!DOCTYPE html>
<html lang="en">
   <head>
    <title><?php echo $settings['meta_title']; ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo $settings['meta_keywords']; ?>" />
    <meta name="description" content="<?php echo $settings['meta_description']; ?>">
      <link rel="canonical" href="http://krivi.website/egn/">
      <meta name="author" content="irah">
      <meta name="robots" content="index, follow" />
      <!-- Mobile specific metas
         ============================================ -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Favicon
         ============================================ -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>img-ig/favicon.ico">
      <!-- Google web fonts
         ============================================ -->
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
      <!-- Libs CSS
         ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap/css/bootstrap.min.css">
      <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/themecss/lib.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
      <!-- Theme CSS
         ============================================ -->
      <link href="<?php echo base_url(); ?>css/themecss/so_megamenu.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/themecss/so-categories.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/themecss/so-listing-tabs.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/footer1.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/header1.css" rel="stylesheet">
      <link id="color_scheme" href="<?php echo base_url(); ?>css/theme.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
   </head>
   <body class="res layout-subpage banners-effect-6">
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
      <?php include('header.php') ?>
         <!-- //Header Container  -->
         <!-- Main Container  -->
         <div class="main-container container">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li>User Register</li>
            </ul>
            <!--Middle Part End-->



            <div class="row">
              <div id="content" class="col-sm-12">
                <div class="page-login">
                
                  <div class="account-border">
                    <div class="row">
                      <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>register/seller"  class="mainbtn3 pull-right">
                           <strong><i class="fa fa-gear fa-spin"></i> Become a seller</strong>
                        </a>
                      </div>
                    </div>
                    <div class="row">
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-sm-12  customer-login">
                          <h1 class="hidden">My Account</h1>
                          <h2 class="hidden">My Account</h2>
                          <span class="hd"><i class="fa fa-user"></i> Create Account</span>
                          
                          <div class="welll clearfix">
                            
                            <div class="col-md-8 col-sm-4 col-xs-12">
                            
                             <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> First Name</label>
                                <input type="text" name="first_name"  class="form-control" maxlength="100" required />
                              </div>                              
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label" for="input-password"> Last Name</label>
                                <input type="text" name="last_name"  class="form-control" required maxlength="100" />
                              </div>
                              </div>
                              
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Email ID</label>
                                <input type="email" name="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                              </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Phone Number</label>
                                <input type="text" name="phone"  class="form-control" required />
                              </div>
                              </div>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password"  required maxlength="20"  onchange="if(this.checkValidity()) form.cpassword.pattern = this.value;" />
                              </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Confirm Password</label>
                               <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword"  required maxlength="20" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" />
                              </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> City</label>
                                <select class="form-control" name="city" required>
                                            <option value="">Please select</option>
											<?php foreach($cities as $city){ ?>
                                            <option value="<?php echo $city['c_id']; ?>" ><?php echo $city['city_name']; ?></option>
                                            <?php } ?>                                            
                                        </select>
                              </div>
                              </div>
                              
                             <div class="col-md-6 col-sm-6 col-xs-12"> 
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Area</label>
                                <select class="form-control" name="area" id="area" required>
                                            <option value="">Please select</option>                                           
                                            
                                        </select>
                              </div>
                              </div>
                              
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Address </label>
                                <input type="text" name="address1" class="form-control" required />
                              </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Pincode</label>
                                <input type="text" name="pin"  class="form-control" required />
                              </div>
                              </div>
                            </div>

                            
                            
                        

                            <div class="col-sm-4 col-md-4 hidden-xs myclip3">
                              <img src="<?php echo base_url(); ?>image/laptop-guy.png" class="img-responsive" alt="team">
                            </div>

                          </div>
                          <?php
						  $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash'];?>" />
                              <div style="color:#F00;"><?php echo $this->session->flashdata('error'); ?></div>
                          <div class="bottom-form">
                            <a href="<?php echo base_url(); ?>login" class="forgot">Already have an account ? Sign in</a>
                            <input type="submit" value="Sign Up" class="btn btn-default pull-right" />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>

         </div>
         <!-- //Main Container -->
         <!-- Footer Container -->
         <?php include('footer.php') ?> 
         <!-- //end Footer Container -->
      </div>
      <!-- modal -->
     <?php include('social.php') ?>
     <?php include('modal-popup.php') ?> 
      <!-- end modal -->
      <!-- Cpanel Block -->
      <!-- Include Libs & Plugins
         ============================================ -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/libs.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/unveil/jquery.unveil.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/countdown/jquery.countdown.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/datetimepicker/moment.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
      <!-- Theme files
         ============================================ -->
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/so_megamenu.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/addtocart.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/application.js"></script>
  <script>
  $('input[name="phone"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});
$('input[name="pin"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});

$("select[name='city']").change(function(){
      var cid = $(this).val();
 
      $.ajax({
          url: "<?php echo base_url();?>register/ajax_city",
          method: 'POST',
          data: {city:cid},
          success: function(data) {
			
          $("#area").html(data);
          }
      });
  });

</script>
<?php include_once("footersearch.php"); ?>
      <script type='application/ld+json'>
        {
        
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "eganacsi",
            "url": "http://krivi.website/egn/",
            "logo": "http://krivi.website/egn/img-ig/logo.png",
            "foundingDate": "2017",
            "parentOrganization": [{
                "@type": "Organization",
                "name": "eganacsi"
            }],
        
            "address": {
                "type": "PostalAddress",
                "streetAddress": "3rd Floor Karle Premium",
                "addressLocality": "#",
                "addressRegion": "Hyderabad ",
                "postalCode": "500 032",
                "addressCountry": "INDIA"
            },
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+91 99 62 62 53 63",
                "contactType": "Customer Service ( Call Center)",
                "email": "eganacsi@gmail.com"
            }],
            "sameAs": [
                  "http://www.facebook.com/eganacsi/",
                  "http://instagram.com/eganacsi/",
                  "http://www.linkedin.com/in/eganacsi/",
                  "http://plus.google.com/eganacsi/"
                ]
        }

      </script>
   </body>
</html>