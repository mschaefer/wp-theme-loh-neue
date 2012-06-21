<?
  global $content_class;
  global $body_class;

  if(!isset($content_class)) $content_class = '';
  if(!isset($body_class)) $body_class = '';

  global $page_css;
  if(!isset($page_css)) $page_css = array();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>
    <?php
	    wp_title( '|', true, 'right' );
	    bloginfo( 'name' );
      $desc = get_bloginfo('description', 'display');
      echo ((is_home() || is_front_page()) && strlen(trim($desc)) > 0) ? " &mdash; $desc" : '';
    ?>
  </title>

  <link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/css/base.css" />
<?php
  foreach ($page_css as $css) {
?><link rel="stylesheet" media="all" href="<?php echo $css; ?>"/><?php
    }
?>

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1.0,width=device-width" />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/css/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/css/images/apple-touch-icon.png">
  <?php wp_head(); ?>
</head>

<!--[if lt IE 7]> <body class="ie ie6 lte9 lte8 lte7 <?php echo $body_class ?>"> <![endif]-->
<!--[if IE 7]> <body class="ie ie7 lte9 lte8 lte7 <?php echo $body_class ?>"> <![endif]-->
<!--[if IE 8]> <body class="ie ie8 lte9 lte8 <?php echo $body_class ?>"> <![endif]-->
<!--[if IE 9]> <body class="ie ie9 lte9 <?php echo $body_class ?>"> <![endif]-->
<!--[if gt IE 9]> <body class="ie <?php echo $body_class ?>"> <![endif]-->
<!--[if !IE]><!--> <body class="<?php echo $body_class ?>"> <!--<![endif]-->
  <div id="content">
    <a id="topofpage" name="top">Top of Page</a>
    <div id="header">
      <a id="logo" href="<?php echo home_url(); ?>" title="LOH Home"><h1>Light of Hope</h1></a>

      <nav id="social-menu">
        <?php loh_social_menu('horiz-menu'); ?>
      </nav>

      <?php get_search_form(); ?>
<!--
      <form id="subscribe" action="#" method="post">
        <input type="email" placeholder="email address" />
        <input type="submit" value="Subscribe" />
      </form>
-->
      <nav id="primary-menu">
        <?php loh_primary_menu('horiz-menu'); ?>
      </nav>

      <?php loh_donate_button_menu(); ?>
    </div> <!-- #header -->
    <div id="main">
<!-- end: header -->
