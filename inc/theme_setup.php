<?php 
add_action( 'after_setup_theme', 'starter_setup' );
add_theme_support( 'custom-logo' );

function starter_setup(){
	load_theme_textdomain( 'starter', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

	//main menu
	register_nav_menus(
		array( 
			'header-menu' => __( 'Header Menu', 'Energy Website' ),
		)
	);
}
