<section class="news">
  <div class="main-posts">
    <?php
	$args = array(
	    'post_type' => 'post',
	    'post_status' => 'publish',
	    'category_name' => 'news'
	);
	$arr_posts = new WP_Query( $args );
	 
	if ($arr_posts->have_posts() ):  ?>
    <?php
    while ($arr_posts->have_posts() ): $arr_posts->the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <p class="meal-name"><?php the_title(); ?></p>
    </article>
    <?php
	    endwhile;
	endif; ?>
  </div>
</section>