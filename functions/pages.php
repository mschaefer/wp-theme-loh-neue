<?php

function loh_blog_feed() {
  $recent_posts = wp_get_recent_posts( array('numberposts' => 4, 'post_status' => 'publish') );
  $items = '';
  foreach( $recent_posts as $r ){
    $items .= '<li><a href="' . get_permalink($r["ID"]) . '" title="'.$r["post_title"].'" >' . $r["post_title"].'</a>';
    $items .= ' &mdash; <time datetime="' . $r['post_date'] . '">' . date('l, F j, Y', strtotime($r["post_date"])) . '</time>';
    $items .= '<p>'.$r["post_excerpt"].'</p></li>';
  }

  return "<ul>$items</ul>";
}

function loh_bucket($page_title) {
  $page = get_page_by_title( $page_title );

  if( $page ) {
    $custom_fields = get_post_custom($page->ID);

    $bucket_type = array_key_exists('bucket-type', $custom_fields) ? $custom_fields['bucket-type'][0] : '';

    echo apply_filters('the_content', $page->post_content) ."<span class=\"bucket-type\">$bucket_type</span>";
  }
}

function loh_page_content($page_title) {
  $page = get_page_by_title( $page_title );

  if( $page ) {
    echo apply_filters('the_content', $page->post_content);
  }
}

function loh_page_children($parent_id) {
  $query = new WP_Query();
  $all_pages = $query->query(array('post_type' => 'page','posts_per_page'=>-1));

  return get_page_children($parent_id, $all_pages);
}

function root_page_id_for($page_id) {
  $ancestor_array = get_ancestors( $page_id, 'page' );

  if( count($ancestor_array) > 0 ) {
    return $ancestor_array[0];
  }
  else {
    return $page_id;
  }
}
?>
