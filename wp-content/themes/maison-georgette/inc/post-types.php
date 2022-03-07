<?php

function georgette_register_post_types() {

            // CPT ACCESSOIRES
    $labels = array(
        'name' => 'Accessoires',
        'all_items' => 'Nos accessoires',  // affiché dans le sous menu
        'singular_name' => 'Accessoire',
        'add_new_item' => 'Ajouter accessoire',
        'edit_item' => 'Modifier l\'accessoire',
        'menu_name' => 'ACCESSOIRES'

    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-lightbulb',
    );

    register_post_type( 'accessoires', $args );
    
        // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type d\'accessoire',
            'new_item_name' => 'Nom du nouvel accessoire',
            'parent_item' => 'Type d\'accessoire parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );
    
        register_taxonomy( 'type-accessoires', 'accessoires', $args );


        //----------------------------------------
        //----------------------------------------
        //----------------------------------------


            // CPT Produits
    $labels = array(
        'name' => 'Cosmetiques',
        'all_items' => 'Nos cosmetiques',  // affiché dans le sous menu
        'singular_name' => 'Cosmetique',
        'add_new_item' => 'Ajouter un cosmetique',
        'edit_item' => 'Modifier le cosmetique',
        'menu_name' => 'COSMETIQUES'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 6, 
        'menu_icon' => 'dashicons-visibility',
    );

    register_post_type( 'cosmetiques', $args );
    
        // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type de cosmetiques',
            'new_item_name' => 'Nom du nouveau Cosmetique',
            'parent_item' => 'Type de cosmetique parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );
    
        register_taxonomy( 'type-cosmetiques', 'cosmetiques', $args );

        //----------------------------------------
        //----------------------------------------
        //----------------------------------------


            // CPT Epicerie fine
    $labels = array(
        'name' => 'Epicerie fine',
        'all_items' => 'Notre epicerie fine',  // affiché dans le sous menu
        'singular_name' => 'Epicerie fine',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Modifier le produit',
        'menu_name' => 'EPICERIE FINE'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 7, 
        'menu_icon' => 'dashicons-food',
    );

    register_post_type( 'epicerie-fine', $args );
    
        // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type de produits de l\'épicerie fine',
            'new_item_name' => 'Nom du nouveau Produit de l\'épicerie fine',
            'parent_item' => 'Type de produit de l\'épicerie fine parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );
    
        register_taxonomy( 'type-epicerie-fine', 'epicerie-fine', $args );

        //----------------------------------------
        //----------------------------------------
        //----------------------------------------

        // CPT Maison
    $labels = array(
        'name' => 'Maison',
        'all_items' => 'Nos produits de la maison',  // affiché dans le sous menu
        'singular_name' => 'Produit de la maison',
        'add_new_item' => 'Ajouter un produit de la maison',
        'edit_item' => 'Modifier le produit de la maison',
        'menu_name' => 'MAISON'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 8, 
        'menu_icon' => 'dashicons-admin-home',
    );

    register_post_type( 'maison', $args );
    
        // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type de produits de la maison',
            'new_item_name' => 'Nom du nouveau Produit de la maison',
            'parent_item' => 'Type de produit de la maison parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );
    
        register_taxonomy( 'type-maison', 'maison', $args );


        //----------------------------------------
        //----------------------------------------
        //----------------------------------------

        // CPT Pret a porter
    $labels = array(
        'name' => 'Pret a porter',
        'all_items' => 'Nos produits prets a porter',  // affiché dans le sous menu
        'singular_name' => 'Produit pret a porter',
        'add_new_item' => 'Ajouter un produit pret a porter',
        'edit_item' => 'Modifier le produit pret a porter',
        'menu_name' => 'PRET A PORTER'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 9, 
        'menu_icon' => 'dashicons-businessperson',
    );

    register_post_type( 'pret-a-porter', $args );
    
        // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type de produits prets a porter',
            'new_item_name' => 'Nom du nouveau Produit pret a porter',
            'parent_item' => 'Type de produit pret a porter parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );
    
        register_taxonomy( 'type-pret-a-porter', 'pret-a-porter', $args );


}
add_action( 'init', 'georgette_register_post_types' ); // Le hook init lance la fonction