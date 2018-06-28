<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php $settings_admin = $this->session->userdata('settings_admin'); echo $settings_admin['meta_title']; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">

    <!--REQUIRED PLUGIN CSS-->
    <link href="<?php echo base_url(); ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>plugins/spinkit/spinkit.css" rel="stylesheet">

    <!--REQUIRED THEME CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themes/main_theme.css" rel="stylesheet" />
  <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="theme-indigo light layout-fixed">
<div class="wrapper">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="sk-wave">
                <div class="sk-rect sk-rect1 bg-cyan"></div>
                <div class="sk-rect sk-rect2 bg-cyan"></div>
                <div class="sk-rect sk-rect3 bg-cyan"></div>
                <div class="sk-rect sk-rect4 bg-cyan"></div>
                <div class="sk-rect sk-rect5 bg-cyan"></div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a href="<?php echo base_url(); ?>admin/dashboard" class="navbar-brand">
                    <div class="brand-logo">
                        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Admin Logo" class="img-responsive">
                    </div>
                    <div class="brand-logo-collapsed">
                        <img src="assets/images/logo-single.png" alt="Admin Logo" class="img-responsive">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
                <!-- START Left navbar-->
                
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="nav navbar-nav navbar-right">
                   
					  <li class="visible-lg">
                        <a href="logout" >
                          
						   <em class="material-icons">exit_to_app</em>
                        </a>
                    </li>
					
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="badge badge-success" style="margin:0;">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li class="media">
                                        <a href="#">
                                            <div class="media-left">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">done</i>
                                                </div>
                                            </div>
                                            <div class="media-body menu-note">
                                                <p class="pull-right">Just Now</p>
                                                <h4> Privacy settings changed</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#">
                                            <div class="media-left">
                                                <div class="icon-circle bg-indigo">
                                                    <i class="material-icons">add</i>
                                                </div>
                                            </div>
                                            <div class="media-body menu-note">
                                                <p class="pull-right">2 mins</p>
                                                <h4> Mike has added you as friend</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#">
                                            <div class="media-left">
                                                <div class="icon-circle bg-blue">
                                                    <i class="material-icons">alarm</i>
                                                </div>
                                            </div>
                                            <div class="media-body menu-note">
                                                <p class="pull-right">20 mins</p>
                                                <h4> New item added</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#">
                                            <div class="media-left">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">thumb_up</i>
                                                </div>
                                            </div>
                                            <div class="media-body menu-note">
                                                <p class="pull-right">2 hrs</p>
                                                <h4> Ketty like your photo</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#">
                                            <div class="media-left">
                                                <div class="icon-circle bg-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                            </div>
                                            <div class="media-body menu-note">
                                                <p class="pull-right">3 days</p>
                                                <h4> Server 10 is not working Properly</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#">
                                            <div class="media-left">
                                                <div class="icon-circle bg-grey">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                            </div>
                                            <div class="media-body menu-note">
                                                <p class="pull-right">5 days</p>
                                                <h4> Restart your system</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Task -->
                    
                    <!-- #END# Task -->
                    <li>
                        <a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                            <em class="material-icons">more_vert</em>
                        </a>
                    </li>
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