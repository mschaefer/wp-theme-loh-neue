<?php 
  $body_class = 'donate';
  $page_css = array(get_stylesheet_directory_uri() . '/css/pages/donate.css');

  get_header();
?>

<aside id="page-subpages" class="sub-menu">
  <?php page_menu(get_the_ID()) ?>
</aside>

<section id="page-primary">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>

  <div class="column_right">
    <h2>Sponsor a Girl</h2>
    <article id="sponsorship-bucket-1" class="bucket">
      <?php loh_bucket('Home Page: Sponsorship Bucket 1'); ?>
      
      <p><?php loh_sponsorship_link_for('Home Page: Sponsorship Bucket 1') ?></p>
      
    </article>

    <article id="sponsorship-bucket-2" class="bucket">
      <?php loh_bucket('Home Page: Sponsorship Bucket 2'); ?>
      <p><?php loh_sponsorship_link_for('Home Page: Sponsorship Bucket 2') ?></p>
    </article>
  </div>
</section> <!-- #page-primary -->

<?php get_footer(); ?>
