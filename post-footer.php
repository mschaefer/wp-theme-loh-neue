<footer class="post-footer">
  <div class="post-meta">
    Published on <?php loh_posted_on(); ?>.
  </div>
    
  <?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>') ?>

	<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
</footer>
