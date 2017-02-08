<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="news">
  <div class="main-section news">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-12 border-right hidden-xs-border-right">

            <?php while ( have_posts() ) : the_post(); ?>
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="gradient-blue mt-7 mb-md-5 mb-sm-3"><?php the_title() ?></h2>
                </div>
              </div>


              <div class="row">
                <div class="col-md-2 mb-3 mb-md-0">
                  <div class="news__category">
                    <?php the_category( ' ' ); ?>
                  </div>
                  <div class="news__date">
                    <?php the_date('Y m d') ?>
                  </div>
                </div>
                <div class="col-sm-11 col-md-8">
                  <div class="news__text">
                    <?php the_content() ?>
                  </div>
                </div>
                <div class="col-sm-2"></div>
              </div>


    				<?php endwhile; // end of the loop. ?>




          </div>
          <div class="col-sm-2">

          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>

  </div>
  <div class="main-section">
    <div class="layout">
      <div class="layout__col1 border-top hidden-xs-border-top">
      </div>
      <div class="layout__col2 container border-right border-top hidden-xs-border-top hidden-xs-border-right">
        <div class="row no-gutters ">
          <div class="border-left xs-border-top xs-border-right col-lg-1 offset-lg-11 col-sm-2 offset-sm-10">
            <div class="go-top">
              <a href="<?php echo get_permalink( get_page_by_path( 'news' ) ); ?>">⇠ Back</a>
            </div>
          </div>
        </div>


      </div>
      <div class="layout__col3 border-top hidden-xs-border-top ">
      </div>
    </div>
  </div>


</div>
<?php get_footer(); ?>
