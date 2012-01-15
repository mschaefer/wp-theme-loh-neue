<?php
/**
 * Template Name: Home Page
 * Description: the home page template
 *
 */
?>
<?php 
  $body_class = 'home';

  get_header(); 
?>
<section id="home-primary">
  <div id="home-slider">
    <p>Slider</p>
  </div>
	  <?php while ( have_posts() ) : the_post(); ?>
		  <?php the_content(); ?>
	  <?php endwhile; // end of the loop. ?>
</section>

<aside id="home-feed">
  Sidebar
</aside>

<aside id="home-buckets">
  <section class="home-bucket">
    <?php loh_bucket('Home Page Bucket 1'); ?>
  </section>

  <section class="home-bucket">
    <?php loh_bucket('Home Page Bucket 2'); ?>
  </section>

  <section class="home-bucket">
    <?php loh_bucket('Home Page Bucket 3'); ?>
  </section>
</aside>
<?php get_footer(); ?>
