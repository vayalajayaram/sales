<aside class="sidebar col-sm-3 col-xs-12">
                <div class="sidebar-account block hidden-xs">
                  <div class="sidebar-bar-title">
                   
                    <a data-toggle="collapse" href="#collapseExample3">Customer <i class="fa fa-angle-down"></i></a>
                  </div>
                  <div class="block-content">
                    <ul class="block-content collapse in" id="collapseExample3">
                      <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                      <li><a href="<?php echo base_url(); ?>enquiries"><i class="fa fa-question"></i> My Orders</a></li>
                      <li><a href="<?php echo base_url(); ?>notifications"><i class="fa fa-bell-o"></i> Notification</a></li>
                      <li><a href="<?php echo base_url(); ?>intrests"><i class="fa fa-heart"></i> Wishlist</a></li>
                    </ul>  
                     <?php if($this->session->userdata('seller_id')==""){ ?>
                       <div class="sidebar-bar-title">
                        <a href="<?php echo base_url(); ?>register/becomeaseller"><i class="fa fa-gear fa-spin"></i> Become a seller</a>
                      </div>
                     <?php } ?>
					  <?php if($this->session->userdata('seller_id')!=""){ ?>
                      <div class="sidebar-bar-title">
                        <a data-toggle="collapse" href="#collapseExample1">seller Tools <i class="fa fa-angle-down"></i></a>
                      </div>

                      <div class="block-content collapse in" id="collapseExample1">
                      <ul>
                        <li><a href="<?php echo base_url(); ?>products"><i class="fa fa-creative-commons"></i> My Products</a></li>
                        <li><a href="<?php echo base_url(); ?>services"><i class="fa fa-cogs"></i> My Services</a></li>
                        <li><a href="<?php echo base_url(); ?>quotation-request"><i class="fa fa-bullhorn"></i> Order Requests</a></li>
                        <li><a href="<?php echo base_url(); ?>leads"><i class="fa fa-hourglass-start"></i> My Leads</a></li>
                        <li><a href="<?php echo base_url(); ?>campaigns"><i class="fa fa-rss"></i> My Campaign</a></li>
                         <li><a href="<?php echo base_url(); ?>dashboard/package"><i class="fa fa-rss"></i> My Package</a></li>
                      </ul>
                      </div>
                      <?php } ?>
                      
                      <div class="sidebar-bar-title">
                        <a data-toggle="collapse" href="#collapseExample2">My account <i class="fa fa-angle-down"></i></a>
                      </div>
                      
                      <div class="block-content collapse in" id="collapseExample2">
                        <ul>
                          <li><a href="<?php echo base_url(); ?>profile"><i class="fa fa-user"></i> My Profile</a></li>
                          
                         
                          <li><a href="<?php echo base_url(); ?>changepassword"><i class="fa fa-edit"></i> Change Password</a></li>
                          <li><a href="<?php echo base_url(); ?>dashboard/changenumber"><i class="fa fa-phone"></i> Change Mobile Number</a></li>
                          <li><a href="<?php echo base_url(); ?>dashboard/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                      </div>
                  </div>
                </div>



                <div class="sidebar-account block hidden-lg hidden-md hidden-sm visible-xs">
                  <div class="sidebar-bar-title">
                   
                    <a data-toggle="collapse" href="#collapseExample">My Account <i class="fa fa-plus-circle"></i></a>
                  </div>
                  <div class="block-content collapse" id="collapseExample">
                    <ul>
                      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                      <li><a href="my-enquiries.php"><i class="fa fa-question"></i> My Enquiries</a></li>
                      <li><a href="my-notification.php"><i class="fa fa-bell-o"></i> My Notification</a></li>
                      <li><a href="intrests.php"><i class="fa fa-heart"></i> Interests</a></li>
                    </ul>  
                      <div class="sidebar-bar-title">
                        <a href="#">seller Tools</a>
                      </div>

                      <ul>
                        <li><a href="product-add.php"><i class="fa fa-creative-commons"></i> My Products</a></li>
                        <li><a href="service-add.php"><i class="fa fa-cogs"></i> My Services</a></li>
                        <li><a href="quotation-request.php"><i class="fa fa-bullhorn"></i> Quotation Request</a></li>
                        <li><a href="my-leads.php"><i class="fa fa-hourglass-start"></i> My Leads</a></li>
                        <li><a href="my-notification.php"><i class="fa fa-rss"></i> My Campaign</a></li>
                      </ul>
                      <div class="sidebar-bar-title">
                        <a href="#">My account</a>
                      </div>


                    <ul>

                      <li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
                      
                     
                      <li><a href="change-password.php"><i class="fa fa-edit"></i> Change Password</a></li>
                      <li><a href="change-number.php"><i class="fa fa-phone"></i> Change Mobile Number</a></li>
                      <li><a href="index.php"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                  </div>
                </div>
              </aside>