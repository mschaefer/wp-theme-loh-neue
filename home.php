<?php 
  $body_class = 'home';

  get_header(); 
?>
<section id="home-primary">
  <div id="home-slider">
    <p>Slider</p>
  </div>
  <p id="mission">
    Mission statement here. <a href="#">Lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Nulla vitae ante risus. Duis vitae feugiat dolor. Etiam dignissim adipiscing libero, non lobortis mauris rutrum id. Nulla fringilla, <a href="#">nunc at feugiat faucibus</a>, velit enim porta libero, sit amet luctus quam leo et nulla.
  </p>
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
