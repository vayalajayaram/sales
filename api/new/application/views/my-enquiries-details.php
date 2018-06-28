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
               <li><a href="#"><i class="fa fa-home"></i></a></li>
               <li><a href="#">My Enquires Details</a></li>
            </ul>
            <!--Middle Part End-->

            <div class="row">

               
               <?php include('leftside.php') ?>

               <div class="col-sm-9 col-md-9 col-xs-12">
                  <div class="table-responsive myenquires">
                    <table class="table-bordered table-condensed">
                      <tbody>
                        <tr>
                          <th>Enquiry ID</th>
						   <?php  
								      $pr_id = $penqdetails['en_id'];
                                      $pr_id1 = sprintf("%04d", $pr_id);
									  ?>
                          <td> #<?php echo "ENQ".$pr_id1; ?></td>
                        </tr>
						<tr>
                          <th>company Name</th>
                          <td><?php echo $penqdetails['company']; ?></td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td><?php echo $penqdetails['first_name']; ?> <?php echo $penqdetails['last_name']; ?></td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td> <?php echo $penqdetails['email']; ?></td>
                        </tr>
                        <tr>
                          <th>Phone no</th>
                          <td><?php echo $penqdetails['phone']; ?></td>
                        </tr>

                        <tr>
                          <th>Product Name</th>
                          <td><?php echo $penqdetails['product_name']; ?></td>
                        </tr>

                        <tr>
                          <th>Company Name</th>
                          <td><?php echo $penqdetails['company']; ?></td>
                        </tr>

                        <tr>
                          <th>Contact Details</th>
                          <td>
                            <table class="table-responsive">
                              <tr>
                                <th>Phone</th>
                                <td><?php echo $penqdetails['phone']; ?></td>
                              </tr>
                              <tr>
                                <th>Address</th>
                                <td><?php echo $penqdetails['address1']; ?> <?php echo $penqdetails['address2']; ?>,<?php echo $penqdetails['area_name']; ?>,<?php echo $penqdetails['city_name']; ?></td>
                              </tr>
                             
                            </table>
                          </td>
                        </tr>

                        <tr>
                          <th>Description</th>
                          <td><?php echo $penqdetails['message']; ?> </td>
                        </tr>
                        
                        <tr>
                          <th>View Product </th>
                          <td><a href="<?php echo base_url(); ?>details/<?php echo str_replace(" ","-",$penqdetails['product_name']); ?>/<?php echo $penqdetails['product_id']; ?>" target="_blank">View Product Details</a></td>
                        </tr>
                      </tbody>
                    </table> 
                  </div>
                </div>
             </div>
        </div><br>
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