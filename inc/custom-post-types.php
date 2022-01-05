<?php 

add_action( 'init', 'register_post_types' );


function register_post_types() {

    /*
       * Post Type: Testimonials.
    */
    $labels = [
        "name" => __( "Testimonials", "'ikon'" ),
        "singular_name" => __( "Testimonial", "'ikon'" ),
    ];

    $args = [
        "label" => __( "Testimonials", "'ikon'" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => [ "slug" => "testimonial", "with_front" => true ],
        "query_var" => true,
        "menu_position" => 8,
        "menu_icon" => "dashicons-format-chat",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "testimonial", $args );

    /*
       * Post Type: Case Study.
    */
    $labels = [
        "name" => __( "Case Study", "'ikon'" ),
        "singular_name" => __( "Case Study", "'ikon'" ),
    ];

    $args = [
        "label" => __( "Case Study", "'ikon'" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "query_var" => true,
        "menu_position" => 7,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "case_study", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonial' );