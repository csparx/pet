<?php get_header(); ?>

	<div class="container home-modules">
		<div class="main-col"><?php get_template_part( 'template-parts/primarycol', 'none' ); ?></div>
		<div class="left-col"><?php get_template_part( 'template-parts/leftcol', 'none' ); ?></div>
		<div class="right-col"><?php get_template_part( 'template-parts/rightcol', 'none' ); ?></div>
		<a class="view-more-mobile" href="/category/news/">View More</a>
	</div>

	<div class="digimag">
		<div class="container">
			<?php get_template_part( 'template-parts/digimag', 'none' ); ?>
		</div>
	</div>

	<div class="container">
		<?php get_template_part( 'template-parts/bottom-homepage', 'none' ); ?>
	</div>

	<?php get_footer(); ?>

  </body>
</html>