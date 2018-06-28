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
      <style>
	  #mask {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #000;
  display: none;
}

#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 440px;
  height: 200px;
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}

#boxes #dialog {
  width: auto;
  height: 100px;
  padding: 10px;
  background-color: #ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 20px;

  left: 250px;
}
</style>
   </head>
   <body class="res layout-subpage banners-effect-6">
   <?php if($this->session->userdata("smessage")!=""){ ?>
   <div id="boxes">
  <div id="dialog" class="window">
   <?php echo $this->session->userdata("smessage"); ?>
    <div id="popupfoot"> <a href="javascript:void();" class="close agree" style="opacity:1; float:none;">Close</a>  </div>
  </div>
  <div id="mask"></div>
</div>
<?php } ?>
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
      <?php include('header.php') ?>
         <!-- //Header Container  -->
         <!-- Main Container  -->
         <div class="main-container container dashboard">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li> Dashboard</li>
            </ul>
            <!--Middle Part End-->

            <div class="row">               
               <?php include('leftside.php') ?>
              <div class="col-sm-9 col-md-9 col-xs-12">
			    <?php if($this->session->userdata('seller_id')!=""){ ?>
                <div class="row">

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="namebox text-center">
                      <h3>Hi <?php echo $this->session->userdata('customer_name'); ?>.</h3>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="namebox text-center">
                       <h3>Availble Credits:<span><?php echo $sellerdata['credits']; ?></span></h3>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  
                  <?php 
				  $expire_date=$sellerdata['expire_date'];	  
				  $dt=date("d-m-Y");
                 $date1 = new DateTime($expire_date);
                 $date2 = new DateTime($dt);

                 $diff = $date2->diff($date1)->format("%a");
				 if($diff<10)
				 {
				  ?>
                  
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="namebox text-center" style="background-color: #fb483a !important;">
                      <h3 style="color: #fff !important;">Your Subscription Expire on <?php echo $sellerdata['expire_date']; ?>. </h3>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="text-left">
                      <a href="<?php echo base_url(); ?>dashboard/renew"><button class="btn btn-primary" type="button">Renew</button></a>
                    </div>
                  </div>
                  
                   <div class="clearfix"></div>
                   <?php } ?>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="box1 clearfix">
                        <div class="col-xs-4 col-md-4 col-sm-4 icon">
                           <i class="fa fa-hourglass-start"></i>
                        </div>
                        <div class="col-xs-8 col-md-8 col-sm-8 hed">
                           <div>
                             
                              <p>Leads</p>
                           </div>
                        </div>
                     </div>

                     <div class="viewbox clearfix">
                       <ul class="list-unstyled">
                       <?php foreach($leads as $lead){ ?>
                         <li>
                           <div class="border-bottom-1 clearfix">
                            <div class="stat_info col-xs-8 col-md-8 col-sm-8">
                               
                                  <p class="heading"><?php echo $lead['c_name']; ?></p>
                                 
                                  <p class="detail_text"><?php if($lead['product_name']!=""){ echo $lead['product_name']; } else { echo $lead['service_name']; } ?></p>
                               
                            </div>

                             <div class="stat_timestamp col-xs-4 col-md-4 col-sm-4">
                              <p><i class="fa fa-clock-o"></i> <?php echo $lead['datetime']; ?></p>
                             </div>
                           </div>
                         </li>
                       <?php } ?>
                         <li>
                           <div class="mybtn5">
                             <a href="<?php echo base_url(); ?>leads">VIEW ALL</a>
                           </div>
                         </li>

                       </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     
                     <div class="box1 clearfix">
                          <div class="col-xs-4 col-md-4 col-sm-4 icon">
                             <i class="fa fa-eye"></i>
                          </div>

                          <div class="col-xs-8 col-md-8 col-sm-8 hed">
                             <div>
                              
                                <p>Order requests</p>
                             </div>
                          </div>
                     </div>
                     <div class="viewbox clearfix">
                       <ul class="list-unstyled">
                       <?php foreach($quotations as $quotation){ ?>
                         <li>
                           <div class="border-bottom-1 clearfix">
                            <div class="stat_info col-xs-8 col-md-8 col-sm-8">
                            <?php if($quotation['product_name']!=""){ ?>
                                <a href="<?php echo base_url(); ?>quotationpdetails/<?php echo $quotation['en_id']; ?>">
                                  <p class="heading"><?php echo $quotation['c_name']; ?></p>                                 
                                  <p class="detail_text"><?php echo $quotation['product_name']; ?></p>
                                </a>
                                <?php } else { ?>
                                 <a href="<?php echo base_url(); ?>quotationsdetails/<?php echo $quotation['en_id']; ?>">
                                  <p class="heading"><?php echo $quotation['c_name']; ?></p>                                 
                                  <p class="detail_text"><?php echo $quotation['service_name']; ?></p>
                                </a>
                                <?php } ?>
                            </div>

                             <div class="stat_timestamp col-xs-4 col-md-4 col-sm-4">
                              <p><i class="fa fa-clock-o"></i><?php echo $quotation['datetime']; ?></p>
                             </div>
                           </div>
                         </li>
                        <?php } ?>
                         
                         <li>
                           <div class="mybtn5">
                             <a href="<?php echo base_url(); ?>quotation-request">VIEW ALL</a>
                           </div>
                         </li>

                       </ul>
                     </div>
                  </div>
                </div>
			 	<?php } else { ?>
				<?php if($this->session->userdata('customer_id')!=""){ ?>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="box1 clearfix">
                        <div class="col-xs-4 col-md-4 col-sm-4 icon">
                           <i class="fa fa-hourglass-start"></i>
                        </div>
                        <div class="col-xs-8 col-md-8 col-sm-8 hed">
                           <div>
                              
                              <p>Enquires</p>
                           </div>
                        </div>
                     </div>

                     <div class="viewbox clearfix">
                       <ul class="list-unstyled">
                       <?php foreach($enquiries as $enquiry){ ?>
                         <li>
                           <div class="border-bottom-1 clearfix">
                            <div class="stat_info col-xs-8 col-md-8 col-sm-8">
                            
                                  <p class="heading"><?php echo $enquiry['c_name']; ?></p>                                
                                  <p class="detail_text"><?php if($enquiry['product_name']==""){ echo $enquiry['service_name'];} else {echo $enquiry['product_name']; } ?></p>
                              
                            </div>

                             <div class="stat_timestamp col-xs-4 col-md-4 col-sm-4">
                              <p><i class="fa fa-clock-o"></i> <?php echo $enquiry['datetime']; ?></p>
                             </div>
                           </div>
                         </li>
                         <?php } ?>
                         
                         
                         
                         <li>
                           <div class="mybtn5">
                             <a href="<?php echo base_url(); ?>enquiries">VIEW ALL</a>
                           </div>
                         </li>

                       </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     
                     <div class="box1 clearfix">
                          <div class="col-xs-4 col-md-4 col-sm-4 icon">
                             <i class="fa fa-bell-o"></i>
                          </div>

                          <div class="col-xs-8 col-md-8 col-sm-8 hed">
                             <div>
                             
                                <p>Notifications</p>
                             </div>
                          </div>
                     </div>
                     <div class="viewbox clearfix">
                       <ul class="list-unstyled">
                       <?php foreach($notifications as $notification){ ?>
                         <li>
                           <div class="border-bottom-1 clearfix">
                            <div class="stat_info col-xs-12 col-md-12 col-sm-12">
                                
                             
                                  <div class="product-comments-content">
                                    <p><strong><?php echo $notification['first_name']; ?> <?php echo $notification['last_name']; ?></strong> -
                                      <span><?php echo $notification['date']; ?></span>
                                      <span class="pro-comments-rating">
                                     
                                      </span>
                                    </p>
                                    <div class="desc">
                                     <?php echo $notification['message']; ?>
                                    </div>
                                  </div>
                             
                            </div>                             
                           </div>
                         </li>
                         <?php } ?>
                         
                         
                         
                         <li>
                           <div class="mybtn5">
                             <a href="<?php echo base_url(); ?>notifications">VIEW ALL</a>
                           </div>
                         </li>

                       </ul>
                     </div>
                  </div>
                </div>                                
                <?php } } ?>
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
     <script>
	 $(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
});
</script>

 <?php if($this->session->userdata("smessage")!=""){ ?>
      <script>
	  
	 $(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
});
</script>
     <?php } $this->session->unset_userdata('smessage'); ?>
   </body>
</html>