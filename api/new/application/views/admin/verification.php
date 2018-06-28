<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Log In | Material Design Admin - Eagle</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <img src="<?php echo base_url(); ?>assets/images/logo-circle.png" alt="" class="img-responsive img-circle align-center">
                            <p>Material Design Admin Template</p>
                        </div>
                    </div>
                </div>
                <form action="<?php echo base_url()."admin/verify/check"; ?>" id="log_in" method="POST">
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required autofocus autocomplete="off">
                        </div>
                    </div>
                    
                    <div class="row">
                      
					<?php if($this->session->flashdata('error')){ ?>
						<div style="text-align:center;color:#F00;"><?php echo $this->session->flashdata('error'); ?></div>
					<?php } ?><br>
                    </div>

                    <button class="btn btn-block btn-primary waves-effect" type="submit">VERIFY</button>

                </form>
            </div>
        </div>
    </div>

    <!-- CORE PLUGIN JS -->
    <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>plugins/node-waves/waves.js"></script>
    <script src="<?php echo base_url(); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!--THIS PAGE LEVEL JS-->
    <script src="<?php echo base_url(); ?>plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/examples/login.js"></script>

    <!-- LAYOUT JS -->
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

</body>

</html>