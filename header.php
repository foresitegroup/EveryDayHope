<?php if (!isset($TopDir)) $TopDir = ""; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Every Day Hope<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/swipebox/swipebox.css">
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/swipebox/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        
        $(window).on('load resize', function(){
          $('#menu-tagline').css({ right: $('#menu-toggle').css('right') });
        });
        
        $(".swipebox-video").swipebox({ autoplayVideos: true, videoMaxWidth : 1202 });
        $(".sb, .single-post-gallery A").swipebox();
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118989690-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118989690-1');
    </script>
  </head>
  <body<?php if (isset($PageClass)) echo " class=\"" . $PageClass . "\""; ?>>

    <div id="google_translate_element"></div>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,fr,ht', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <?php
    $HeadImg = "";
    if (isset($HeaderImage)) $HeadImg = " style=\"background-image: url(images/" . $HeaderImage . "?" . filemtime('images/' . $HeaderImage) . ");\"";
    if (isset($BlogHeaderImage)) $HeadImg = " style=\"background-image: url(" . $BlogHeaderImage . ");\"";
    ?>

    <div id="header"<?php echo $HeadImg; ?>>
      <?php if (!isset($PageTitle)) { ?>
      <video playsinline autoplay muted loop poster="images/home-banner.jpg">
        <source src="images/home-banner.mp4" type="video/mp4">
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
          <li><a href="<?php echo $TopDir; ?>about.php">About</a></li>
          <li><a href="<?php echo $TopDir; ?>livestock.php">Livestock</a></li>
          <li><a href="<?php echo $TopDir; ?>clean-water.php">Clean Water</a></li>
          <li><a href="<?php echo $TopDir; ?>community-education.php">Community education</a></li>
          <li><a href="<?php echo $TopDir; ?>progress">Progress</a></li>
          <li><a href="<?php echo $TopDir; ?>get-involved.php">Get Involved</a></li>
          <li><a href="<?php echo $TopDir; ?>contact.php">Contact</a></li>
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
        <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Every Day Hope" id="logo"></a>

        <div id="header-text">
          <?php HeaderContent(); ?>
        </div>
      </div>
    </div>
