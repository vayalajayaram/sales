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
      <link rel="shortcut icon" href="img-ig/favicon.ico">
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
               <li>User Login</li>
            </ul>
            <!--Middle Part End-->

            <div class="row">
              <div id="content" class="col-sm-12">
                <div class="page-login">
                
                  <div class="account-border">
                    <div class="row">
                      <div class="col-sm-6 new-customer">
                        <span class="hd"><i class="fa fa-user"></i> New to EGANACSI? Sign up</span>
                        <div class="well">
                         
                           <?php echo $content['description']; ?>
                        
                        </div>
                        <div class="bottom-form">
                          <a href="<?php echo base_url(); ?>register" class="btn btn-default pull-right">Continue</a>
                        </div>
                      </div>
                      
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-sm-6 customer-login">

                          <span class="hd"><i class="fa fa-lock"></i> Login</span>
                          <div class="well">
                            <div class="form-group">
                              <label class="control-label " for="input-email">E-Mail Address</label>
                              <input type="email" name="email"  id="input-email" class="form-control" required />
                            </div>
                            <div class="form-group">
                              <label class="control-label " for="input-password">Password</label>
                              <input type="password" name="password"  id="input-password" class="form-control" required />
                            </div>
							<?php if($this->session->flashdata('error')!=""){ ?>
							 <div  style="height:50px; color:#F00">
							<?php echo $this->session->flashdata('error'); ?>
							</div>
							
							<?php } ?>

                            <div class="or">
                              <span>Or Login With</span>
                            </div>
							

                            <div class="wrapper1">
                              <a href="<?php echo $fbauthUrl; ?>"><i class="fa fa-3x fa-facebook-square"></i></a>
                              <a href="<?php echo $gloginURL; ?>"><i class="fa fa-3x fa-google-plus-square"></i></a>
                            </div>
							
                          </div>
                          <div class="bottom-form">
                            <a href="<?php echo base_url(); ?>login/forgotpassword" class="forgot">Forgotten Password</a>
                            <input type="submit" value="Login" class="btn btn-default pull-right" />
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