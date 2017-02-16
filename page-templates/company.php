<?php
/**
 * Template Name: Company
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="company">
  <div class="main-section ">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-lg-10 col-sm-11 border-right hidden-xs-border-right">

            <div class="support col-sm-10 mt-7 mb-5 pl-4 pt-6 pb-5">
              <div class="support__corner support__corner--lt">
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/corner.svg'; ?>" />
              </div>
              <div class="support__corner support__corner--rb">
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/corner.svg'; ?>" />
              </div>
              <!--<div class="support__grid">
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/grid.svg'; ?>" />
              </div>-->
              <div class="support__anim anim_02" id="anim02"></div>
              <h2 class="h1 gradient-red col-sm-10">— <?php the_field('main_title') ?></h2>
              <h3 class="mt-3 pl-6"><?php the_field('main_content') ?></h3>

            </div>


          </div>
          <div class="col-lg-2 col-sm-1">

          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>
  </div>
  <div class="main-section ">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 border-left hidden-xs-border-left border-top container ">
        <div class="row no-gutters">
          <div class="col-lg-10 col-sm-11 border-right hidden-xs-down">
            <div class="pt-4"></div>
          </div>
          <div class="col-lg-2 col-sm-1">
            <div class="pt-4 background-pattern-red xs-border-left xs-border-right border-bottom"></div>
          </div>
        </div>
      </div>
      <div class="layout__col3 border-top">
            <div class="pt-4 background-pattern-red border-bottom"></div>
      </div>
    </div>
  </div>
  <div class="main-section ">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 border-left hidden-xs-border-left container ">
        <div class="row no-gutters">
          <div class="col-sm-12">

              <div class="row">
                <div class="col-sm-6 offset-sm-1">
                  <h5 class="pl-6 mt-4">
                    —— <?php the_field('history_section_title') ?>
                  </h5>
                  <h2 class="mt-3 gradient-blue">
                    <?php the_field('history_title') ?>
                  </h2>

                </div>
              </div>
              <div class="row">
                <div class="col-sm-11 offset-sm-1">
                  <div class="history mb-6">
                    <div class="history__line mt-4 mb-3">
                      <div class="history__arrow history__arrow--left">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/img/arrow.svg'; ?>" />
                      </div>
                      <div class="history__line-container">
                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('history') ):
                          $d=0;
                          $c=0;
                          // loop through the rows of data
                            while ( have_rows('history') ) : the_row();
                                $hasYear = get_sub_field('year') != "";
                                $dataNum="";
                                if ($hasYear) {
                                  $dataNum='data-num="'.$d.'"';
                                }
                                ?>
                                <div <?php echo $dataNum ?> data-text="<?php the_sub_field('text') ?>" class="js-line history__line-item history__line-item--<?php echo $c ?> <?php  if ($c%2) { echo "small"; } ?> <?php  if (!$hasYear) { echo "inactive-item"; } ?>"><span class="year"><?php the_sub_field('year') ?></span></div>
                                <?php
                                if ($hasYear){
                                  $d++;
                                }
                                $c++;
                            endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>
                      </div>
                      <div class="history__arrow history__arrow--right">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/img/arrow.svg'; ?>" />
                      </div>
                    </div>
                    <div class="history__label js-history-label hidden-sm-down">

                    </div>
                    <div class="history__mobile-slider js-mobile-history-slider hidden-md-up">
                      <?php

                      // check if the repeater field has rows of data
                      if( have_rows('history') ):
                        $c=0;
                        // loop through the rows of data
                          while ( have_rows('history') ) : the_row();

                            if (get_sub_field('year')!=""){
                              ?>
                              <div data-num="<?php echo $c ?>" class="history__mobile-slider-item">
                                <?php the_sub_field('text') ?>
                              </div>
                              <?php
                              $c++;
                              }

                          endwhile;

                      else :

                          // no rows found

                      endif;

                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-sm-11 offset-sm-1">
                  <div class="row">
                    <div class="col-sm-6">
                      <h5 class="pl-6 ">
                        —— <?php the_field('mission_section_title') ?>
                      </h5>
                      <h2 class="mt-3 gradient-blue">
                        <?php the_field('mission_title') ?>
                      </h2>
                    </div>
                    <div class="col-sm-6">
                      <div class="font-big">
                        <?php the_field('mission_content') ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>

        </div>
      </div>
      <div class="layout__col3">

      </div>
    </div>
  </div>
  <div class="main-section ">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 border-top border-left hidden-xs-border-top hidden-xs-border-left hidden-xs-border-right border-right container ">
        <div class="locations">
          <div class="row no-gutters">
            <div class="col-md-8 background-pattern-red xs-border-top xs-border-left xs-border-right">
              <div class="locations__world">
                <div class="locations__world-image">
                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('locations') ):
                      $c=0;
                   	// loop through the rows of data
                      while ( have_rows('locations') ) : the_row();

                          ?>
                          <div class="locations__pointer js-location-pointer" data-num="<?php echo $c ?>" style="left: <?php the_sub_field('left_coordinate') ?>%; top: <?php the_sub_field('top_coordinate') ?>%">
                            <span class="locations__pointer-inside"></span>
                          </div>
                          <?php
                          $c++;

                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                  <img src="<?php echo get_stylesheet_directory_uri() . '/img/world.svg'; ?>" />
                </div>
              </div>
            </div>
            <div class="col-md-4 border-left hidden-sm-border-left sm-border-top xs-border-top xs-border-right xs-border-left">
              <div class="locations__slider js-location-slider">
              <?php

              // check if the repeater field has rows of data
              if( have_rows('locations') ):

                // loop through the rows of data
                  while ( have_rows('locations') ) : the_row();

                      ?>
                      <div class="locations__details">
                        <div class="location__detail">
                          <h4><?php the_sub_field('country') ?></h4>
                          <div class="location__address">
                            <strong><?php the_sub_field('name') ?></strong><br>
                            <?php the_sub_field('address') ?>
                          </div>
                          <div class="location__contacts">
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
                                      <div class="col-lg-3 col-md-12 col-sm-3"><strong><?php the_sub_field('label'); ?></strong></div>
                                      <div class="col-lg-9 col-md-12 col-sm-9"><a href="<?php echo $link ?>"><?php the_sub_field('value'); ?></a></div>
                                    </div>
                                    <?php


                                endwhile;

                            else :

                                // no rows found

                            endif;

                            ?>
                          </div>
                        </div>
                        <div class="location__link border-top">
                          <a href="#" class="btn btn-secondary">Visit the website</a>
                        </div>
                      </div>
                      <?php


                  endwhile;

              else :

                  // no rows found

              endif;

              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>
    <div class="main-section ">
      <div class="layout">
        <div class="layout__col1 ">
        </div>
        <div class="layout__col2 border-top border-right container ">
          <div class="row no-gutters">
            <div class="col-sm-8 hidden-xs-down ">
              <div class="pt-4"></div>
            </div>
            <div class="col-sm-4 border-bottom border-left">
              <div class="pt-7 background-pattern-red  xs-border-right"></div>
            </div>
          </div>
        </div>
        <div class="layout__col3  border-top border-bottom">

        </div>
      </div>
    </div>
    <div class="main-section ">
      <div class="layout">
        <div class="layout__col1 ">
        </div>
        <div class="layout__col2 container border-right">
          <div class="row no-gutters">
            <div class="col-md-10 mt-3 mb-3 col-lg-8">
              <div class="responsibility mt-3 mb-3">
                <div class="responsibility__image">
                  <div class="cp_anim_01" id="anim01"></div>
                </div>
                <div class="row">
                  <div class="col-8 offset-2">
                    <h5 class="pl-6 ">
                      —— <?php the_field('sub_section_title') ?>
                    </h5>
                    <h2 class="mt-3 gradient-blue">
                      <?php the_field('sub_title') ?>
                    </h2>
                    <div class="pl-6 font-big mt-3">
                      <?php the_field('sub_content') ?>
                    </div>
                    <div class="text-right ">
                      <a href="<?php the_field('sub_link') ?>" class="btn btn-secondary"><?php the_field('sub_link_label') ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="layout__col3 ">

        </div>
      </div>
    </div>
    <div class="main-section">
      <div class="layout">
        <div class="layout__col1">
        </div>
        <div class="layout__col2 container border-right hidden-xs-border-right">
          <div class="row no-gutters">
            <div class="border-top border-left xs-border-right col-md-1 offset-md-11 col-sm-2 offset-sm-10">
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

<?php get_footer(); ?>
