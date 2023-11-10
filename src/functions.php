<?php 
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('style', get_path('/assets/css/style.min.css'), array(), 'null', false);
    wp_enqueue_script('scripr', get_path('/assets/js/script.js'), array(), 'null', true);
});
	
	
add_filter( 'wpcf7_validate_configuration', '__return_false' );

function load_bloody_tinymce(){

    wp_enqueue_script( 'bloody_tinymce_js_main', includes_url() . 'js/tinymce/tinymce.min.js' );
    wp_enqueue_script( 'bloody_tinymce_js_plugin', includes_url() . 'js/tinymce/plugins/compat3x/plugin.min.js' );

}
add_action( 'admin_enqueue_scripts', 'load_bloody_tinymce' );

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support( 'custom-logo');
function get_path($path) {
    return get_template_directory_uri() . $path;
}
function get_menu($header = true) {
    $menu_items = wp_get_nav_menu_items("primary");
    ?>
    <?php
    if($header == true) { ?>
    <ul>
    <?php 
    foreach($menu_items as $item) { ?>
        <li>
        <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
        </li>
    <?php
    } 
    ?>
    </ul>
    <?php
    } 
    else { ?>
        <ul>
        <?php
        $menu_items = wp_get_nav_menu_items("footer");
        foreach($menu_items as $item) { ?>
            <li>
            <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
            </li>
        <?php
        } 
        ?>
        </ul>
        <?php
    }
    ?>    
<?php 
}
function get_email() {
    return get_bloginfo('admin_email');
}
function get_field($field) {
    return CFS()->get($field);
}
function get_phones($in_popub = false) {
    $extra_class = "";
    if($in_popub == true) {
        $extra_class = "-popup pud";
    }
    $phones = get_posts(array(
        "category_name" => "phones"
    ));
    $template = '<div class="phones-wrapper"><div class="phone'.$extra_class.' mob">
    ';
    foreach($phones as $phone) {
        setup_postdata($phone);
        $content = get_the_content();
        $tel = wp_strip_all_tags($content);
        $template.= '<p><a href="tel:';
        $template.= $tel;
        $template.= '"><b>';
        $template.= get_the_title($phone->ID);
        $template.= '</b></a></p>';
        wp_reset_postdata();
    }
    $template .= '</div></div>';
    return $template;
}
function get_sociables($in_popub = false) {
    $extra_class = "";
    if($in_popub) {
        $extra_class .= "s-popup";
    }
    $sociables = get_posts(array(
        "category_name" => "sociables",
        "order_by" => "ID",
        "order" => "ASC"
    ));
    $template = '<div class="messenger'.$extra_class.'">';
    foreach($sociables as $sociable) {
        setup_postdata($sociable);
        $content = get_the_content();
        $link = wp_strip_all_tags($content);
        $template.= '<a class="icon ';
        $template.= get_the_title($sociable->ID);
        $template.= '"href="';
        $template.= $link;
        $template.= '" >';
        $sociable_name = "";
        if($in_popub) {
            $sociable_name = ucfirst(strtolower(get_the_title($sociable->ID)));
        }
        $template .= $sociable_name . '</a>';
        wp_reset_postdata();
    }
    $template .= '</div>';
    return $template;
}
function get_logo() {
    return get_custom_logo();
}
function get_copyright() {
    $copyrights = get_posts(array("name" => "copyright"));
    $template = "";
    foreach($copyrights as $copyright) {
        setup_postdata($copyright);
        $content = get_the_content();
        $template = wp_strip_all_tags($content);
        wp_reset_postdata();
    }
    return $template;
}
function get_benefits() {
    $benefits = get_field("benefits_loop");
    $template = '<div class="info-block">';
    foreach($benefits as $benefit) {
        $template .= '
            <div class="info-mini-block">
                <img src="'.$benefit["benefits_icon"].'" alt="'.$benefit["benefits_name"].'" title="'.$benefit["benefits_name"].'" />
                <div claass="info-mini-block__desc">
                    <h3 class="info-h3">'.$benefit["benefits_name"].'</h3>
                    <p class="info-text">'.$benefit["benefits_text"].'</p>
                </div>
            </div>';
    }
    $template .= '</div>';
    return $template;
}
function get_products(array| string $cat_slag = 'all', $limit = 6) {
    if($cat_slag == "top-sells"){
        $products_cat = get_term_by( 'slug', $cat_slag, 'product_cat' );
        $products = wc_get_products(array(
        "category_id" => $products_cat->term_id,
        ));
        $template = '
        <div class="top-of-sells">
          <h4 class="top-of-sells-h4">'.$products_cat->name.'</h4>
          <div class="cardwrap">';
          foreach($products as $product) {
            setup_postdata( $product );
            $image_id = $product->image_id;
            $image_url = wp_get_attachment_image_src( $image_id, 'full' )[0];
            $product_name = $product->name;
            $template .= '<figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images">
                    <img class="card-image" src="'.$image_url.'" alt="'.$product_name.'" />
                  </div>
                  <p class="card-name">'.$product->name.'</p>
                  <p class="text-code">код товару: 
                    <p class="code">'.$product->get_attribute('code').'</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">'.$product->get_attribute('producer').'</p>
                  </p>
                  <div class="stick">
                  </div>
                  <div class="card-footer">
                  <p class="price">'.$product->price.' грн/уп</p>
                  <a class="btn popup-link" href="#popup">у кошик</a>
                  </div>
                </div>
              </figcaption>
            </figure>';
            wp_reset_postdata();
          }
          $template .= '
          </div>
            <div class="in-katalog-block">
                <a class="in-katalog" href="'.esc_url(home_url("/catalog")).'">у каталог</a>
            </div>
        </div>
    ';
    }
    else if($cat_slag == "all") {
        $products_cat = get_term_by( 'slug', $cat_slag, 'product_cat' );
        $products = wc_get_products(array(
            "category_id" => $products_cat->term_id,
        ));
        $template = '
        <div class="cards-catalog">
          <div class="cardwrap"> 
        ';
        foreach($products as $product) {
            setup_postdata( $product );
            $image_id = $product->image_id;
            $image_url = wp_get_attachment_image_src( $image_id, 'full' )[0];
            $product_name = $product->name;
            $template .= '
            <div class="line-cards">
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images"><img class="card-image" src="'.$image_url.'" alt="'.$product_name.'"/></div>
                  <p class="card-name">'.$product_name.'</p>
                  <p class="text-code">код товару: 
                    <p class="code">'.$product->get_attribute('code').'</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">'.$product->get_attribute('producer').'</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">'.$product->price.' грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure>
          </div>
            ';
        }
        $template .= '</div>
        </div>
        ';
    }
    else if(is_array($cat_slag)) {
        $cat_ids = '';
        for($i = 0; $i < count($cat_slag); $i++) {
            $cat_id = $cat_slag[$i];
            $category = get_term_by("slug", $cat_id, "product_cat", "ARRAY_A" );
            if($category) {
                $cat_ids .= $category["term_id"];
                if($i < count($cat_slag) - 1) {
                    $cat_ids .= ', ';
                }
            }
        }
        $args = array(
            'cat' => $cat_ids,
            'post_type' => 'product', // Тип постів (може відрізнятися залежно від налаштувань)
            'post_status' => 'publish', // Статус опублікованих постів
            'posts_per_page' => -1 // Показувати всі пости в категорії
        );
        $query = new WP_Query($args);
        $products_count = $query->found_posts;
        $pages = $products_count / $limit;
        $pages = ($pages < 1) ? 1 : $pages;
        $current_page = isset($_GET["current-page"]) ? (int)$_GET["current-page"] : 1;
        $products = wc_get_products(array(
            "category" => $cat_slag,
            'limit' => $limit,
            "page" => $current_page 
            ));
        $template = '
        <div class="cards-catalog">
        ';
        foreach($products as $product) {
            setup_postdata( $product );
            $image_id = $product->image_id;
            $image_url = wp_get_attachment_image_src( $image_id, 'full' )[0];
            $product_name = $product->name;
            $min = isset($_GET["min-price"]) ? $_GET["min-price"] : 0;
            $max = isset($_GET["max-price"]) ? $_GET["max-price"] : 10000000000;
            if(($min < $product->price) && ($max > $product->price)) {
            $template .= '
            <figure class="card">
              <figcaption> 
                  <div class="images"><img class="card-image" src="'.$image_url.'" alt="'.$product_name.'"/></div>
                  <p class="card-name">'.$product_name.'</p>
                  <p class="text-code">код товару: 
                    <p class="code">'.$product->get_attribute('code').'</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">'.$product->get_attribute('producer').'</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">'.$product->price.' грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
              </figcaption>
            </figure>
            ';
            }
        }
        $template .= '<div class="pagination">';
        function generate_url(int $page_number): string {
            global $wp;
            $old = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
            $new = add_query_arg(array(
                "current-page" => $page_number

            ), $old);
            return $new;
        }
    if($current_page > 1) {
        $prev = $current_page - 1;
        $template .= '<a class="pagination__item" href="'.generate_url($prev).'"><</a>';
    }
    for($i = 1; $i <= $pages; $i++) {
        $active = $current_page == $i ? ' active' : '';
        $template .= '<a class="pagination__item'.$active.'" href="'.generate_url($i).'">'.$i.'</a>';
    }
    if($current_page < $pages) {
        $next = $current_page + 1;
        $template .= '<a class="pagination__item" href="'.generate_url($next).'">></a>';
    }
    $template .= '</div>
        </div>
        ';
    }
    return $template;
}
function get_phones_list() {
    $phones = get_posts(array(
        "category_name" => "phones"
    ));
    $template = '
    <ul class="con-list">';
    foreach ($phones as $phone) {
        setup_postdata( $phone );
        $template .= '<li><a href="tel:'.wp_strip_all_tags(get_the_content()).'">'.get_the_title($phone->ID).'</a></li>';
        wp_reset_postdata();
    }
    $template .= '</ul>';
    return $template; 
}
function get_reviews_html($limit = 5) {
    $current_page = isset($_GET["pagenum"]) ? $_GET["pagenum"] : 1;
    $args = array(
        'category_name' => "reviews",
        'post_type' => 'post', // Тип постів (може відрізнятися залежно від налаштувань)
        'post_status' => 'publish', // Статус опублікованих постів
        'posts_per_page' => -1 // Показувати всі пости в категорії
    );
    
    $query = new WP_Query($args);
    $category_post_count = $query->found_posts; 
    $pages = $category_post_count / $limit;
    $pages = ($pages < 1 && $pages > 0) ? 1 : $pages;
    $reviews = get_posts(array(
        "category_name" => "reviews",
        "order" => "DESC",
        "order_by" => "date",
        "posts_per_page" => $limit,
        "offset" => ($current_page - 1) * $limit,
));
    $template = '
    <div class="reviews__list">';
    foreach ($reviews as $review) {
        setup_postdata($review);
        $time = get_post_time("d.m.Y", false, null, true);
        $template .= '<article class="reviews__item">
            <div class="reviews__head">
                <h3 class="reviews__author" role="author">'.$review->post_excerpt.'</h3>
                <time class="reviews__time" datetime="'.$time.'">'.$time.'</time>
            </div>
            <p class="reviews__content">
            '.get_the_content().'
            </p>
        </article>';
        wp_reset_postdata();
    }
    $template .= '<div class="pagination">';
    if($current_page > 1) {
        $prev = $current_page - 1;
        $template .= '<a class="pagination__item" href="?pagenum='.$prev.'"><</a>';
    }
    for($i = 1; $i <= $pages; $i++) {
        $active = $current_page == $i ? ' active' : '';
        $template .= '<a class="pagination__item'.$active.'" href="?pagenum='.$i.'">'.$i.'</a>';
    }
    if($current_page < $pages) {
        $next = $current_page + 1;
        $template .= '<a class="pagination__item" href="?pagenum='.$next.'">></a>';
    }
    $template .= '</div>';
    $template .= '</div>';
    return $template;
}
?>