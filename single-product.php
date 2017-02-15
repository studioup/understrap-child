<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
$terms = get_the_terms(get_the_ID(),"products-category");

?>
<div class="js-page" data-jsid="product">
  <div class="layout">
    <div class="layout__col1 border-bottom hidden-sm-border-bottom">
    </div>
    <div class="layout__col2 container border-bottom hidden-sm-border-bottom">
      <div class="row no-gutters">
        <div class="col-sm-12 border-right hidden-xs-border-right">
          <ol class="breadcrumb pl-md-6 mr-sm-3 mt-sm-5 mt-3">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Products</a></li>
            <?php foreach ($terms as &$term) { ?>
              <li class="breadcrumb-item"><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name ?></a></li>
            <?php } ?>
            <li class="breadcrumb-item"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="row no-gutters border-right hidden-xs-border-right">
          <div class="col-sm-7 pr-4">
            <h1 class="h2 gradient-blue mb-4 mt-3"><?php the_title(); ?></h1>
            <h6 class="pl-md-6 mb-4">
              Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.
            </h6>
            <div class="product__content">
              <?php the_content( 'Read more ...' ); ?>

            </div>

          </div>
          <div class="col-sm-5 align-self-end xs-border-right xs-border-bottom mt-5 mt-sm-0">
            <div class="row no-gutters">
              <div class="col-sm-12 border-left border-top border-bottom ">
                <div class="product__image  background-pattern-red text-center p-4">
                  <?php the_post_thumbnail() ?>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-md-6 border-left">
                <div class="product__button text-center pt-3 pb-3">
                <a href="#" class="btn btn-secondary">Specifications</a>
                </div>
              </div>
              <div class="col-md-6 border-left sm-border-top">
                <div class="product__button text-center pt-3 pb-3">
                <a href="#" class="btn btn-secondary">Download</a>
              </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-sm-12 border-left border-top sm-border-bottom hidden-xs-border-bottom">
                <div class="product__button text-center pt-3 pb-3">
                <a href="#" class="btn btn-secondary">Power Calculator</a>
              </div>
              </div>

            </div>

          </div>
        </div>

      <?php endwhile; // end of the loop. ?>



    </div>
    <div class="layout__col3 border-bottom">
    </div>
  </div>
  <div class="layout">
    <div class="layout__col1 ">
    </div>
    <div class="layout__col2 container border-right hidden-xs-border-right">
      <div class="row no-gutters pt-7">
        <div class="border-left border-top col-lg-1 xs-border-right offset-lg-11 col-md-2 offset-md-10">
          <div class="go-top">
            <a href="#">⇠ Back</a>
          </div>
        </div>
      </div>


    </div>
    <div class="layout__col3 background-pattern-red">
    </div>
  </div>
</div>
<?php
get_footer(); ?>
