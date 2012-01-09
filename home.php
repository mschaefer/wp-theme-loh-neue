<?php 
  $body_class = 'home';

  get_header(); 
?>
<section>
  <div id="home-slider">
    Slider
  </div>
  <p id="mission">
    Mission statement here
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
