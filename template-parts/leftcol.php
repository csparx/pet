<?php $catquery = new WP_Query( 'cat=1&posts_per_page=1' ); ?>
<ul>
 
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<li><?php get_the_post_thumbnail(); ?></li>
<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile;
    wp_reset_postdata();
?>