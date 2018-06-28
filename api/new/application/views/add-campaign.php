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
               <li>Add Campaign</li>
            </ul>
            <!--Middle Part End-->
            <div class="row">
                <?php include('leftside.php') ?>
               <div class="col-sm-9 col-md-9 col-xs-12  profiel-container">

                <form action="" method="post" class="profiel-container1 clearfix" onSubmit="return campaignfun();">
                      <div class="profiel-header">
                          <h3>
                              <b>Add New Campaign</b><br>
                             
                          </h3>
                      </div>

                     <div class="col-md-8 col-sm-8 col-xs-12">
                        

                        <div class="col-sm-12 col-md-12 col-xs-12 padding-top-25">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> City</label>
                               
                                <div style="height:100px; overflow:scroll;">
 <?php foreach($cities as $city){ ?>
  <input type="checkbox" name="cities" value="<?php echo $city['c_id']; ?>" class="cityd" /> <?php echo $city['city_name']; ?>  <br>
 <?php } ?> 
 <input type="hidden" name="city" id="city" value="">
</div>
                              </div>
                              </div>
                            
                          <div class="col-sm-12 col-md-12 col-xs-12 padding-top-25">
                          <div class="form-group" >
                            <label class="control-label " for="input-email">  Customers</label>
                            <div id="customers" >
                              No Customers
                            </div>
                       
                          </div>
                          </div>
                              <div class="col-sm-6 col-md-6 col-xs-6 padding-top-25">

                              <div class="form-group">
                                  <label>Date and Time</label>
                                  <input name="date"  id="datetimepicker6" placeholder="11/11/2017" class="form-control" required>
                              </div>
                            
                        </div>

                        
                     <div class="col-sm-6 col-md-6 col-xs-6 padding-top-25">
                          <div class="form-group">
                                  <label>Link</label>
                                  <input name="website" type="text" class="form-control" placeholder="https://eganacsi.com/" required>
                              </div>
                        </div>


                         <div class="col-sm-12 col-md-12 col-xs-12">
                           <div class="form-group">
                            <label class="control-label " for="input-email"> Message</label>
                             <textarea name="message" rows="5" id="input-enquiry" class="form-control" required></textarea>
                           </div>
                        </div>

                     </div>
                        
                       <?php
					   for($i=0;$i<count($clist);$i++){ $dv[]=$clist[$i]['c_id']; }
					  $vl2=implode(",",$dv);
					    ?> 
                      
                         <input type="hidden" name="campaign" value="add">
                         <input type="hidden" name="number" id="hidcnt" value="">

                        <div class="myclip2 col-md-4 hidden-xs hidden-sm">
                          <div class="circle1">
                             <div class="circle2">
                                <i class="fa fa-hourglass-start"></i>
                                <span id="chlength"> 0 </span>
                             </div>
                          </div>
                        </div>

                      <div class="page-login">
                          <div class="bottom-form">
                          
                            <button class="btn btn-default pull-right" type="submit">Submit</button>
                         
                          </div>
                      </div>    
                    </form><br>

                  
               </div>
            </div>
         </div>
      </div>
      <br>
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

      <script type="text/javascript">
         $(function () {
             $('#datetimepicker6').datetimepicker();
         });

		  $( ".cityd" ).on( "click", function(){    

      var selectedcity = new Array();
        var n = jQuery(".cityd:checked").length;
        if (n > 0){
            jQuery(".cityd:checked").each(function(){
                selectedcity.push($(this).val());
            });
        var city=selectedcity;
        } else {
      var city="";
    }

      $("#city").val(city);

      $.ajax({
          url: "<?php echo base_url();?>register/customerslist",
          method: 'POST',
          data: {city:city},
          success: function(data) {
		
          $("#customers").html(data);
          }
      });
  });
  
  
  
function updateCounter()
{
	
   var lnth=$('.test:checked').length;
   $("#chlength").html(lnth);
    $("#hidcnt").val(lnth);
   

}

  
  function campaignfun()
  {
	
	var actpnts=<?php if($sellerdata['credits']==""){ echo "0"; } else { echo $sellerdata['credits']; } ?>;
	var spnt=$("#hidcnt").val();
	if(actpnts<spnt)
	{
		alert("Your credits are not sufficient , please contact administartor"); 
		return false; 
	}
	alert("Your Campaign will send to admin, Admin review this"); 
	return true;
	
  }
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