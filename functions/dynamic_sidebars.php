<?php
  if ( function_exists('register_sidebar') ) {
    register_sidebar( array('name' => 'Footer Credits') );
    register_sidebar( array('name' => 'Posts Sidebar') );
  }

  function loh_footer_content() {
    if( !dynamic_sidebar('Footer Credits') ) {
      echo '';
    }
  }

  function loh_posts_sidebar() {
    if( !dynamic_sidebar('Posts Sidebar') ) {
      echo '';
    } 
  }
?>
