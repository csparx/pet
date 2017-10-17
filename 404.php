<?php
/**
 * The template for displaying 404 pages (not found)
 */


get_header(); ?>

<div class="container wrap">

		<?php custom_breadcrumbs(); ?>
		<h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>

		<div class="page-content">
			 <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

    		<?php get_search_form(); ?>
		</div>


	<?php get_sidebar();?>

	<div style="clear:both;"></div>

	</div>

</div>


<?php
get_footer();
?>