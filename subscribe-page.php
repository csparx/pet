<?php 
/*
Template Name: Subscription Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container wrap">
	
	<?php
	while ( have_posts() ) : the_post();
	?>
		<?php custom_breadcrumbs(); ?>
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>

		<div class="page-content">
			<div id="wufoo-r7p6p1">
				Fill out my <a href="http://hattonbrown.wufoo.com/forms/r7p6p1">online form</a>.
				</div>
				<script type="text/javascript">var r7p6p1;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'hattonbrown', 
				'formHash':'r7p6p1', 
				'autoResize':true,
				'height':'3961',
				'async':true,
				'header':'show', 
				'ssl':true};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { r7p6p1 = new WufooForm();r7p6p1.initialize(options);r7p6p1.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php edit_post_link(__('Edit this page','MyProduct')); ?>
							<div class="clear"></div>
						</div>
		</div>


	<?php endwhile; ?>

	<?php get_sidebar();?>

	<div style="clear:both;"></div>

	</div>

</div>


<?php
get_footer();
?>