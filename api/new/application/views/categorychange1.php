<?php if($action=="subcat"){ ?>
<select name="subcategory" class="form-control" id="subcategory_g" required >
  <option value="">Select Sub Category</option>
 <?php foreach($scatlist as $slist){ ?>
  <option value="<?php echo $slist['subcategory_id']; ?>"  ><?php echo $slist['subcategory_name']; ?></option>
 <?php } ?> 
 </select> 
<?php } ?>

<?php if($action=="subsubcat"){ ?>
<select name="subsubcategory" class="form-control" id="subsubcategory_g" required >
  <option value="">Select Sub Sub Category</option>
 <?php foreach($sscatlist as $sslist){ ?>
  <option value="<?php echo $sslist['subsubcategory_id']; ?>" ><?php echo $sslist['name']; ?></option>
 <?php } ?> 
 </select> 
<?php } ?> 

<?php if($action=="prod"){ ?>
<select name="product" class="selectpicker form-control" data-live-search="true" id="product_g" required >
  <option value="">Select Product</option>
 <?php foreach($ssprodlist as $sslist){ ?>
  <option value="<?php echo $sslist['product_name']; ?>" label="<?php echo $sslist['product_id']; ?>" gnr="<?php echo $sslist['seller_id']; ?>" ><?php echo $sslist['product_name']; ?></option>
 <?php } ?> 
 </select> 
<?php } ?> 

<?php if($action=="service"){ ?>
<select name="service" class="selectpicker form-control" data-live-search="true" id="serivce_s" required >
  <option value="">Select Service</option>
 <?php foreach($ssprodlist as $sslist){ ?>
  <option value="<?php echo $sslist['service_name']; ?>" label="<?php echo $sslist['service_id']; ?>" gnr="<?php echo $sslist['seller_id']; ?>" ><?php echo $sslist['service_name']; ?></option>
 <?php } ?> 
 </select> 
<?php } ?> 