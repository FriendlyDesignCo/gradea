<?php

// CSS
if( !function_exists("theme_styles") ) 
{  
    function theme_styles() {         
        wp_register_style( 'foundation', get_template_directory_uri() . '/css/foundation.css', array(), '1.0', 'all' );
        wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css', array('foundation'), '1.0', 'all' );
        wp_register_style( 'navstyles', get_template_directory_uri() . '/css/navstyles.css', array('foundation','styles'), '1.0', 'all' );
        
        wp_enqueue_style( 'foundation' );
        wp_enqueue_style( 'styles' );
        wp_enqueue_style( 'navstyles');
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
    
    // Enqueue
    wp_enqueue_script('modernizr');
    wp_enqueue_script('foundation');
    wp_enqueue_script('actions');
    wp_enqueue_script('foundation.reveal');
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