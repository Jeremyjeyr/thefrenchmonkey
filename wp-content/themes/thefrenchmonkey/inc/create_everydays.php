<?php

function ajout_custom_type_init() {
$post_type = "everydays";
$labels = array(
        'name'               => 'Everydays',
        'singular_name'      => 'everydays',
        'all_items'          => 'Tous les everydays',
        'add_new'            => 'Ajouter un everydays',
        'add_new_item'       => 'Ajouter un nouveau everydays',
        'edit_item'          => "Modifier un everydays",
        'new_item'           => 'Nouveau everydays',
        'view_item'          => "Voir le everydays",
        'search_items'       => 'Chercher un everydays',
        'not_found'          => 'Aucun résultat',
        'not_found_in_trash' => 'Aucun résultat dans la corbeille',
        'parent_item_colon'  => 'Profil parent:',
        'menu_name'          => 'Everydays',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-art',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

      $taxonomy = "sexe";
      $object_type = array("everydays");

      $args = array(
          'label' => __( 'Logiciel' ),
          'rewrite' => array( 'slug' => 'logiciel' ),
          'hierarchical' => true,

        );
          register_taxonomy( $taxonomy, $object_type, $args );

          $taxonomy = "vip";
          $object_type = array("everydays");

          $args = array(
              'label' => __( 'VIP' ),
              'rewrite' => array( 'slug' => 'vip' ),
              'hierarchical' => true,
      );
              register_taxonomy( $taxonomy, $object_type, $args );
}           
add_action( 'init', 'ajout_custom_type_init' );

















    ?>