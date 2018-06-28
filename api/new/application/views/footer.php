<footer class="footer-container type_footer1 typefooter-3">
        <!-- Footer Top Container -->
        <section class="footer-top footer-navbar">
          <div class="container content">
            <div class="row">
              <div class="col-sm-6 col-md-3 col-xs-5 box-information">
                <div class="module clearfix">
                  <h3 class="modtitle">Download Our APP</h3>
                  <div class="modcontent">
                    <p><a  class="btn btn-app-store"><i class="fa fa-android"></i> <span class="small">Download on the</span> <span class="big">App Store</span></a></p>
                    <p><a  class="btn btn-app-store"><i class="fa fa-apple"></i> <span class="small">Download on the</span> <span class="big">App Store</span></a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-xs-7 box-service">
                <div class="module clearfix">
                  <h3 class="modtitle">Customer Service</h3>
                  <div class="modcontent">
                    <ul class="menu">
                      <li><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
                      <li><a href="<?php echo base_url(); ?>faq">FAQ</a></li>
                      <li><a href="<?php echo base_url(); ?>terms_conditions">Terms & Conditions</a></li>
                      <li><a href="<?php echo base_url(); ?>privacy_policy">Privacy Polity</a></li>
                      <li><a href="<?php echo base_url(); ?>contact_us">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-xs-5 box-account clearfix1">
                <div class="module clearfix">
                  <h3 class="modtitle">Popular Products</h3>
                  <div class="modcontent">
                    <ul class="menu">
                    <?php 
					$cnt=1;
					foreach($pproducts as $prod1){ ?>
                      <li><a href="<?php echo base_url(); ?>details/<?php echo strtolower(str_replace(" ","-",$prod1['product_name'])); ?>/<?php echo $prod1['product_id']; ?>/"><?php echo $prod1['product_name']; ?></a></li>
                   <?php $cnt++; if($cnt==6){ break;} } ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-xs-7 collapsed-block ">
                <div class="module clearfix1">
                  <h3 class="modtitle">Contact Us </h3>
                  <div class="modcontent">
                    <ul class="contact-address">
                      <li><span class="fa fa-map-marker"></span> 
                       <?php echo $settings['address']; ?>
                      </li>
                      <li><span class="fa fa-envelope-o"></span> Email: <a href="mailto:<?php echo $settings['email']; ?>"> <?php echo $settings['email']; ?></a></li>
                      <li><span class="fa fa-phone">&nbsp;</span> Phone 1: <?php echo $settings['phone']; ?> <br>Phone 2: <?php echo $settings['mobile']; ?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 hidden-xs collapsed-block footer-links">
                <div class="module clearfix">
                  <div class="modcontent">
                    <hr class="footer-lines">
                    <div class="footer-center">
                      <div class="container">
                        <div class="module custom-sevicer">
                          <div class="box-bottom-support">
                            <div class="row">
                              <?php foreach ($flinks as $flink) {
                                if($flink['f_id']==1){
                              ?>
                              <div class="col-lg-4 col-md-4 col-sm-4 box-1">
                                <div class="icon-sp">
                                  <i class="fa fa-paper-plane"></i>
                                </div>
                                <div class="content-sp">
                                  <a href="<?php echo $flink['url']; ?>" class="font-sn"><strong><?php echo $flink['name']; ?></strong></a><br>
                                  <span><?php echo $flink['tag']; ?></span>
                                </div>
                              </div>
                              <?php } if ($flink['f_id']==2) { ?>
                              <div class="col-lg-4 col-md-4 col-sm-4 box-1 box-footer-sp">
                                <div class="icon-sp">
                                  <i class="fa fa-tag"></i>
                                </div>
                                <div class="content-sp">
                                  <a href="<?php echo $flink['url']; ?>" class="font-sn"><strong><?php echo $flink['name']; ?></strong></a><br>
                                  <span><?php echo $flink['tag']; ?></span>
                                </div>
                              </div>
                              <?php } if ($flink['f_id']==3) { ?>
                              <div class="col-lg-4 col-md-4 col-sm-4 box-1 box-footer-sp">
                                <div class="icon-sp">
                                  <i class="fa fa-life-ring"></i>
                                </div>
                                <div class="content-sp">
                                  <a href="<?php echo $flink['url']; ?>" class="font-sn"><strong><?php echo $flink['name']; ?></strong></a><br>
                                  <span><?php echo $flink['tag']; ?></span>
                                </div>
                              </div>
                              <?php } ?>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /Footer Top Container -->
        <!-- Footer Bottom Container -->
        <div class="footer-bottom-block ">
          <div class=" container">
            <div class="row">
              <div class="col-sm-12 copyright-text" style="text-align:center"> © 2018 eGanacsi. All Rights Reserved. </div>
              
              <!--Back To Top-->
              <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
            </div>
          </div>
        </div>
        <!-- /Footer Bottom Container -->
      </footer>
      