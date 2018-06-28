 <?php if($action=="sub"){ ?>
 <select name="subcategory" id="subcategory" class="form-control" required >
  <option value="">Select Sub Category</option>
 <?php foreach($list1 as $stt){ ?>
  <option value="<?php echo $stt->subcategory_id; ?>" <?php if($stt->subcategory_id==$subcategory){ echo "selected"; } ?>><?php echo $stt->subcategory_name; ?></option>
 <?php } ?> 
 </select> 
 <?php } ?> 
 
  <?php if($action=="subsub"){ ?>
 <select name="subsubcategory" id="subsubcategory" class="form-control" required >
  <option value="">Select Sub Category</option>
 <?php foreach($list2 as $stt){ ?>
  <option value="<?php echo $stt['subsubcategory_id']; ?>" <?php if($stt['subsubcategory_id']==$subsubcategory){ echo "selected"; } ?> ><?php echo $stt['name']; ?></option>
 <?php } ?> 
 </select> 
 <?php } ?> 