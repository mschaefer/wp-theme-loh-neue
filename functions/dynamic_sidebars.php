<?php
  if ( function_exists('register_sidebar') ) {
    register_sidebar( array('name' => 'Footer Credits') );
  }

  function loh_footer_content() {
    if( !dynamic_sidebar() ) {
      echo '';
    }
  }
?>
