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
          <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
          <i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i>
          <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
          <i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i>
          <i class="fa fa-rss-square fa-lg" aria-hidden="true"></i>
        </div> 
        <div class="pet-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pet-logo.png" alt=""></div>
        <div class="subscribe">
          <a href="#">Subscribe For Free</a>
        </div>

      </div>
      <div class="container">
        <div class="nav-container">
          <a id="resp-menu" class="responsive-menu" href="#"> Menu ☰</a>
          <?php
          $args = array(
            'menu' => 'Main Menu',
          );
          wp_nav_menu( $args );
          ?>
        </div>
      </div>

      <hr class="thick-line">
      <hr class="thin-line">
    </header>