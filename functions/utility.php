<?php

function loh_custom_field($page, $field) {
  if( !$page ) { return ''; }

  $custom_fields = get_post_custom($page->ID);

  return array_key_exists($field, $custom_fields) ? $custom_fields[$field][0] : '';
}

?>
