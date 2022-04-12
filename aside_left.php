<aside class="left">
  <p>Najnowsze:</p><?php
        // the query
        $the_query = new WP_Query(array(
          'posts_per_page' => 3 
        ));
        ?>

  <?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
  <?php get_template_part('aside_post'); ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

  <?php else : ?>
  <p><?php __('No News'); ?></p>

  <?php endif; ?>
</aside>