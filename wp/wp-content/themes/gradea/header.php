<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Grade A</title>

  <!-- wordpress head functions -->
  <?php wp_head(); ?>
  <!-- end of wordpress head -->
	
  <!--Typekit-->
	<script type="text/javascript" src="//use.typekit.net/ijo2bhz.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!--Facebook-->  	
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!--Google Analytics-->	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	 
	  ga('create', 'UA-40596501-1', 'gradea.co');
	  ga('send', 'pageview');
	</script>

  <!--menu bar-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>
    $(function() {
      var pull    = $('#pull');
        menu    = $('nav ul');
        menuHeight  = menu.height();

      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });

      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
  </script>

  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
</head>





<body>
<div id="fb-root"></div>


<!--==============Navigation===============-->

<!--Responsive Nav Lives here-->
<div class="fixed">
<div class="menu">
<nav class="clearfix">
    <ul class="clearfix">
      <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container' => '', 'theme_location' => 'header-menu' ) ); ?>
      <li><a class="item" data-reveal-id="Morgan" href="#">Contact</li></a>
    </ul>
    <a href="#" id="pull"></a>
    <div class="responsivelogo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></div>
  </nav>
</div>
</div>
<!--/Responsive Nav-->


<!--Start Regular Nav-->
<div class="fixed">
  <div class="navigation">
    <div class="row"> 
      <div class="large-offset-1 large-3 columns text-center"><div class="logo"><a href="/" alt="Grade A Marketing"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a></div></div>
      <div class="large-8 columns text-center end">
        <ul>
          <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container' => '', 'theme_location' => 'header-menu' ) ); ?>
          <li><a class="item" data-reveal-id="Morgan" href="#">Contact</li></a>
        </ul>
      </div>
    </div>
  </div>
  
  <?php if(is_home() || is_category() || is_tag() || is_search()): ?>
    <!--Start Secondary Nav-->
    <div class="secondarynav">
    
          <!--Start Dropdown Buttons-->
          <div class="row">
            <div class="large-offset-1 large-3 columns">
              <a href="#" data-dropdown="drop1" class="dropdown filter">Sort By</a>
                <ul id="drop1" class="f-dropdown" data-dropdown-content>
                  <li><a href="<?php echo $_SERVER['REDIRECT_URL']; ?>">Most Recent</a></li>
                  <li><a href="?v_sortby=views&amp;v_orderby=desc">Most Popular</a></li>
                </ul>
            </div>
    
          <div class="large-3 columns">
              <a href="#" data-dropdown="drop2" class="dropdown filter">Filter By Topic</a>
                <ul id="drop2" class="f-dropdown" data-dropdown-content>
                  <?php wp_list_categories(array('title_li' => '', 'exclude' => '1', 'hide_empty' => '0')); ?>
                </ul>
            </div>
             <!--/Dropdown Buttons-->
             <div class="search large-3 columns"><?php get_search_form(); ?></div>
          </div>
        </div>
    
    
    </div><!--/Secondary Nav-->
  <?php endif; ?>
</div>
<!--/Regular Nav-->
