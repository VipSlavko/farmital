<?php 
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), 'null', false);
});
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
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
function get_phones() {
    $phones = get_posts(array(
        "category_name" => "phones"
    ));
    $template = '<div class="phone mob">
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
    $template .= '</div>';
    return $template;
}
?>