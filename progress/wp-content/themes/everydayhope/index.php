<?php
$PageTitle = "Progress";
$PageClass = "progress";
$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

the_post();
if (is_single()) $PageTitle .= " | " . get_the_title();
$BlogHeaderImage = wp_get_attachment_url(get_post_thumbnail_id());

include "../header.php";

function HeaderContent() { ?>
  <div class="date">
  	<?php
    echo get_the_date('F j, Y') . " &bullet; ";

    echo strip_tags(get_the_category_list(', '));
    ?>
  </div>

  <?php
  if (is_single()) the_title('<h1 class="single">', '</h1>');

  if (!is_single()) :
  	the_title('<h1>', '</h1>');
  	echo fg_excerpt(2);
  ?>

  <br><a href="<?php echo get_permalink(); ?>" class="button green">READ POST</a>
<?php
  endif;
}

if (!is_single()) :
?>
	<script type="text/javascript">
	  $(document).ready(function() {
	    $(".cats [href]").each(function() {
	      if (this.href == window.location.href) { $(this).addClass("current"); }
	    });
	  });
	</script>

	<div class="categories">
		<div class="site-width">
			<div class="cats">
				<a href="<?php echo home_url('/'); ?>">ALL</a>
				<?php
				$categories = get_categories();
				foreach ( $categories as $category ) {
					echo '<a href="' . home_url('/') . 'category/' . $category->category_nicename . '/">' . $category->cat_name . '</a>';
				}
				?>
			</div>

		  <form action="<?php echo esc_url(home_url('/')); ?>"  method="GET" class="search-form">
		    <input type="text" class="search-field" placeholder="SEARCH BLOG" value="<?php echo get_search_query(); ?>" name="s" aria-label="Search Blog">
		    <button type="submit" class="search-submit" aria-label="Submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		  </form>
		</div>
	</div>

	<div class="blog-index">
    <div class="site-width">
      <?php
      /* Prep the variables for equal height boxes */
      $counter = 1;
      $iteration = 1;
      $EqualHeightsjQuery = "";

      /* Start the Loop */
      while ( have_posts() ) : the_post();
        
        /* Add the special classes to the boxes that the jQuery needs for equal heights */
        $EqualHeights = "";
        if (($counter == 1) || ($counter == 2)) $EqualHeights = "half" . $iteration;
        if (($counter == 3) || ($counter == 4) || ($counter == 5)) $EqualHeights = "triple triple-1" . $iteration;
        if (($counter == 4)) $EqualHeights .= " triplemid";
        
        /* ...and set up the jQuery for equal heights */
        if ($counter == 1) {
          $EqualHeightsjQuery .= "var highestBox = 0;
          jQuery(this).find('.half" . $iteration . "').each(function(){
            if(jQuery(this).height() > highestBox) highestBox = jQuery(this).height();
          })
          jQuery(this).find('.half" . $iteration . "').height(highestBox);\n";
        }
        if ($counter == 3) {
          $EqualHeightsjQuery .= "var highestBox = 0;
          jQuery(this).find('.triple-1" . $iteration . "').each(function(){
            if(jQuery(this).height() > highestBox) highestBox = jQuery(this).height();
          })
          jQuery(this).find('.triple-1" . $iteration . "').height(highestBox);\n";
        }
        
        /* Finally display the content */
        get_template_part( 'content', get_post_format() );
        
        /* Increase the counters as needed */
        $counter++;
        if ($counter == 6) { $counter = 1; $iteration++; }

      endwhile;
      ?>

      <script type="text/javascript">
        jQuery(window).on("load resize",function(){
          jQuery('.blog-index .site-width').each(function(){
            <?php echo $EqualHeightsjQuery; ?>
          });
        });
        
        if (window.innerWidth < 801) {
          jQuery(".index-post").removeClass (function (index, className) {
            return (className.match (/(^|\s)triple-\S+/g) || []).join(' ');
          });
        }

        if (window.innerWidth < 481) {
          jQuery(".index-post").removeClass (function (index, className) {
            return (className.match (/(^|\s)half\S+/g) || []).join(' ');
          });
        }

        jQuery(window).on("load",function(){
          jQuery(".index-post").hide();
          jQuery(".index-post").slice(0, 5).show();

          // Don't show button if fewer than max number of posts
          if (jQuery(".index-post:hidden").length == 0) jQuery("#loadmore").fadeOut('fast');

          jQuery("#loadmore").on('click', function (e) {
            e.preventDefault();
            jQuery(".index-post:hidden").slice(0, 5).slideDown();

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

<?php $MicroImage = (is_single()) ? "micro-blog-single.jpg" : "micro-blog-index.jpg"; ?>
<div id="micro-footer" style="background-image: url(<?php echo $TopDir . "images/" . $MicroImage; ?>);">
  <div class="site-width">
    Interested in leading a workshop?<br>

    <a href="<?php echo $TopDir; ?>contact.php" class="button">Contact Us</a>
  </div>
</div>

<?php include "../footer.php"; ?>