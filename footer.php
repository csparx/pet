<div class="footer-wrapper">
  <div class="container">
    <div class="logo-social-wrapper">
      <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/pet-logo.png" />
    
      <div style="clear: both;"></div>

      <div class="footer-social-links">
        <a href="http://www.facebook.com/powerequipmenttrade"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
        <a href="https://plus.google.com/u/0/b/106524655197810978772/106524655197810978772/about"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>
        <a href="http://twitter.com/powerequiptrade"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/channel/UCDrr1UeE3-quy-Qi56muTzg"><i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i></a>
        <!-- <i class="fa fa-rss-square fa-lg" aria-hidden="true"></i> -->
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

</div>

<div class="dark-bg">
  <div class="container">
    <p class="copyright header-regular">Copyright <?php echo date("Y"); ?> | Website by <a href="http://www.christysparks.com">Christy Sparks</a> | Power Equipment Trade is a Hatton-Brown Publication</p>
  </div>
</div>
