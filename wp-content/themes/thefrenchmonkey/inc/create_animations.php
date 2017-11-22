<?php

function ajout_custom_type_init_animation() {
$post_type = "animation";
$labels = array(
        'name'               => 'Animation',
        'singular_name'      => 'Animation',
        'all_items'          => 'Toutes les animations',
        'add_new'            => 'Ajouter une animation',
        'add_new_item'       => 'Ajouter une nouvelle animation',
        'edit_item'          => "Modifier une animation",
        'new_item'           => 'Nouvelle animation',
        'view_item'          => "Voir l'animation",
        'search_items'       => 'Chercher une animation',
        'not_found'          => 'Aucun résultat',
        'not_found_in_trash' => 'Aucun résultat dans la corbeille',
        'parent_item_colon'  => 'Profil parent:',
        'menu_name'          => 'Animations',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-format-video',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
    $taxonomy = "format";
    $object_type = array("animation");

    $args = array(
        'label' => __( 'Format' ),
        'rewrite' => array( 'slug' => 'format' ),
        'hierarchical' => true,

      );
        register_taxonomy( $taxonomy, $object_type, $args );

}
add_action( 'init', 'ajout_custom_type_init_animation' );

















    ?>
