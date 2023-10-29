<?php
/*
Template Name: Delivery 
*/ 
?>
<?php echo get_header(); ?>
    <main> 
      <div class="wrapper">
        <h1 class="h-del"><?php echo get_field("delivery_title"); ?></h1>
        <div class="new-postal-block"> 
          <div class="image-left">
            <img class="del-image" src="<?php echo get_field('delivery_image'); ?>" alt="<?php echo get_field("delivery_alt"); ?>">
          </div>
          <div class="text-right">
            <?php echo get_field("delivery_text"); ?>
          </div>
        </div>
        <div class="payment">
          <?php echo get_field("payment_text"); ?> 
        </div>
      </div>
    </main>
<?php echo get_footer(); ?>