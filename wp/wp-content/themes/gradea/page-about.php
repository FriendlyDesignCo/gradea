<?php 

/* About Page */

if( !function_exists("page_styles") ) {  
    function page_styles() {         
        wp_register_style( 'about', get_template_directory_uri() . '/css/about.css', array('styles'), '1.0', 'all' );
        wp_enqueue_style( 'about');
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

get_header(); 

?>

<!--==============Page Sections===============-->

<!--==============Page Sections===============-->

<!--Start Section 1-->
<div class="sectionone">
  <div class="row">
    <div class="large-8 large-centered columns"> 
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/Section One-->

<!--Start Section Two-->

    <!--Parallax Image-->
    <section id="introimg" data-type="background" data-speed="10" class="pages"></section>
    <section id="intro" data-type="background" data-speed="10" class="pages anchorouter"><span id="atestimonials"></span>
    <!--/Parallax Image-->

  <div class="about">
    <div class="row">
    <div class="large-8 large-centered columns"> 
      <h1><center>Grade A Leadership<center></h1>
      <?php $queried_post = get_post(27); ?>
      <?php echo $queried_post->post_content; ?>
    </div>
  </div>
</div>
<!--/Section Two-->

<!--Start Section Three-->
  <!--Parallax Image-->
    <section id="valuesimg" data-type="background" data-speed="10" class="pages"></section>
    <section id="values" data-type="background" data-speed="10" class="pages anchorouter"><span id="atestimonials"></span>
  <!--Parallax Image-->

  <div class="values">
    <div class="row">
    <div class="large-8 large-centered columns"> 
      <h1><center>Grade A Values<center></h1>
      <?php $queried_post = get_post(35); ?>
      <?php echo $queried_post->post_content; ?>
    </div>
    </div>
    </div>
<!--/Section Three-->


<?php get_footer(); ?>