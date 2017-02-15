<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article class="news-loop" id="post-<?php the_ID(); ?>">


    <a href="<?php the_permalink() ?>">
      <h6><?php the_title() ?></h6>
      <?php the_excerpt() ?>
    </a>



</article><!-- #post-## -->
