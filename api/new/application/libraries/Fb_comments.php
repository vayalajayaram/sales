<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Facebook Comments
 *
 * Facebook Comments is a CodeIgniter library which makes it easy to put Facebook Comments on every page
 *
 * @package		Facebook Comments
 * @version		1.0
 * @author 		W. Kristianto <krist@momonimo.com>
 * @copyright 	Copyright (c) 2011, W. Kristianto
 * @link		https://github.com/Kristories/Facebook-Comments
 */
 
class Fb_comments {
 
	public function create ($page, $num_post, $width) {
		echo '	<div id="fb-root"></div>
				<script src="http://connect.facebook.net/en_US/all.js#xfbml=1">
				</script>
				<fb:comments href="'.base_url().''.$page.'" num_posts="'.$num_post.'" width="'.$width.'">
				</fb:comments>';
	
	}

}


?>