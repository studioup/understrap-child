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
          <div class="col-sm-9 border-right">
            <h1 class="gradient-red mt-7 mb-3 col-sm-9">— <?php the_field('main_title') ?></h1>
            <h3 class="pl-6  col-sm-10"><?php the_field('subtitle') ?></h3>
            <div class="pl-6 mt-4 mb-7">
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
                          <div class="col-sm-2"><strong><?php the_sub_field('label'); ?></strong></div>
                          <div class="col-sm-5"><a href="<?php echo $link ?>"><?php the_sub_field('value'); ?></a></div>
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
          <div class="col-sm-3">
            <div class="support_anim01">
              <img src="<?php echo get_stylesheet_directory_uri() . '/img/support01.svg'; ?>" />
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
      <div class="layout__col1 ">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-right">
            <div class="pl-6 mt-6 mb-6">
              <h3 class="pl-6 ">—— <?php the_field('form_section_title') ?></h3>
              <h2 class="gradient-blue col-sm-9"><?php the_field('form_title') ?></h2>
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
          <div class="col-sm-9 border-right">
            <div class="pl-6">
              <div class="contacts__form ">
                <?php the_field('form_content') ?>
              </div>
            </div>
          </div>
          <div class="col-sm-3 border-top background-dotted-red">

          </div>
        </div>
      </div>
      <div class="layout__col3 border-top background-dotted-red">
      </div>
    </div>
    <div class="layout">
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
    <div class="layout">
      <div class="layout__col1 border-top">
      </div>
      <div class="layout__col2 container ">
        <div class="row no-gutters">
          <div class="col-sm-9 border-top border-right ">
          </div>
          <div class="col-sm-2 border-right border-top">
            <div class="pt-3 background-dotted-red border-bottom"></div>
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
          <div class="col-sm-11 border-right pt-6 pb-6">
            <div class="row">
              <div class="col-sm-7 offset-sm-1">
                <h3 class="pl-6">—— <?php the_field('sub_section_title') ?></h3>
                <h2 class="gradient-blue mt-4 mb-4 "><?php the_field('sub_title') ?></h2>
                <div class="pl-6 font-big"><?php the_field('sub_content') ?></div>
                <div class="text-right">
                  <a href="<?php the_field('sub_link') ?>" class="btn btn-secondary"><?php the_field('sub_link_label') ?></a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="support_anim02">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/img/support02.svg'; ?>" />
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
