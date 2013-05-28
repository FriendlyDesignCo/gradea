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
    <div class="row" itemscope itemtype="http://schema.org/Organization">
      
      <!--Left Side-->
      <div class="large-offset-2 large-4 columns">
        <center><a href="#" data-reveal-id="Morgan"><button>Contact us</button></a>
        <p><span itemprop="telephone">202-656-7765</span></p></center>
     </div><!--/Left side-->

      <!--Right Side-->
      <div class="large-offset-1 large-4 columns end">
        <div class="where">
        <p><span itemprop="name">Grade A Marketing</span><br>
        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">3865 Wilson Blvd, Suite 300</span><br>
        <span itemprop="addressLocality">Arlington, VA</span> <span itemprop="postalCode">22205</span></span></p>
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

<?php get_template_part('contact-form'); ?>


</body>
</html>
