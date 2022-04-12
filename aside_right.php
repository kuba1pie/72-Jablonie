<aside class="right">
  <p>Popularne:</p><?php
        // the query
        $query = new WP_Query( array(
          'meta_key' => 'post_views_count',
          'posts_per_page' => 5
      ) );
        ?>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('aside_post'); ?>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

  <?php else : ?>
  <p><?php __('No News'); ?></p>
  <?php endif; ?>

</aside>