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
    else {
        
    }
    ?>    
<?php 
}
?>