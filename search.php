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
      <div class="row no-gutters">
        <div class="col-lg-11 col-md-10 border-right">
          <div class="search_result pl-6 mb-1 mt-5">
            ——— Search in “Products” results
          </div>
          <h2 class="gradient-blue col-sm-10 mb-4 mt-3">
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
               <div class="row no-gutters ">
                 <div class="col-lg-11 col-md-10 border-right">
                   <div class="row pl-6 pr-3 ">

                     <?php if ( have_posts() ) : ?>

             					<?php /* Start the Loop */ ?>

             					<?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                          <?php

                          /*
                           * Include the Post-Format-specific template for the content.
                           * If you want to override this in a child theme, then include a file
                           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                           */
                          get_template_part( 'loop-templates/content', get_post_format() );
                          ?>
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
      <div class="layout__col1 border-top">
      </div>
      <div class="layout__col2 container border-top border-right">
        <div class="row no-gutters">
          <div class="border-left  col-lg-1 offset-lg-11 col-md-2 offset-md-10">
            <div class="go-top">
              <a href="<?php echo get_home_url(); ?>">⇠ Back</a>
            </div>
          </div>
        </div>


      </div>
      <div class="layout__col3">
      </div>
    </div>

  </div>


<?php get_footer(); ?>
