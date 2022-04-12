<?php
get_header();
get_template_part('aside_left');
if ( have_posts() ) : ?> <section><?php
	while ( have_posts() ) : the_post(); ?>
  <?php
get_template_part('main-post');
  ?>
  <?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 ?>
</section>

<?php
get_template_part('aside_right');
  get_footer();
  ?>
</section>