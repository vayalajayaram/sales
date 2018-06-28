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
                <div class="row">
                    <div class="col-md-6">
                       
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/dashboard">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>admin/leads">Leads </a></li>
                                <li class="active"> Edit Leads</li>
                            </ol>
                       
                    </div>

                     
                </div>
                <div class="row">
				
				
                    <div class="col-md-12" style="background:#FFF;">
                        
                    
                            
                            <div class="body" >
                              
								<div class="col-md-4 col-sm-4 col-xs-12">
								
                                 <div> <strong>Details:</strong></div>
                                  <div> #Lead <?php echo $lead['en_id']; ?></div>
                               <div>  <?php echo $lead['datetime']; ?></div>
                               <div>  <?php echo $place['area_name']; ?> , <?php echo $place['city_name']; ?></div>
									</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
								  <strong>Customer Details:</strong>
                                    <div>  <?php echo $place['first_name']; ?> <?php echo $place['last_name']; ?></div>
                               <div>  Phone : <?php echo $place['phone']; ?></div>
                               <div>  Email : <?php echo $place['email']; ?> </div>
									</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								  <strong>Product Details:</strong>
                                  <div><?php if($lead['product_name']!=""){ echo $lead['product_name']; } else { echo  $lead['service_name'];} ?> </div>
									</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                     <strong>Message:</strong>
                                     <div><?php echo $lead['message']; ?></div>
                                    </div>
														
                               
                            </div>
                        
                    </div>
                    
                      <div class="col-md-12" style="padding:10px;">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                        <select name="city" id="city" class="form-control" >
                        <option value="">Select City</option>
                        <?php foreach($cities as $city){ ?>
                        <option value="<?php echo $city['c_id']; ?>" <?php if($place['c_id']==$city['c_id']){ echo "selected"; } ?>  ><?php echo $city['city_name']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                        <select name="area" class="form-control" id="area" >
                       <option value="<?php echo $city['a_id']; ?>" selected ><?php echo $place['area_name']; ?></option>
                        </select>
                        </div>
                      
                        </div>
                      </div>
                        <div class="col-md-12" style="padding:10px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">
            <b>All Sellers:</b><br/>
           <select multiple="multiple" id='lstBox1' class="form-control" style="height:200px;">
            <?php foreach($sellers as $seller){ ?>
              <option value="<?php echo $seller['s_id']; ?>"><?php echo $seller['first_name']; ?> <?php echo $seller['last_name']; ?></option>
             <?php } ?>
        </select>
        </div>
             <div class="col-md-1 col-sm-1 col-xs-12">
 <br/>
 <br/>
<br/>
        <input type='button' id='btnRight' value ='  >  '/>
        <br/><input type='button' id='btnLeft' value ='  <  '/>
</div>  
           <div class="col-md-3 col-sm-3 col-xs-12">
           <form method="post" id="myForm">
        <b>Selected Sellers: <?php $exp=explode(",",$lead['assign']); echo count($exp); ?> </b><br/>
        <select multiple="multiple" id='lstBox2' class="form-control" style="height:200px;" name="s_sellers[]">
        <?php foreach($tsellers as $seller){
			$exp=explode(",",$lead['assign']);
			for($i=0;$i<count($exp);$i++){ 
			if($seller['s_id']==$exp[$i]){ 
			 ?>
              <option value="<?php echo $seller['s_id']; ?>"><?php echo $seller['first_name']; ?> <?php echo $seller['last_name']; ?></option>
            
             <?php }} } ?>
        </select><br>
          <input type="hidden" name="update" value="edit" >
       <button class="btn bg-cyan waves-effect" type="submit">Update</button>
       </form>
 </div>        
 
 </div>
                    
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


<script src="<?php echo base_url(); ?>plugins/file-input/js/jasny-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>plugins/autosize/autosize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/forms/basic-form-elements.js"></script>
<!-- LAYOUT JS -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    $('#btnRight').click(function(e) {
        var selectedOpts = $('#lstBox1 option:selected');
		
        if (selectedOpts.length == 0) {
            alert("Nothing to move.");
            e.preventDefault();
        }

        $('#lstBox2').append($(selectedOpts).clone());
        $(selectedOpts).remove();
        e.preventDefault();
    });

    $('#btnLeft').click(function(e) {
        var selectedOpts = $('#lstBox2 option:selected');
        if (selectedOpts.length == 0) {
            alert("Nothing to move.");
            e.preventDefault();
        }

        $('#lstBox1').append($(selectedOpts).clone());
        $(selectedOpts).remove();
        e.preventDefault();
    });
	
	$('#myForm').submit(function() {
     $('#lstBox2').find('option').each(function() {
     $(this).attr('selected', 'selected');
     });
   });
});

 
</script>

<script type="text/javascript">

$("select[name='city']").change(function(){
      var cid = $(this).val();  
	   var area = '<?php echo $place['a_id'] ?>';
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_city",
          method: 'POST',
           data: {city:cid,area:area},
          success: function(data) {			
          $("#area").html(data);
          }
      });
  });
  
  $(document).ready(function(){
	  var cid = $("#city").val();
	
	  var area = '<?php echo $place['a_id'] ?>';  
      $.ajax({
          url: "<?php echo base_url();?>/admin/sellers/ajax_city",
          method: 'POST',
          data: {city:cid,area:area},
          success: function(data) {	
		  
          $("#area").html(data);
          }
      });
	  });
	  
	  $("select[name='area']").change(function(){
       var aid = $(this).val();  
	   var cid = $("#city").val();	
	  
      $.ajax({
          url: "<?php echo base_url();?>/admin/leads/ajax_seller",
          method: 'POST',
          data: {city:cid,area:aid},
          success: function(data) {			
          $("#lstBox1").html(data);
          }
      });
  });
</script>

</body>

</html>