<?php
/*
Template Name: Index 
*/ 
?>
<?php echo get_header(); ?>
      <div class="wrapper"> 
        <div class="banner" style="background-image: url(<?php echo get_field("banner_image"); ?>)">
          <div class="banner-content">
            <h1 class="banner-h1"><?php echo get_field("banner_title"); ?></h1>
            <p class="banner-text"><?php echo get_field("banner_text"); ?></p>
          </div>
        </div>
        <div class="info">
          <h2 class="info-h2"><?php echo get_field("benefits_title"); ?></h2>
          <?php echo get_benefits(); ?>
        </div>
        <?php echo get_products('top-sells'); ?>
      </div>
      <div class="popup" id="popup">
        <a class="popup-area" href="#">
          <div class="popup-body"> 
            <div class="popup-content">
              <a class="popup-close close-popup" href="#">+</a>
              <div class="popup-block">
                <div class="left-popup">
                  <?php echo get_field("popub_text") ?>
                </div>
                <div class="right-popup">
                  <?php echo get_phones(true); ?>
                  <div class="mail-popup">
                    <a class="url" href="mailto:<?php echo get_email(); ?>"><?php echo get_email(); ?></a>
                  </div>
                  <?php echo get_sociables(true); ?>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
    </main>
<?php echo get_footer(); ?>