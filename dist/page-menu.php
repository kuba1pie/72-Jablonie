<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
<article class="page-layout">
<section class="menu" id="menu">

  <h2 class="yellow">Menu</h2>
  <div class="wrapper">

    <?php

  $categories = array("starter","soups", "main","desserts", "cold", "hot","drinks");
 
foreach ( $categories as $category ) {
      get_template_part('dish', null, array('meal' => ( $category ))); 

}
?>
  </div>

</section>
</article>

<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
//get_template_part('aside');
get_footer();
 
?>