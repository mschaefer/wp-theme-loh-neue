<?php
header('content-type: application/x-javascript; charset=utf-8');
?>
$( function() {
  $('#copyright-year').html( (new Date()).getFullYear() );
} );
