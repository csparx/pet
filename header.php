<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
   <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>

    <!-- Include Font Awesome CDN -->
    <script src="https://use.fontawesome.com/ad8a1ca9e0.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Web Ads -->
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
    </script>

    <script>
      googletag.cmd.push(function() {
        googletag.defineSlot('/1022230/PET_HOME_468x60', [468, 60], 'div-gpt-ad-1508262762239-0').addService(googletag.pubads());
        googletag.defineSlot('/1022230/PET-300x250', [300, 250], 'div-gpt-ad-1508263002416-0').addService(googletag.pubads());
        googletag.defineSlot('/1022230/PET_SIDEBAR_HOME_125x125-1', [125, 125], 'div-gpt-ad-1508263076017-0').addService(googletag.pubads());
        googletag.defineSlot('/1022230/PET_SIDEBAR_HOME_125x125-2', [125, 125], 'div-gpt-ad-1508263123532-0').addService(googletag.pubads());
        googletag.defineSlot('/1022230/PET_SIDEBAR_HOME_125x125-3', [125, 125], 'div-gpt-ad-1508263182735-0').addService(googletag.pubads());
        googletag.defineSlot('/1022230/PET_SIDEBAR_HOME_125x125-4', [125, 125], 'div-gpt-ad-1508263219563-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>


  </head>
  <body>
    <header>

  		<div class="container header-wrapper">

        <div class="social-links">
          <a href="http://www.facebook.com/powerequipmenttrade"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
          <a href="https://plus.google.com/u/0/b/106524655197810978772/106524655197810978772/about"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>
          <a href="http://twitter.com/powerequiptrade"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
          <a href="https://www.youtube.com/channel/UCDrr1UeE3-quy-Qi56muTzg"><i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i></a>
          <!-- <a href=""><i class="fa fa-rss-square fa-lg" aria-hidden="true"></i></a> -->
        </div> 
        <div class="pet-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pet-logo.png" alt=""></div>
        <div class="subscribe">
          <a href="http://www.powerequipmenttrade.com/subscribe/">Subscribe For Free</a>
        </div>

      </div>

      <nav class="nav-main">
        <div class="nav-container">
          <a id="resp-menu" class="responsive-menu" href="#"> Menu ☰</a>
          <?php
          $args = array(
            'menu'        => 'Main Menu',
            'menu_class'  => 'menu',
          );
          wp_nav_menu( $args );
          ?>
        </div>
      </nav>


      <script type="text/javascript">
        jQuery(function ($) {
          var touch   = $('#resp-menu');
          var menu  = $('.menu');

          $(touch).on('click', function(e) {
            a.stopPropagation();
            menu.slideToggle();
          });

          $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
          });

        });
      </script>

      <hr class="thick-line">
      <hr class="thin-line">
    </header>