<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

<div class="container wrap">
		
	<?php
	while ( have_posts() ) : the_post();
	?>
		<?php custom_breadcrumbs(); ?>
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
		<?php cns_share_buttons(); ?>

		<div class="page-content">
			<?php the_content(); ?>
		</div>


	<?php endwhile; ?>

	<?php get_sidebar();?>

	<div style="clear:both;"></div>

	</div>

</div>


<?php
get_footer();
?>