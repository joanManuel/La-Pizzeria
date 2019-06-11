<?php 
function lapizzeria_setup(){
    add_theme_support('post-thumbnails');//para habilitar las imagenes destacadas
}
add_action('after_setup_theme','lapizzeria_setup');

function lapizzeria_styles(){
     
    //registrar los estilos
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css',array(),'8.0.1');
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

?>