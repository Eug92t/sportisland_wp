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
add_action( 'init', 'si_register_types' );

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
register_post_types
*/
function si_register_types() {
    register_post_type( 'services', [
        'labels' => [
            'name'               => 'Услуги', // основное название для типа записи
            'singular_name'      => 'Услуга', // название для одной записи этого типа
            'add_new'            => 'Добавить новую услугу', // для добавления новой записи
            'add_new_item'       => 'Добавить новую услугу', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать услугу', // для редактирования типа записи
            'new_item'           => 'Новая услуга', // текст новой записи
            'view_item'          => 'Смотреть услуги', // для просмотра записи этого типа.
            'search_items'       => 'Искать услуги', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Услуги', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-editor-insertmore', 
        'hierarchical'        => false,
        'supports'            => ['title'],
        'has_archive' => true
    ]);
}

/*
Add js & css
*/
function si_scripts(){
    wp_enqueue_style('si-style', _si_assets_path( 'css/styles.css' ), [], '1.0', 'all');
    wp_enqueue_script('si_js', _si_assets_path( 'js/js.js' ) , [], '1.0', 'true');
}
?>