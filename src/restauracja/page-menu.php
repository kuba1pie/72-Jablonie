<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
    <article class="page-layout">
      <section class="menu" id="menu">
        <?php get_template_part('index-menu'); ?>
      </section>
    </article>

<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;

get_footer();
 
?>