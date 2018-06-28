<?php include_once(APPPATH . 'views/inc/header.php'); ?>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="ciuis-body-content" ng-controller="Leads_Controller">
<div class="container" style="margin-top:20px;">
<div class="row">
<div id="user" class="col-md-12" >
  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row">
        <div class="col col-xs-3 text-left">
            <a href="#list" class="btn btn-default" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i>table</a>
            <a href="#thumb" class="btn btn-default" aria-controls="thumb" role="tab" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i>card</a>
            <a href="<?php echo base_url('index.php/organizations/plans');?>" class="btn btn-danger"><i class="fa fa-send-o"></i>Add Plans</a>
        </div>
        <div class="col col-xs-5 text-center">
            <h1>Organization's List</h1>
        </div>
        <div class="col col-xs-2">    
           <!-- <span class="label label-danger">Filter:</span>
            <button id="ok"  class="btn btn-primary" data-class="btn btn-primary" onclick="filter('ok')"><i class="fa fa-user" aria-hidden="true"></i></button>
            <button id="ban" class="btn btn-warning" data-class="btn btn-warning" onclick="filter('ban')"><i class="fa fa-ban" aria-hidden="true"></i></button>
            <button id="new" class="btn btn-success" data-class="btn btn-success" onclick="filter('new')"><i class="fa fa-check-square" aria-hidden="true"></i></button> -->
        </div>
        <div class="col col-xs-2 text-right ">
		<button type="button" ng-click="Create()"  class="btn  btn-success "> ADD NEW<i class="fa fa-plus-square" ></i></button>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
							<th style="color:#1270F0;">Org Logo</th>
							<th style="color:#1270F0;">Org Name</th>
							<th style="color:#1270F0;">Email</th>
							<th style="color:#1270F0;">Phone</th>
							<th style="color:#1270F0;">Telephone</th>
							<th style="color:#1270F0;">Location</th>
							<th style="color:#1270F0;">Website URL</th>
							<th style="color:#1270F0;">Choosen Plan</th>
							<th style="color:#1270F0;">Status</th>
              <th style="color:#1270F0;">Created</th>
            <th style="color:#1270F0;"><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>
         				 <?php  
         foreach ($h->result() as $row)  
         {  
            ?>
          <tr class="ok">
             <td><a href><img src="<?php echo base_url(); ?>uploads/images/<?php echo $row->logo; ?>" style="height:70px;width: 100px;"/></td>
							<td><?php echo $row->org_name;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo $row->mobile;?></td>
							<td><?php echo $row->telephone;?></td>
							<td><?php echo $row->location;?></td>
							<td><?php echo $row->website_url;?></td>
							<td style="color:#3356A2  ;"><b><?php echo $row->plan_type;?></b></td>
							<td><?php echo $row->status;?></td>
              <td><?php echo date("d-m-Y", strtotime($row->created));?></td>
             <td align="center">
              <!-- <a href="<?php echo base_url(); ?>index.php/organizations/editorg/<?php echo $row->org_id; ?>" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>-->
                <a href="<?php echo base_url(); ?>index.php/organizations/editorg/<?php echo $row->org_id; ?>" class="btn btn-success" title="view"   ><i class="fa fa-eye"   ></i></a>
               <a href="<?php echo base_url(); ?>index.php/organizations/deleteorg/<?php echo $row->org_id; ?>" class="btn btn-danger"  title="delete" onclick="return confirm ('Do you want to Delete this organization?');"><i class="fa fa-trash" ></i></a>
             </td>
          </tr>
          				 <?php  }  
         ?> 
          </tbody>
        </table>
      </div><!-- END id="list" -->
        
      <div role="tabpanel" class="tab-pane " id="thumb">
        <div class="row">
        <div class="col-md-12">
            		 
        		 <?php  foreach ($h->result() as $row)  {  ?>
            
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
  			<div class="panel-heading">
    			<h3 class="panel-title"><?php echo $row->org_name;?></h3>
  			</div>
  			<div class="panel-body avatar-card">
   			 <img src="<?php echo base_url(); ?>uploads/images/<?php echo $row->logo; ?>" style="height:200px;width: 300px;">
 			</div>
            <div class="panel-footer" style="height: 0px;">
               <a href="<?php echo base_url(); ?>index.php/organizations/editorg/<?php echo $row->org_id; ?>" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"></i></a>
               <a href="<?php echo base_url(); ?>index.php/organizations/deleteorg/<?php echo $row->org_id; ?>" class="btn btn-danger"  title="delete" onclick="return confirm ('Do you want to Delete this organization?');"><i class="fa fa-trash" ></i></a>
            </div>
         </div>
		 </div>
         <?php  }  ?> 
         
       </div>
      </div>
      </div><!-- END id="thumb" -->
          <div class="panel-footer text-center">
   	
           <ul class="pagination">  <!-- Show pagination links -->
                    <?php foreach ($links as $link) {
                     echo "<li>". $link."</li>";
                    } ?>
                   </ul>
   </div>
     </div><!-- END tab-content --> 
    </div>
   

  </div><!--END panel-table-->
