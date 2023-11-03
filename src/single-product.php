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
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images">
                    <img class="card-image" src="<?php echo get_path("/assets/img/nicetile.jpg"); ?>" alt="nicetile"/>
                  </div>
                  <p class="card-name">Ніцетіл, Ницетил - (Nicetile), саше</p>
                  <p class="text-code">код товару: 
                    <p class="code">247589</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">Італія</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">1180 грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure>
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.jpg"); ?>" alt="nicetile"/></div>
                  <p class="card-name">Ніцетіл, Ницетил - (Nicetile), саше</p>
                  <p class="text-code">код товару: 
                    <p class="code">247589</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">Італія</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">1180 грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure>
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images">
                    <img class="card-image" src="<?php echo get_path("/assets/img/nicetile.jpg"); ?>" alt="nicetile"/>
                  </div>
                  <p class="card-name">Ніцетіл, Ницетил - (Nicetile), саше</p>
                  <p class="text-code">код товару: 
                    <p class="code">247589</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">Італія</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">1180 грн/уп</p><a class="btn popup-link" href="#popup">у кошик</a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </main>
<?php echo get_footer(); ?>