 <select name="subcategory" id="subcategory" class="form-control" required >
  <option value="">Select Sub Category</option>
 <?php foreach($subcategories as $subcat){ ?>
  <option value="<?php echo $subcat['subcategory_id']; ?>" <?php if($subcat['subcategory_id']==$subcatid){ echo "selected";} ?>  ><?php echo $subcat['subcategory_name']; ?></option>
 <?php } ?> 
 </select> 