<?php /* Footer */ ?>
<footer>
  <div class="footer">
    <div class="footer-text">
      <h4>Secure </br >Recruitment<span>.</span></h4>
      <div class="footer-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
      </div>
      <a class="email" href="mailto:email@sourcerecruitment.co.uk">email@sourcerecruitment.co.uk</a>
    </div>
    <div class="map">
      <p>Find us.</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4973.823063547086!2d-2.61902455146029!3d51.44141857391311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle%20map!5e0!3m2!1sen!2suk!4v1605626643380!5m2!1sen!2suk" 
       frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="social">
        <ul>
          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"/></a>
          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"/></a>
          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/linkedin.png"/></a>
          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/instagram.png"/></a>
        </ul>
    </div>
  </div>
</footer>
<?php wp_footer(); ?> 
</body>
</html>