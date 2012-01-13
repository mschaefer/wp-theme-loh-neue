<?php

/* -------------------      Pages       ----------------------  */

function loh_page_children_menu($id) {
  $children = loh_page_children($id);
  $out = '<ul>';

  foreach($children as $child) {
    $name = $child->post_title;
    $url = get_permalink($child->ID);
    $out .= ("<li><a href=\"$url\" title=\"$name page\">$name</a></li>");
  }

  return $out . '</ul>';
}

function loh_page_children($id) {
  $query = new WP_Query();
  $pages = $query->query(array('post_type' => 'page'));
  return get_page_children($id, $pages);
}

/*  -------------------       Menus       ---------------------  */

add_action('init', 'loh_register_custom_menus');
 
function loh_register_custom_menus() {
  register_nav_menu('primary_nav_menu', __('LOH Primary Navigation Menu'));
  register_nav_menu('social_nav_menu', __('LOH Social Media Menu'));
}

function loh_menu_items( $menu_name ) {
  $items = array();
  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $items = (array) wp_get_nav_menu_items($menu->term_id);
  }

  return $items;
}

function loh_social_menu($ul_class = '') {
  $ul = "<ul class=\"$ul_class\">\n";

  $menu_items = loh_menu_items('social_nav_menu');

  $class_map = array( "/facebook.com/" => 'facebook', 
                      "/youtube.com/" => 'youtube',
                      "/flickr.com/" => 'flickr',
                      "/twitter.com/" => 'twitter' );

  foreach($menu_items as $item) {  
    $a_class = '';
    foreach($class_map as $reg => $class) {
      if( preg_match($reg, $item->url) > 0 ) {
        $a_class = $class;
        break;
      }
    }

    $ul .= "<li><a href=\"$item->url\" class=\"social-$a_class\">$item->title</a></li>\n";
  }
  
  echo $ul . "</ul>";
}

function loh_primary_menu($ul_class = '') {
  $ul = "<ul class=\"$ul_class\">\n";

  $menu_items = loh_menu_items('primary_nav_menu');

  foreach($menu_items as $item) {
    $ul .= "<li><a href=\"$item->url\">$item->title</a></li>\n";
  }
  
  echo $ul . "</ul>";
}
?>
