<?php
/*
* Right column on homepage
*
*/
?>

<div class="right-col-post">
	<h1 class="header-medium">Latest Posts</h1>

	<?php $catquery = new WP_Query( 'cat=1&posts_per_page=3' ); ?>
	 
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<?php $categories = get_the_category(); ?>
	<div class="category-name"><?php echo $categories[0]->cat_name; ?></div>

	<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

	<?php echo the_excerpt(); ?>

	<p class="post-author"><?php echo 'By ' . get_the_author(); ?></p>

	<hr class="orange-line">

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>