<?php

function loh_home_slider() {
  for ($i = 1; $i <= 11; $i++)
    loh_slider_content("Home Page: Slider $i");
}

function loh_slider_content($page_title) {
  $page = get_page_by_title( $page_title );

  if( $page ) {
    echo "<div class=\"slider-content\">" . apply_filters('the_content', $page->post_content) . "</div>\n";
  }
}
?>
