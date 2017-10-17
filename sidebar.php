<?php
/**
 * The sidebar
 *
 */
?>

<div class="page-sidebar">
  <?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
    </ul>
  <?php } ?>
</div>