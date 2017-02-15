<?php
$terms = get_terms( array(
    'taxonomy' => 'products-category',
    'hide_empty' => false,
    'parent'        => 0,
    'childless' => false
) );
?>

<div class="layout  no-overflow">
  <div class="layout__col1 ">
  </div>
  <div class="layout__col2 container border-bottom border-left hidden-xs-border-left border-right hidden-xs-border-right">
    <div class="row">
      <div class="col-lg-5 offset-lg-1 offset-sm-1 col-sm-10 col-md-6 offset-md-1 pt-7">
        <h5 class="pl-6">—— <?php the_field('products_section_title') ?></h3>
        <h2 class="mt-4 mb-4 gradient-blue"><?php the_field('products_main_title') ?></h2>
        <div class="products__list-wrapper js-products-list mt-3 mb-3">
          <div class="products__list-image">
            <div class="products__list-image-counter js-counter position-0"></div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/fisarmonica.svg'; ?>" />
          </div>
          <ul class="products__list">
            <?php
            $c=0;
             foreach($terms as &$term ){ ?>
              <li class="js-slider-link" data-url="<?php echo get_term_link( $term ); ?>" data-num="<?php echo $c ?>"><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name ?></a></li>
            <?php
            $c++;
           } ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 col-md-5 align-self-end">
        <div class="products-slider hidden-sm-border-left border-left border-top xs-border-right js-product-slider">
          <?php foreach($terms as &$term ){ ?>
            <div class="products-slider__item background-pattern-red">
                <div class="products-slider__image">
                  <?php echo wp_get_attachment_image( get_field('image', $term) , 'medium'); ?>
                </div>
            </div>
          <?php } ?>
        </div>
        <div class="products-slider__controls hidden-sm-border-left border-left border-top xs-border-right">
          <div class="products-slider__arrow products-slider__arrow--left js-arrow-left">
            <i class="fa fa-angle-left"></i>
          </div>
          <div class="products-slider__link">
            <a href="#" class="btn btn-secondary">Read more</a>
          </div>
          <div class="products-slider__arrow products-slider__arrow--right js-arrow-right">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="layout__col3 border-bottom">
  </div>
</div>
<div class="layout">
  <div class="layout__col1  ">
  </div>
  <div class="layout__col2 container border-right hidden-xs-border-right">
    <div class="row">
      <div class="col-sm-5 offset-sm-7">
        <div class="pt-5 background-pattern-red border-left border-bottom xs-border-right"></div>
      </div>
    </div>
  </div>
  <div class="layout__col3">
  </div>
</div>
