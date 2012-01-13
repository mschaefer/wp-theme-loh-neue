<?php

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

?>
