<header id="header" class=" variantleft type_1">
        <!-- Header Top -->
        <div class="header-top compact-hidden">
          <div class="container">
            <div class="row">
              <div class="col-md-2 col-xs-2 col-sm-3 mybtn">
                <button type="button" class="btn btn-labeled btn-default" style="background-color: indianred;color: #fff" data-toggle="modal" data-target="#squarespaceModal">
                <span class="btn-label-subaction"><i class="glyphicon glyphicon-map-marker"></i></span><span class="hidden-xs">Select Your City</span></button>    
              </div>
              <div class="header-top-left form-inline col-md-6 col-sm-5 hidden-xs compact-hidden">
                <div class="mycontact">
                  <ul class="list-inline sm-text-center">
                    <li> <a href="tel:12332435434"><i class="fa fa-phone"></i> <?php echo $settings['phone']; ?></a> </li>
                    <li> <a href="mailto:<?php echo $settings['email']; ?>"><i class="fa fa-envelope"></i><?php echo $settings['email']; ?></a> </li>
                  </ul>
                </div>
              </div>
              <div class="header-top-right collapsed-block text-right col-md-4  col-sm-4 col-xs-10 compact-hidden">
                 
                  <ul class="top-link list-inline">
				  <?php if($this->session->userdata('customer_id')==""){ ?>
                    <li class="account" id="my_account">
                      <a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >Sign Up/Login</span> <span class="fa fa-angle-down"></span></a>
                      <ul class="dropdown-menu ">
                        <li><a href="<?php echo base_url(); ?>register"><i class="fa fa-user"></i> Register</a></li>
                        <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-pencil-square-o"></i> Login</a></li>
                      </ul>
                    </li>
					<?php } else { ?>
					<li class="account" id="my_account">
                      <a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >Hi <?php echo $this->session->userdata('customer_name'); ?></span> <span class="fa fa-angle-down"></span></a>
                      <ul class="dropdown-menu ">
                        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-th-list"></i> Dashboard</a></li>
                        <li><a href="<?php echo base_url(); ?>dashboard/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                      </ul>
                    </li>
					<?php } ?>
                  
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- //Header Top -->
        <!-- Header center -->
        <div class="header-center left">
          <div class="container">
            <div class="row">
              <!-- Logo -->
              <div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img-ig/logo.png" title="Your Store" alt="Your Store"></a>
              </div>
              <!-- //end Logo -->
              <!-- Search -->
              <div id="sosearchpro" class="col-sm-6 col-md-6 search-pro">
                <form method="get" action="<?php echo base_url(); ?>search">
                  <div id="search0" class="search input-group">
                    
                    <input class="form-control" type="text"  placeholder="Enter product / service to search" name="keyword" id="searchgn" required>
                    <span class="input-group-btn">
                    <button type="submit" class="button-search btn btn-primary" ><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                
                </form>
              </div>
              <!-- //end Search -->
              
              <div class="phone-contact col-md-3 hidden-xs">
                  <div class="servicebtns pull-right">
                    <ul class="list-inline list-unstyled">
                      <li>
                         <?php if($this->session->userdata('customer_id')==""){ ?>
                            <a href="<?php echo base_url(); ?>login" class="mainbtn">
                           <strong>GET A QUOTE</strong>
                        </a>
                         <?php } else { ?>
                        <a href="#" data-toggle="modal" data-target="#hmodel-quote-fq" class="mainbtn">
                           <strong>GET A QUOTE</strong>
                        </a>
                        <?php } ?>
                      </li>

                      <li>
                        <?php if($this->session->userdata('customer_id')==""){ ?>
                           <a href="<?php echo base_url(); ?>login" class="mainbtn2">
                           <strong>BOOK SERVICE</strong>
                        </a>
                         <?php } else { ?>
                        <a href="#" data-toggle="modal" data-target="#hmodel-quote-fs" class="mainbtn2">
                           <strong>BOOK SERVICE</strong>
                        </a>
                           <?php } ?>
                      </li>

                    </ul>
                  </div>
              </div>



            </div>
          </div>
        </div>
        <!-- //Header center -->
        <!-- Header Bottom -->
        <div class="header-bottom">
          <div class="container">
            <div class="row">
              <div class="sidebar-menu col-md-3 col-sm-6 col-xs-2">
                <div class="responsive so-megamenu ">
                  <div class="so-vertical-menu no-gutter compact-hidden">
                    <nav class="navbar-default">
                      <div class="container-megamenu vertical open">
                        <div id="menuHeading">
                          <div class="megamenuToogle-wrapper">
                            <div class="megamenuToogle-pattern">
                              <div class="container">
                                <div>
                                  <span></span>
                                  <span></span>
                                  <span></span>
                                </div>
                                All Categories							
                                <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="navbar-header">
                          <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-bars">
                          </button>
 	
                        </div>
                        <div class="vertical-wrapper">
                          <span id="remove-verticalmenu" class="fa fa-times"></span>
                          <div class="megamenu-pattern">
                            <div class="container">
                              <ul class="megamenu">
							  <?php foreach($categories as $category){ ?>
                                <li class="item-vertical style1 with-sub-menu hover">
                                  <p class="close-menu"></p>
                                  <a href="#" class="clearfix">
                                  <img src="<?php echo base_url(); ?><?php echo $category['category_image']; ?>" alt="icon">
                                  <span><?php echo $category['category_name']; ?></span>
                                  <b class="caret"></b>
                                  </a>
								 
                                  <div class="sub-menu" data-subwidth="100" >
                                    <div class="content" >
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <div class="row">
										   <?php foreach($subcategories as $subcategory){
											   if($subcategory['category_id']==$category['category_id']){
											    ?>
                                            <div class="col-md-4 static-menu">
                                              <div class="menu">
                                                <ul>
                                                  
                                                  <li>
                                                    <a href="#" class="main-menu"><?php echo $subcategory['subcategory_name']; ?></a>
                                                    <ul>
													 <?php 
													 foreach($subsubcategories as $subsubcategory){
													 if($subcategory['subcategory_id']==$subsubcategory['subcategory_id']){
														  ?>
                                                      <li><a href="<?php echo base_url(); ?>products/<?php echo str_replace(" ","-",$subsubcategory['name']); ?>" ><?php echo $subsubcategory['name']; ?></a></li>
                                                     <?php } } ?>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <?php } } ?>
                                            
                                          </div>
                                        </div>
                                         <?php 
										 $img=FCPATH."uploads/categories/banner_".$category['category_id'].".jpg";								
							           	 if(file_exists($img)){
							        	 ?>
                                        <div class="col-sm-12">
                                          <img src="<?php echo base_url(); ?>uploads/categories/banner_<?php echo $category['category_id']; ?>.jpg" alt="<?php echo $category['category_name']; ?>" class="img-responsive">
                                        </div>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
								 
                                </li>
								<?php } ?>
                                
                                
                                
                                <li class="item-vertical text-center" style="background: #361C4B;">
                                  <p class="close-menu"></p>
                                  <a href="<?php echo base_url() ?>view-more" class="clearfix" style="color: #fff">
                                  <i class="fa fa-plus-circle"></i><span>VIEW MORE</span>
                                  </a>
                                </li>                                
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- Main menu -->
              <div class="col-md-9 col-sm-6 col-xs-10">
                 <div class="pull-right">
                   <ul class="megamenu " data-transition="slide" data-animationtime="250">
                      <li class="hidden-md">
                        <p class="close-menu"></p>
                      </li>
                      <!-- <li class="">
                        <p class="close-menu"></p>
                        <a href="post-add.php" class="clearfix" style="background-color: #9B59B6">
                        <strong>Post Ad Now</strong>
                        </a>
                      </li> -->
                      <!-- <li class="">
                        <p class="close-menu"></p>
                        <a href="partner-with-us.php" class="clearfix" style="background-color: #CD5C5C">
                        <strong>Partner With Us</strong>
                        </a>
                      </li> -->
                      <!-- <li class="hidden-md">
                        <p class="close-menu"></p>
                        <a href="#" class="clearfix" style="background-color: #9B59B6" data-toggle="modal" data-target="#hmodel-quote">
                        <strong>Get A Quote</strong>
                        </a>
                      </li> -->
                   </ul>
                 </div>
              </div>
              <!-- //end Main menu -->
            </div>
          </div>
        </div>
        <!-- Navbar switcher -->
        <!-- //end Navbar switcher -->
      </header>
      