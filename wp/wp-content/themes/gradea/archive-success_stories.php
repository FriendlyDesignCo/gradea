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

  <div class="row">
    <div class="large-8 large-offset-2 columns">
    
    <div class="intro">
      <h1>Turner Construction Company</h1>
      <p>Ipsum placerat ut tristique sit amet, vulputate sit amet ligula. Nulla semper, nibh sed posuere egestas, felis mi auctor purus, sit amet convallis mi tellus ullamcorper sem. Cras non molestie mauris. Cras sodales eleifend risus, non consequat lorem faucibus nec.</p>
    </div>
    
          <section class="slider">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/4.jpg" />
                </li>
                <li>
                  <img src="img/4.jpg" />
                </li>
                <li>
                  <img src="img/4.jpg" />
                </li>
                <li>
                  <img src="img/4.jpg" />
                </li>
              </ul>
            </div>
          </section>
    
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean leo ligula, placerat ut tristique sit amet, vulputate sit amet ligula. Nulla semper, nibh sed posuere egestas, felis mi auctor purus, sit amet convallis mi tellus ullamcorper sem. Cras non molestie mauris. Cras sodales eleifend risus, non consequat lorem faucibus nec. Aliquam erat volutpat. Integer id sem ac libero varius fermentum. Donec placerat sagittis tristique.
    </p>
    <div class="pullquote">
      After 3 hrs with Grade A, my marketing team was more productive the following month than they had been the entire past year.</div>
    <div class="cite">&mdash; Turner Construction Company</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean leo ligula, placerat ut tristique sit amet, vulputate sit amet ligula. Nulla semper, nibh sed posuere egestas, felis mi auctor purus, sit amet convallis mi tellus ullamcorper sem. Cras non molestie mauris. Cras sodales eleifend risus, non consequat lorem faucibus nec. Aliquam erat volutpat. Integer id sem ac libero varius fermentum. Donec placerat sagittis tristique.
    </p>
    
    </div>
  </div>
</div>


<?php get_footer(); ?>
