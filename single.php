<?php
$body_class = 'single-post';

$page_js = array(get_stylesheet_directory_uri() . '/js/pages/sidebar.js');

get_header();
?>

<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'single' ); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
