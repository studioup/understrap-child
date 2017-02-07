<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
$terms = get_terms( array(
    'taxonomy' => 'products-category',
    'hide_empty' => false,
    'parent'        => 0,
    'childless' => false
) );
$termsSplitted=array_chunk($terms, 3);

?>

<div class="js-page" data-jsid="products_archive">
  <div class="layout">
    <div class="layout__col1">
    </div>
    <div class="layout__col2 container ">
      <div class="row">
        <div class="col-sm-10 border-right">
          <h3 class="pl-6 col-sm-8 mb-5">
            ——— Search in “Products” results
          </h3>
          <h2 class="gradient-blue col-sm-10 mb-4 mt-6">
          This is what we found</h2>


          </div>

        </div>
      </div>
      <div class="layout__col3">
      </div>
    </div>


         <div class="layout">
           <div class="layout__col1">
           </div>
           <div class="layout__col2 container ">
               <div class="row ">
                 <div class="col-sm-10 border-right">
                   <div class="row pl-6 ">

                     <?php if ( have_posts() ) : ?>

             					<?php /* Start the Loop */ ?>

             					<?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-sm-4">
                        <article class="category-loop" id="post-<?php the_ID(); ?>">
                          <div class="category-loop__image background-dotted-red">
                            <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail(); ?>
                            </a>
                          </div>
                          <div class="category-loop__name border-top">
                           <h5> <a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
                          </div>
                        </article><!-- #post-## -->
                        </div>
                      <?php endwhile; ?>

                    <?php endif; ?>



                </div>
              </div>
               </div>
             </div>
             <div class="layout__col3">
             </div>
           </div>





    <div class="layout">
      <div class="layout__col1">
      </div>
      <div class="layout__col2 container border-right">
        <div class="row no-gutters">
          <div class="border-left border-top col-sm-1 offset-sm-11">
            <div class="go-top">
              <a href="#">⇠ Back</a>
            </div>
          </div>
        </div>


      </div>
      <div class="layout__col3">
      </div>
    </div>

  </div>


<?php get_footer(); ?>
