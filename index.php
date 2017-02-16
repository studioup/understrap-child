<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="news">
  <div class="main-section ">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-10 border-right hidden-xs-border-right">

            <h1 class="gradient-red mt-5 mb-5">— Latest news<br>from Ablerex</h1>


          </div>
          <div class="col-sm-2">

          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>
  </div>
  <div class="main-section hidden-xs-down">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 border-left border-top container ">
        <div class="row no-gutters">
          <div class="col-sm-10 border-right">
            <div class="pt-4"></div>
          </div>
          <div class="col-sm-2">
            <div class="pt-4 background-pattern-red border-bottom"></div>
          </div>
        </div>
      </div>
      <div class="layout__col3 border-top">
            <div class="pt-4 background-pattern-red border-bottom"></div>
      </div>
    </div>
  </div>
  <div class="main-section ">
    <div class="layout no-overflow">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 border-left hidden-xs-border-left container ">
        <div class="row">
          <div class="col-md-10 col-sm-12 ">
            <div class="row pt-6">
          <?php if ( have_posts() ) : ?>

  					<?php /* Start the Loop */ ?>

  					<?php while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-5 offset-sm-1 pb-4">
  						<?php

  						/*
  						 * Include the Post-Format-specific template for the content.
  						 * If you want to override this in a child theme, then include a file
  						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
  						 */
  						get_template_part( 'loop-templates/news', get_post_format() );
  						?>
              </div>
  					<?php endwhile; ?>

  				<?php else : ?>

  					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

  				<?php endif; ?>
          </div>
          <div class="row">
            <div class="col-sm-10 pt-5 offset-sm-1">
              <?php understrap_pagination(); ?>
            </div>
          </div>
          </div>
          <div class="col-md-2 hidden-sm-down">
             <div class="nw_anim_01 hidden-sm-down" id="anim01"></div>
          </div>
        </div>
      </div>
      <div class="layout__col3">
<div class="nw_anim_line hidden-sm-down"></div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>
