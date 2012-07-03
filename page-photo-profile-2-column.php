<?php
/**
 * Template Name: Photo Profile 2 Column
 * Description: list of photos and a brief description of each in 2 columns
 *
 */
?>
<?php
  $body_class = 'photo-profile-2-column';
  $page_css = array(get_stylesheet_directory_uri() . '/css/pages/photo-profile-2-column.css');
  get_header();
?>

<aside id="secondary-menu" class="sub-menu">
  <?php page_menu(get_the_ID()) ?>
</aside>

<section id="page-primary">

	<?php while ( have_posts() ) : the_post(); ?>
      <header id="post-<?php the_ID(); ?>" class="page-header">
	      <h1 class="page-title"><?php the_title(); ?></h1>
      </header>

		  <?php remove_filter ('the_content',  'wpautop'); ?>
      <?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>

</section> <!-- #page-primary -->

<?php get_footer(); ?>
