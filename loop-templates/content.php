<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article class="product-loop" id="post-<?php the_ID(); ?>">

  <div class="product-loop__image background-pattern-red">
    <a href="<?php the_permalink() ?>">
    	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </a>
  </div>
  <div class="product-loop__name border-top">
    <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h4>' ); ?>
  </div>

</article><!-- #post-## -->
