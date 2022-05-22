<section class="lunch" id="lunch">
  <?php
	$args = array(
	    'post_type' => 'post',
	    'post_status' => 'publish',
	    'category_name' => 'lunch',
	    'posts_per_page' => 1,
	);
	$arr_posts = new WP_Query( $args );
	 
	if ($arr_posts->have_posts() ):  
	    while ($arr_posts->have_posts() ):         $arr_posts->the_post();
	        ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
	            if (has_post_thumbnail() ):                 the_post_thumbnail();
	            endif;
	            ?>
    <div class="dish">
		<div class="dish--box">
		<p class="dish--title">Zestaw dnia</p>
      <p class="dish--date"><?php the_title(); ?></p>
      <span class="dish--name"><?php the_content(); ?></span>

		</div>
      
    </div>
  </article>
  <?php
	    endwhile;
	endif; ?>
</section>