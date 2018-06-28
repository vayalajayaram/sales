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
    
<?php include_once("header.php"); ?>
    <!-- sidebar-->
    
<?php include_once("leftside.php"); ?>

	
	
    
    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="page-header">
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="active">Pages</li>
                    </ol>
                </div>
                <div class="row profile">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="bg-cyan padding-30 b-t-radius">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/mail/seven.jpg" class="border-trans">
                                </div>
                            </div>
                            <div class="body text-center">
                                    <h4 class="card-title m-t-10">Amelia Wilson</h4>
                                    <h6 class="card-subtitle">Web/UI Developer, Edinburgh, Scotland</h6>
                            </div>
                            <div class="card-footer-bordered padding-20">
                                <div class="row">
                                    <div class="col-xs-6 border-right">
                                        <div class="align-center">
                                            <span class="font-20">4.5K</span>
                                            <div>Followers</div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="align-center">
                                            <span class="font-20">451</span>
                                            <div>Following</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr class="m-t-0"> </div>
                            <div class="contact hidden-xs">
                                <h2>Contact</h2>

                                <ul>
                                    <li><i class="fa fa-phone"></i> 0123 456  7890</li>
                                    <li><i class="fa fa-envelope"></i> amelia@gmail.com</li>
                                    <li><i class="fa fa-facebook"></i> demo.xyz</li>
                                    <li><i class="fa fa-twitter"></i> @demo.xyz</li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <address class="m-b-0">
                                            500 W. 27th Street,<br>
                                            4th Floor, New York
                                        </address>
                                    </li>
                                </ul>
                            </div>
                            <div class="connection hidden-xs">
                                <h2>Connections</h2>
                                <div class="connection-pad">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/four.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/five.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/six.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/seven.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/eight.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/nine.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/ten.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/five.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="">
                                                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/mail/eight.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="profile_body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-inline nav-justified" role="tablist">
                                    <li role="presentation" class="active"><a href="#about" data-toggle="tab">ABOUT</a></li>
                                    <li role="presentation"><a href="#timeline" data-toggle="tab">TIMELINE</a></li>
                                    <li role="presentation"><a href="#photos" data-toggle="tab">PHOTOS</a></li>
                                    <li role="presentation"><a href="#setting" data-toggle="tab">SETTINGS</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="about">
                                        <div class="card-inner">
                                            <h2 class="card-inner-header"><i class="fa fa-address-book m-r-5"></i> Basic Information</h2>
                                            <div class="demo">
                                                <div class="p-l-25">
                                                    <dl class="dl-horizontal">
                                                        <dt>Full Name</dt>
                                                        <dd>Amelia Wilson</dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Gender</dt>
                                                        <dd>Female</dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Mobile Phone</dt>
                                                        <dd>0123 456 789</dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Email Address</dt>
                                                        <dd>amelia@gmail.com</dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Location</dt>
                                                        <dd>500 W. 27th Street, 4th Floor, New York</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h2 class="card-inner-header"><i class="fa fa-user m-r-5"></i> Social Info</h2>
                                            <div class="demo">
                                                <div class="p-l-25">
                                                    <dl class="dl-horizontal">
                                                        <dt>Facebook</dt>
                                                        <dd>demo.xyz</dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Twitter</dt>
                                                        <dd>@demo</dd>
                                                    </dl>
                                                    <dl class="dl-horizontal">
                                                        <dt>Skype</dt>
                                                        <dd>demo.xyz</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h2 class="card-inner-header"><i class="fa fa-info-circle m-r-5"></i> Sort Info</h2>
                                            <div class="demo">
                                                <p class="p-l-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="timeline">
                                        <div class="timeline_social">
                                            <div class="social-comment-side">
                                                <div class="social-avatar">
                                                    <a href="">
                                                        <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/seven.jpg">
                                                    </a>
                                                </div>
                                                <div class="social_comment_box">
                                                    <div class="social-avatar">
                                                        <a href="#">
                                                            Amelia Wilson
                                                        </a>
                                                        <small class="text-muted">Today 4:30 pm - 10.08.2017</small>
                                                    </div>
                                                    <div class="social-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        </p>
                                                        <img src="<?php echo base_url(); ?>assets/images/image-gallery/30.jpg" class="img-responsive">
                                                    </div>
                                                    <div class="social_comment_icon">
                                                        <a href="#"><i class="material-icons">thumb_up</i> 1.5k</a>
                                                        <a href="#"><i class="material-icons">comment</i> 3 Comments</a>
                                                        <a href="#"><i class="material-icons">share</i> Share</a>
                                                    </div>
                                                    <div class="social-footer">
                                                        <div class="social-comment">
                                                            <a href="" class="pull-left">
                                                                <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/three.jpg">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    Kelly Vargas
                                                                </a>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                    Aenean eu leo quam. </p>
                                                                <a href="#" class="small"><i class="material-icons md-10">thumb_up</i> 20 Like this!</a>
                                                                <small class="text-muted pull-right">5m ago</small>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment">
                                                            <a href="" class="pull-left">
                                                                <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/3.jpg">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    William Stevens
                                                                </a>
                                                                <p>Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                                                                <a href="#" class="small"><i class="material-icons md-10">thumb_up</i> 11 Like this!</a>
                                                                <small class="text-muted pull-right">2m ago</small>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment">
                                                            <a href="" class="pull-left">
                                                                <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/eight.jpg">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    Kelly Vargas
                                                                </a>
                                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                                                                <a href="#" class="small"><i class="material-icons md-10">thumb_up</i> 2 Like this!</a>
                                                                <small class="text-muted pull-right">Just Now</small>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment">
                                                            <div class="media-body">
                                                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment clearfix">
                                                            <div class="pull-left">
                                                                <ul class="list-inline social-post">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">near_me</em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">photo</em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">videocam</em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="pull-right">
                                                                <button type="button" class="btn btn-success btn-sm">Post</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-comment-side">
                                                <div class="social-avatar">
                                                    <a href="">
                                                        <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="social_comment_box">
                                                    <div class="social-avatar">
                                                        <a href="#">
                                                            Ketty perry
                                                        </a>
                                                        <small class="text-muted">Today 3:00 pm - 10.08.2017</small>
                                                    </div>
                                                    <div class="social-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu odio vitae augue elementum molestie sed quis turpis.
                                                        </p>
                                                    </div>
                                                    <div class="social_comment_icon">
                                                        <a href="#"><i class="material-icons">thumb_up</i> 1.5k</a>
                                                        <a href="#"><i class="material-icons">comment</i> 3 Comments</a>
                                                        <a href="#"><i class="material-icons">share</i> Share</a>
                                                    </div>
                                                    <div class="social-footer">
                                                        <div class="social-comment">
                                                            <a href="" class="pull-left">
                                                                <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/3.jpg">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    James Payne
                                                                </a>
                                                                <p>Quisque auctor auctor dui nec convallis.</p>
                                                                <a href="#" class="small"><i class="material-icons md-10">thumb_up</i> 13 Like this!</a>
                                                                <small class="text-muted pull-right">2h ago</small>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment">
                                                            <a href="" class="pull-left">
                                                                <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/eight.jpg">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    Kelly Vargas
                                                                </a>
                                                                <p>Maecenas sodales elementum dolor. Quisque auctor auctor dui nec convallis.</p>
                                                                <a href="#" class="small"><i class="material-icons md-10">thumb_up</i> 1 Like this!</a>
                                                                <small class="text-muted pull-right">1h ago</small>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment">
                                                            <div class="media-body">
                                                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="social-comment clearfix">
                                                            <div class="pull-left">
                                                                <ul class="list-inline social-post">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">near_me</em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">photo</em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">videocam</em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="pull-right">
                                                                <button type="button" class="btn btn-success btn-sm">Post</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-comment-side">
                                                <div class="social-avatar">
                                                    <a href="">
                                                        <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/one.jpg">
                                                    </a>
                                                </div>
                                                <div class="social_comment_box">
                                                    <div class="social-avatar">
                                                        <a href="#">
                                                            William Stevens
                                                        </a>
                                                        <small class="text-muted">Today 5:30 am - 10.08.2017</small>
                                                    </div>
                                                    <div class="social-body">
                                                        <p>
                                                            Donec dictum hendrerit odio eu eleifend. Mauris nec semper est
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="social-post-img">
                                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/image-gallery/1.jpg" alt="post1"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="social-post-img">
                                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/image-gallery/6.jpg" alt="post2"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="social_comment_icon">
                                                        <a href="#"><i class="material-icons">thumb_up</i> 1.5k</a>
                                                        <a href="#"><i class="material-icons">comment</i> 3 Comments</a>
                                                        <a href="#"><i class="material-icons">share</i> Share</a>
                                                    </div>
                                                    <div class="social-footer">


                                                        <div class="social-comment">
                                                            <a href="" class="pull-left">
                                                                <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/four.jpg">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    Nina Dobrev
                                                                </a>
                                                                <p>I think its a right choice.</p>
                                                                <a href="#" class="small"><i class="material-icons md-10">thumb_up</i> 11 Like this!</a>
                                                                <small class="text-muted pull-right">Just Now</small>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment">
                                                            <div class="media-body">
                                                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="social-comment clearfix">
                                                            <div class="pull-left">
                                                                <ul class="list-inline social-post">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">near_me</em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">photo</em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="material-icons md-18">videocam</em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="pull-right">
                                                                <button type="button" class="btn btn-success btn-sm">Post</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-comment-side">
                                                <div class="social-avatar">
                                                    <a href="">
                                                        <img alt="image" src="<?php echo base_url(); ?>assets/images/mail/one.jpg">
                                                    </a>
                                                </div>
                                                <div class="social_comment_box">
                                                    <div class="social-avatar">
                                                        <a href="#">
                                                            William Stevens
                                                        </a>
                                                        <small class="text-muted">Tomorrow 6:00 pm - 10.08.2017</small>
                                                    </div>
                                                    <div class="social-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="social-post-img">
                                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/image-gallery/1.jpg" alt="post1"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="social-post-img">
                                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/image-gallery/6.jpg" alt="post2"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="social_comment_icon">
                                                        <a href="#"><i class="material-icons">thumb_up</i> 1.5k</a>
                                                        <a href="#"><i class="material-icons">comment</i> 3 Comments</a>
                                                        <a href="#"><i class="material-icons">share</i> Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="photos">
                                        <div class="profile-photogallery">
                                            <ul class="photogallery-menu">
                                                <li class="active"><a href="#"><i class="material-icons">image</i> Photos</a></li>
                                                <li><a href="#"><i class="material-icons">movie</i> Videos</a></li>
                                                <li><a href="#"><i class="material-icons">photo_library</i> Albums</a></li>
                                            </ul>
                                        </div>
                                        <div class="gallery">
                                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-1.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-2.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-3.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-4.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-5.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-6.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-7.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-8.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/9.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-9.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/10.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-10.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/11.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-11.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20 ">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-12.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-13.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-14.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-15.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-16.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-17.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/18.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-18.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/19.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-19.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 m-b-20">
                                                    <a href="<?php echo base_url(); ?>assets/images/image-gallery/20.jpg" data-sub-html="Demo Description">
                                                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/image-gallery/thumb/thumb-20.jpg">
                                                        <div class="gallery-poster">
                                                            <img src="<?php echo base_url(); ?>assets/images/zoom.png">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="setting">
                                        <form>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" placeholder="demo@mail.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Mobile No</label>
                                                    <input type="text" class="form-control" placeholder="123 456 7890">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Message</label>
                                                    <textarea class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Update Profile</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER-->
    <footer>
        <span>&copy; 2017 - Eagle Template By <b class="col-blue">Bylancer</b></span>
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
<script src="<?php echo base_url(); ?>plugins/light-gallery/js/lightgallery-all.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/medias/image-gallery.js"></script>

<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>

</body>

</html>