</div>
</div>
</div>
</div>
<md-sidenav class="md-sidenav-right md-whiteframe-4dp" md-component-id="Create">
	  <md-toolbar class="toolbar-white">
	  <div class="md-toolbar-tools">
		<!--<md-button ng-click="close()" class="md-icon-button" aria-label="Close">
			 <i class="ion-android-arrow-forward"></i>
		</md-button>-->
		<md-truncate><?php echo lang('org') ?></md-truncate>
	  </div>
	  </md-toolbar>
	<md-content layout-padding>
	<form action="<?php echo base_url('index.php/organizations/create');?>" method="POST">
	<div class="form-group">
    <label for="exampleInputEmail1">Organizations Name</label>
    <input type="text" class="form-control" name="org_name" placeholder="Enter Org Name" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter phone" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tele phone</label>
    <input type="text" class="form-control" name="telephone" placeholder="Enter Telephopne">
  </div>
   <!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Select Country</label>
    <select class="form-control" name="country" required>
    	<option>-- Select country --</option>
    				 <?php  
         foreach ($c->result() as $row)  
         {  
            ?>
      <option value="<?php echo $row->id;?>"><?php echo $row->shortname;?></option>
      <?php } ?>
    </select>
  </div>
  	<div class="form-group">
    <label for="exampleInputEmail1">State</label>
    <input type="text" class="form-control" name="state" id="ownPlaces" placeholder="Enter state">
  </div>
  	<div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" name="city" id="ownPlaces" placeholder="Enter city">
  </div>-->
    <div class="form-group">
    <label for="exampleInputEmail1">Location</label>
    <input type="text" class="form-control" name="location" id="ownPlaces" placeholder="Enter Location">
  </div>
  	<div class="form-group">
    <label for="exampleInputEmail1">Website URL</label>
    <input type="text" class="form-control" name="website_url"  placeholder="Enter website url">
  </div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Choose Plans</label>
    <select class="form-control" name="plan_id" required>
    	<option value="">-- Choosen plans --</option>
    			 <?php  
         foreach ($p->result() as $row)  
         {  
            ?>
      <option value="<?php echo $row->plan_id;?>"><?php echo $row->plan_type; ?> - <?php echo $row->plan_price; ?> Rs</option>
     <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control"  value="root" name="password"  readonly>
  </div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Select Status</label>
    <select class="form-control" name="status" required>
    	<option value="">-- Set Status --</option>
      <option value="active">Active</option>
      <option value="inactive">In Active</option>
    </select>
  </div>
  <br/>
  <button type="submit" class="btn btn-primary pull-right" ><?php echo lang('create');?></button>
</form>	
	 </md-content>
	</md-sidenav>
  
<style>
/*By DjelalEddine@gmail.com*/
#user .avatar {
    width:60px;
	}
#user .avatar > img{
	width:50px;
	height:50px;
	border-radius:10%;
	}
/*Card*/
#user .panel-thumb{
margin:5px auto;
text-align:center;	
	}
#user .panel-thumb .avatar-card {
text-align:center;
height:200px;
margin:auto;
overflow:hidden;
}	
#user .panel-thumb .avatar-card > img{
	max-width:200px;
	max-height:200px;
	}

/* table*/
#user .panel-table{
  animation-duration:3s;
}

#user .panel-table .panel-body .table{
  margin:0px;
}
#user .panel-table .panel-body {
  padding:0px;
}
#user .panel-table .panel-body .table-bordered > thead > tr > th{
  text-align:center;
}
#user .panel-table .panel-footer {
  height:60px;
  padding:0px;
}
</style>
 <style>
.pagination a {
    border: #337ab7 solid 1px;
    width: max-content;
    float: left;
    border-radius:10px; 
    padding: 6px;
}
.pagination strong{
 border: #337ab7 solid 6px;
    width: max-content;
    float: left;
    padding: 12px;
}
  </style> 
<script>
function filter($state){
var x   = document.getElementsByClassName($state);
var btn = document.getElementById($state);

if (btn.className == "btn"){
    btn.className = btn.dataset.class;
	for (i = 0; i < x.length; i++) {x[i].className = " animated fadeInLeft "+$state;}
	}
	else{ 
	for (i = 0; i < x.length; i++) {x[i].className = " animated fadeOutRight "+$state;}
	 btn.className = "btn";
	}

}
</script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCXFJ-lc7cHHcEklG2_oIhTnPKTWsLwHEU"></script>
<script>
google.maps.event.addDomListener(window, 'load', function () 
{
   var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));
   google.maps.event.addListener(places, 'place_changed', function () 
   {
	console.log(places.getPlace());
	var getaddress = places.getPlace();
	//alert(getaddress.address_components[0].long_name);
	//alert(getaddress.formatted_address);
	var whole_address           = getaddress.formatted_address;
	var split_whole_address     = whole_address.split(',');	
	//alert(split_whole_address);
	var whole_address_length    = split_whole_address.length;
	//alert(whole_address_length);
		
	if(whole_address_length == 2)
	{
           var ownCity    = split_whole_address[0]; //alert(ownCity+'ownCity');
    	   var ownState   = split_whole_address[0]; //alert(ownState+'ownState');
    	   var ownCountry = split_whole_address[1]; //alert(ownCountry+'ownCountry');
    		
    	   $('#ownCity').val(ownCity);
           $('#ownState').val(ownState);
    	   $('#ownCountry').val(ownCountry);
	}
	else
	{
	   var ownCity    = split_whole_address[0]; //alert(ownCity+'ownCity');
           var ownState   = split_whole_address[1]; //alert(ownState+'ownState');
    	   var ownCountry = split_whole_address[2]; //alert(ownCountry+'ownCountry');
    		
    	   $('#ownCity').val(ownCity);
    	   $('#ownState').val(ownState);
    	   $('#ownCountry').val(ownCountry);
	}
    });
});
</script>

