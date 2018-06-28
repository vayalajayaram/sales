
<div style="height:100px; overflow:scroll;">
 <?php foreach($users as $user){ ?>
  <input type="checkbox" name="customers[]" value="<?php echo $user['c_id']; ?>" class="test" onclick="updateCounter();" /> <?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?> <br>
 <?php } ?> 
</div>