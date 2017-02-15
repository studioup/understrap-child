<?php


$video_alt_image = get_field("main_image");
$image_attributes = wp_get_attachment_image_src( $video_alt_image, 'full' );

$detect = new Mobile_Detect;


$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$noVideo = ($detect->isMobile() || $detect->isTablet()) ? true : false;
$scriptVersion = $detect->getScriptVersion();

?>

<div class="hero layout no-overflow" style="background-image:url(<?php echo $image_attributes[0]; ?>)">
  <?php if (!$noVideo) { ?>
  <div class="hero__video-container">
    <div class="hero__video-sf"></div>
  <video autoplay muted loop class="hero__video hidden-xs">
      <source src="<?php the_field("main_video") ?>
      " type="video/mp4"/>
                  Your browser does not support the video tag. I suggest you upgrade your browser.
  </video>
  </div>
  <?php } ?>
  <div class="layout__col1">
      <div class="hero__height1 border-top-white">
      </div>
  </div>
  <div class="layout__col2 container">
    <div class="hero__height1 hidden-xs-down">
      <div class="row no-gutters">
        <div class="col-sm-2 border-left-white border-bottom-white"></div>
        <div class="col-sm-10 border-left-white border-bottom-white"></div>
      </div>
    </div>
    <div class="hero__height2">
      <div class="row no-gutters">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 border-left-white hidden-xs-border-left border-right-white hidden-xs-border-right">
          <div class="hero__main-content background-pattern-white">
            <div class="hero__headlines">
              <h1>— <?php the_field('main_title') ?></h1>
              <h3><?php the_field('main_subtitle') ?></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
    <div class="hero__height3 hidden-xs-down">
      <div class="row no-gutters">

        <div class="col-sm-10 border-top-white border-right-white"></div>
          <div class="col-sm-2 border-top-white  border-right-white">
            <div class="hero__scrolldown">
              <i class="fa fa-angle-down"></i> Scroll down
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="layout__col3">
    <div class="hero__height1 border-bottom-white">
    </div>
  </div>
</div>
