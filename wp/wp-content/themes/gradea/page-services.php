<?php 

/* Services Page */

if( !function_exists("page_styles") )
{  
    function page_styles()
    {         
        wp_register_style( 'services', get_template_directory_uri() . '/css/services.css', array('styles'), '1.0', 'all' );
        wp_enqueue_style( 'services');
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

get_header(); 

?>

<!--==============Page Sections===============-->

<!---Start Section One-->
<div class="sectionone">
  <div class="row">
    <div class="large-8 large-centered columns"> 
      <div class="introduction">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!--/Section One-->

<!--Start Section Two-->
<div class="sectiontwo">
  <div class="row">
    <div class="large-8 large-centered columns">
      <h1><center>A Hybrid Approach</center></h1>
    </div>
  </div>

  <div class="row">
    <div class="large-offset-2 large-6 columns">
      <?php $queried_post = get_post(42); ?>
      <?php echo $queried_post->post_content; ?>
      </div>

      <div class="large-2 columns end">
      <div class="gray"><button><img src="<?php echo get_template_directory_uri(); ?>/img/form.png"><br>View Sample Engagement</button></div>
      <button data-reveal-id="Morgan">Contact Us</button>
      
      </div> 
  </div>
</div>
<!--/Section Two-->

<?php 
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
$sections = get_page_children(18, $all_wp_pages);

usort($sections, 'section_order_cmp');
function section_order_cmp($a, $b)
{
  return $a->menu_order - $b->menu_order;
}

?>

<!--Start Magellan Navigation-->
<div class="row"><div data-magellan-expedition="fixed" id="lower-nav" class="">
    <dl class="sub-nav large-8 columns text-center end">
    <?php foreach ($sections as $section): ?>
      <dd data-magellan-arrival="<?php echo $section->post_name; ?>"><a href="#<?php echo $section->post_name; ?>"><?php echo $section->post_title; ?></a></dd>
    <?php endforeach; ?>
  </dl>
</div></div>
<!--/Magellan Navigation-->

<!-- Magellan Sections -->
<?php foreach ($sections as $section): ?>
    <!--Parallax Image-->
  <a name="<?php echo $section->post_name; ?>"></a>
    <div data-magellan-destination="<?php echo $section->post_name; ?>">
    <section id="valuesimg" data-type="background" data-speed="10" class="pages"></section>
    <section id="values" data-type="background" data-speed="10" class="pages anchorouter"><span id="avalues"></span>
  <!--/Parallax-->
  <div class="service">
  <div class="row">
    <div class="large-8 large-centered columns"> 
    <h2><?php echo $section->post_title; ?></h2>
    <?php echo $section->post_content; ?>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>
<!-- /Magellan Sections -->

<?php get_footer(); ?>
