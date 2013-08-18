<?php 

if( !function_exists("page_styles") ) {  
    function page_styles() {         
        wp_register_style( 'articleindividual', get_template_directory_uri() . '/css/articleindividual.css', array('styles'), '1.0', 'all' );
        wp_enqueue_style( 'articleindividual');
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

get_header(); 

?>

<!--==============Page Sections===============-->

<!--=====Start Articles========-->

<div class="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!--==============Page Sections===============-->
  <!--Title Area-->
  <div class="row">
    <div class="large-8 large-offset-2 columns end"> 
    <h1><?php the_title(); ?></h1>
    </div>
  </div>
  
  <!--Start Date/Tag-->
  <div class="details">
    <div class="row">
      <div class="large-3 large-offset-2 columns">
        <h5><?php the_date(); ?></h5>
      </div>
      <div class="large-4 large-offset-2 columns end">
        <h5>Topics</h5>
        <ul>
          <?php the_tags('<ul><li class="tag">','</li><li class="tag">','</li></ul>'); ?>
        </ul>
      </div>
    </div>
  </div>
  
  <!--/End Title Area-->
  <div class="row">
      <div class="panel panelimage"><?php if (has_post_thumbnail()) { the_post_thumbnail('full'); } ?></div>
    </div>
  
  <!--Start Content-->
   <div class="articlecontent"> 
    <div class="row">
      <div class="large-8 large-offset-2 columns">
        <?php the_content(); ?>
        <center><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&via=GradeAfresh"><button>Continue the Conversation on Twitter</button></a></center>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
