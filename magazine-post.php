<?php
/*
 * Template Name: Magazine Issue
 * Template Post Type: post
 */
  
 get_header();  ?>

 <div class="container wrap">
	
	<?php
	while ( have_posts() ) : the_post();
	?>
		<?php custom_breadcrumbs(); ?>
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
		<?php cns_share_buttons(); ?>

		<div class="mag-content">
			<?php
			$custom = get_post_custom();
			?>
			<img class="cover-img" src="<?php echo $custom['CoverPhoto'][0]; ?>" alt="">

			<div class="mag-description"><?php the_content(); ?></div>

			<?php
			for ($i=1; $i < 12; $i++) { 
				$mag_title = 'Editorial' . $i;
				$mag_photo = 'EditorialPhoto' . $i;
				$mag_excerpt = 'EditorialExcerpt' . $i;

				echo '<div class="editorial-column">';
				echo '<h2 class="header-medium">' . $custom[$mag_title][0] . '</h2>';
				echo '<img align="left" class="mag-photo" src="' . $custom[$mag_photo][0] . '">';
				echo '<p class="mag-excerpt">' . $custom[$mag_excerpt][0] . '</p>';
				echo '</div>';
			}
			?>
		</div>


	<?php endwhile; ?>

	<?php get_sidebar();?>

	<div style="clear:both;"></div>

	</div>

</div>


<?php
get_footer();
?>