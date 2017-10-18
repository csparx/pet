<?php 
/*
Template Name: Advertiser Index
*/

get_header(); ?>

<div class="container wrap">
	<h1 class="page-title">
		<?php the_title(); ?>
	</h1>
	<div class="adindex-container wrap">
	
	<?php $catquery = new WP_Query( 'post_type=advertisers&showposts=999&orderby=title&order=asc' ); ?>
	 
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<?php
	echo '<div class="adindex-wrapper">';
	$custom = get_post_custom();
	$featured_image = $custom['Thumbnail'][0]; ?>

	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

	

	<p><a href="<?php echo $custom['URL'][0]; ?>"><?php echo $custom['URL'][0]; ?></a></p>
	<p><a href="mailto:<?php echo $custom['Email'][0]; ?>"><?php echo $custom['Email'][0]; ?></a></p>
	<p><?php echo $custom['Phone'][0]; ?></p>
	</div>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>
	</div>


	<div style="clear:both;"></div>

	</div>

</div>


<?php
get_footer();
?>