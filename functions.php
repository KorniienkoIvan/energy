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

//load scripts and css for scripts
add_action( 'wp_enqueue_scripts', 'starter_load_scripts' );
function starter_load_scripts(){
	
	wp_enqueue_script( 'jquery' );

	/*theme external libraries*/
    wp_enqueue_script( 'lazy', get_template_directory_uri() . '/js/libs/jquery.lazy.min.js', false , false , true);
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/libs/imagesloaded.pkgd.min.js', array('jquery') , false , true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/libs/waypoints/jquery.waypoints.min.js',false , false , true);

	/*theme scripts*/
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false , false , true);
  wp_localize_script( 'main', 'customjs_ajax_object',
    array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    )
  );

	/*theme css*/
	wp_enqueue_style( 'main',get_template_directory_uri() . '/dist/main.min.css');

  /*additional css*/
    
}


//limit excerpt length
function excerpt($limit,$post_id=-1) {
  if($post_id==-1):
    $excerpt = explode(' ', get_the_excerpt(), $limit);
  else:
    $excerpt = explode(' ', get_the_excerpt($post_id), $limit);
  endif;
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


//ACF options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function the_acf_loop(){
  get_template_part('template-parts/loop/acf-blocks','loop');
}
