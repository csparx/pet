<div class="left-bottom-home">
	<div class="title-wrapper">
		<h1>Media Center <span class="view-more">VIEW MORE <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></h1>
		
	</div>

	<div style="clear: both;"></div>
	
	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed mollis sapien.</p> -->
	<img class="media-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/media-center.png" alt="">
	
	<div class="title-wrapper">
		<h1>Past Issues <span class="view-more">VIEW MORE <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
	</div>
	<!-- LOAD CURRENT ISSUE COVERS -->


	<?php

	$args = array(
		'cat' 				=> 4,
		'posts_per_page'	=> 5,

	);

	$catquery = new WP_Query( $args );

	?>
	 

	<?php
	while($catquery->have_posts()) : $catquery->the_post();
	$custom = get_post_custom();
	?>

	<div class="cover-row">
		<a href="<?php echo get_permalink(); ?>">
			<img class="home-cov" src="<?php echo $custom['CoverPhoto'][0]; ?>" alt="">
		</a>
	</div>
		

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>




<div class="right-bottom-home">

	<div class="pet-fb">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-page" data-href="http://www.facebook.com/powerequipmenttrade" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="http://www.facebook.com/powerequipmenttrade" class="fb-xfbml-parse-ignore"><a href="http://www.facebook.com/powerequipmenttrade">Power Equipment Trade</a></blockquote>
		</div>
	</div>

	<!-- 300x250 AD -->
	<div id='div-gpt-ad-1508263002416-0' style='height:250px; width:300px;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508263002416-0'); });
	</script>
	</div>

	<!-- 4 125x AD -->
	<!-- 125x 1 -->
	<div id='div-gpt-ad-1508263076017-0' style='height:125px; width:125px;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508263076017-0'); });
	</script>
	</div>

	<!-- 125x 2 -->
	<div id='div-gpt-ad-1508263123532-0' style='height:125px; width:125px;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508263123532-0'); });
	</script>
	</div>

	<!-- 125x 3 -->
	<div id='div-gpt-ad-1508263182735-0' style='height:125px; width:125px;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508263182735-0'); });
	</script>
	</div>

	<!-- 125x 4 -->
	<div id='div-gpt-ad-1508263219563-0' style='height:125px; width:125px;'>
	<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508263219563-0'); });
	</script>
	</div>


</div>