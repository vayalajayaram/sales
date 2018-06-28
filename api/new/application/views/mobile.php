<div id="mobile-menu">
	<div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="images/logo/footer.png"></a> </div>
      <ul>
	  <?php foreach($categories as $category){ ?>
                      <li>
                <a href="<?php echo base_url()."category/".str_replace(" ","-",$category['category_name']); ?>"><?php echo $category['category_name']; ?></a>
                      </li>
					  <?php } ?>
       
        <li><a href="<?php echo base_url(); ?>" class="home1">Home</a>
        <li><a href="about_us.html" class="home1">About Us</a>
        <li><a href="contact_us.html" class="home1">Contact Us</a>
        </li>
      </ul>
    </div>