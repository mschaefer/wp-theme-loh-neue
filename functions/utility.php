<?php

function loh_custom_field($page_or_id, $field) {
  $id = is_numeric($page_or_id) ? $page_or_id : $page_or_id->ID;

  if( !$id ) { return ''; }

  $custom_fields = get_post_custom($id);

  return array_key_exists($field, $custom_fields) ? $custom_fields[$field][0] : '';
}

?>
