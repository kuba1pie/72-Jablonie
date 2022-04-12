<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

<article class="page-layout">
  <h2><?php the_title() ?></h2>
  <?php the_content() 
   ?>
  <img src="<?php the_post_thumbnail_url('large'); ?>">
  <p class="meta">
    <?php echo get_post_meta( get_the_ID(), '_wporg_meta_key', true ); ?>



  </p>

  <img src="<?php the_field('name'); ?>" />

  <p><?php the_content(); ?></p>
</article>

<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
 
get_footer();
 
?>