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
    <header>
      <img class="bucket-profile" src="<?php echo get_stylesheet_directory_uri() ?>/css/mock-images/home-profile.png" />
      <h1 class="bucket-name">Person&rsquo;s Name</h1>
      <span class="bucket-desc">Sponsor Profile</span>
    </header>
    <p>Bucket content</p>
  </section>

  <section class="home-bucket">
    <header>
      <img class="bucket-profile" src="<?php echo get_stylesheet_directory_uri() ?>/css/mock-images/home-profile.png" />
      <h1 class="bucket-name">Person&rsquo;s Name</h1>
      <span class="bucket-desc">Sponsor Profile</span>
    </header>
    <p>Bucket content</p>
  </section>

  <section class="home-bucket">
    <header>
      <img class="bucket-profile" src="<?php echo get_stylesheet_directory_uri() ?>/css/mock-images/home-profile.png" />
      <h1 class="bucket-name">Person&rsquo;s Name</h1>
      <span class="bucket-desc">Sponsor Profile</span>
    </header>
    <p>Curabitur venenatis, nisi vel sollicitudin faucibus, elit justo tincidunt diam, sed rhoncus leo est at orci. Vivamus aliquet, enim at interdum suscipit, lectus mauris tristique nunc.</p>
  </section>
</aside>
<?php get_footer(); ?>
