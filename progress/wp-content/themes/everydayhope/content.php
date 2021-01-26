<?php
if (!is_single()) :
  ?>
  <a href="<?php echo get_permalink(); ?>" class="index-post">
    <div class="index-post-image" style="<?php echo (wp_get_attachment_url(get_post_thumbnail_id()) != "") ? "background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ")" : "padding-top: 0; margin-bottom: 0;"; ?>"></div>
    
    <div class="index-post-text">
      <h3>
      <?php
      echo get_the_date('F j, Y') . " &bullet; ";

      echo strip_tags(get_the_category_list(', '));
      ?>
      </h3>

      <?php the_title('<h2>', '</h2>'); ?>

      <?php echo fg_excerpt(3); ?>
    </div>
    
    <div class="index-post-hover">READ MORE</div>
  </a>
  <?php
else :
  /* A SINGLE POST */
  the_post();
  ?>
  <?php the_content(); ?>
<?php endif; ?>