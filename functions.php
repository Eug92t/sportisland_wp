<?php

/*
Путь в папку assets
*/
function _si_assets_path( $path ) {
    return get_template_directory_uri(). '/assets/' .$path;
}
/*
Custom Widget
*/
require_once(__DIR__ . '/inc/widget-text.php');
 /*
Add logo, head-title, img, widgets for posts to admin panel
*/
add_action('after_setup_theme', 'si_setup');
add_action('widgets_init', 'si_register');
add_action('wp_enqueue_scripts', 'si_scripts');
// add_filter('show_admin_bar', '__return_false');

function si_setup() {
    register_nav_menu('menu-header', 'Меню шапки');
    register_nav_menu('menu-footer', 'Меню подвала');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

function si_register() {
    register_sidebar([
        'name' => 'Сайдбар в шапке',
        'id' => 'si-header',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар в подвале',
        'id' => 'si-footer',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Колонка в подвале 1',
        'id' => 'si-footer-column-1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Колонка в подвале 2',
        'id' => 'si-footer-column-2',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Колонка в подвале 3',
        'id' => 'si-footer-column-3',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар карта',
        'id' => 'si-map',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар под картой',
        'id' => 'si-after-map',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_widget('si_widget_text');
}
/*
Add js & css
*/
function si_scripts(){
    wp_enqueue_style('si-style', _si_assets_path( 'css/styles.css' ), [], '1.0', 'all');
    wp_enqueue_script('si_js', _si_assets_path( 'js/js.js' ) , [], '1.0', 'true');
}
?>