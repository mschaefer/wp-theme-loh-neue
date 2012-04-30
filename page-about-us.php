<?php
/**
 * Template Name: About Us
 * Description: the About Us page template
 *
 */
?>
<?php 
  $body_class = 'about-us';
  $page_css = array(get_stylesheet_directory_uri() . '/css/pages/about-us.css');

  get_header();
?>

<aside id="secondary-menu" class="sub-menu">
  <?php page_menu(get_the_ID()) ?>
</aside>

<section id="page-primary">

  <?php while ( have_posts() ) : the_post(); ?>
	  <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>
  
</section> <!-- #page-primary -->

<?php get_footer(); ?>
