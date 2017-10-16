<div class="container footer-wrapper">

  <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/PET-logo.png" />

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

<div class="container dark-bg justify-right">
  <p class="copyright"> Copyright 2017. All Rights Reserved.</p>
</div>