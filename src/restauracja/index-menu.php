<section class="c-menu" id="menu">
  <h2>Menu</h2>
  <div class="wrapper">
    <?php
      $categories = array("starter","soups", "main","desserts", "cold", "hot","drinks");
      foreach ( $categories as $category ) {
        get_template_part('index-menu-dish', null, array('meal' => ( $category ))); 
      }
    ?>
  </div>
</section>