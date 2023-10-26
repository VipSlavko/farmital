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
?>