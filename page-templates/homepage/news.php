<div class="layout no-overflow">
  <div class="layout__col1">
  </div>
  <div class="layout__col2 container border-right hidden-xs-border-right">
    <div class="row">
      <div class="col-lg-9 col-md-10 offset-sm-1">
        <div class="news-wrapper pt-7 pb-7">
          <h3 class="pl-6">—— News</h3>
          <h2 class="gradient-blue ">Latest from us</h2>
          <div class="news-list mb-4 mt-4 pl-6">
            <div class="row">
              <?php
               $args = array(
                'posts_per_page' => 4,
                'orderby' => 'most_recent'
                );

               $the_query = new WP_Query( $args );
               ?>

               <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                 <div class="col-sm-6">
                   <div class="news-list__item">
                     <a href="<?php the_permalink();?>">
                       <h5><?php the_title(); ?></h5>
                       <p><?php the_excerpt(); ?></p>
                     </a>
                   </div>
                 </div>

              <?php endwhile; else: ?>

              <?php endif; ?>



              <?php wp_reset_postdata(); ?>

            </div>
          </div>
          <a href="<?php echo get_permalink( get_page_by_path( 'news' ) ); ?>" class="btn btn-secondary">See more</a>
        </div>
      </div>
      <div class="col-md-1 col-lg-2 hidden-xs-down">
        <div class="anim_04" id="anim04"></div>
      </div>
    </div>
  </div>
  <div class="layout__col3">
  </div>
</div>
<div class="layout">
  <div class="layout__col1">
  </div>
  <div class="layout__col2 container border-right hidden-xs-border-right">
    <div class="anim_06" id="anim06"></div>
    <div class="row no-gutters">
      <div class="border-top border-left xs-border-right col-sm-1 offset-sm-11">
        <div class="go-top">
          <a href="#" class="js-totop">⇡ Top</a>
        </div>
      </div>
    </div>


  </div>
  <div class="layout__col3">
  </div>
</div>
