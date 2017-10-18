<?php
/*
* Primary column on homepage
*
*/
?>
<div class="main-col-post">

	<?php $catquery = new WP_Query( 'cat=1&posts_per_page=1' ); ?>
	 
	<?php
	while($catquery->have_posts()) : $catquery->the_post();
	$custom = get_post_custom();
	$featured_image = $custom['Thumbnail'][0];
	?>

	<div class="main-image-col">
		<iframe src="https://www.ustream.tv/embed/23430239?html5ui&autoplay=true" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no" width="100%" height="300px"></iframe>
	</div>

	<div class="category-name">Live</div>

	<a class="main-post-title" href="<?php the_permalink() ?>" rel="bookmark">Live From Louisville: Dealer Workshops</a>

	<p>Can’t make it to GIE+EXPO in Louisville this week? Power Equipment Trade will be streaming all three days worth of Dealer Workshop sessions right here! Presented by experts from Bob Clements International, the Equipment Dealers Assn. and the United Equipment Dealers Assn., topics will range from tax planning to digital marketing; managing a family business and how to set an effective labor rate. <a href="http://www.gie-expo.com/education/dealer-education/dealerworkshops">Click here</a> for the full Dealer Workshop schedule, including the list of presenters and topics.</p>


	<?php /*
	<?php if($featured_image){ ?>
	<div class="main-image-col">
		<img src="<?php echo $featured_image; ?>" alt="">
	</div>
	<?php } else { ?>
		<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/default-primary.png" alt="">

	<?php } ?>

	<div class="category-name">News</div>

	<a class="main-post-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

	<p><?php echo excerpt(18); ?></p>

	<!-- Need to reorganize users and authors -->
	<?php/* <p class="post-author"><?php echo 'By ' . get_the_author(); ?></p> */ ?>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>

<!-- 468x60 Ad -->
<div id='div-gpt-ad-1508262762239-0' style='height:60px; width:468px; margin: 0px auto; display: block;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508262762239-0'); });
	</script>
</div>