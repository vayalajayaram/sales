    
<aside class="aside">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
            <?php if( $this->session->userdata('user_type')==1){ ?>
                <!-- START sidebar nav-->
                <ul class="nav menu">
                    <!-- Iterates over all sidebar items-->
                  
                    <li>
                        <a href="<?php echo base_url(); ?>admin/dashboard" title="Dashboard" >
                            <em class="material-icons">dashboard</em>
                            <span>Dashboard</span>
                        </a>
                        
                    </li>
					
					
					
					
					
					<li>
                        <a href="#values" title="Values" data-toggle="collapse" class="menu-toggle">
                            <em class="material-icons">Values</em>
                            <span>Values</span>
                        </a>
                        <ul id="values" class="nav sidebar-subnav collapse">
                           <li><a href="<?php echo base_url(); ?>admin/categories" title="Categories"><span>Categories</span>
                        </a></li>
					
					<li><a href="<?php echo base_url(); ?>admin/subcategories" title="Sub Categories" ><span>Sub Categories</span></a> </li>
					<li><a href="<?php echo base_url(); ?>admin/subsubcategories" title="Sub Sub Categories" ><span>Sub Sub Categories</span></a> </li>
                           <li><a href="<?php echo base_url(); ?>admin/pages" title="pages"><span>pages</span></a></li>
						
						   <li><a href="<?php echo base_url(); ?>admin/city" title="City"><span>City</span></a></li>
						   <li><a href="<?php echo base_url(); ?>admin/area" title="Area"><span>Area</span></a></li>					  
						   <li><a href="<?php echo base_url(); ?>admin/faqs" title="Faqs"><span>Faqs</span></a></li>
						
						   <li><a href="<?php echo base_url(); ?>admin/banners" title="Banners"><span>Banners</span></a></li>
                        
                            <li><a href="<?php echo base_url(); ?>admin/collections" title="Collections"><span>Collections</span></a></li>
                            
                             <li><a href="<?php echo base_url(); ?>admin/snotifications" title="Slide Down Notification"><span>Slide Down Notification</span></a></li>
                           
						   
						   
					   </ul>
                    </li>

					<li>
                        <a href="<?php echo base_url(); ?>admin/customers" title="Customers" >
                            <em class="material-icons">face</em>
                            <span>Customers</span>
                        </a>
                        
                    </li>                    
					
				<!--	<li>
                        <a href="<?php echo base_url(); ?>admin/orders" title="Orders" >
                            <em class="material-icons">shopping_cart</em>
                            <span>Orders</span>
                        </a>
                        
                    </li> 	-->
									
					<li>
                        <a href="<?php echo base_url(); ?>admin/sellers" title="Sellers" >
                             <img src="<?php echo base_url(); ?>/assets/images/vendor.png" > &nbsp; &nbsp;
                            <span>Sellers</span>
                        </a>
                        
                    </li> 			
					 					
										
										
					<li>
                        <a href="<?php echo base_url(); ?>admin/subscriptions" title="Subscriptions" >
                             <em class="material-icons">Subscriptions</em>
                            <span>Subscriptions</span>
                        </a>
                        
                    </li>	
					
					<li>
                        <a href="<?php echo base_url(); ?>admin/subscribers" title="Subscribers" >
                             <em class="material-icons">Subscribers</em>
                            <span>Subscribers</span>
                        </a>
                        
                    </li>	
					
                    
					
					
						<li>
                        <a href="<?php echo base_url(); ?>admin/sliders" title="Sliders" >
                            <em class="material-icons">Sliders</em>
                            <span>Sliders</span>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url(); ?>admin/leads" title="Leads" >
                            <em class="material-icons">Leads</em>
                            <span>Leads</span>
                        </a>
                        
                    </li>
                    
                      <li>
                        <a href="<?php echo base_url(); ?>admin/campaigns" title="Campaigns" >
                            <em class="material-icons">Campaigns</em>
                            <span>Campaigns</span>
                        </a>
                        
                    </li>

                       <li>
                        <a href="<?php echo base_url(); ?>admin/footer" title="Footer Edit" >
                            <em class="material-icons">Footer</em>
                            <span>Footer Edit</span>
                        </a>
                        
                    </li>
                    
                       <li>
                        <a href="<?php echo base_url(); ?>admin/admin_users" title="Admin Users" >
                            <em class="material-icons">Admin</em>
                            <span>Admin Users</span>
                        </a>
                        
                    </li>
					
					<li>
                        <a href="<?php echo base_url(); ?>admin/settings" title="Settings" >
                            <em class="material-icons">settings_applications</em>
                            <span>Website Settings</span>
                        </a>
                        
                    </li>
					
				<!--	<li>
                        <a href="<?php echo base_url(); ?>admin/reports" title="Reports" >
                            <em class="material-icons">computer</em>
                            <span>Payment Reports</span>
                        </a>
                        
                    </li>-->
					
					
                                
                                        
                </ul>
                <?php } else { ?>
                  <?php $chv=explode(",",$this->session->userdata('allow_to_use')); ?>
                  
                <ul class="nav menu">
                    <!-- Iterates over all sidebar items-->
                  
                    <li>
                        <a href="<?php echo base_url(); ?>admin/dashboard" title="Dashboard" >
                            <em class="material-icons">dashboard</em>
                            <span>Dashboard</span>
                        </a>
                        
                    </li>
					
					
					
					
					
					<li>
                        <a href="#values" title="Values" data-toggle="collapse" class="menu-toggle">
                            <em class="material-icons">Values</em>
                            <span>Values</span>
                        </a>
                        <ul id="values" class="nav sidebar-subnav collapse">
                        <?php  if(in_array('city',$chv,true)){ ?>
                           <li><a href="<?php echo base_url(); ?>admin/categories" title="Categories"><span>Categories</span>
                        </a></li>
					
					<li><a href="<?php echo base_url(); ?>admin/subcategories" title="Sub Categories" ><span>Sub Categories</span></a> </li>
					<li><a href="<?php echo base_url(); ?>admin/subsubcategories" title="Sub Sub Categories" ><span>Sub Sub Categories</span></a> </li>
                    <?php } ?>
                           <li><a href="<?php echo base_url(); ?>admin/pages" title="pages"><span>pages</span></a></li>
						  <?php  if(in_array('city',$chv,true)){ ?>
						   <li><a href="<?php echo base_url(); ?>admin/city" title="City"><span>City</span></a></li>
						   <li><a href="<?php echo base_url(); ?>admin/area" title="Area"><span>Area</span></a></li>	
                           <?php } ?>
                             <?php  if(in_array('faqs',$chv,true)){ ?>				  
						   <li><a href="<?php echo base_url(); ?>admin/faqs" title="Faqs"><span>Faqs</span></a></li>
                              <?php } ?>
						  <?php  if(in_array('banners',$chv,true)){ ?>
						   <li><a href="<?php echo base_url(); ?>admin/banners" title="Banners"><span>Banners</span></a></li>
                              <?php } ?>
                          <?php  if(in_array('collections',$chv,true)){ ?>
                            <li><a href="<?php echo base_url(); ?>admin/collections" title="Collections"><span>Collections</span></a></li>
                               <?php } ?>
                           
						   
						   
					   </ul>
                    </li>
                    
 <?php  if(in_array('customers',$chv,true)){ ?>
					<li>
                        <a href="<?php echo base_url(); ?>admin/customers" title="Customers" >
                            <em class="material-icons">face</em>
                            <span>Customers</span>
                        </a>
                        
                    </li>                    
					   <?php } ?>
				<!--	<li>
                        <a href="<?php echo base_url(); ?>admin/orders" title="Orders" >
                            <em class="material-icons">shopping_cart</em>
                            <span>Orders</span>
                        </a>
                        
                    </li> 	-->
					 <?php  if(in_array('sellers',$chv,true)){ ?>				
					<li>
                        <a href="<?php echo base_url(); ?>admin/sellers" title="Sellers" >
                             <img src="<?php echo base_url(); ?>/assets/images/vendor.png" > &nbsp; &nbsp;
                            <span>Sellers</span>
                        </a>
                        
                    </li> 			
					 					
						   <?php } ?>				
					 <?php  if(in_array('subscriptions',$chv,true)){ ?>					
					<li>
                        <a href="<?php echo base_url(); ?>admin/subscriptions" title="Subscriptions" >
                             <em class="material-icons">Subscriptions</em>
                            <span>Subscriptions</span>
                        </a>
                        
                    </li>	
                       <?php } ?>
					 <?php  if(in_array('subscribers',$chv,true)){ ?>
					<li>
                        <a href="<?php echo base_url(); ?>admin/subscribers" title="Subscribers" >
                             <em class="material-icons">Subscribers</em>
                            <span>Subscribers</span>
                        </a>
                        
                    </li>	
					   <?php } ?>
                    
					 <?php  if(in_array('sliders',$chv,true)){ ?>
					
						<li>
                        <a href="<?php echo base_url(); ?>admin/sliders" title="Sliders" >
                            <em class="material-icons">Sliders</em>
                            <span>Sliders</span>
                        </a>
                        
                    </li>
                       <?php } ?>
                     <?php  if(in_array('leads',$chv,true)){ ?>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/leads" title="Leads" >
                            <em class="material-icons">Leads</em>
                            <span>Leads</span>
                        </a>
                        
                    </li>
                       <?php } ?>
                     <?php  if(in_array('campaigns',$chv,true)){ ?>
                      <li>
                        <a href="<?php echo base_url(); ?>admin/campaigns" title="Campaigns" >
                            <em class="material-icons">Campaigns</em>
                            <span>Campaigns</span>
                        </a>
                        
                    </li>
                       <?php } ?>
                        
                    </li>
					 <?php  if(in_array('settings',$chv,true)){ ?>
					<li>
                        <a href="<?php echo base_url(); ?>admin/settings" title="Settings" >
                            <em class="material-icons">settings_applications</em>
                            <span>Website Settings</span>
                        </a>
                        
                    </li>
                    <?php } ?>
					
				<!--	<li>
                        <a href="<?php echo base_url(); ?>admin/reports" title="Reports" >
                            <em class="material-icons">computer</em>
                            <span>Payment Reports</span>
                        </a>
                        
                    </li>-->
					
					
                                
                                        
                </ul>
                <?php } ?>
                <!-- END sidebar nav-->
            </nav>
        </div>
        <!-- #END# Sidebar (left)-->
</aside>
	
<aside class="offsidebar hide">
        <!-- START Off Sidebar (right)-->
        <nav>
            <div role="tabpanel">
                <!-- Nav tabs-->
                
                <!-- Tab panes-->
                <div class="tab-content">
                    <div id="app-skins" role="tabpanel" class="tab-pane fade in active">
                        <ul class="skin_selector" id="sidebar_clr_selector">
                           
                            <li > <a href="<?php echo base_url(); ?>admin/profile" > Profile</a>   </li>
                            <li ><a href="<?php echo base_url(); ?>admin/logout" > Logout</a>  </li>
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </nav>
        <!-- #END# Off Sidebar (right)-->
    </aside>