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
add_action( 'after_setup_theme', 'si_setup');
add_filter('show_admin_bar', '__return_false');

function si_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

?>