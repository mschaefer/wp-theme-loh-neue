<article id="post-<?php the_ID(); ?>" class="post">
	<header class="post-header">
    <h2 class="post-category"><?php echo get_the_category_list(', ') ?></h2>
		<h1 class="post-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="post-content">
		<?php the_content(); ?>
	</div>

  <?php include('post-footer.php'); ?>

</article><!-- #post-<?php the_ID(); ?> -->




