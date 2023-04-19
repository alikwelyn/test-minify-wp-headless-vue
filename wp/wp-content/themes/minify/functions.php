<?php
/*
	* Register menus
*/
function register_menus() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menus' );

/*
* Title and thumbnails
*/
function title_and_thumbs() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'title_and_thumbs' );