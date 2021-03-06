<?php include "header.php"; ?>

<?php function HeaderContent() { ?>
  <div id="header-header">For People.<div> </div>For Good.</div>

  With a driving passion, we build <u>sustainable communities</u>, raise the standard of living and bring hope to the people of the Dominican Republic.

  <div id="header-links">
    <a href="https://www.youtube.com/watch?v=7k75bNuOQuo" class="swipebox-video">Play Video <i class="fa fa-play" aria-hidden="true"></i></a>
    <a href="get-involved.php" class="button green">+ Give Now</a>
  </div>
<?php } ?>

<div id="safewater">
  <div class="site-width">
    <div class="left">
      <h1>Clean Water Systems</h1>

      Every Day Hope is committed to building clean daily use water systems while partnering with communities to improve their quality of life. Clean water is a way to a better life.

      <div class="links">
        <a href="clean-water.php" class="button">How We Help</a>
        <a href="get-involved.php">+ Take Action</a>
      </div>
    </div>
  </div>

  <img src="images/home-safewater3.jpg" alt="" class="image1">
  <div class="image2" style="background-image: url(images/home-safewater4.jpg);"></div>
</div>

<div id="livestock">
  <div class="site-width">
    <div class="right">
      <h1>Livestock for Life</h1>

      Livestock For Life is a program that is designed to provide a variety of livestock that will keep reproducing for a family's economic needs.

      <div class="links">
        <a href="get-involved.php">+ Take Action</a>
        <a href="livestock.php" class="button">How We Help</a>
      </div>
    </div>
  </div>

  <img src="images/home-livestock1.jpg" alt="" class="image1">
  <div class="image2" style="background-image: url(images/home-livestock2.jpg);"></div>
</div>

<div id="education">
  <div class="site-width">
    <div class="left">
      <h1>Community Education</h1>

      Community Education is an area of development which is a necessary component of building healthy and sustainable communities.

      <div class="links">
        <a href="community-education.php" class="button">How We Help</a>
        <a href="get-involved.php">+ Take Action</a>
      </div>
    </div>
  </div>

  <img src="images/home-education1.jpg" alt="" class="image1">
  <div class="image2" style="background-image: url(images/home-education2.jpg);"></div>
</div>

<div id="home-impact">
  <a href="get-involved.php" class="button">Make an Impact</a>
</div>

<div id="our-progress">
  <div class="left">
    <img src="images/for-people-for-good.png" alt="">
  </div>

  <div class="right">
    <img src="images/icon-hands.png" alt="" class="icon">

    <div>Our Progress</div>
  </div>
</div>

<div id="blog">
  <?php
  require('progress/wp-load.php');
  query_posts('showposts=1');
  while (have_posts()): the_post();
  ?>
  <div class="blog-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div>

  <div class="site-width">
    <div class="blog-text">
      <a href="progress" class="blog">VIEW ALL</a>

      <div class="date"><?php echo get_the_date('F j, Y'); ?> <span class="sep">&bull;</span> <?php echo strip_tags(get_the_category_list(', ')); ?></div>

      <div class="title"><?php echo get_the_title(); ?></div>

      <?php echo fg_excerpt(2); ?><br>

      <a href="<?php echo get_permalink(); ?>" class="button">READ POST</a>
    </div>
  </div>
  <?php endwhile; ?>
</div>

<?php include "footer.php"; ?>