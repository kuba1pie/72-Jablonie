<?php
$meal = $args['meal'];
?>
<article class="<?php echo $meal; ?>">
  <?php
	$args = array(
	    'post_type' => 'post',
	    'post_status' => 'publish',
	    'category_name' => $meal,
      "orderby" => 'date',
      "order" => 'ASC'
	);
	$arr_posts = new WP_Query( $args );
	 
	if ($arr_posts->have_posts() ):  ?>
  <h3 class="meal meal__<?php echo $meal ?>"><?php $cat = get_term_by( 'slug', $meal, 'category');
echo $cat->name; ?></h3>
  <div class="meals">
    <?php
    while ($arr_posts->have_posts() ): $arr_posts->the_post();
    ?>
    <p id="meal-<?php the_ID(); ?>" <?php post_class(); ?> <?php
	            if (has_post_thumbnail() ):                 the_post_thumbnail();
	            endif;
	            ?>>
      <?php the_title(); ?>
      <span class="price">
        <?php echo get_post_meta( get_the_ID(), 'Cena' ,true ); ?>zł
      </span>
      <span class="desc">
        <?php echo get_post_meta( get_the_ID(), 'Opis' ,true ); ?>
      </span>
    </p>
    <?php endwhile; ?>

  </div>
  <?php

  endif; ?>
</article>