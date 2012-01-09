<?php 
  $body_class = 'home';

  get_header(); 
?>
<section id="home-primary">
  <div id="home-slider">
    <p>Slider</p>
  </div>
  <p id="mission">
    Mission statement here. This sentence has a <a href="#">link in it</a>. 
  </p>
</section>

<aside id="home-feed">
  Sidebar
</aside>

<aside id="home-buckets">
  <section class="home-bucket">
    <header>
      <img class="bucket-profile" />
      <span class="bucket-desc">Bucket Description</span>
      <h1 class="bucket-name">Bucket Name</h1>
    </header>
    <p>Bucket content</p>
  </section>

  <section class="home-bucket">
    <header>
      <img class="bucket-profile" />
      <span class="bucket-desc">Bucket Description</span>
      <h1 class="bucket-name">Bucket Name</h1>
    </header>
    <p>Bucket content</p>
  </section>

  <section class="home-bucket">
    <header>
      <img class="bucket-profile" />
      <span class="bucket-desc">Bucket Description</span>
      <h1 class="bucket-name">Bucket Name</h1>
    </header>
    <p>Bucket content</p>
  </section>
</aside>
<?php get_footer(); ?>
