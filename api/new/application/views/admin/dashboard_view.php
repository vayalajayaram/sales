<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php $settings_admin = $this->session->userdata('settings_admin'); echo $settings_admin['meta_title']; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.png" type="image/x-icon">

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

    <!--THIS PAGE LEVEL CSS-->
    <link href="<?php echo base_url(); ?>plugins/morrisjs/morris.css" rel="stylesheet" />
    <!--Chat Css-->
    <link href="<?php echo base_url(); ?>plugins/wchat/assets/css/style-light.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/wchat/assets/css/mobile.css" rel="stylesheet" id="style">

    <!-- EMOJI ONE JS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/wchat/smiley/assets/sprites/emojione.sprites.css"/>
    <script src="<?php echo base_url(); ?>plugins/wchat/smiley/js/emojione.min.js"></script>

    <script type="text/javascript">
        // #################################################
        // # Optional

        // default is PNG but you may also use SVG
        emojione.imageType = 'png';
        emojione.sprites = false;

        // default is ignore ASCII smileys like :) but you can easily turn them on
        emojione.ascii = true;

        // if you want to host the images somewhere else
        // you can easily change the default paths
        emojione.imagePathPNG = '<?php echo base_url(); ?>plugins/wchat/smiley/assets/png/';
        emojione.imagePathSVG = '<?php echo base_url(); ?>plugins/wchat/smiley/assets/svg/';

        // #################################################
    </script>
    <!--#End# Chat Css-->

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

	
	<?php include_once("header.php"); ?>
    <!-- sidebar-->
    
<?php include_once("leftside.php"); ?>
    
    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="page-header">
                    <h2>DASHBOARD</h2>
                </div>
                <!--row-->
                <div class="row clearfix">
                    <div class="col-lg-3">
                        <div class="widget style2 bg-green">
                            <div class="col-xs-4 widget-icon">
                                <i class="material-icons">face</i>
                            </div>
                            <div class="col-xs-8 widget-body text-right">
                                <span> Customers </span>
                                <h2 class="num count-to" data-from="0" data-to="<?php echo $newusers; ?>" data-speed="1000" data-fresh-interval="20"><?php echo $newusers; ?></h2>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-3">
                        <div class="widget style2 bg-cyan">
                            <div class="col-xs-4 widget-icon">
                                <i class="material-icons">shopping_cart</i>
                            </div>
                            <div class="col-xs-8 widget-body text-right">
                                <span> orders </span>
                                <h2 class="num count-to" data-from="0" data-to="<?php echo $neworders; ?>" data-speed="1000" data-fresh-interval="20"><?php echo $neworders; ?></h2>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-3">
                        <div class="widget style2 bg-red hover-zoom-effect">
                            <div class="col-xs-4 widget-icon">
                                <i class="material-icons">shopping_cart</i>
                            </div>
                            <div class="col-xs-8 widget-body text-right">
                                <span> Products </span>
                                <h2 class="num count-to" data-from="0" data-to="<?php echo $newproducts; ?>" data-speed="1000" data-fresh-interval="20"><?php echo $newproducts; ?></h2>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3">
                        <div class="widget style2 bg-indigo">
                            <div class="col-xs-4 widget-icon">
                                <i class="material-icons">face</i>
                            </div>
                            <div class="col-xs-8 widget-body text-right">
                                <span> Sellers </span>
                                <h2 class="num count-to" data-from="0" data-to="<?php echo $newexcutives; ?>" data-speed="1000" data-fresh-interval="20"><?php echo $newexcutives; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row-->

                <!--row-->
                <div class="row" id="masonry">
				
				 <!-- Sales -->
                    
                    <!-- #END# Sales -->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 masonry-item">
                        <div class="card">
                            <div class="card-header">
                                <h2>Customers</h2>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th style="text-align:center">ID #</th>
                                        <th style="text-align:center">User</th>
                                       
                                        <th style="text-align:center">Phone</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($userlist as $list){ ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo $list['c_id']; ?></td>
                                        <td style="text-align:center"><?php echo $list['first_name']; ?> <?php echo $list['last_name']; ?></td>
                                       
                                        <td style="text-align:center"><?php echo $list['phone']; ?></td>
                                        <td style="text-align:center">
                                            <a href="<?php base_url(); ?>customers/view/<?php echo $list['c_id']; ?>"><button class="btn bg-cyan waves-effect" type="button">View Details</button></a>
                                        </td>
                                    </tr>
                                    
                                    <?php } ?>
                                    
                                    
                                    </tbody>
                                </table>
                                <nav>
                                    <ul class="pager pager-widget">
                                       
                                        <li class="next">
                                          <a href="<?php base_url(); ?>customers/" class="waves-effect">View More..</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
					
					
					
                    <!-- Area Chart Widget -->
                    
                    <!-- #END# Area Chart Widget -->

                    <!-- Sparkline Chart Widget -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 masonry-item">
                        <div class="card">
                            <div class="body">
                                <div>
                                    <h4 class="text-center m-b-20">Sales <i class="material-icons v-align-middle">arrow_drop_up</i></h4>
                                </div>
                                <div class="sparkline-demo align-center" data-type="bar" data-height="145px" data-bar-Width="10"
                                     data-bar-Spacing="15" data-bar-Color="rgba(0, 188, 212, 0.7)">
                                    4,1,6,4,1,2,1,8,9,8,5,4,3,5
                                </div>
                            </div>
                            <div class="body">
                                <ul class="list-inline text-center p-l-20">
                                   
                                    <li>
                                        <h5><i class="material-icons v-align-middle col-cyan font-15">lens</i> Sales</h5> </li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- #END# Sparkline Chart Widget -->

                    <!-- Donut Chart Widget -->
                    
                    <!-- #END# Donut Chart Widget -->

                    <!-- Sparkline Chart 2 Widget -->
                    
                    <!-- #END# Sparkline Chart 2 Widget -->

                    <!-- Mail Widget -->
                    
                    <!-- #END# Mail Widget -->

                   
                </div>
                <!--row-->


            </div>
        </div>
    </section>
    <!-- FOOTER-->
	<footer>
        <span><?php echo $settings_admin['copy_right']; ?> By <b class="col-blue">IGrand</b></span>
    </footer>
</div>
    <!-- CORE PLUGIN JS -->
    <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>plugins/modernizr/modernizr.custom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/screenfull/dist/screenfull.js"></script>
    <script src="<?php echo base_url(); ?>plugins/jQuery-Storage-API/jquery.storageapi.js"></script>
    <script src="<?php echo base_url(); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>plugins/node-waves/waves.js"></script>

    <!--THIS PAGE LEVEL JS-->
    <script src="<?php echo base_url(); ?>plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>plugins/masonry/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url(); ?>plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url(); ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/masonry/masonry.min.js"></script>

    <!--Chat js-->
    <script src="<?php echo base_url(); ?>plugins/wchat/assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>plugins/wchat/chatjs/lightbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>plugins/wchat/chatjs/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>plugins/wchat/chatjs/custom.js"></script>
    <!-- #End# Chat js-->

    <script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>

    <!-- LAYOUT JS -->
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/layout.js"></script>

</body>

</html>