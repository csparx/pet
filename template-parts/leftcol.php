<?php
/*
* Left column on homepage
*
*/
?>

<div class="left-col-post">

	<?php $catquery = new WP_Query( 'cat=1&posts_per_page=1' ); ?>
	 
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div class="post-image-col">
		<?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?>
	</div>
	<?php $categories = get_the_category(); ?>
	<div class="category-name"><?php echo $categories[0]->cat_name; ?></div>

	<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

	<?php echo the_excerpt(); ?>

	<p class="post-author"><?php echo 'By ' . get_the_author(); ?></p>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>

<div class="left-col-post">

	<?php $catquery = new WP_Query( 'cat=643&posts_per_page=1' ); ?>
	 
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div class="post-image-col">
		<?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?>
	</div>

	<?php $categories = get_the_category(); ?>
	<div class="category-name"><?php echo $categories[0]->cat_name; ?></div>

	<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

	<?php echo the_excerpt(); ?>

	<p class="post-author"><?php echo 'By ' . get_the_author(); ?></p>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>