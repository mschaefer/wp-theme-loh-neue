<?php
/**
 * Template Name: Projects
 * Description: the projects landing page template
 *
 */
?>
<?php 
  $body_class = 'projects';
  $page_css = array(get_stylesheet_directory_uri() . '/css/pages/projects.css');
  $page_js = array(get_stylesheet_directory_uri() . '/js/nivo-slider/jquery.nivo.slider.pack.js',
                   get_stylesheet_directory_uri() . '/js/components/slider.js',
                   get_stylesheet_directory_uri() . '/js/pages/projects.js' );
  get_header();
?>

<aside id="secondary-menu" class="sub-menu">
  <?php page_menu(get_the_ID()) ?>
</aside>

<?php while ( have_posts() ) : the_post(); ?>
<section id="page-primary">

  <header id="post-<?php the_ID(); ?>" class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </header>

  <div id="slider-container" class="slider-wrapper theme-loh">
    <div class="ribbon"></div>
    <?php loh_projects_slider(); ?>
    <div id="slider" class="nivoSlider"></div>
  </div>

  <?php remove_filter ('the_content',  'wpautop'); ?>
  <?php the_content(); ?>

</section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
