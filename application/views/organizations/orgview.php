
<div class="container bootstrap snippet" >

    <div class="row">
  		<div class="col-sm-3"><!--left col-->  

      <div class="text-center">
        <?php if(isset($editorg) && ($editorg->num_rows()>0)) { foreach ($editorg->result() as $org) { ?>
         <h6 style="color:red;"><?php echo $this->session->flashdata('success_msg'); ?></h6>
         <?php echo $this->session->flashdata('error_msg'); ?>
         <img src="<?php echo base_url();?>uploads/images/<?php echo $org->logo; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
       
        <form class="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/organizations/add/<?php echo $org->org_id;?>" method="post" >
    
    <div class="panel">
        <div class="panel-body">
            <div class="form-group">
                <input class="form-control" type="file" name="picture" />
            </div>
             <div class="form-group">
                <input type="submit" class="btn btn-warning" name="userSubmit" value="Updated">
            </div>
 
        </div>
    </div>
</form>
    <?php } } ?>
      </div></hr><br>

          
        </div><!--/col-3-->
           <div class="btn-group" id="cpwd">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="cpwd2">
    Change Password <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
     <?php if(isset($editorg) && ($editorg->num_rows()>0)) { foreach ($editorg->result() as $org) { ?>
         <h6 style="color:red;"><?php echo $this->session->flashdata('msg'); ?></h6>
         <?php echo $this->session->flashdata('error_msg'); ?>
        <form  action="<?php echo base_url(); ?>index.php/organizations/changepassword/<?php echo $org->org_id;?>" method="post" >
    
      <!-- <div class="form-group">
        <label for="email"><h4>Old Password:</h4></label>
         <input type="text" class="form-control"  value="<?php echo $org->password; ?>" placeholder="old password" readonly>
       </div>-->
       <div class="form-group">
         <input type="password" class="form-control" name="password" placeholder="Change Password" >
       </div>
       <div class="form-group">
         <input type="submit" class="btn btn-info" name="userSubmit" value="Change">
       </div>
    </form>
       <?php } } ?>
  </ul>
</div>
              <md-menu-content width="4">
              <md-menu-item>
                  <h4 flex>Update Organization</h4>
                 
              </md-menu-item>
              </md-menu-content>

    	<div class="col-sm-9">
<span><?php echo $this->session->flashdata('msg'); ?></span>
         <?php if(isset($editorg) && ($editorg->num_rows()>0)) { foreach ($editorg->result() as $org) { ?>
                  <form class="form" action="<?php echo base_url(); ?>index.php/organizations/updateorg/<?php echo $org->org_id;?>" method="post" >
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Organization Name</h4></label>
                              <input type="text" class="form-control" name="org_name"  placeholder="org name" title="enter your org name." value="<?php echo $org->org_name; ?>" required>
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="<?php echo $org->email; ?>" required>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone No</h4></label>
                              <input type="text" class="form-control" name="mobile"  placeholder="enter mobile" title="enter your phone number." value="<?php echo $org->mobile; ?>" required>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>TelePhone No</h4></label>
                              <input type="text" class="form-control" name="telephone" placeholder="enter tele phone number" title="enter your telephone number " value="<?php echo $org->telephone; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Website</h4></label>
                              <input type="text" class="form-control" name="website_url" placeholder="website" title="enter your website." value="<?php echo $org->website_url; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="text" class="form-control" id="ownPlaces" name="location" placeholder="somewhere" title="enter a location" value="<?php echo $org->location; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Choosen Plan</h4></label>
                             <select class="form-control" name="plan_id" required>
                          <option value="<?php echo $org->plan_id; ?>"><?php echo $org->plan_type; ?> - <?php echo $org->plan_price; ?></option>
                      <?php   foreach ($p->result() as $row)  { ?>                
         <option value="<?php echo $row->plan_id;?>"><?php echo $row->plan_type; ?> - <?php echo $row->plan_price; ?></option>
                         <?php } ?>
                             </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Status</h4></label>
                             <!-- <input type="text" class="form-control" name="status"  placeholder="status" title="enter your status." value="<?php echo $org->status; ?>" required>-->
      <select class="form-control" name="status">
      <option value="<?php echo $org->status; ?>"><?php echo $org->status; ?></option>
      <option value="active">Active</option>
      <option value="inactive">In Active</option>
    </select>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
                <?php } } ?>
        </div><!--/col-9-->
    </div><!--/row-->
  </div>

    <script>
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
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
<script>
$('.dropdown-menu>form').click(function(e){
  e.stopPropagation();
});
</script>
<style>
.dropdown-menu form {
  padding:10px;
}
#cpwd{float: right;
    margin-left: 5px;}
  #cpwd2{
    padding: 17px 15px;
}
</style>
                                                      