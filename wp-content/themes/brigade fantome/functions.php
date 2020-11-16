<?php

// Ajout des fichiers css et js

function scripts() {
    wp_enqueue_style('style', get_stylesheet_directory_uri());
    wp_enqueue_style('general', get_stylesheet_directory_uri().'/css/style.css');
}

add_action('wp_enqueue_scripts', 'scripts');

//Ajout d'une sidebar dynamique

register_sidebar( array(
    'name' => __('Primary Sidebar', 'didactique'),
    'id' => 'sidebar-1',
    'desciption' => __('Main sidebar that appears on the left.', 'didactique'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
    
));

?>