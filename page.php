<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
<?php if(is_page( 'about-us' )) : ?>
<h3>Thanks for visiting our page!</h3>

<?php endif ?>
<article class="page-layout">
  <div class="sitemap"><?php wp_list_pages(); ?></div>
  <h2><?php the_title() ?></h2>
  <h3>page.php</h3>
  <?php the_content() ?>
</article>

<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
get_template_part('aside');
get_footer();
 
?>