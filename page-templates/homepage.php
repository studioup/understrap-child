<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="js-page" data-jsid="homepage">
  <div class="main-section">
    <?php get_template_part("page-templates/homepage/hero"); ?>
  </div>
  <div class="main-section">
    <?php get_template_part("page-templates/homepage/company"); ?>
  </div>
  <div class="main-section">
    <?php get_template_part("page-templates/homepage/products"); ?>
  </div>
  <div class="main-section">
    <?php get_template_part("page-templates/homepage/support"); ?>
  </div>
  <div class="main-section">
    <?php get_template_part("page-templates/homepage/news"); ?>
  </div>
</div>
<?php get_footer(); ?>
