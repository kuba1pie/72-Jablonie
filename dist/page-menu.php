<?php
get_header(); ?>
<h2><?php the_title() ?></h2>
<section class="menu">

  <h2>Menu</h2>
  <div class="wrapper">

    <?php

  $categories = array("starter","soups", "main","desserts", "cold", "hot","drinks");
 
foreach ( $categories as $category ) {
      get_template_part('dish', null, array('meal' => ( $category ))); 

}
?>
  </div>

</section>
<?php

  $categories = array("breakfest","main");
 
foreach ( $categories as $category ) {
      get_template_part('dish', null, array('meal' => ( $category ))); 

}


  get_footer(); 
?>