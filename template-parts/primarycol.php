<?php
/*
* Primary column on homepage
*
*/
?>
<div class="main-col-post">

	<?php $catquery = new WP_Query( 'cat=8512&posts_per_page=1' ); ?>
	 
	<?php
	while($catquery->have_posts()) : $catquery->the_post();
	$post_id = get_the_ID();
	$custom = get_post_custom();
	$featured_image = $custom['Thumbnail'][0];
	?>
	
	<?php if($featured_image){ ?>
	<div class="main-image-col">
		<img class="primary-img" src="<?php echo $featured_image; ?>" alt="">
	</div>
	<?php } else { ?>
		<img class="primary-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/default-primary.png" alt="">

	<?php } ?>

	<div class="category-name">
		<?php 

		$categories = get_the_category(); 
		if( ! empty($categories) ):
			echo esc_html( $categories[0]->name );
		endif;

		?>	
	</div>

	<a class="main-post-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

	<p><?php echo excerpt(30); ?></p>

	<!-- Need to reorganize users and authors -->
	<?php
	$article_author = get_field('article_author', $post_id);
	if($article_author){ ?>
		<p class="post-author"><?php echo 'By ' . get_field('article_author', $post_id); ?></p> 
	<?php } ?>
	

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>

<!-- 468x60 Ad -->
<div id='div-gpt-ad-1508262762239-0' style='height:60px; width:468px; margin: 0px auto; display: block;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508262762239-0'); });
	</script>
</div>