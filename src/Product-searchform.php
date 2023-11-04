<form action="<?php echo esc_url( home_url( '/'  ) ); ?>" autocomplete="off">
    <label class="search-label">
        <input list="products" class="text-head" type="search" placeholder="Пошук препарату" value="<?php echo get_search_query(); ?>" name="name" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>">
        <datalist id="products">
            <?php
             $products_cat = get_term_by( 'slug', "all", 'product_cat' );
             $products = wc_get_products(array(
                 "category_id" => $products_cat->term_id,
             ));
             foreach ( $products as $product ) {
                setup_postdata( $product ); ?>
                <option value="<?php echo $product->name; ?>">
            <?php
                wp_reset_postdata();
             }
            ?>
        </datalist>
        <button class="sub-head" type="submit">Пошук</button>
        <input type="hidden" name="post_type" value="product" />
    </label>
</form>