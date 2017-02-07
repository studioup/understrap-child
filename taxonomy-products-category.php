<?php

$currentTaxonomy = get_query_var( 'taxonomy' );
$currentTerm = get_term_by('slug', get_query_var( 'term' ), $currentTaxonomy);
$terms = get_terms( $taxonomy, array(
  'parent' => $currentTerm->term_id
) );
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="taxonomy_archive">
  <div class="layout">
    <div class="layout__col1">
    </div>
    <div class="layout__col2 container ">
    <div class="row no-gutters">
      <div class="col-sm-11 border-right">

        <ol class="breadcrumb pl-6 mt-5">
          <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Products</a></li>
            <?php if ($currentTerm->parent!=0) {
              $parentTerm = get_term( $currentTerm->parent, $currentTaxonomy );
              ?>
              <li class="breadcrumb-item"><a href="<?php echo get_term_link( $parentTerm ); ?>"><?php echo $parentTerm->name ?></a></li>
            <?php } ?>
          <li class="breadcrumb-item"><?php echo single_term_title(); ?></li>
        </ol>

        <h1 class="h2 mt-4 gradient-blue"><?php echo single_term_title(); ?></h1>
      </div>
    </div>
    </div>
    <div class="layout__col3">
    </div>
  </div>

  <?php
if (sizeof($terms)>0){
$c=0;
foreach ($terms as &$term) {
  ?>
  <div class="layout">
    <div class="layout__col1">
    </div>
    <div class="layout__col2 container">
    <div class="row no-gutters">
      <div class="col-sm-11 border-right">
        <h3 class="pl-6 mt-5 mb-5" ><a href="<?php echo get_term_link( $term ); ?>">——— <?php echo $term->name ?></a></h3>
      </div>
    </div>
    </div>
    <div class="layout__col3">
    </div>
  </div>
  <div class="layout">
    <div class="layout__col1 <?php if ($c==0) echo "border-top" ?>">
    </div>
    <div class="layout__col2 container">
    <div class="row  no-gutters">
      <div class="col-sm-11 border-right">
        <div class="row">
          <div class="col-sm-10">
            <div class="row">
            <?php

            $args = array(
            	'post_type' => 'product',
            	'tax_query' => array(
            		array(
            			'taxonomy' => $currentTaxonomy,
            			'field'    => 'slug',
            			'terms'    => array( $term->slug ),
            		)
            	),
            );
            $query = new WP_Query( $args );

             while ( $query->have_posts() ) : $query->the_post(); ?>


             <div class="col-sm-4">
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
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    <div class="layout__col3">
    </div>
  </div>


  <?php
  $c++;
}
}else{

?>
<div class="layout mt-5">
  <div class="layout__col1 <?php if ($c==0) echo "border-top" ?>">
  </div>
  <div class="layout__col2 container">
  <div class="row  no-gutters">
    <div class="col-sm-11 border-right">
      <div class="row">
        <div class="col-sm-10">
          <div class="row">
          <?php

           while ( have_posts() ) : the_post(); ?>


           <div class="col-sm-4">
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
          </div>
        </div>
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
<div class="layout">
  <div class="layout__col1 border-top">
  </div>
  <div class="layout__col2 container border-top border-right">
    <div class="row no-gutters">
      <div class="border-left col-sm-1 offset-sm-11">
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
