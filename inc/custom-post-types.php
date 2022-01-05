<?php 

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'testimonial', [
		'label'  => 'Testimonials',
		'labels' => [
			'name'               => 'Testimonials', // основное название для типа записи
			'singular_name'      => 'Testimonial', // название для одной записи этого типа
			'add_new'            => 'Add Testimonial', // для добавления новой записи
			'add_new_item'       => 'Adding Testimonial', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Testimonial', // для редактирования типа записи
			'new_item'           => 'New Testimonial', // текст новой записи
			'view_item'          => 'View Testimonial', // для просмотра записи этого типа.
			'search_items'       => 'Search Testimonial', // для поиска по этим типам записи
			'not_found'          => 'Testimonial not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Testimonial not found in the trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Testimonials', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 8,
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'case_study', [
		'label'  => 'Case Study',
		'labels' => [
			'name'               => 'Case Study', // основное название для типа записи
			'singular_name'      => 'Case Study', // название для одной записи этого типа
			'add_new'            => 'Add post', // для добавления новой записи
			'add_new_item'       => 'Adding post', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Post', // для редактирования типа записи
			'new_item'           => 'New Post', // текст новой записи
			'view_item'          => 'View Post', // для просмотра записи этого типа.
			'search_items'       => 'Search Post', // для поиска по этим типам записи
			'not_found'          => 'Post not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Post not found in the trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Case Study', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 7,
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'custom-fields', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}