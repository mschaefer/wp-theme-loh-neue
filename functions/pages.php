<?php

function loh_bucket($page_title) {
  $page = get_page_by_title( $page_title );
  $custom_fields = get_post_custom($page->ID);

  $bucket_type = array_key_exists('bucket-type', $custom_fields) ? $custom_fields['bucket-type'][0] : '';

  echo apply_filters('the_content', $page->post_content) ."<span class=\"bucket-type\">$bucket_type</span>";
}

function loh_page_children($id) {
  $query = new WP_Query();
  $pages = $query->query(array('post_type' => 'page'));
  return get_page_children($id, $pages);
}
?>
