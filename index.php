<?php get_header(); ?>

	<div class="container home-modules">
		<div class="left-col"><?php get_template_part( 'template-parts/leftcol', 'none' ); ?></div>
		<div class="main-col"><?php get_template_part( 'template-parts/primarycol', 'none' ); ?></div>
		<div class="right-col"><?php get_template_part( 'template-parts/rightcol', 'none' ); ?></div>
	</div>

	<div class="container digimag">
		<?php get_template_part( 'template-parts/digimag', 'none' ); ?>
	</div>

	<div class="container">
		<?php get_template_part( 'template-parts/bottom-homepage', 'none' ); ?>
	</div>

	<?php get_footer(); ?>

  </body>
</html>