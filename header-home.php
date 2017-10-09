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
        <div class="social-links">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </div> 
        <div class="pet-logo"></div>
        <div class="subscribe"></div>
      </div>

    </header>
