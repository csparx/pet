<?php
/*
* Right column on homepage
*
*/
?>

<div class="right-col-post">
	<h2 class="header-regular">Latest Posts</h2>

	<?php $catquery = new WP_Query( 'cat=1&posts_per_page=4&offset=1' ); ?>
	 
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div class="latest-post">

	<?php $categories = get_the_category(); ?>
	<div class="category-name"><?php echo $categories[0]->cat_name; ?></div>

	<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

	<p><?php echo excerpt(12); ?></p>

	<!-- Need to reorganize users and authors -->
	<?php/* <p class="post-author"><?php echo 'By ' . get_the_author(); ?></p> */ ?>

	<hr class="orange-line">

	</div>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>