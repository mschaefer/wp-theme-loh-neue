<?php

function loh_sponsorship_link_for($bucket_name) {
  $page = get_page_by_title( $bucket_name );

  if( $page ) {
    $sponsorship_link  = loh_custom_field($page, 'sponsorship-link');
    $sponsorship_name  = loh_custom_field($page, 'sponsorship-name');

    echo "<a class=\"donate-button\" title=\"Proceed to sponsorship form\" href=\"$sponsorship_link\">Sponsor $sponsorship_name</a>";
  }
}

?>
