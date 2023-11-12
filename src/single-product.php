<?php
/*
Template Name: Product 
*/
global $product;
?>
<?php echo get_header(); ?>
<?php 
$categories_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' ); 
for($i = 0; $i < count($categories_ids); $i++){
  $category = get_term_by( 'id', $categories_ids[$i], 'product_cat', 'ARRAY_A' );
  if($category["parent"])
  {
    $parent = get_term_by("id", $category["parent"], "product_cat", "ARRAY_A");
    if($parent["slug"] != "common") {
    unset($categories_ids[$i]);
    } else {
      $categories_ids[$i] =  $category = get_term_by( 'id', $categories_ids[$i], 'product_cat', 'ARRAY_A' )["slug"];
    }
  }
}
$args = array(
  'category_name' => "reviews",
  'post_type' => 'post', // Тип постів (може відрізнятися залежно від налаштувань)
  'post_status' => 'publish', // Статус опублікованих постів
  'posts_per_page' => -1 // Показувати всі пости в категорії
);
$in_stock = !$product->is_in_stock() ? 'Товар: не в наявності' : 'Товар: в наявності';
$code = 'Код товару: '.$product->get_attribute("code");
$the_slug = 'not-is-stock';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'post',
  'post_status' => 'publish',
  'numberposts' => 1
);
$is_stock = (boolean)get_posts($args)[0]->post_content; 
$query = new WP_Query($args);
$category_post_count = $query->found_posts; 
?>
        <div class="top-info-nicetile"> 
          <div class="left-image-nicetile">
            <?php 
            $image_url = wp_get_attachment_url($product->get_image_id());
            $id = $product->ID;
            ?>
            <h1 class="h1-nicetile mobile"><?php echo the_title(); ?></h1>
            <img class="image-nicetile" src="<?php echo $image_url; ?>" alt="<?php echo the_title(); ?>">
          </div>
          <div class="right-info-nicetile">
            <h1 class="h1-nicetile pc"><?php echo the_title(); ?></h1>
            <p class="price-nicetile"><?php echo $product->get_price_html(); ?></p>
            <p class="producer-nicetile">Виробник: <?php echo $product->get_attribute("producer"); ?></p>
            <p class="code-nicetile"><?php if($is_stock || !isset($code)) { echo $in_stock;} else {echo $code;} ?></p>
            <div class="response-group">
              <p class="response"><?php echo $category_post_count ?> відгуків</p>
              <a class="view-all" href="<?php echo esc_url(home_url("/catalog")); ?>">переглянути усі</a>
            </div>
            <?php echo $product->get_short_description(); ?>
            <div class="buy-block">
              <!-- <select class="select-nicetile" name="form"> 
                <option value="Таблетки">Таблетки</option>
                <option value="Саше(Порошок)">Саше(Порошок)</option>
              </select> -->
              <a class="a-nicetile popup-link" href="#popup">купити</a>
            </div>
          </div>
        </div>
        <div class="main-info-block-nicetile">
          <?php echo $product->get_description(); ?> 
        </div>
        <div class="similar-products">
        <?php
            $products_old = wc_get_products(array(
                "category" => $categories_ids,
            )); 
            $products = array();
          for($i = 0; $i < count($products_old); $i++) {
            if($product->get_id() != $products_old[$i]->get_id()) {
              $products[] = $products_old[$i];
            }
          }
          if(count($products) > 0) {
          ?>
          <h6 class="top-of-sells-h4">Схожі товари</h6>
          <div class="cardwrap">
            <?php
            foreach ( $products as $product_item ) {
              setup_postdata($product_item); ?>
              <figure class="card">
              <?php $image_url = wp_get_attachment_url($product_item->get_image_id()); ?>
              <figcaption> 
                <div class="cardimg">
                  <div class="images">
                    <img class="card-image" src="<?php echo $image_url; ?>" alt="<?php echo get_the_title($product_item->get_id()); ?>"/>
                  </div>
                  <p class="card-name"><?php echo get_the_title($product_item->get_id()); ?></p>
                  <p class="text-code">код товару: 
                    <p class="code"><?php echo $product_item->get_attribute("code"); ?></p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer"><?php echo $product_item->get_attribute("producer"); ?></p>
                  </p>
                  <div class="stick"></div>
                  <p class="price"><?php echo $product_item->get_price_html(); ?>/уп</p>
                  <a class="btn popup-link" href="#popup">у кошик</a>
                </div>
              </figcaption>
            </figure> 
            <?php wp_reset_postdata();
            }
            ?>
          </div>
          <?php } 
          else {
          echo get_products('top-sells');
          } 
          ?>
        </div>
      </div>
<?php echo get_footer(); ?>