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
    'container'       => 'section', 
    'container_class' => 'link-group', 
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
    'depth'           => 2, 
    'walker'          => new Loh_Footer_Menu_Walker() );

  wp_nav_menu($defaults);
}

/*
      <section class="link-group">
        <header><h1><a href="#">Link Category</a></h1></header>
        <ul>
          <li><a href="#">Link Item</a></li>
          <li><a href="#">Link Item</a></li>
          <li><a href="#">Link Item</a></li>
          <li><a href="#">Link Item</a></li>
        </ul>
      </section>
*/

/*
  order: 

  start element 0
  end element 0
  start level 1
    start element 1
    end element 1
  end level 1
  start element 0
  end element 0
*/
class Loh_Footer_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);

    if($depth == 0) {
      $output .= "\n$indent<section class=\"link-group\">\n";
    } 
    else {
  		$output .= "\n$indent<ul>\n";
    }
	}

	function end_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);

    if($depth == 0) {
      $output .= "$indent</section>\n";
    } 
    else {
  		$output .= "$indent</ul>\n";
    }
	}

	function start_el(&$output, $item, $depth, $args) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    if( $depth == 0) {
      $output .= "\n<header><h1>";
    }
    else {
  		$output .= $indent . '<li>';
    }

	  $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	  $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	  $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	  $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	  $item_output = $args->before;
	  $item_output .= '<a'. $attributes .'>';
	  $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	  $item_output .= '</a>';
	  $item_output .= $args->after;

	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function end_el(&$output, $item, $depth) {
    if($depth == 0) {
      $output .= "</h1></header>\n";
    }
    else {
  		$output .= "</li>\n";
    }
	}
}
?>
