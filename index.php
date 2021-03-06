<?php

$page_js = array(get_stylesheet_directory_uri() . '/js/pages/sidebar.js');

$page_css = array(get_stylesheet_directory_uri() . '/css/pages/sidebar.css');

get_header();

get_sidebar();

if ( have_posts() ) : ?>
  <h1 class="category-title">Our Blog</h1>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>

<?php else : ?>

  <article id="post-0" class="post no-results not-found">
    <header class="entry-header">
     <h1 class="entry-title">Sorry, no items found</h1>
    </header>

    <div class="entry-content">
      <p>No results were found for the requested archive. <?php if(!array_key_exists('s', $_GET)) { ?> Perhaps searching will help find a related post. <?php } ?></p>
    </div><!-- .entry-content -->
  </article><!-- #post-0 -->

<?php endif;

get_footer(); ?>
