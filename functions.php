<?php 
function lapizzeria_setup(){
    add_theme_support('post-thumbnails');//para habilitar las imagenes destacadas

    add_image_size('nosotros',437,291, true);//para agregar medida en wordpress

}
add_action('after_setup_theme','lapizzeria_setup');

function lapizzeria_styles(){
     
    //registrar los estilos
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css',array(),'8.0.1');
    wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900',array(),'1.0.0');
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/all.min.css',array('normalize'),'5.8.2');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css',array('normalize'),'1.0');


    //llamar a los estilos
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');

    // Registrar JS
    wp_register_script('scripts',get_template_directory_uri() . '/js/scripts.js', array(),'1.0.0',true);//true es para que lo cargue en el footer

    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

function lapizzeria_menus(){
    register_nav_menus(array(
        'header-menu' =>__('Header Menu','lapizzeria'),
        'social-menu' =>__('Social Menu','lapizzeria')
    ));

}
add_action('init','lapizzeria_menus');

add_action( 'init', 'lapizzeria_especialidades' );
function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzases found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}

?>