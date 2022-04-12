<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
<?php
global $post;
$args = array('posts_per_page'=>8, 'post_type' => 'rider');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<img src="<?php the_post_thumbnail_url('large'); ?>">
<a href="<?php the_permalink(); ?>">
  <h4><?php the_title(); ?></h4>
</a>
<?php endforeach;
wp_reset_postdata();?>

<?php get_footer(); ?>