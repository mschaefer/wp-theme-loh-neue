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

  <article id="events">
    <h2>Current News and Events</h2>
    <ol>
      <li>
        <time datetime="2012-02-12"><span class="month">Feb</span> 12</time>
        <a href="#">New York: New Kitchen Fundraiser</a>
        <span class="location">New York</span>
      </li>
      <li>
        <time datetime="2012-02-12"><span class="month">Nov</span> 30</time>
        <a href="#">Birthday</a>
        <span class="location">Anywhere</span>
      </li>
    </ol>
  </article>

</section>

<div id="secondary-footer">
  <article id="sponsorship-bucket-1" class="bucket">
    <?php loh_bucket('Home Page: Sponsorship Bucket 1'); ?>
  </article>

  <aside id="home-feed">
    Blog Feed
  </aside>
</div> <!-- home-footer --> 

<?php get_footer(); ?>
