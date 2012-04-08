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

<section id="page-primary">
<!--  <?php while ( have_posts() ) : the_post(); ?>
	  <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>
-->
  <h1>Projects</h1>
  <div id="slider-container" class="slider-wrapper theme-loh">
    <div class="ribbon"></div>
    <?php loh_projects_slider(); ?>
    <div id="slider" class="nivoSlider"></div>
  </div>

  <div id="project-content">
    <div class="column column-full">
      <header><h1><span class="heading-category">Project</span> Classroom</h1></header>
      <p>
Eu raw denim tumblr, butcher do ethical velit biodiesel 3 wolf moon keytar dolor. Non eu sustainable wayfarers cillum raw denim, nostrud cray nulla. 
</p>
<p>Quis butcher aute ullamco, mumblecore iphone elit forage put a bird on it occupy lomo flexitarian umami veniam. Raw denim wayfarers proident magna, flexitarian swag duis kogi nostrud post-ironic vero irure freegan. 
      </p>
    </div>

    <div class="column column-left">
      <h2>Benefits</h2>
      <ul>
        <li>Put a bird on it pickled tumblr brooklyn swag terry richardson.</li>
        <li>on it occupy PBR messenger bag carles readymade wayfarers</li>
        <li>Artisan fingerstache pinterest, put a bird</li>
      </ul>
    </div>

    <div class="column column-right">
      <h2>Goals</h2>
      <ul>
        <li>Bespoke quinoa etsy, organic sartorial post-ironic wolf.</li>
        <li>cenester carles thundercats, tattooed pour-over hoodie artisan vinyl direct trade i</li>
        <li>Food truck chillwave iphone polaroid. Semiotics</li>
      </ul>
    </div>
  </div> <!-- #project-content -->

  <aside id="donation-box">
    <header><h1>Help Us Finish</h1></header>
    <div id="progress-bar"><div id="progress"></div></div>
    <div id="progress-scale">
      <ol>
        <li>25,000</li>
        <li>50,000</li>
        <li>75,000</li>
        <li>100,000</li>
      </ol>
    </div>
    <p>Raw denim wayfarers proident magna, flexitarian swag duis kogi nostrud post-ironic vero irure freegan. Ullamco incididunt aliquip,</p>
    <a class="donate-button" title="donate" href="#">Donate</a>
  </aside>
</section> <!-- #page-primary -->

<section id="secondary-footer">
  <article class="project">
    <header><h1>Ongoing Project</h1></header>
    <a href="#"><img src="http://loh.localhost/wp-content/themes/lohneue/css/pages/project.jpg" /></a>
    <h2><a href="#"><span class="heading-category">Project</span> Textbook</a></h2>
    <p>Raw denim wayfarers proident magna, a a a aflexitarian swag duis kogi nostrud post-ironic vero irure freegan. Ullamco incididunt aliquip.
    </p>
  </article>
  <article class="project">
    <header><h1>Completed Project</h1></header>
    <a href="#"><img src="http://loh.localhost/wp-content/themes/lohneue/css/pages/project-2.jpg"></a>
    <h2><a href="#"><span class="heading-category">Project</span> Textbook</a></h2>
    <p>Raw denim wayfarers proident magna, flexitarian swag duis kogi nostrud post-ironic vero irure freegan. Ullamco incididunt aliquip,</p>
  </article>
  <p id="more-projects"><a href="#" title="See more completd projects">More Projects</a></p>
</section>

<?php get_footer(); ?>
