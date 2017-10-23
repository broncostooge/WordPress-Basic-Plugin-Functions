<?php
/*
Plugin name: WordPress Extra Post Info
Plugin URI: http://example.com/wordpress-extra-post-info
Description: A simple plugin to add extra info to posts.
Author: Jacob Nicholson
Author URI: http://InMotionHosting.com
Version: 0.5
*/
if( !function_exists("extra_post_info") )
{

  function extra_post_info($content)
  {
    $extra_info = "EXTRA INFO";
    return $content . $extra_info;
  }

add_filter('the_content', 'extra_post_info');

}
?>
