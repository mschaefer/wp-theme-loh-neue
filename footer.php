<!-- begin: footer --> 
    <nav id="footer">
      <?php loh_footer_menu(); ?>

      <?php loh_donate_button_menu(); ?>

      <ul id="footer-credits">
        <?php loh_footer_content(); ?>
      </ul>
    </nav> <!-- #footer -->
  </div> <!-- #content -->
  <script src="<?php echo get_stylesheet_directory_uri() ?>/js/pages/application.js"></script>
  <?php
    global $page_js;
    
    if(!isset($page_js)) $page_js = array();

    foreach ($page_js as $js) {
?><script src="<?php echo $js; ?>"></script><?php
    }
  ?>
</body>
</html>
