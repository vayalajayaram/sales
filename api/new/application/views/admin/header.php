<header class="topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
			<?php 
			$settings_admin = $this->session->userdata('settings_admin');
			
			 ?>
                <a href="<?php echo base_url(); ?>admin/dashboard" class="navbar-brand">
                    <div class="brand-logo">
                        <img src="<?php echo base_url().$settings_admin['logo']; ?>" alt="Admin Logo" class="img-responsive">
                    </div>
                    
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
                <!-- START Left navbar-->
                
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="nav navbar-nav navbar-right" style="position:relative;right:20px;">
				
				<li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">account_circle</i>
                            
                        </a>
                        <ul class="dropdown-menu" style="width:150px; height:85px;">
                          
                            <li class="body">
                                <ul class="menu">
                                    <li >
                                        <a href="<?php echo base_url(); ?>admin/dashboard/changepassword">Change Password</a>
                                    </li>
                                      <li >
                                        <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                   
					  
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Task -->
                    
                    <!-- #END# Task -->
                   <!-- <li>
                        <a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                            <em class="material-icons">more_vert</em>
                        </a>
                    </li>-->
                </ul>
                <!-- #END# Right Navbar-->
            </div>
            <!-- #END# Nav wrapper-->
            <!-- START Search form-->
            <form role="search" action="#" class="navbar-form">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Type and search ..." class="form-control">
                    <em data-search-dismiss="" class="form-control-feedback material-icons">close</em>
                </div>
                <button type="submit" class="hidden btn btn-info">Submit</button>
            </form>
            <!-- #END# Search form-->
        </nav>
        <!-- END Top Navbar-->
    </header>