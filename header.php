<?
  global $content_class;
  global $body_class;
  
  if(!isset($content_class)) $content_class = '';
  if(!isset($page_class)) $body_class = '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title><?php the_title(); ?></title>

  <link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/css/base.css" />
  <script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/1.7.1/jquery.min.js"></script>

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta name="viewport" content="initial-scale=1.0,width=device-width" />
</head>

<body class="<?php echo $body_class; ?>">
  <div id="content">
    <div id="header">
      <a id="logo" href="<?php echo home_url(); ?>" title="LOH Home"><h1>Light of Hope</h1></a>

      <nav id="social-menu">
        <?php loh_social_menu('horiz-menu'); ?>
      </nav>

      <form id="subscribe" action="#" method="post">
        <input type="email" placeholder="email address" />
        <input type="submit" value="Subscribe" />
      </form>

      <nav id="primary-menu">
        <?php loh_primary_menu('horiz-menu'); ?>
      </nav>
      <a class="donate" href="#">Donate</a>
    </div> <!-- #header -->
<!-- end: header --> 
