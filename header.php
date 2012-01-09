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

  <link rel="stylesheet" media="all" href="/css/base.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php echo $body_class; ?>">
  <div id="content">
    <div id="header">
      <form id="subscribe" action="#" method="post">
        <input type="email" placeholder="email address" />
        <input type="submit" value="Subscribe" />
      </form>

      <nav id="social-menu">
        <ul>
          <li><a id="social-facebook" href="http://www.facebook.com/pages/Light-of-Hope-Childrens-Home-and-School/166344674228?sk=info">Facebook</a></li>
          <li><a id="social-twitter" href="#">Twitter</a></li>
        </ul>
      </nav>

      <nav id="primary-menu"></nav>
      <button class="donate">Donate</button>
    </div> <!-- #header -->
<!-- end: header --> 
