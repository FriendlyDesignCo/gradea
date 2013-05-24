<!--==============Footer Lives Here===============-->

<!--Start Footer-->
<footer>
  <!--Start Top Footer-->
    <div id="topfooter">
      <div id="rule">
        <h3>Keep it Fresh</h3>
      </div>
    </div><!--End Top Footer-->

  <!--Start Bottom Footer-->
    <div id="mainfooter">
    <div class="row">
      
      <!--Left Side-->
      <div class="large-offset-2 large-4 columns">
        <center><a href="#" data-reveal-id="Morgan"><button>Contact us</button></a>
        <p>202-656-7765</p></center>
     </div><!--/Left side-->

      <!--Right Side-->
      <div class="large-offset-1 large-4 columns end">
        <div class="where">
        <p>Grade A Marketing<br>
        3865 Wilson Blvd, Suite 300<br>
        Arlington, VA 22205</p>
      </div>
      </div><!--/Right Side-->
    
    </div>

      <!--Copyright Text-->
      <div class="row">
      <div class="large-12 columns text-center">
        <div class="copy">&#64;2013 Grade A Marketing LLC</div>
      </div><!--/Bottom-->
      </div><!--End Bottom Footer-->
  
  </div><!--/mainfooter-->





</footer>
<!--End Footer-->

<!--==============Script===============-->
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>

  <?php wp_footer(); ?>

  <script>
    $(document).foundation();
  </script>

<div id="Morgan" class="reveal-modal large-12">
  <h2>Contact Us</h2>
  <div class="row"><div class="columns large-4">
    <p><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></p>
    <p>3865 Wilson Boulevard<br>

      Suite 300<br>
      Arlington, VA 22205</p>
      <p><a href="#">Follow</a><a href="#">Like</a></p>
    </div>  
    <div class="large-8 columns">
      <div class="columns small-6">Name*
        <input type="text">
        Email*
        <input type="text"></div>
        <div class="columns small-6">Company*
          <input type="text"> Phone
          <input type="text"></div>
         
            <div class="columns large-12">Message <textarea rows="3"></textarea>
            <button href="#" class="right">Submit</button></div>
          
        </div>
        <p><a class="close-reveal-modal">&#215;</a></p>
      </div>
    </div>
  </div></div>
</div>


</body>
</html>