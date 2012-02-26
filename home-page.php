<?php
/**
 * Template Name: Home Page
 * Description: the home page template
 *
 */
?>
<?php 
  $body_class = 'home';
  $page_js = array(get_stylesheet_directory_uri() . '/js/nivo-slider/jquery.nivo.slider.pack.js', 
                   get_stylesheet_directory_uri() . '/js/pages/home.js' );
  get_header(); 
?>
<section id="home-primary">
  <div id="home-slider" class="slider-wrapper theme-loh">
    <div class="ribbon"></div>
    <?php loh_home_slider(); ?>
    <div id="slider" class="nivoSlider"></div>
  </div>

  <section id="home-content">
  <?php while ( have_posts() ) : the_post(); ?>
	  <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
  </section>

</section>

<aside id="mission">
  <p><?php echo loh_custom_field(get_the_ID(), 'mission'); ?></p>
</aside>

<div id="secondary-footer">
  <article id="sponsorship-bucket-1" class="bucket">
    <?php loh_bucket('Home Page: Sponsorship Bucket 1'); ?>
  </article>

  <aside id="home-feed">
    <header>
      <h1>Blog Feed</h1>
    </header>
    <?php echo loh_blog_feed(); ?>
  </aside>
</div> <!-- home-footer --> 

<?php get_footer(); ?>
