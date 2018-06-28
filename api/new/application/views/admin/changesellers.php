 <select multiple="multiple" id='lstBox1' class="form-control" style="height:200px;">
            <?php foreach($sellers as $seller){ ?>
              <option value="<?php echo $seller['s_id']; ?>"><?php echo $seller['first_name']; ?> <?php echo $seller['last_name']; ?></option>
             <?php } ?>
        </select>