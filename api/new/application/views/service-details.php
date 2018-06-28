<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic page needs
         ============================================ -->
      <title><?php echo $service['meta_title']; ?></title>
      <meta charset="utf-8">
      <meta name="keywords" content="<?php echo $service['meta_keywords']; ?>" />
      <meta name="description" content="<?php echo $service['meta_description']; ?>">
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
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.min.css">
      <link href="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
      <!-- Theme CSS
         ============================================ -->
      <link href="<?php echo base_url(); ?>css/themecss/so_megamenu.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/themecss/so-categories.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/footer1.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/header1.css" rel="stylesheet">
      <link id="color_scheme" href="<?php echo base_url(); ?>css/theme.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>plugins/raty/jquery.raty.css" rel="stylesheet" />
   </head>
   <body class="res layout-subpage">
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
<?php include('header.php') ?>
         <!-- //Header Container  -->
         <!-- Main Container  -->
         <div class="main-container container getquote">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
              
            </ul>
            <div class="row">
               <!--Middle Part Start-->
               <div id="content"  class="col-md-12 col-sm-12 col-xs-12">
                  <div class="product-view row">
                     <div class="left-content-product col-sm-12 col-xs-12">
                        <div class="row">
                           <div class="content-product-left  col-sm-4 col-xs-12 ">
                              <div class="large-image  ">
                                 <span class="label label-sale"><?php echo number_format($service['discount_percent'],0); ?>% off</span>
                                 <img itemprop="image" class="product-image-zoom" src="<?php echo base_url().$service['product_image']; ?>" data-zoom-image="<?php echo base_url().$service['product_image']; ?>" title="<?php echo $service['service_name']; ?>" alt="<?php echo $service['service_name']; ?>">
                              </div>
                              <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                 <a data-index="0" class="img thumbnail " data-image="<?php echo base_url().$service['product_image']; ?>" title="<?php echo $service['service_name']; ?>">
                                 <img src="<?php echo base_url().$service['product_image']; ?>" title="<?php echo $service['service_name']; ?>" alt="<?php echo $service['service_name']; ?>">
                                 </a>
                                 <?php 
								 for($i=0;$i<4;$i++){
								 $img=FCPATH."uploads/services/service_".$service['service_id']."_".$i.".jpg";
								
								 if(file_exists($img))
								 {
								  ?>
                                   <a data-index="0" class="img thumbnail " data-image="<?php echo base_url()."uploads/services/service_".$service['service_id']."_".$i.".jpg"; ?>" title="<?php echo $service['service_name']; ?>">
                                 <img src="<?php echo base_url()."uploads/services/service_".$service['service_id']."_".$i.".jpg"; ?>" title="<?php echo $service['service_name']; ?>" alt="<?php echo $service['service_name']; ?>">
                                 </a>
                                 <?php } } ?>
                                 
                                
                              </div>
                           </div>


                           
                           <div class="content-product-right col-sm-8 col-xs-12">
                              <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                   <div class="title-product">
                                     <h1><?php echo $service['service_name']; ?></h1>
                                     <h2 class="hidden"><?php echo $service['service_name']; ?></h2>
                                  </div>
                                  <!-- Review ---->
                                  <div class="box-review form-group">
                                     <div id="readOnly"></div>
                                      <?php if($this->session->userdata('customer_id')!=""){ ?>
                                      <div><a data-toggle="modal" data-target="#rating" style="text-decoration:underline"> Rate It</a></div>
                                      <?php } else { ?>
                                       <div><a style="text-decoration:underline" href="<?php echo base_url(); ?>login"> Rate It</a></div>
                                      <?php } ?>
                                  </div>
                                  

                                  <div class="compnydtl">
                                    <h4><?php echo $service['company']; ?> <?php if($service['ticks']==1){ ?> <i class="fa fa-check"></i><?php } ?></h4>
                                    <span><?php foreach($areas as $area){ if($area['a_id']==$service['area']){ echo $area['area_name']; }} ?>, <?php foreach($cities as $city){ if($city['c_id']==$service['city']){ echo $city['city_name']; }} ?></span>
                                  </div>
                                </div>

                                <div class="col-md-4 col-xs-12 col-sm-4">

                                  <div class="newcontact">
                                  <?php if($this->session->userdata('customer_id')==""){ ?>
                                   <a  href="<?php echo base_url(); ?>login" style="background-color: #F4A137" class="btn btn-social btn-facebook btn-lg"> BOOK SERVICE </a>
                                  <?php } else { ?>
                                    <a class="btn btn-social btn-facebook btn-lg" data-toggle="modal" data-target="#hmodel-quote-s" style="background-color: #F4A137"> BOOK SERVICE </a>
                                    <?php } ?>
                                  </div>

                                </div>


                              </div>



                              <div class="product-label form-group">
                                 <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">र <?php echo $service['discount_price']; ?></span>
                                    <span class="price-old">र <?php echo $service['price1']; ?></span>
                                 </div>
                                 
                              </div>
                              <div class="product-box-desc dl my clearfix">
                                 <div class="inner-box-desc">
                                    <div class="reward"><span>Address:</span> <?php echo $service['address1']; ?> <?php echo $service['address2']; ?>, <?php foreach($areas as $area){ if($area['a_id']==$service['area']){ echo $area['area_name']; }} ?>, <?php foreach($cities as $city){ if($city['c_id']==$service['city']){ echo $city['city_name']; }} ?></div>
                                 </div>

                                 <div class="inner-box-desc">
                                    <div class="reward"><span>Available Days:</span>
                                      <ul class="list-inline list-unstyled mydays">
									  <?php if($service['sunday']==1){ ?>
                                        <li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> sun</li>
										  <?php if($service['monday']==1){ ?>
										<li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> mon</li>  <?php if($service['tuesday']==1){ ?>
										<li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> tue</li>  <?php if($service['wednesday']==1){ ?>
										<li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> wed</li>  <?php if($service['thursday']==1){ ?>
										<li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> thu</li>  <?php if($service['friday']==1){ ?>
										<li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> fri</li>  <?php if($service['saturday']==1){ ?>
										<li><i class="fa fa-check"></i><?php } else { ?><li class="cross"><i class="fa fa-times"></i> <?php } ?> sat</li>
                                       

                                      </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="newcontact chg">

                               <ul class="list-inline list-unstyled">
                                  <li>
                                      <a class="contact">
                                       <i class="fa fa-user"></i> <?php echo $service['first_name']; ?> <?php echo $service['last_name']; ?>
                                     </a>
                                  </li>
                                  <li>
                                      <a class="contact">
                                       <i class="fa fa-phone"></i> <?php echo $service['phone']; ?>
                                     </a>
                                  </li>
                                  <li>
                                      <a class="contact">
                                       <i class="fa fa-envelope"></i> <?php echo $service['email']; ?>
                                     </a>
                                  </li>


                                </ul>
                              </div>

                              



                              <div class="discription">
                                <?php echo $service['description']; ?>
                              </div>
                            </div>



                        </div>
                     </div>
                  </div>
                  <!-- Product Tabs -->
                  <!-- //Product Tabs -->
                  <!-- Related Products -->
                  
               </div>
            </div>
            <!--Middle Part End-->
         </div>
         <!-- //Main Container -->
         <!-- Footer Container -->
        <?php include('footer.php') ?>
         <!-- //end Footer Container -->
      </div>
<?php include('social.php') ?>
<?php include('modal-popup.php') ?>

<div class="modal fade model-quote" id="rating" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="model-divider">
               <div class="model-title">
                  <h6>Rating</h6>
               </div>
            </div>
         </div>
         <!-- .model-header end -->
         <div class="modal-body">
            <div class="profiel-container change-top">
               <form action="<?php echo base_url(); ?>products/rating" method="post" class="clearfix" id="querysubmit">
                  <div class="clear">
                   
                     
                     <div class="col-sm-12 padding-top-2 text-center">
                         <div class="table-responsive reviews-table">
                                        <div id="half"></div>
                                      </div>
                     </div>
                     <br>
                     <div class="col-sm-12 text-center">
					 <input type="hidden" name="cid" value="<?php echo $this->session->userdata('customer_id'); ?>">
                      <input type="hidden" name="pid" value="">
                       <input type="hidden" name="sid" value="<?php echo $service['service_id']; ?>">
                      <input class="btn btn-primary" type="submit" name="sub" value="Submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- .model-body end -->
      </div>
   </div>
</div>


    <div class="modal fade model-quote" id="hmodel-quote-s" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="model-divider">
               <div class="model-title">
                  <h6>BOOK A SERVICE</h6>
               </div>
            </div>
         </div>
         <!-- .model-header end -->
         <div class="modal-body">
            <div class="profiel-container change-top">
               <form action="<?php echo base_url(); ?>products/bookaservice" method="post" class="clearfix">
                  <div class="clear">
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Category</label>
                        <select class="selectpicker form-control" data-live-search="true" name="category" disabled>
                         
						   <?php foreach($categories as $category){ ?>
                           <option value="<?php echo $category['category_id']; ?>" <?php if($category['category_id']==$service['category_id']){ echo "selected"; } ?>><?php echo $category['category_name']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small> Sub Category</label>
                        <select class="selectpicker form-control" data-live-search="true" name="subcategory" disabled>
                          
                            <?php foreach($subcategories as $subcategory){ ?>
                           <option value="<?php echo $subcategory['subcategory_id']; ?>" <?php if($subcategory['subcategory_id']==$service['subcategory_id']){ echo "selected"; } ?>><?php echo $subcategory['subcategory_name']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small> Sub Sub Category</label>
                        <select class="selectpicker form-control" data-live-search="true" name="subsubcategory" disabled>
                          
                            <?php foreach($subsubcategories as $subsubcategory){ ?>
                           <option value="<?php echo $subsubcategory['subsubcategory_id']; ?>" <?php if($subsubcategory['subsubcategory_id']==$service['subsubcategory_id']){ echo "selected"; } ?>><?php echo $subsubcategory['name']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Service Name</label>
						<input type="text" name="servicename" value="<?php echo $service['service_name']; ?>" class="selectpicker form-control" disabled>
                        <input type="hidden" value="<?php echo $service['service_name']; ?>" name="service">
                         <?php $this->session->set_userdata("dmessage","Your Orders Has Been Submitted, Please Wait or Call ".$service['phone'].""); ?>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group required">
                           <label><small class="adjst"></small> Appoitment Date & Time </label>
                           <input type="text" class="form-control" name="appointment" id="datetimepicker-s" placeholder="11/11/2017" required >
                        </div>
                     </div>
                     
                      <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your First Name </label>
                           <input type="text" class="form-control" placeholder="Your First Name .." name="customerfname" required maxlength="100" value="<?php echo $cust['first_name']; ?>" readonly>
                        </div>
                     </div>
					 <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Last Name </label>
                           <input type="text" class="form-control" placeholder="Your Last Name .." name="customerlname" required maxlength="100" value="<?php echo $cust['last_name']; ?>" readonly>
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Phone </label>
                           <input type="text" class="form-control" placeholder="Your Phone ..." name="customerphone" required maxlength="10" value="<?php echo $cust['phone']; ?>" readonly>
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Email </label>
                           <input type="email" class="form-control" placeholder="Your Email..." name="customeremail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $cust['email']; ?>" readonly>
                        </div>
                     </div>
                     
                     <div class="col-sm-12 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small>  Your Message </label>
                            <textarea name="yourMessage" class="form-control" placeholder="Your Message" required=""></textarea>
							 <input type="hidden" name="seller_id" value="<?php echo $service['s_id']; ?>">
						  <input type="hidden" name="service_id" value="<?php echo $service['service_id']; ?>">
                        </div>
                     </div>
                     <div class="col-sm-12 text-right">
                      <input class="btn btn-primary" type="submit" name="sub" value="Submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- .model-body end -->
      </div>
   </div>
</div>
      <!-- Include Libs & Plugins
         ============================================ -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/libs.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url(); ?>js/countdown/jquery.countdown.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/datetimepicker/moment.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.min.js"></script>
            
      <!-- end Related  Products-->
      <!-- Theme files
         ============================================ -->
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/so_megamenu.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/application.js"></script>
      <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/themejs/addtocart.js"></script>  
      <script type="text/javascript">
         $(function () {
             $('#datetimepicker-s').datetimepicker({      minDate:new Date()     });
         });
      </script>
      
       <script src="<?php echo base_url(); ?>plugins/raty/jquery.raty.js"></script>
	  
	  <script>
$.fn.raty.defaults.path = '<?php echo base_url(); ?>plugins/raty/images';


$('#default').raty();
$('#score').raty({ score: 0 });
$('#score-callback').raty({
    score: function() {
        return $(this).attr('data-score');
    }
});

$('#half').raty({
    half  : true,
    score    : 2.5,
    hints : [['bad 1/2', 'bad'], ['poor 1/2', 'poor'], ['regular 1/2', 'regular'], ['good 1/2', 'good'], ['gorgeous 1/2', 'gorgeous']]
});
</script>     
<?php $rate=$srate['rate_total']/$srate['rate_count']; ?>
<script>
$('#readOnly').raty({ readOnly: true, score: '<?php echo $rate ?>' });
</script>  
      
      <?php include_once("footersearch.php"); ?>
        
      
      <script type='text/javascript'>
        $(window).load(function(){
           $('#chz-select').select2();
        });
		
</script>


   </body>
</html>