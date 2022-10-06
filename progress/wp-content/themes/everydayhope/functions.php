<?php
// I don't need to be notified about every automatic update
add_filter( 'auto_plugin_update_send_email', '__return_false' );
add_filter( 'auto_theme_update_send_email', '__return_false' );

// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );


// Break excerpt at sentence end
function fg_excerpt($limit) {
  $allowed_ends = array('.', '!', '?', '...');
  $number_sentences = $limit;
  $excerpt_chunk = get_the_excerpt();

  for($i = 0; $i < $number_sentences; $i++){
    $lowest_sentence_end[$i] = 100000000000000000;
    foreach($allowed_ends as $allowed_end) {
      $sentence_end = strpos( $excerpt_chunk, $allowed_end);
      if ($sentence_end !== false && $sentence_end < $lowest_sentence_end[$i]) {
        $lowest_sentence_end[$i] = $sentence_end + strlen( $allowed_end );
      }
      $sentence_end = false;
    }

    $sentences[$i] = substr( $excerpt_chunk, 0, $lowest_sentence_end[$i]);
    $excerpt_chunk = substr( $excerpt_chunk, $lowest_sentence_end[$i]);
  }

  return implode('', $sentences);
}


// Remove brackets on excerpt ellisis
function new_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* 
 * Change WordPress default gallery output
 * http://wpsites.org/?p=10510/
 */
add_filter('post_gallery', 'FG_post_gallery', 10, 2);
function FG_post_gallery($output, $attr) {
  global $post;

  extract(shortcode_atts(array('orderby' => 'menu_order ID', 'columns' => 3, 'include' => ''), $attr));

  $id = intval($id);

  if (!empty($include)) {
    $include = preg_replace('/[^0-9,]+/', '', $include);
    $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

    $attachments = array();
    foreach ($_attachments as $key => $val) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  }

  if (empty($attachments)) return '';

  // Here's your actual output, you may customize it to your need
  $output = "<div class=\"site-width single-post-gallery gallery-columns-" . $columns . "\">\n";

  // Now you loop through each attachment
  foreach ($attachments as $id => $attachment) {
    $img = wp_get_attachment_image_src($id, 'full');

    $output .= "<a href=\"" . $img[0] . "\" data-sb=\"sb" . $columns . "\" style=\"background-image: url(" . $img[0] . ");\" aria-label=\"" . basename($img[0]) . "\"></a>\n";
  }

  $output .= "</div>\n";

  return $output;
}


add_filter('the_content', 'filter_ptags_on_images');
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
?>