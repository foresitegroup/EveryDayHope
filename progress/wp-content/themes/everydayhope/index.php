<?php
$PageTitle = "Progress";
$PageClass = "progress";
$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if (is_single()) $PageTitle .= " | " . get_the_title();
$BlogHeaderImage = (is_single()) ? wp_get_attachment_url(get_post_thumbnail_id()) : content_url()."/uploads/2019/06/DJI_00262-e1561840445875.jpg";

include "../header.php";

function HeaderContent() {
  if (is_single()) :
    echo '<div class="date">';
      echo get_the_date('F j, Y');
    echo "</div>\n";
  endif;

  if (is_single()) the_title('<h1 class="single">', '</h1>');

  if (!is_single()) :
    echo "<h1>Progress</h1>\n";
    echo "Progress takes place when we make efforts that bring about change that endures. Change requires a purposeful collaboration with communities and their leaders.\n";
  endif;
}

if (!is_single()) :
?>
	<div class="categories">
		<div class="site-width">
		  <form action="<?php echo esc_url(home_url('/')); ?>"  method="GET" class="search-form">
		    <input type="text" class="search-field" placeholder="SEARCH BLOG" value="<?php echo get_search_query(); ?>" name="s" aria-label="Search Blog">
		    <button type="submit" class="search-submit" aria-label="Submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		  </form>
		</div>
	</div>

	<div class="blog-index">
    <div class="site-width">
      <div class="index-posts">
        <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
        endwhile;
        ?>
      </div>

      <script type="text/javascript">
        jQuery(window).on("load",function(){
          jQuery(".index-post").hide();
          jQuery(".index-post").slice(0, 6).show();

          // Don't show button if fewer than max number of posts
          if (jQuery(".index-post:hidden").length == 0) jQuery("#loadmore").fadeOut('fast');

          jQuery("#loadmore").on('click', function (e) {
            e.preventDefault();
            jQuery(".index-post:hidden").slice(0, 6).slideDown();

            // Remove button when we get to the end of the posts
            if (jQuery(".index-post:hidden").length == 0) jQuery("#loadmore").fadeOut('slow');
          });
        });
      </script>

      <div class="loadmore">
        <a href="#" id="loadmore" class="button">LOAD MORE</a>
      </div>

    </div>
  </div>
<?php else : ?>
  <div class="blog-single">
    <?php get_template_part( 'content', get_post_format() ); ?>

    <div style="text-align: center;"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=H4F3B9QZ32DRS" class="button">Donate Now</a></div>
  </div>
<?php endif; ?>

<?php $MicroImage = (is_single()) ? "micro-blog-single.jpg" : "micro-blog-single.jpg"; ?>
<div id="micro-footer" style="background-image: url(<?php echo $TopDir . "images/" . $MicroImage; ?>);">
  <div class="site-width">
    Interested in leading a workshop?<br>

    <a href="<?php echo $TopDir; ?>contact.php" class="button">Contact Us</a>
  </div>
</div>

<?php include "../footer.php"; ?>