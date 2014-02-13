<?php

include "social-count.php";

if (! function_exists('dw_minion_setup')) :

  function dw_minion_setup ()
  {
    load_theme_textdomain('dw-minion', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('post-formats', array(
        'gallery',
        'video',
        'quote',
        'link'
    ));

    add_theme_support('post-thumbnails');

    add_editor_style();
  }

endif;
add_action('after_setup_theme', 'dw_minion_setup');

function dw_minion_scripts ()
{
  wp_enqueue_style('dw-minion-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '20130716');
  wp_enqueue_style('dw-minion-style', get_stylesheet_uri());

  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), '20130716');
  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
  wp_enqueue_script('jquery');
  wp_enqueue_script('dw-minion-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '20130716');
  wp_enqueue_script('bootstrap-transition', get_template_directory_uri() . '/assets/js/bootstrap-transition.js',
      array(), '20130716');
  wp_enqueue_script('bootstrap-carousel', get_template_directory_uri() . '/assets/js/bootstrap-carousel.js', array(),
      '20130716');
  wp_enqueue_script('bootstrap-collapse', get_template_directory_uri() . '/assets/js/bootstrap-collapse.js', array(),
      '20130716');
  wp_enqueue_script('bootstrap-tab', get_template_directory_uri() . '/assets/js/bootstrap-tab.js', array(), '20130716');
}
add_action('wp_enqueue_scripts', 'dw_minion_scripts');

require get_template_directory() . '/inc/template-tags.php';

function whm_filterPost ($wpQuery)
{
  if (is_home()) {
    set_query_var('tag__not_in', array("64", "100", "99"));
  }
}

function whm_shortenText ($content, $length)
{
  $text = str_replace('<!--more-->', '###more###', $content);
  $text = strip_tags($text);

  $morePos = strpos($text, '###more###');
  if ($morePos !== false && $morePos < $length) {
    return substr($text, 0, $morePos);
  } else {
    $text = str_replace('###more###', '', $text);
  }

  if (strlen($text) > $length) {
    $pos = strpos($text, ' ', $length + 1);
    if ($pos < $length) {
      $pos = $length + 20;
    }
    $text = substr($text, 0, $pos);
    $text .= ' ...';
  }
  $text = str_replace('(mehr&hellip;)', "", $text);
  return $text;
}

function whm_getSpecialElements ()
{
  $pageType = whm_getPageType();
  $pageNumber = get_query_var('paged') ? get_query_var('paged') : 1;

  $specialElements = array();

  if ($pageNumber == 1) {
    $specialElements[7] = "authors.php";
    $specialElements[3] = "facebook.php";

    $specialElements[13] = "100gedanken.php";
    $specialElements[5] = "addlink.php";
  } else {
    #$specialElements[3] = "adsense.php";
  }

  if ($pageType == "home") {
    if ($pageNumber == 1) {
      $specialElements[3] = "links.php";
      $specialElements[5] = "facebook.php";
    }
    // nset( $specialElements[5] );
    // specialElements[
  }

  #$specialElements[8] = "adsense.php";
  #$specialElements[15] = "adsense.php";

  return $specialElements;
}

function whm_getPageType( )
{
  if (is_tag() ) return "tag";
  if (is_home() ) return "home";
  if (is_category()) return "category";
  if (is_single()) return "single";
  if (is_author()) return "author";
  if (is_search()) return "search";
  if (is_page()) return "page";
  return "default";
}

add_action('pre_get_posts', 'whm_filterPost' );

function whm_getSocialCount( )
{
	global $post_id;
	$url = get_permalink( $post_id );
	if( !IS_DEV ) {
	  $json = @file_get_contents("http://api.sharedcount.com/?url=" . rawurlencode($url));
	}
	$socialCount = json_decode($json, true);

	if( is_array($socialCount["Facebook"])) {
		$socialCount["Facebook"] = $socialCount["Facebook"]["total_count"];
	}

	return $socialCount;
}

function arphabet_widgets_init() {

  register_sidebar( array(
  'name' => 'Home right sidebar',
  'id' => 'home_right_1',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h2 class="rounded">',
  'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_theme_support( 'infinite-scroll', array(
    'container' => 'whm2-content-list',
    'footer' => 'page',
) );
