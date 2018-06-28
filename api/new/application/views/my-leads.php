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
         <div class="main-container container towtabs">
            <!--Middle Part End-->

            <div class="row company-profile">               
               <?php include('leftside.php') ?>
              <div class="col-sm-9 col-md-9 col-xs-12">
                  <div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>  <span>Products</span></a></li>
                      
                      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>  <span>Services</span></a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">

                      <div role="tabpanel" class="tab-pane active enquiry mylbl table-responsive" id="home">
                        

                        <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>S.NO</th>
                                  <th>Lead Id</th>
                                  <th>Date and Time</th>
                                  <th>Product Name</th>
                                  <th>Customer Name</th>
                                  <th>Phone Number</th>
                                
                              </tr>
                          </thead>
                          <tbody>
                            <?php $cnt=1; foreach($leads as $lead){ 
							if($lead['product_name']!=""){
							?>
                              <tr>
                                  <td><?php echo $cnt; ?></td>
                                   <?php  
								      $pr_id = $lead['en_id'];
                                      $pr_id1 = sprintf("%04d", $pr_id);
									  ?>
                                  <td>#LD<?php echo $pr_id1; ?></td>
                                  <td><?php echo $lead['datetime']; ?></td>
                                  <td><?php echo $lead['product_name']; ?></td>
                                  <td><?php echo $lead['c_name']; ?></td>
                                  <td><?php echo $lead['c_phone']; ?></td>
                                  
                              </tr>
                              <?php $cnt++; } } ?>
                              
                          </tbody>
                        </table>

                      </div>


                      

                      <div role="tabpanel" class="tab-pane enquiry mylbl table-responsive" id="messages">
                       <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>S.NO</th>
                                  <th>Lead Id</th>
                                  <th>Date and Time</th>
                                  <th>Product Name</th>
                                  <th>Customer Name</th>
                                  <th>Phone Number</th>
                                
                              </tr>
                          </thead>
                          <tbody>
                               <?php $cnt=1; foreach($leads as $lead){ 
							if($lead['service_name']!=""){
							?>
                              <tr>
                                  <td><?php echo $cnt; ?></td>
                                   <?php  
								      $pr_id = $lead['en_id'];
                                      $pr_id1 = sprintf("%04d", $pr_id);
									  ?>
                                  <td>#LD<?php echo $pr_id1; ?></td>
                                  <td><?php echo $lead['datetime']; ?></td>
                                  <td><?php echo $lead['service_name']; ?></td>
                                  <td><?php echo $lead['c_name']; ?></td>
                                  <td><?php echo $lead['c_phone']; ?></td>
                                
                              </tr>
                              <?php $cnt++; } } ?>
                             
                          </tbody>
                        </table>
                      </div>

                    </div>
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