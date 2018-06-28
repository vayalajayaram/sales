<?php if($action=="subcat"){ ?>
<select name="subcategory" class="form-control" id="subcategory" required >
  <option value="">Select Sub Category</option>
 <?php foreach($scatlist as $slist){ ?>
  <option value="<?php echo $slist['subcategory_id']; ?>" <?php if($slist['subcategory_id']==$subcategory){ echo "selected"; } ?>  ><?php echo $slist['subcategory_name']; ?></option>
 <?php } ?> 
 </select> 
<?php } ?>

<?php if($action=="subsubcat"){ ?>
<select name="subsubcategory" class="form-control" id="subsubcategory" required >
  <option value="">Select Sub Sub Category</option>
 <?php foreach($sscatlist as $sslist){ ?>
  <option value="<?php echo $sslist['subsubcategory_id']; ?>" <?php if($sslist['subsubcategory_id']==$subsubcategory){ echo "selected"; } ?>  ><?php echo $sslist['name']; ?></option>
 <?php } ?> 
 </select> 
<?php } ?> 