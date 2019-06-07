<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
<body>
    
    <header class="encabezado-sitio">
        <div class="contenedor">
            <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg " class="logotipo" >
            </a>
            </div><!-- Logo -->
            
            <div class="informacion-encabezado">
                <div class="redes-sociales">
                <?php $args = array(
                    'theme_location' => 'social-menu',
                    'container' => 'nav',
                    'container_class' => 'sociales',
                    'container_id' => 'sociales',
                    'link_before' => '<span class="sr-text">',
                    'link_after' => '</span>'
                ); 
                
                    wp_nav_menu($args);
                
                ?>
                </div><!-- redes sociales -->
            
                <div class="direccion">
                 <p>8179 Bay Avenue Mountain View, CA 94043</p>
                 <p>Teléfono: +1-92-456-7890</p>
                </div>
            
            </div>
        </div><!-- Contenedor -->
    </header>

    <nav class="menu-sitio">
        <div class="contenedor navegacion">
            <?php 
                $args = array(
                    'theme_location' => 'header-menu', //que menu quieres que imprima
                    'container' => 'nav',//que etiquetas quieres que use
                    'container_class' => 'menu-sitio'//que clase quieres que tenga
                );
                wp_nav_menu($args);//imprime el menu en la plantalla
            
            ?>
        </div>
    </nav>