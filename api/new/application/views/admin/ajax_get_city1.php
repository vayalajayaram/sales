 <select name="city" id="city" class="form-control" required >
  <option value="">Select City</option>
 <?php foreach($cities as $city){ ?>
  <option value="<?php echo $city->c_id; ?>" <?php if($selected_city==$city->c_id){ echo "selected"; } ?>  ><?php echo $city->city_name; ?></option>
 <?php } ?> 
 </select> 