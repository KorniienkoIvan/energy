<?php 
//load scripts and css for scripts
add_action( 'wp_enqueue_scripts', 'starter_load_scripts' );
function starter_load_scripts(){
	
	wp_enqueue_script( 'jquery' );

	/*theme external libraries*/
    wp_enqueue_script( 'lazy', get_template_directory_uri() . '/js/libs/jquery.lazy.min.js', false , false , true);
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/libs/imagesloaded.pkgd.min.js', array('jquery') , false , true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/libs/waypoints/jquery.waypoints.min.js',false , false , true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/libs/slick/slick.min.js');

	/*theme scripts*/
	wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.min.js', false , false , true);
  wp_localize_script( 'main', 'customjs_ajax_object',
    array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    )
  );

	/*theme css*/
	wp_enqueue_style( 'main',get_template_directory_uri() . '/dist/main.min.css');
	wp_enqueue_style( 'fonts',get_template_directory_uri() . '/assets/fonts/fonts.css');

  /*additional css*/
    
}