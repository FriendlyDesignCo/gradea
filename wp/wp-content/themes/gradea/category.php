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
  <div class="article">
    <div class="row">
      <div class="large-10 large-offset-1 columns end">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
      <div class="row">
        <?php if (has_post_thumbnail()): ?>
          <div class="large-5 columns">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <div class="large-7 columns">
            <?php the_content('Read More'); ?>
            <?php the_tags('<ul><li class="tag">','</li><li class="tag">','</li></ul>'); ?>
          </div>
        <?php else: ?>
          <div class="large-12 columns">
            <?php the_content('Read More'); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="row"><div class="large-12 columns centered">
    <div class="rule"></div>
  </div></div>
  </div>
  <!--/Article One-->
<?php endwhile; endif; ?>

<?php get_footer(); ?>