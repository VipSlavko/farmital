<form action="<?php echo esc_url( home_url( '/'  ) ); ?>">
    <label class="search-label">
        <input class="text-head" type="search" placeholder="Пошук препарату" value="<?php echo get_search_query(); ?>" name="name" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>">
        <button class="sub-head" type="submit">Пошук</button>
        <input type="hidden" name="post_type" value="product" />
    </label>
</form>