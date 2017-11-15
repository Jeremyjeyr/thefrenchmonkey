<?php

function ajout_custom_type_init_freebies() {
$post_type = "freebies";
$labels = array(
        'name'               => 'Freebies',
        'singular_name'      => 'Freebies',
        'all_items'          => 'Tous les freebies',
        'add_new'            => 'Ajouter un freebies',
        'add_new_item'       => 'Ajouter un nouveau freebies',
        'edit_item'          => "Modifier un freebies",
        'new_item'           => 'Nouveau freebies',
        'view_item'          => "Voir le freebies",
        'search_items'       => 'Chercher un freebies',
        'not_found'          => 'Aucun résultat',
        'not_found_in_trash' => 'Aucun résultat dans la corbeille',
        'parent_item_colon'  => 'Profil parent:',
        'menu_name'          => 'Freebies',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-heart',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

}
add_action( 'init', 'ajout_custom_type_init_freebies' );

















    ?>
