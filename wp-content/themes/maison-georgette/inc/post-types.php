<?php

function georgette_register_post_types() {
	
    // CPT Produits
    $labels = array(
        'name' => 'Produits',
        'all_items' => 'Nos produits',  // affiché dans le sous menu
        'singular_name' => 'Produit',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Modifier le produit',
        'menu_name' => 'Produits'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-cart',
    );

    register_post_type( 'produits', $args );
    
        // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type de produits',
            'new_item_name' => 'Nom du nouveau Produit',
            'parent_item' => 'Type de produit parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );
    
        register_taxonomy( 'type-produits', 'produits', $args );
}
add_action( 'init', 'georgette_register_post_types' ); // Le hook init lance la fonction