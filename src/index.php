<?php
/*
Template Name: Index 
*/ 
?>
<?php echo get_header(); ?>
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
<?php echo get_footer(); ?>