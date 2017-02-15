<?php
/**
 * Template Name: Contacts
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="contacts">
  <div class="main-section ">
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-right hidden-xs-border-right">
            <h1 class="gradient-red mt-7 mb-3 pl-0 col-lg-9 col-md-10">— <?php the_field('main_title') ?></h1>
            <h3 class="pl-lg-6 pl-0 col-sm-10"><?php the_field('subtitle') ?></h3>
            <div class="pl-lg-6 mt-4 mb-7">
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
                          <div class="col-lg-2 col-sm-8"><strong><?php the_sub_field('label'); ?></strong></div>
                          <div class="col-lg-5 col-sm-8"><a href="<?php echo $link ?>"><?php the_sub_field('value'); ?></a></div>
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
          <div class="col-sm-3 hidden-xs-down">
            <div class="support_anim01">
              <div class="ct_anim_01" id="anim01"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout__col3 ">
      </div>
    </div>
  </div>
  <div class="main-section">
    <div class="layout ">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-right hidden-xs-border-right">
            <div class="pl-md-6 pl-0 mt-3 mt-md-6 mb-6">
              <h5 class="pl-6 ">—— <?php the_field('form_section_title') ?></h5>
              <h2 class="gradient-blue mt-2 col-sm-9 pl-0"><?php the_field('form_title') ?></h2>
              </div>
          </div>
          <div class="col-sm-3">

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
          <div class="col-md-9 border-right hidden-xs-border-right">
            <div class="pl-lg-6">
              <div class="contacts__form ">
                <?php the_field('form_content') ?>
              </div>
            </div>
          </div>
          <div class="col-md-3 hidden-sm-down border-top background-pattern-red">

          </div>
        </div>
      </div>
      <div class="layout__col3 border-top background-pattern-red">
      </div>
    </div>
    <div class="layout hidden-xs-down">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-right">
            <div class="pt-6"></div>
          </div>
          <div class="col-sm-3 border-top ">
          </div>
        </div>
      </div>
      <div class="layout__col3 border-top ">
      </div>
    </div>
    <div class="layout hidden-xs-down">
      <div class="layout__col1 border-top">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-top border-right ">
          </div>
          <div class="col-sm-2 border-right border-top">
            <div class="pt-3 background-pattern-red border-bottom"></div>
          </div>
          <div class="col-sm-1 border-bottom">
          </div>
        </div>
      </div>
      <div class="layout__col3 border-bottom">
      </div>
    </div>
    <div class="layout">
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-11 border-right hidden-xs-border-right pt-6 pb-6">
            <div class="row">
              <div class="col-md-7 offset-md-1 col-sm-8">
                <h5 class="pl-6">—— <?php the_field('sub_section_title') ?></h5>
                <h2 class="gradient-blue mt-2 mb-4 "><?php the_field('sub_title') ?></h2>
                <div class="pl-6 font-big"><?php the_field('sub_content') ?></div>
                <div class="text-right">
                  <a href="<?php the_field('sub_link') ?>" class="btn btn-secondary"><?php the_field('sub_link_label') ?></a>
                </div>
              </div>
              <div class="col-sm-4 hidden-xs-down">
                <div class="support_anim02">
                  <div class="ct_anim_02" id="anim02"></div>
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
  </div>

</div>
<?php get_footer(); ?>
