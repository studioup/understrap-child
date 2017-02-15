<div class="layout no-overflow">
  <div class="layout__col1 border-bottom">
  </div>
  <div class="layout__col2 container border-bottom border-right hidden-xs-border-right">
    <div class="row">
      <div class="col-sm-8">

        <div class="company__slider">
          <div class="company__slider-item pt-7 pb-7">
            <div class="row">
              <div class="col-sm-10 offset-sm-1">
                <h5 class="pl-6">——— <?php the_field('company_section_title') ?></h3>
                <h2 class="mt-4 mb-4 gradient-blue"><?php the_field('company_main_title') ?></h2>
                <div class="js-company-slider">
                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('company_slider') ):

                    // loop through the rows of data
                      while ( have_rows('company_slider') ) : the_row();

                          ?>
                          <div class="company__slider-content pt-3 pb-3">
                                <div class="pl-6 font-big"><?php the_sub_field('content') ?></div>
                          </div>

                          <?php


                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                </div>
                <div class="text-right">
                  <a href="<?php the_field('company_link') ?>" class="btn btn-secondary">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="company__slider js-company-slider">



        </div>
      </div>
      <div class="col-sm-4 hidden-xs-down">
        <div class="anim_01" id="anim01"></div>
      </div>
    </div>
    <div class="row hidden-xs-down">
      <div class="col-sm-12">
        <div class="border-left border-top background-pattern-red pt-4"></div>
      </div>
    </div>

  </div>
  <div class="layout__col3">
  </div>
</div>
