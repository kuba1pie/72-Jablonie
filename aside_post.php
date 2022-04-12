<article>
  <?php the_category(); ?>
  <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>

  <?php //the_excerpt(); ?>
  <?php the_post_thumbnail(); ?>
</article>