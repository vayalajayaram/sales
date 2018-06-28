<section class="social-widgets visible-lg">

      <span itemscope itemtype="http://schema.org/Organization">
        <link itemprop="url" href="http://http://eganacsi.com/">
        <a itemprop="sameAs" href="<?php echo $settings['facebook']; ?>">FB</a>
        <a itemprop="sameAs" href="<?php echo $settings['twitter']; ?>">Twitter</a>
      </span>

      <ul class="items">
        <li class="item item-01 facebook">
          <a href="<?php echo base_url(); ?>home/facebook" class="tab-icon"><span class="fa fa-facebook"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>FACEBOOK</h5>
            </div>
            <div class="loading">
              <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
            </div>
          </div>
        </li>
        <li class="item item-02 twitter">
          <a href="<?php echo base_url(); ?>home/twitter" class="tab-icon"><span class="fa fa-twitter"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>TWITTER FEEDS</h5>
            </div>
            <div class="loading">
              <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
            </div>
          </div>
        </li>
        <li class="item item-03 youtube">
          <a href="php/youtubevideo.php?account_video=0MrPyYWNUDA" class="tab-icon"><span class="fa fa-youtube"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>YouTube</h5>
            </div>
            <div class="loading"> <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
          </div>
        </li>
      </ul>
    </section>