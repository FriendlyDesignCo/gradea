<?php 

if( !function_exists("page_styles") ) {  
    function page_styles() {         
        wp_register_style( 'articles', get_template_directory_uri() . '/css/articles.css', array('styles'), '1.0', 'all' );
        wp_enqueue_style( 'articles');
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

get_header(); 

?>

<!--==============Page Sections===============-->

<!--=====Start Articles========-->

<div class="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!--Article One-->
  <?php get_template_part('post','short'); ?>
  <!--/Article One-->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
