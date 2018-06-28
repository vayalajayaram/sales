    
<aside class="aside">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
                <!-- START sidebar nav-->
                <ul class="nav menu">
                    <!-- Iterates over all sidebar items-->
                    <li class="nav-heading ">
                        <span>MAIN NAVIGATION</span>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/dashboard" title="Dashboard" data-toggle="collapse" class="menu-toggle">
                            <em class="material-icons">dashboard</em>
                            <span>Dashboard</span>
                        </a>
                        
                    </li>
                    
					<li>
                        <a href="#Categories" title="Categories" data-toggle="collapse" class="menu-toggle">
                            <em class="material-icons">Categories</em>
                            <span>Categories</span>
                        </a>
                        <ul id="Categories" class="nav sidebar-subnav collapse">
                           
                            <li>
                                <a href="<?php echo base_url(); ?>admin/categories" title="Categories">
                                    <span>Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/subcategories" title="Sub Categories">
                                    <span>Sub Categories</span>
                                </a>
                            </li>
							<li>
                                <a href="<?php echo base_url(); ?>admin/products" title="Sub Categories">
                                    <span>Products</span>
                                </a>
                            </li>                            
                                                      
                         
                        </ul>
                    </li>
					
					<li>
                        <a href="#Users" title="Users" data-toggle="collapse" class="menu-toggle">
                            <em class="material-icons">face</em>
                            <span>Users</span>
                        </a>
                        <ul id="Users" class="nav sidebar-subnav collapse">
                           
                            <li>
                                <a href="<?php echo base_url(); ?>admin/users" title="Users">
                                    <span>Users</span>
                                </a>
                            </li>
                                                     
                         
                        </ul>
                    </li>
					
					<li>
                        <a href="#Vendors" title="Users" data-toggle="collapse" class="menu-toggle">
                           <img src="<?php echo base_url(); ?>/assets/images/vendor.png" > &nbsp; &nbsp;
                            <span>Vendors</span>
                        </a>
                        <ul id="Vendors" class="nav sidebar-subnav collapse">
                           
                            <li>
                                <a href="<?php echo base_url(); ?>admin/vendors" title="Vendors">
                                    <span>Vendors</span>
                                </a>
                            </li>
                                                     
                         
                        </ul>
                    </li>
                                
                                        
                </ul>
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
                           
                            <li > <a href="profile" > Profile</a>   </li>
                            <li ><a href="logout" > Logout</a>  </li>
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </nav>
        <!-- #END# Off Sidebar (right)-->
    </aside>