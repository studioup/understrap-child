<?php
/**
 * Template Name: Careers
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="careers">
  <div class="main-section ">
    <div class="layout no-overflow">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-right hidden-xs-border-right">
            <h1 class="gradient-red mt-7 mb-3 pl-0 col-sm-10">— <?php the_field('main_title') ?></h1>
            <h3 class="pl-6 col-sm-10"><?php the_field('subtitle') ?></h3>
            <div class="pl-sm-6 mt-4 mb-7">
              <div class="contact-list">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('contacts') ):

                 	// loop through the rows of data
                    while ( have_rows('contacts') ) : the_row();

                        switch(get_sub_field('type')){
                          case 'email':
                            $link="mailto:".get_sub_field('value');
                          break;
                          case 'phone':
                            $link="tel://".get_sub_field('value');
                          break;
                          case 'skype':
                            $link="skype:".get_sub_field('value');
                          break;
                        }

                        ?>
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-10"><strong><?php the_sub_field('label'); ?></strong></div>
                          <div class="col-lg-5 col-md-7 col-sm-10"><a href="<?php echo $link ?>"><?php the_sub_field('value'); ?></a></div>
                        </div>
                        <?php


                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
              </div>
              <div class="careers-list">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('open_positions') ):


                        ?>
                        <div class="row">
                          <div class="col-md-3 col-sm-10"><strong>Open Positions</strong></div>
                          <div class="col-md-7 col-sm-10">
                            <div id="accordion" class="" role="tablist" aria-multiselectable="true">
                              <?php
                              // loop through the rows of data
                                $c=0;
                               while ( have_rows('open_positions') ) : the_row();
                               ?>
                               <div class="card careers-list__item">
                                <div class="card-header careers-list__header" role="tab" id="headingOne">
                                  <h6 class="mb-0">
                                    <a data-toggle="collapse" class="js-position" data-parent="#accordion" href="#collapse<?php echo $c ?>" aria-expanded="true" aria-controls="collapse<?php echo $c ?>">
                                      <?php the_sub_field('position_name'); ?>
                                    </a>
                                  </h6>
                                </div>

                                <div id="collapse<?php echo $c ?>" class="collapse " role="tabpanel" aria-labelledby="heading<?php echo $c ?>">
                                  <div class="card-block careers-list__block">
                                    <?php the_sub_field('position_description'); ?>
                                  </div>
                                </div>
                              </div>
                             <?php
                             $c++;
                            endwhile; ?>
                            </div>
                          </div>
                        </div>
                        <?php

                else :

                    // no rows found

                endif;

                ?>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-3 border-right hidden-xs-down">
            <div class="cr_anim_01" id="anim01"></div>
          </div>
        </div>
      </div>
      <div class="layout__col3 ">
        <div class="cr_anim_line"></div>
      </div>
    </div>
  </div>
  <div class="main-section">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-right hidden-xs-border-right">
            <div class="pl-sm-6 mt-md-6 mt-3 mb-6">
              <h5 class="pl-6 ">—— <?php the_field('form_section_title') ?></h5>
              <h2 class="gradient-blue pl-0 mt-3 col-sm-9"><?php the_field('form_title') ?></h2>
            </div>
          </div>
          <div class="col-md-2 col-sm-3 border-right hidden-xs-border-right">

          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-12 col-md-9 border-right hidden-xs-border-right">
            <div class="pl-md-6">
              <div class="contacts__form ">
                <?php the_field('form_content') ?>
              </div>
            </div>
          </div>
          <div class="col-sm-2 hidden-sm-down border-right border-top background-pattern-red">

          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>
    <div class="layout hidden-xs-down ">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9">
            <div class="pt-7">


            </div>
          </div>
          <div class="col-sm-2 border-top border-right hidden-xs-border-right hidden-xs-border-top">
            <div class="cr_anim_02" id="anim02"></div>
          </div>
        </div>
      </div>
      <div class="layout__col3  ">
      </div>
    </div>
    <div class="layout mt-3 mt-sm-0">
      <div class="layout__col1">
      </div>
      <div class="layout__col2 container border-right hidden-xs-border-right">
        <div class="anim_06" id="anim06"></div>
        <div class="row no-gutters">
          <div class="border-top border-left xs-border-right col-lg-1 col-md-2 offset-lg-11 offset-sm-10">
            <div class="go-top">
              <a href="#" class="js-totop">⇡ Top</a>
            </div>
          </div>
        </div>


      </div>
      <div class="layout__col3">
      </div>
    </div>


    </div>
  </div>

</div>
<?php get_footer(); ?>
