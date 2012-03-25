<?php 
$body_class = 'single-post';

get_header(); 
?>

<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'single' ); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
