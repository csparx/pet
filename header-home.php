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

  </head>
  <body>
    <header>

  		<div class="container">
        <div id="head">

          <div class="social-links">
            <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
            <i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i>
            <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
            <i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i>
            <i class="fa fa-rss-square fa-lg" aria-hidden="true"></i>
          </div> 
          <div class="pet-logo"></div>
          <div class="subscribe">
            <a href="#">Subscribe For Free</a>
          </div>

        </div>
      </div>
    </header>
