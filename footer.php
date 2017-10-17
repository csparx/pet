<div class="container footer-wrapper">
  <div class="logo-social-wrapper">
    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/PET-logo.png" />
  
    <div style="clear: both;"></div>

    <div class="footer-social-links">
      <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
      <i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i>
      <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
      <i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i>
      <i class="fa fa-rss-square fa-lg" aria-hidden="true"></i>
    </div> 
  </div>

  

  <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  	</ul>
  <?php } ?>
  <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </ul>
  <?php } ?>
  <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </ul>
  <?php } ?>
  <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
    </ul>
  <?php } ?>

</div>

<div class="container dark-bg">
  <p class="copyright header-regular">Copyright <?php echo date("Y"); ?> | Website by <a href="http://www.christysparks.com">Christy Sparks</a> | Power Equipment Trade is a Hatton-Brown Publication</p>
</div>