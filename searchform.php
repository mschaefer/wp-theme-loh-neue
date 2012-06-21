<form role="search" method="get" id="search" action="<?php echo home_url( '/' ); ?>">
  <div id="search-container">
    <input type="search" value="<?php if(array_key_exists('s', $_GET)) { echo $_GET['s']; } ?>" name="s" id="s" />
  </div>
  <input type="image" src="<?php echo get_stylesheet_directory_uri() ?>/css/images/search.png" id="search-submit" value="Search" title="Search Light of Hope" />
</form>
