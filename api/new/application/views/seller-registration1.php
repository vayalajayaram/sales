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
         <div class="main-container container mycheck_out">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
               <li>Seller Registration</li>
            </ul>
            <!--Middle Part End-->

            <div class="row">
            <div class="col-main col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel-group accordion-faq" id="faq-accordion">
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span>Personal Details</a> </div>
                      <div id="question1" class="panel-collapse collapse  <?php if($_SESSION['sfdata']['first_name']==""){ ?>in <?php } ?>" aria-expanded="false" <?php if($_SESSION['sfdata']['first_name']!=""){ ?>style="height: 0px;"<?php } ?>>
					  <form action="<?php echo base_url(); ?>register/seller_first" method="post">
                        <div class="panel-body">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> First Name</label>
                                <input type="text" name="first_name"  class="form-control" maxlength="100" required value="<?php echo $_SESSION['sfdata']['first_name']; ?>" />
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> Email ID</label>
                                <input type="email" name="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $_SESSION['sfdata']['email']; ?>" />
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> Password</label>
                                <input type="password" class="form-control" placeholder="Password At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" name="password"  required maxlength="20" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})" title="At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character' : ''); if(this.checkValidity()) form.cpassword.pattern = this.value;" value="<?php echo $_SESSION['sfdata']['password']; ?>" />
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> City</label>
                                <select class="form-control" name="city" id="city" required>
                                            <option value="">Please select</option>
											<?php foreach($cities as $city){ ?>
                                            <option value="<?php echo $city['c_id']; ?>" <?php if($_SESSION['sfdata']['city']==$city['c_id']){ echo "selected"; } ?> ><?php echo $city['city_name']; ?></option>
                                            <?php } ?>                                            
                                        </select>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Address 1</label>
                                <input type="text" name="address1" class="form-control" required value="<?php echo $_SESSION['sfdata']['address1']; ?>" />
                              </div>
                            </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label" for="input-password"> Last Name</label>
                                <input type="text" name="last_name"  class="form-control" required maxlength="100" value="<?php echo $_SESSION['sfdata']['last_name']; ?>" />
                              </div>

                              <div class="form-group">
                                <label class="control-label" for="input-email"> Phone Number</label>
                                <input type="text" name="phone"  class="form-control" required value="<?php echo $_SESSION['sfdata']['phone']; ?>" />
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> Confirm Password</label>
                               <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword"  required maxlength="20" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})" title="At Least 6 characters, One Capital letter, one Small letter, one Number, One Special Character" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" value="<?php echo $_SESSION['sfdata']['cpassword']; ?>" />
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> Area</label>
                                <select class="form-control" name="area" id="area" required>
                                            <option value="">Please select</option>                                           
                                            
                                        </select>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Pincode</label>
                                <input type="text" name="pin"  class="form-control" required value="<?php echo $_SESSION['sfdata']['pin']; ?>" />
                              </div>
                            </div>
                          <div class="col-md-12">
                            <div class="pull-right">
                              <button class="btn btn-success" type="submit">Continue</button>
                            </div>
                          </div>
                        </div>
					  </form>
                      </div>
                    </div>
                    <div style="color:#F00;"><?php echo $this->session->flashdata('error'); ?></div>
                    <div class="panel">
                      
					    <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question6" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span> Company Details</a> </div>
					   <?php if($_SESSION['sfdata']['first_name']!=""){ ?>
                      <div id="question6" class="panel-collapse collapse  <?php if($_SESSION['sfdata']['first_name']!="" && $_SESSION['sbdata']['company']==""){ ?>in <?php } ?>" aria-expanded="false" <?php if($_SESSION['sfdata']['first_name']==""){ ?>style="height: 0px;"<?php } ?>>
					  <form action="<?php echo base_url(); ?>register/seller_second" method="post">
                        <div class="panel-body">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Company Name</label>
                                <input type="text" name="company" value="<?php echo $_SESSION['sbdata']['company']; ?>" required class="form-control">
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> Email ID</label>
                                <input type="email" name="cemail" required value="<?php echo $_SESSION['sbdata']['cemail']; ?>" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                              </div>

                              

                              <div class="form-group">
                                <label class="control-label " for="input-email"> City</label>
                                <select class="form-control" name="ccity" id="ccity" required>
                                            <option value="">Please select</option>
											<?php foreach($cities as $city){ ?>
                                            <option value="<?php echo $city['c_id']; ?>" <?php if($city['c_id']==$_SESSION['sbdata']['ccity']){ echo "selected"; } ?> ><?php echo $city['city_name']; ?></option>
                                            <?php } ?>                                            
                                        </select>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Address 1</label>
                                <input type="text" name="caddress1" value="<?php echo $_SESSION['sbdata']['caddress1']; ?>" id="input-email" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Website(url)</label>
                                <input type="text" name="website" value="<?php echo $_SESSION['sbdata']['website']; ?>" class="form-control">
                              </div>

                              <div class="form-group">
                                <label class="control-label " for="input-email"> Phone Number</label>
                                <input type="text" name="cphone" value="<?php echo $_SESSION['sbdata']['cphone']; ?>" class="form-control" required>
                              </div>

                              

                              <div class="form-group">
                                <label class="control-label" for="input-email"> Area</label>
                                <select class="form-control" name="carea" id="area1" required>
                                            <option value="">Please select</option>                                           
                                            
                                        </select>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label " for="input-email"> Pincode</label>
                                <input type="text" name="cpin" value="<?php echo $_SESSION['sbdata']['cpin']; ?>" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right">
                              <button class="btn btn-success" type="submit">Continue</button>
                            </div>
                          </div>
                        </div>
						</form>
                      </div>
					  <?php } ?>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question3" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span> Subscription Packages</a> </div>
					  <?php if($_SESSION['sbdata']['company']!=""){ ?>
                      <div id="question3" class="panel-collapse collapse <?php if($_SESSION['sbdata']['company']!="" && $_SESSION['mship']==""){ ?>in<?php } ?>" aria-expanded="false" <?php if($_SESSION['sbdata']['company']==""){ ?>style="height: 0px;"<?php }  ?>>
                        <div class="panel-body">
                           
                           <div class="pricing_table" style="overflow-x:auto;">
                              <table class="table1 table-responsive">
                                  <thead>
                                      <tr>
                                          <th>Membership Subscription Options </th>
                                          <th scope="col" abbr="Starter"><?php echo $subscription1['title']; ?></th>
                                          <th scope="col" abbr="Medium"><?php echo $subscription2['title']; ?> </th>
                                          <th scope="col" abbr="Business"><?php echo $subscription3['title']; ?> </th>
                                      </tr>
                                  </thead>
                                  <tfoot>
                                      <tr>
                                          <th scope="row">Select Month</th>
                                          <td>
										  <form action="<?php echo base_url(); ?>register/sellerfinal" method="post" id="sub1">
                                            <div class="form-group">
                                              <select class="form-control wdt" id="sel1" name="mship">
                                                <option value="1">1 month-Free</option>
                                                <option value="3">3 month-Free</option>
                                                <option value="6">6  month-Free</option>
                                                <option value="12">12  month-Free</option>
                                              </select>
											  <input type="hidden" name="mbr_type" value="<?php echo $subscription1['title']; ?>">
										<input name="mprice" value="<?php echo $subscription1['price_m']; ?>" type="hidden">
                                        <input name="credits" value="<?php echo $subscription1['credits']; ?>" type="hidden" >
                                            </div>
										</form>
                                          </td>
                                          <td>
										  <form action="<?php echo base_url(); ?>register/sellerfinal" method="post" id="sub2">
                                            <div class="form-group">
                                             <select class="form-control wdt" id="sel12" name="mship">
                                             <option value="1" label="<?php echo $subscription2['price_m']; ?>">1 month-  $ <?php echo $subscription2['price_m']; ?></option>
                                             <option value="3" label="<?php echo $subscription2['price_q']; ?>">3 months- $ <?php echo $subscription2['price_q']; ?></option>
                                             <option value="6" label="<?php echo $subscription2['price_h']; ?>">6 months- $ <?php echo $subscription2['price_h']; ?></option>
                                             <option value="12" label="<?php echo $subscription2['price_y']; ?>">12 months- $ <?php echo $subscription2['price_y']; ?></option>
                                             </select>
										<input type="hidden" name="mbr_type" value="<?php echo $subscription2['title']; ?>">
										<input name="mprice" value="<?php echo $subscription2['price_m']; ?>" type="hidden" id="mpr1">
                                        <input name="credits" value="<?php echo $subscription2['credits']; ?>" type="hidden" >
                                            </div>
											</form>
                                          </td>
                                          <td>
									<form action="<?php echo base_url(); ?>register/sellerfinal" method="post" id="sub3">
                                           <div class="form-group">
                                            <select class="form-control wdt" id="sel13" name="mship">
                                             <option value="1" label="<?php echo $subscription3['price_m']; ?>">1 month-  $ <?php echo $subscription3['price_m']; ?></option>
                                             <option value="3" label="<?php echo $subscription3['price_q']; ?>">3 months- $ <?php echo $subscription3['price_q']; ?></option>
                                             <option value="6" label="<?php echo $subscription3['price_h']; ?>">6 months- $ <?php echo $subscription3['price_h']; ?></option>
                                             <option value="12" label="<?php echo $subscription3['price_y']; ?>">12 months- $ <?php echo $subscription3['price_y']; ?></option>
                                             </select>
										<input type="hidden" name="mbr_type" value="<?php echo $subscription3['title']; ?>">
										<input name="mprice" value="<?php echo $subscription3['price_m']; ?>" type="hidden" id="mpr2">
                                        	<input name="credits" value="<?php echo $subscription3['credits']; ?>" type="hidden" >
                                           </div>
										   </form>
                                          </td>
                                          
                                      </tr>

                                      <tr>
                                        <th>Price Per Month</th>
                                        <td>Free</td>
                                        <td id="prpkg2">$ <?php echo $subscription2['price_m']; ?></td>
                                        <td id="prpkg3">$ <?php echo $subscription3['price_m']; ?></td>
                                       
                                      </tr>
                                      <tr>
                                          <th scope="row">Select Plan</th>
                                          <td>
                                          <a href="javascript:void();" onclick="document.getElementById('sub1').submit();" class="btn btn-sky text-uppercase btn-lg">Buy Now</a>
                                          </td>
                                          <td>
                                          <a href="javascript:void();" onclick="document.getElementById('sub2').submit();" class="btn btn-sky text-uppercase btn-lg">Buy Now</a>
                                          </td>
                                          <td>
                                          <a href="javascript:void();" onclick="document.getElementById('sub3').submit();" class="btn btn-sky text-uppercase btn-lg">Buy Now</a>
                                       
                                      </td></tr>
                                  </tfoot>
                                  <tbody>
                                      <tr>
                                          <th scope="row">Membership Status</th>
                                          <td><?php echo $subscription1['status']; ?></td>
                                          <td><?php echo $subscription2['status']; ?></td>
                                          <td><?php echo $subscription3['status']; ?></td>
                                        
                                      </tr>
                                      <tr>
                                          <th scope="row">Membership Type</th>
                                          <td><?php echo $subscription1['membership_type']; ?></td>
                                          <td><?php echo $subscription1['membership_type']; ?></td>
                                          <td><?php echo $subscription1['membership_type']; ?></td>
                                       
                                      </tr>
                                      <tr>
                                          <th scope="row">Product/Service Uploads</th>
                                          <td><?php echo $subscription1['product_uploads']; ?></td>
                                          <td><?php echo $subscription2['product_uploads']; ?></td>
                                          <td><?php echo $subscription3['product_uploads']; ?></td>
                                         
                                      </tr>
                                      <tr>
                                          <th scope="row">Customer Support</th>
                                          <td>
										  <?php if($subscription1['customer_support']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['customer_support']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['customer_support']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                    
                                      </tr>
                                      <tr>
                                          <th scope="row">Send Notifications</th>
                                          <td>
										  <?php if($subscription1['send_notifications']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>                                          <td>
										  <?php if($subscription2['send_notifications']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
										  <td>
										  <?php if($subscription3['send_notifications']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          
                                     
                                      </tr>
                                      <tr>
                                          <th scope="row">Homepage Featured Products</th>
                                          <td>
										  <?php if($subscription1['homepage_feature_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['homepage_feature_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['homepage_feature_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                       
                                      </tr>
                                      <tr>
                                          <th scope="row">Search Result Promoted Products</th>
                                          <td>
										  <?php if($subscription1['search_result_promoted_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['search_result_promoted_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['search_result_promoted_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                      
                                      </tr>
                                      <tr>
                                          <th scope="row">Request for Quotation</th>
                                          <td>
										  <?php if($subscription1['request_for_quotations']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['request_for_quotations']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['request_for_quotations']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                         
                                      </tr>

                                      <tr>
                                          <th scope="row">Homepage Banner</th>
                                           <td>
										  <?php if($subscription1['homepage_banner']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['homepage_banner']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['homepage_banner']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                       
                                      </tr>

                                      <tr>
                                          <th scope="row">Guaranteed Shop (Guarantee Icon)</th>
                                           <td>
										  <?php if($subscription1['guarantee_icon']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['guarantee_icon']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['guarantee_icon']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                      </tr>

                                      <tr>
                                          <th scope="row">Lead Enquiries via SMS and Call</th>
                                           <td>
										  <?php if($subscription1['lead_enquiries']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['lead_enquiries']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['lead_enquiries']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                      </tr>

                                      <tr>
                                          <th scope="row">Social Media Product Ads</th>
                                           <td>
										  <?php if($subscription1['social_media_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['social_media_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['social_media_products']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                      </tr>

                                      <tr>
                                          <th scope="row">Service Request Confirmation</th>
                                            <td>
										  <?php if($subscription1['service_booking_confirmation']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['service_booking_confirmation']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['service_booking_confirmation']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                      </tr>

                                      <tr>
                                          <th scope="row">Category Banner</th>
                                           <td>
										  <?php if($subscription1['category_banner']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['category_banner']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['category_banner']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                      </tr>

                                      <tr>
                                          <th scope="row">Product/Service Upload Assist</th>
                                           <td>
										  <?php if($subscription1['product_upload_assist']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription2['product_upload_assist']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                          <td>
										  <?php if($subscription3['product_upload_assist']==1){ ?>
										  <img src="<?php echo base_url(); ?>image/check0.png" class="img-responsive size" alt="check"><?php } else { ?> <img src="<?php echo base_url(); ?>image/check1.png" class="img-responsive size" alt="check"> <?php } ?></td>
                                       
                                      </tr>

                                  </tbody>
                              </table>

                              <h3 class="payment1">Payment Procedure:</h3>
                              <ul class="list-unstyled">
                                <li>1.Offline Mode: Cash or Mobile Money (EVC/eDahab/eMaal/Zaad/Sahal).</li>
                                <li>2.Online Mode: Master Card, Visa Card and Paypal </li>
                              </ul>
                           </div>

                        </div>
                      </div>
					  <?php } ?>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question2" class="collapsed" aria-expanded="false"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span>Payment Options</a> </div>
					  <?php if($_SESSION['mship']!=""){ ?>
                      <div id="question2" class="panel-collapse collapse  <?php if($_SESSION['mship']!=""){ ?>in <?php } ?>" aria-expanded="false">
                        <div class="panel-body">                          


                          <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <h4 class="orderhd">Order summary</h4>
                            <table class="table-condensed payments">
                              <tbody>
                                <tr>
                                  <th><?php echo $this->session->userdata('mbr_type'); ?></th>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th><?php echo $this->session->userdata('mship'); ?> months</th>
                                  <td>$<?php echo $this->session->userdata('mprice'); ?></td>
                                </tr>
                              
                                <tr>
                                  <th>total</th>
                                  <td>$<?php echo $this->session->userdata('mprice'); ?></td>
                                </tr>
                              </tbody>
                            </table>

                           
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="radio1 clearfix brdr-btn">
                              <div class="col-md-6 col-xs-6 col-sm-6">
                                <div class="months" data-toggle="buttons">
                                  <label class="btn active">
                                    <input type="radio" name="gender1" checked=""><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <img src="img-ig/paypal.png" class="img-responsive" alt="paypal">
                                  </label>
                                </div>
                              </div>
                              <!-- <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <span class="headline-primary"><i class="fa fa-inr"></i>  449.00/mo</span>
                              </div> -->
                            </div>
                            <div class="radio1 clearfix brdr-btn">
                              <div class="col-md-6 col-xs-6 col-sm-6">
                                <div class="months" data-toggle="buttons">
                                  <label class="btn active">
                                    <input type="radio" name="gender1"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <img src="img-ig/visa.png" class="img-responsive" alt="visa">
                                  </label>
                                </div>
                              </div>
                              <!-- <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <span class="headline-primary"><i class="fa fa-inr"></i>  1000.00/mo</span>
                                <span class="h5 clearfix"><strike><i class="fa fa-inr"></i>  449.00/mo</strike></span>
                                <span class="h65">On Sale (Save 33%)</span>
                              </div> -->
                            </div>
                            <div class="radio1 clearfix brdr-btn">
                              <div class="col-md-6 col-xs-6 col-sm-6">
                                <div class="months" data-toggle="buttons">
                                  <label class="btn active">
                                    <input type="radio" name="gender1" checked=""><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <img src="img-ig/mastercard.png" class="img-responsive" alt="visa">
                                  </label>
                                </div>
                              </div>
                              <!-- <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <span class="headline-primary"><i class="fa fa-inr"></i>  2000.00/mo</span>
                                <span class="h5 clearfix"><strike><i class="fa fa-inr"></i>  449.00/mo</strike></span>
                                <span class="h65">On Sale (Save 33%)</span>
                              </div> -->
                            </div>
                            <!-- <div class="radio1 clearfix brdr-btn">
                              <div class="col-md-6 col-xs-6 col-sm-6">
                                <div class="months" data-toggle="buttons">
                                  <label class="btn active">
                                    <input type="radio" name="gender1" checked=""><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> 12 months</span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <span class="headline-primary"><i class="fa fa-inr"></i>  2500.00/mo</span>
                                <span class="h5 clearfix"><strike><i class="fa fa-inr"></i>  449.00/mo</strike></span>
                                <span class="h65">On Sale (Save 33%)</span>
                              </div>
                            </div> -->

                             <div class="proceed_pay">
                              <a href="<?php echo base_url(); ?>register/sellersubmit" class="btn btn-primary">Proceed to pay</a>
                            </div>
                            
                          </div>


                        </div>
                      </div>
					  <?php } ?>
                    </div>
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
	   $("#sel12").change(function(){
		   var pr= $('option:selected', this).attr("label");		  
		  $("#prpkg2").html("$ "+pr);
		  $("#mpr1").val(pr);
	   });
	   $("#sel13").change(function(){
		   var pr= $('option:selected', this).attr("label");		  
		  $("#prpkg3").html("$ "+pr);
		   $("#mpr2").val(pr);
	   });
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

$('input[name="cphone"]').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }  
});
$('input[name="cpin"]').keyup(function(e){
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
          data: {city:cid,aid:'<?php echo $_SESSION['sfdata']['area'] ?>'},
          success: function(data) {	
		 
          $("#area").html(data);
          }
      });
  });
  $("select[name='ccity']").change(function(){
      var cid = $(this).val();
 
      $.ajax({
          url: "<?php echo base_url();?>register/ajax_city1",
          method: 'POST',
          data: {city:cid,aid:'<?php echo $_SESSION['sbdata']['carea'] ?>'},
          success: function(data) {			
          $("#area1").html(data);
          }
      });
  });
  $( document ).ready(function(){
	  <?php if($_SESSION['sfdata']['city']!=""){ ?>
	   var cid = $("#city").val(); 	   
	   var aid=<?php echo $_SESSION['sfdata']['area'] ?>;
	   $.ajax({
          url: "<?php echo base_url();?>register/ajax_city",
          method: 'POST',
          data: {city:cid,aid:aid},
          success: function(data) {			
          $("#area").html(data);
          }
      });
	   <?php } if($_SESSION['sbdata']['ccity']!=""){ ?>
	   var cid = $("#ccity").val(); 	   
	   var aid=<?php echo $_SESSION['sbdata']['carea'] ?>;
	  
	   $.ajax({
          url: "<?php echo base_url();?>register/ajax_city1",
          method: 'POST',
          data: {city:cid,aid:aid},
          success: function(data) {			
          $("#area1").html(data);
          }
      });
	   <?php } ?>      
	  
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