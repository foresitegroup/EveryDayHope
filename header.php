<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Every Day Hope<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        
        $(window).on('load resize', function(){
          $('#menu-tagline').css({ right: $('#menu-toggle').css('right') });
        });
      });
    </script>
  </head>
  <body>
    
    <link rel="stylesheet" href="inc/swipebox/swipebox.css">
    <script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".swipebox-video").swipebox({ autoplayVideos: true, videoMaxWidth : 1200 });
      });
    </script>

    <div id="header"<?php if (isset($HeaderImage)) echo " style=\"background-image: url(images/" . $HeaderImage . ");\""; ?>>
      <?php if (!isset($PageTitle)) { ?>
      <video playsinline autoplay muted loop poster="images/video-banner.jpg">
        <source src="images/video-banner.mp4" type="video/mp4">
      </video>
      <?php } ?>

      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div id="menu">
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="livestock.php">Livestock</a></li>
          <li><a href="safe-water.php">Safe Water</a></li>
          <li><a href="progress.php">Progress</a></li>
          <li><a href="get-involved.php">Get Involved</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>

        <div id="menu-contact">
          <a href="mailto:info@everydayhope.org" class="email">info@everydayhope.org</a><br>

          <a href="https://www.facebook.com/everydayhopeDR" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://twitter.com/everydayhopeDR" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>

        <div id="menu-tagline">For People. For Good.</div>
      </div>

      <div class="site-width">
        <a href="."><img src="images/logo.png" alt="Every Day Hope" id="logo"></a>

        <div id="header-text">
          <?php HeaderContent(); ?>
        </div>
      </div>
    </div>
