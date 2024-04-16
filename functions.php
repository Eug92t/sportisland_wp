<?php

/*
Путь в папку assets
*/
function _si_assets_path( $path ) {
    return get_template_directory_uri(). '/assets/' .$path;
}

 /*
Add logo,head-title,img for posts to admin panel
*/
add_action('after_setup_theme', 'si_setup');
add_action('wp_enqueue_scripts', 'si_scripts');
add_filter('show_admin_bar', '__return_false');

function si_setup() {
    register_nav_menu('menu-header', 'Меню шапки');
    register_nav_menu('menu-footer', 'Меню подвала');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
/*
Add js & css
*/
function si_scripts(){
    wp_enqueue_style('si-style', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0', 'all');
    wp_enqueue_script('si_js', get_template_directory_uri() . '/assets/js/js.js', [], '1.0', 'true');
}
?>