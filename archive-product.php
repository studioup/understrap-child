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
          <h1 class="gradient-red col-sm-10 mb-4 mt-6">
            — We’re empowered
by innovation</h1>
          <h3 class="pl-6 col-sm-8 mb-5">
            Our reliable products and enable to maintain power consistency and continuity.
          </h3>

          </div>

        </div>
      </div>
      <div class="layout__col3">
      </div>
    </div>
    <?php
    $c=0;
     foreach($termsSplitted as &$termSplitted ){

       if ($c==0){
         ?>
         <div class="layout">
           <div class="layout__col1">
           </div>
           <div class="layout__col2 container ">
               <div class="row ">
                 <div class="col-sm-10 border-right">
                   <div class="row pl-6 ">
                     <?php foreach($termSplitted as &$term ){ ?>
                       <div class="col-sm-4">
                       <article class="category-loop" id="post-<?php the_ID(); ?>">
                         <div class="category-loop__image background-dotted-red">
                           <a href="<?php echo get_term_link( $term ); ?>">
                             <?php echo wp_get_attachment_image( get_field('image', $term) , 'thumbnail'); ?>
                           </a>
                         </div>
                         <div class="category-loop__name border-top">
                          <h5> <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name ?></a></h5>
                         </div>
                       </article><!-- #post-## -->
                       </div>
                    <?php } ?>
                </div>
              </div>
               </div>
             </div>
             <div class="layout__col3">
             </div>
           </div>

         <?php
       }


      if ($c==1){
        ?>
        <div class="layout">
          <div class="layout__col1 border-top">
          </div>
          <div class="layout__col2 container border-top border-right ">
              <div class="row ">
                <div class="col-sm-10 offset-sm-2">
                  <div class="row ">
                    <?php foreach($termSplitted as &$term ){ ?>
                      <div class="col-sm-4">
                      <article class="category-loop" id="post-<?php the_ID(); ?>">
                        <div class="category-loop__image background-dotted-red">
                          <a href="<?php echo get_term_link( $term ); ?>">
                            <?php echo wp_get_attachment_image( get_field('image', $term) , 'thumbnail'); ?>
                          </a>
                        </div>
                        <div class="category-loop__name border-top">
                         <h5> <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name ?></a></h5>
                        </div>
                      </article><!-- #post-## -->
                      </div>
                   <?php } ?>
               </div>
             </div>
              </div>
            </div>
            <div class="layout__col3">
            </div>
          </div>

        <?php
      }
     ?>


      <?php
      $c++;
    }?>
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
