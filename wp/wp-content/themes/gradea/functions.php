<?php

// Some theme features
add_theme_support('post-thumbnails');

// CSS
if( !function_exists("theme_styles") ) 
{  
    function theme_styles() {         
        wp_register_style( 'foundation', get_template_directory_uri() . '/css/foundation.css', array(), '1.0', 'all' );
        wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css', array('foundation'), '1.0', 'all' );
        wp_register_style( 'navstyles', get_template_directory_uri() . '/css/navstyles.css', array('foundation','styles'), '1.0', 'all' );
        wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array('foundation', 'styles'), '1.0', 'all' );
        
        wp_enqueue_style( 'foundation' );
        wp_enqueue_style( 'styles' );
        wp_enqueue_style( 'navstyles');
        wp_enqueue_style( 'flexslider');
    }
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// JS
if( !function_exists( "theme_js" ) ) 
{  
  function theme_js(){
  
    // Header scripts
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/custom.modernizr.js', array(), '2.6.2');
    
    // Footer scripts
    wp_register_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', array(), '4.0.0', true);
    wp_register_script('actions', get_template_directory_uri() . '/js/actions.js', array(), '1.0', true);
    wp_register_script('foundation.reveal', get_template_directory_uri() . '/js/foundation/foundation.reveal.js', array('foundation'), '4.0.0', true);
    wp_register_script('foundation.magellan', get_template_directory_uri() . '/js/foundation/foundation.magellan.js', array('foundation'), '4.0.0', true);
    
    // Enqueue
    wp_enqueue_script('modernizr');
    wp_enqueue_script('foundation');
    wp_enqueue_script('actions');
    wp_enqueue_script('foundation.reveal');
    wp_enqueue_script('foundation.magellan');
  }
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Custom post types
if (!function_exists("custom_types_create"))
{
  function custom_types_create()
  {
    register_post_type('gradea_testimonial',
      array(
        'labels' => array(
          'name' => __('Testimonials'),
          'singular_name' => __('Testimonial')
        ),
        'public' => true,
        'has_archive' => true,
      )
    );
  }
}
add_action('init', 'custom_types_create');

// Menus
function register_my_menu() 
{
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function slugify ($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pLd]+~u', '-', $text);
  // trim
  $text = trim($text, '-');
  // transliterate
  if (function_exists('iconv')) {
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  }
  // lowercase
  $text = strtolower($text);
  // remove unwanted characters
  $text = preg_replace('~[^-w]+~', '', $text);
  // default output
  if (empty($text)) {
    return 'n-a';
  }
 
  return $text;
}

// Gotta custom style some post stuff
add_filter('the_content', function($content) { 
  // Handle pullquotes out of <cite> tags
  $newContent = preg_replace('/<cite title="(.*?)">(.*?)<\/cite>/', '<div class="pullquote">\\2</div><div class="cite">\\1</div>', $content);
  // Handle the intro
  if (stristr($newContent, '<span id="more-'))
  {
    return preg_replace('/<p>(.*)<span id="more-(\d+)"><\/span>/', '<p class="intro">\\1', $newContent);
  }
  else
    return $newContent;
});

// Ignore pages in search results
function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', 'post');
    }
  }
}

add_action('pre_get_posts','search_filter');
