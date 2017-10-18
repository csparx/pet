<?php
/**
 * The template for displaying category pages
 */

get_header();
?>
<?php if ( have_posts() ) : ?>

<div class="container wrap">

  <h1 class="page-title">
    <?php the_archive_title(); ?>
  </h1>

<?php endif; ?>

<?php custom_breadcrumbs(); ?>

  <?php
  if ( have_posts() ) :
  ?>

    <div class="cat-container">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

    <div class="cat-post">
      <div class="cat-thumb">
        <?php echo get_the_post_thumbnail( $post_id, 'thumbnail' ); ?>
      </div>
      <div class="cat-excerpt">
        <a class="cat-link" href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="entry-title">', '</h3>' ); ?></a>
        <?php the_excerpt();?>

      </div>
    </div>

    <div style="clear:both;"></div>
    <hr class="cat-hr"/>

    <?php
    endwhile;

    the_posts_pagination();
    ?>
    </div>

  <?php
  else :


  endif;

  get_sidebar();

  ?>
</div>
<div style="clear:both;"></div>

<?php
get_footer();
?>
