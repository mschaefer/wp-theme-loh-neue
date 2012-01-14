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
  register_nav_menu('footer_nav_menu', __('LOH Footer Menu'));
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

function loh_footer_menu() {
  $defaults = array(
    'theme_location'  => 'footer_nav_menu',
    'container'       => false,
    'echo'            => false,
    'items_wrap'      => '%3$s',
    'walker'          => new Loh_Footer_Menu_Walker() );

  $menu = wp_nav_menu($defaults);

  /* we don't have a reliable way of closing the section at the end via the walker, so add it here */
  if( strlen($menu) > 0 && preg_match("/<\/section>\Z/", $menu) == 0 ) {
    $menu .= '</section>';
  }

 echo $menu;
}

/*
 * Loh_Footer_Menu_Walker: custom walker to build the footer menu.
 *
 */
class Loh_Footer_Menu_Walker extends Walker_Nav_Menu {
  var $element_count = 0;
  
	function start_lvl(&$out, $depth) {
		$indent = str_repeat("  ", $depth);

    if($depth == 0) {
  		$out .= "\n$indent<ul>";
    }
	}

	function end_lvl(&$out, $depth) {
		$indent = str_repeat("  ", $depth);

    $out .= "\n$indent</ul>";
	}

	function start_el(&$out, $item, $depth, $args) {
		$indent = ( $depth ) ? str_repeat( "  ", $depth ) : '';

    $attr  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	  $attr .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	  $attr .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	  $attr .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	  $item_output = '<a'. $attr .'>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</a>';

    if( $depth == 0) {
      if( $this->element_count > 0 ) {
        $out .= "</section>";
      }

      $out .= "\n<section class=\"link-group\"><header><h1>$item_output</h1></header>";
    }
    else {
  		$out .= "\n$indent <li>$item_output</li>";
    }
	}

  function end_el(&$out, $item, $depth, $args) {
    $this->element_count++;
  }
} // class Loh_Footer_Menu_Walker
?>
