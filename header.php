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
  <title></title>

  <link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/css/base.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta name="viewport" content="initial-scale=1.0,width=device-width" />
</head>

<body class="<?php echo $body_class; ?>">
  <div id="content">
    <div id="header">
      <a id="logo" href="#"><h1>Light of Hope</h1></a>

      <nav id="social-menu">
        <ul class="horiz-menu">
          <li><a id="social-facebook" href="http://www.facebook.com/pages/Light-of-Hope-Childrens-Home-and-School/166344674228?sk=info">Facebook</a></li>
          <li><a id="social-twitter" href="#">Twitter</a></li>
        </ul>
      </nav>

      <form id="subscribe" action="#" method="post">
        <input type="email" placeholder="email address" />
        <input type="submit" value="Subscribe" />
      </form>

      <nav id="primary-menu">
        <ul class="horiz-menu">
          <li><a href="#">Menu Item 1</a></li>
          <li><a href="#">Menu Item 2</a></li>
          <li><a href="#">Menu Item 3</a></li>
          <li><a href="#">Menu Item 4</a></li>
          <li><a href="#">Menu Item 5</a></li>
        </ul>
      </nav>
      <a class="donate" href="#">Donate</a>
    </div> <!-- #header -->
<!-- end: header --> 
