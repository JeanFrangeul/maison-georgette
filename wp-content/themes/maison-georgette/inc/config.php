<?php

function georgette_enqueue_style()
{
    wp_enqueue_style('slick_css', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array());
}

add_action('wp_enqueue_scripts', 'georgette_enqueue_style');

function georgette_enqueue_script()
{
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick.min.js', ['jquery']);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery']);

    if (is_front_page()) {
        wp_enqueue_script('home-js', get_template_directory_uri() . '/assets/js/slider.js', ['jquery', 'slick-js']);
    }
}

add_action('wp_enqueue_scripts', 'georgette_enqueue_script');




function georgette_post_thumbnails()
{
    // Ajouter la prise en charge des images mises en avant
    add_theme_support('post-thumbnails');
}

add_action('init', 'georgette_post_thumbnails');


function georgette_theme_support()
{
    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support('title-tag');
}

add_action('init', 'georgette_theme_support');


function georgette_register_menu()
{
    register_nav_menus([
        'main-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}

function getMainMenuItems()
{
    // on récupère les emplacements de menu et les id de menus associés
    // get_nav_menu_locations renvoie un array qui contient des couples 'identifiant-emplacement-menu' => id-du-menu-associé-dans-le-BO
    $menuLocations = get_nav_menu_locations();
    $headerMenuId = $menuLocations['main-menu'];

    return wp_get_nav_menu_items($headerMenuId);
}


add_action('init', 'georgette_register_menu');
