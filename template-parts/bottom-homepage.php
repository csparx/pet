<div class="left-bottom-home">
	<h1>Media Center</h1>
	<h4 class="view-more">VIEW MORE <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed mollis sapien.</p>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/media-center.png" alt="">

	<h1>Past Issues</h1>
	<h4 class="view-more">VIEW MORE <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h4>
	<!-- LOAD CURRENT ISSUE COVERS -->


	<?php

	$args = array(
		'cat' 				=> 4,
		'posts_per_page'	=> 1,
	);

	$catquery = new WP_Query( $args );

	?>
	 

	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div class="post-image-col">
		<?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?>
		<?php echo get_post_meta($post_id, 'CoverPhoto') ?>
	</div>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>
<div class="right-bottom-home">
	<!-- 300x250 AD -->

	<!-- 4 125x AD -->
</div>