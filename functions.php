<?php 
function wpit_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wpit_resources');

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'html5', array( 'gallery', 'caption' ) );

add_filter('show_admin_bar', '__return_false');
?>
