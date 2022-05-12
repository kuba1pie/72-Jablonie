<?php
get_header(); ?>
<h2><?php the_title() ?></h2>
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
  <div class=" lunch">
    <p>Zestaw dnia:</p>
    <p class="lunch-date"><?php the_title(); ?></p>
    </br>
    <p class="lunch-name"><?php the_content(); ?></p></br>
  </div>
</article>
<?php
	    endwhile;
	endif; ?>
<?php
get_footer(); ?>