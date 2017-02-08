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
      <div class="col-sm-12 col-lg-11 border-right hidden-xs-border-right">

        <ol class="breadcrumb pl-sm-6 mt-sm-5 mt-3">
          <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Products</a></li>
            <?php if ($currentTerm->parent!=0) {
              $parentTerm = get_term( $currentTerm->parent, $currentTaxonomy );
              ?>
              <li class="breadcrumb-item"><a href="<?php echo get_term_link( $parentTerm ); ?>"><?php echo $parentTerm->name ?></a></li>
            <?php } ?>
          <li class="breadcrumb-item"><?php echo single_term_title(); ?></li>
        </ol>

        <h1 class="h2 mt-sm-4 mt-2 gradient-blue"><?php echo single_term_title(); ?></h1>
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
      <div class="col-sm-12 col-lg-11 border-right hidden-xs-border-right">
        <h3 class="pl-6 mt-sm-5 mt-3 mb-3 mb-sm-3" ><a href="<?php echo get_term_link( $term ); ?>">——— <?php echo $term->name ?></a></h3>
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
      <div class="col-sm-12 col-lg-11 border-right hidden-xs-border-right">
        <div class="row">
          <div class="col-sm-11 col-lg-10">
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


             <div class="col-md-4 col-sm-6">
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
    <div class="col-sm-11 border-right hidden-xs-border-right">
      <div class="row">
        <div class="col-sm-11 col-lg-10">
          <div class="row">
          <?php

           while ( have_posts() ) : the_post(); ?>


           <div class="col-md-4 col-sm-6">
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
  <div class="layout__col1 border-top hidden-xs-border-top">
  </div>
  <div class="layout__col2 container border-top border-right hidden-xs-border-top hidden-xs-border-right">
    <div class="row no-gutters">
      <div class="border-left xs-border-top xs-border-right col-lg-1 offset-lg-11 col-sm-2 offset-sm-10">
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
