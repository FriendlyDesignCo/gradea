<?php 

/* Services Page */

if( !function_exists("page_styles") )
{  
    function page_styles()
    {         
        wp_register_style( 'elastislide', get_template_directory_uri() . '/css/elastislide.css', array('foundation', 'styles'), '1.1.0', 'all' );
        wp_register_style( 'stories', get_template_directory_uri() . '/css/stories.css', array('styles'), '1.0', 'all' );
        wp_enqueue_style( 'elastislide');
        wp_enqueue_style( 'stories');
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

get_header(); 

?>

<!--==============Page Sections===============-->

<div class="content">
  <div class="row">
    <div class="large-12 columns text-center">
      <div class="logos">
        <ul id="carousel" class="elastislide-list"><!--small-block-grid-4-->

<?php $args = array( 'post_type' => 'success_stories', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <li <?php if (the_permalink()): ?>class="selected"<?php endif; ?>><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('success_story_thumbnail'); ?></a></li>
<?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>

<?php wp_reset_query(); ?>
<?php the_post(); ?>
  <div class="row">
    <div class="large-8 large-offset-2 columns">
    
    <div class="intro">
      <h1><?php the_title(); ?></h1>
      <?php the_content('[gallery]'); ?> 
    </div>
    

  </div>
</div>


<?php get_footer(); ?>
