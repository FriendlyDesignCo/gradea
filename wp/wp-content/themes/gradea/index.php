<?php 

if( !function_exists("page_styles") ) {  
    function page_styles() {         
        wp_register_style( 'index', get_template_directory_uri() . '/css/index.css', array('styles'), '1.0', 'all' );
        wp_enqueue_style( 'index');
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

get_header(); 

?>

<!--==============Page Sections===============-->

<!--==============Page Sections===============-->

<!--Start Section 1-->
    
    <!--Parallax Image-->
    <section id="introimg" data-type="background" data-speed="10" class="pages"></section>
    <section id="intro" data-type="background" data-speed="10" class="pages"> 
    <!--/Parallax-->

<!--Start Section 1-->
<div class="sectionone">
  <div class="row">
    <div class="large-9 large-centered columns"> 
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
    <section id="clientsimg" data-type="background" data-speed="10" class="pages"></section>
    <section id="clients" data-type="background" data-speed="10" class="pages anchorouter"><span id="atestimonials"></span>
  <!--/Parallax-->

<!--Start Section 2-->
<div class="sectiontwo">
<div class="row">
  <div class="large-9 large-centered columns"> 
  <h1>What our clients are saying</h1>
  </div>
</div>

  <?php
  $args = array( 'post_type' => 'gradea_testimonial', 'posts_per_page' => 4 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="row"><!--Start Quote Row Top-->
      <div class="topquote large-offset-2 large-4 columns">
        <p>&ldquo;<?php echo strip_tags(get_the_content()); ?>&rdquo;</p>
        <h4><?php the_title(); ?></h4>
      </div>
  
      <?php $loop->the_post(); ?>
      <div class="topquote large-4 columns end">
        <p>&ldquo;<?php echo strip_tags(get_the_content()); ?>&rdquo;</p>
          <h4><?php the_title(); ?></h4>
        </div>
      </div> <!--End Quote Row Top-->
  <?php
  endwhile;
  ?>

<!--Start Contact Area-->
  <div class="row">
    <div class="large-12 columns text-center">
      <div class="contact">
        <p>Explore working with Grade A on your next marketing challenge:</p>
        <button data-reveal-id="Morgan">Contact us here</button><br>
        <h3><a href="http://eepurl.com/hZEm2" class="center">Then sign up for our email updates</a></h3>
  </div></div></div>
<!--End Contact Area-->

</div>
<!--/Section Two-->


<!--Start Section Three-->
  <!--Parallax Image-->
    <section id="valuesimg" data-type="background" data-speed="10" class="pages"></section>
    <section id="values" data-type="background" data-speed="10" class="pages anchorouter"><span id="avalues"></span>
  <!--/Parallax-->

<!--Start Section 3-->
<div class="sectionthree">
  <div class="row">
    <div class="large-9 large-centered columns"> 
    <h1>Recent Articles</h1>
  </div>
</div>

<?php
$recent = new WP_Query();
$recent->query('showposts=2,post_type=post');
$recent->the_post(); ?>
<!--Article One-->
<div class="row">
  <div class="large-offset-1 large-5 columns">
    <h2><?php the_title(); ?></h2>
    <div class="panel_"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></div>
    <?php global $more; $more = 0; the_content(' '); $more = 1;?>
    <a href="<?php the_permalink(); ?>">Read More</a>
</div>
<!--/Article One-->

<?php $recent->the_post(); ?>
<!--Article Two-->
  <div class="large-5 columns end">
    <div class="article2">
    <h2><?php the_title(); ?></h2>
    <div class="panel_"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></div>
    <?php global $more; $more = 0; the_content(' '); $more = 1;?>
    <a href="<?php the_permalink(); ?>">Read More</a>
</div>
</div>
</div>
<!--/Article Two-->

<!--Start Read All-->
<div class="row">
<div class="viewall">
  <div class="large-12 columns text-center">
    <a href="/articles/"><button>View All Articles</button><br></a>
  </div>
</div>
</div>
<!--/Read All-->

</div>
<!--/Section Three-->


<!--Start Section Four-->
<div class="sectionfour">
  <div class="row">
    <div class="large-9 large-centered columns"> 
      <h1>Let's Get Social</h1>
    </div>
  </div>

  <!--Start Twitter-->
  <div class="row">
    <div class="large-offset-1 large-5 columns">
      <div class="twitter">
        <a class="twitter-timeline" href="https://twitter.com/GradeAfresh" data-widget-id="325364577598574593">Tweets by @GradeAfresh</a> 
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
      </div>
    </div>
    <!--End Twitter-->

    <!--Start Facebook-->
    <div class="large-5 columns end">
      <div class="fb-like-box" data-href="http://www.facebook.com/GradeAFresh" data-width="292" data-show-faces="true" data-stream="true" data-border-color="#dddddd" data-header="false"></div>
    </div>
  </div>
  <!--End Facebook-->
</div>
<!--/Section Four-->

<?php get_footer(); ?>
