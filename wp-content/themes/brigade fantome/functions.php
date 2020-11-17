<?php

function brigade_supports()
{
    add_theme_support('title-tag');
    register_nav_menu('header', 'Page accueil');
}

// Ajout des fichiers css et js

function scripts()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri());
    wp_enqueue_style('general', get_stylesheet_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'scripts');


function brigade_separator()
{
    return '|;';
}

add_filter('document_title_separator', 'brigade_separator');
