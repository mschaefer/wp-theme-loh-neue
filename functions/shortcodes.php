<?php

add_shortcode("about-us-mission", "loh_shortcode_about_us_mission");
add_shortcode("about-us-meet-the-girls", "loh_shortcode_about_us_meet_the_girls");

function loh_shortcode_about_us_mission() {
  return '<div id="about-us-mission">' .
    '<header><h1>' . loh_custom_field(get_the_ID(), 'about-us-mission-title', 'Our Mission') . '</h1></header>' .
    loh_custom_field(get_the_ID(), 'about-us-mission-content') .
  '</div>';
}

function loh_shortcode_about_us_meet_the_girls() {
  return '<article id="about-us-meet-the-girls" class="bucket">' .
    '<header><h1><a href="' . loh_custom_field(get_the_ID(), 'about-us-meet-the-girls-url') . '" title="Meet the Girls of LOH">Meet the Girls</a></h1></header>' .
    loh_get_bucket('About Us: Meet the Girls Bucket 1') .
  '</article>';
}
