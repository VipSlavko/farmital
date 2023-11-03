<?php
/*
Template Name: Product 
*/
global $product;
?>
<?php echo get_header(); ?>
        <div class="top-info-nicetile"> 
          <div class="left-image-nicetile">
            <?php $image_url = wp_get_attachment_url($product->get_image_id()); ?>
            <img class="image-nicetile" src="<?php echo $image_url; ?>" alt="<?php echo the_title(); ?>">
          </div>
          <div class="right-info-nicetile">
            <h1 class="h1-nicetile"><?php echo the_title(); ?></h1>
            <p class="price-nicetile"><?php echo $product->get_price_html(); ?></p>
            <p class="producer-nicetile">Виробник: <?php echo $product->get_attribute("producer"); ?></p>
            <p class="code-nicetile">Товар: <?php if(!$product->is_in_stock()) {echo 'не';} ?> в наявності</p>
            <p class="response">15 відгуків</p>
            <a class="view-all" href="<?php echo esc_url(home_url("/catalog")); ?>">переглянути усі</a>
            <?php echo $product->get_short_description(); ?>
            <div class="buy-block">
              <select class="select-nicetile" name="form"> 
                <option value="Таблетки">Таблетки</option>
                <option value="Саше(Порошок)">Саше(Порошок)</option>
              </select>
              <a class="a-nicetile popup-link" href="#popup">купити</a>
            </div>
          </div>
        </div>
        <div class="main-info-block-nicetile">
          <?php echo $product->get_description(); ?> 
        </div>
        <div class="similar-products"> 
          <h6 class="top-of-sells-h4">Схожі товари</h6>
          <div class="cardwrap">
            <?php
            $products_cat = get_term_by( 'slug', "all", 'product_cat' );
            $products = wc_get_products(array(
                "category_id" => $products_cat->term_id,
            ));
            foreach ( $products as $product_item ) {
              setup_postdata($product_item); ?>
              <figure class="card">
              <?php $image_url = wp_get_attachment_url($product_item->get_image_id()); ?>
              <figcaption> 
                <div class="cardimg">
                  <div class="images">
                    <img class="card-image" src="<?php echo $image_url; ?>" alt="nicetile"/>
                  </div>
                  <p class="card-name"><?php echo get_the_title($product_item->ID); ?></p>
                  <p class="text-code">код товару: 
                    <p class="code"><?php echo $product_item->get_attribute("code"); ?></p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer"><?php echo $product_item->get_attribute("producer"); ?></p>
                  </p>
                  <div class="stick"></div>
                  <p class="price"><?php echo $product_item->get_price_html(); ?>/уп</p>
                  <a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure> 
            <?php wp_reset_postdata();
            }
            ?>
          </div>
        </div>
      </div>
<?php echo get_footer(); ?>