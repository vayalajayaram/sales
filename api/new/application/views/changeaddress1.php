 <select name="carea" id="area1" class="form-control" required  >
  <option value="">Select Area</option>
 <?php foreach($areas as $area){ ?>
  <option value="<?php echo $area['a_id']; ?>" <?php if($area['a_id']==$_POST['aid']){ echo "selected"; } ?>  ><?php echo $area['area_name']; ?></option>
 <?php } ?> 
 </select> 