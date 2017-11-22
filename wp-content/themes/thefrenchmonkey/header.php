<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

      <!-- Appel du fichier style.css de notre thème -->
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

      <?php wp_head(); ?>
    </head>


    <body <?php body_class(); ?>>
      <header id="header" class="container">
        <div class="header_text">
          <?php
              $args=array(
                'theme_location' => 'header', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'menu_header', // class à attribuer au menu
                'menu_id' => 'header_id' // id à attribuer au menu
                // voir les autres arguments possibles sur le codex
              );
                wp_nav_menu($args);

                  ?>
                  <a href="#"><img class="logo" src="http://localhost:8888/thefrenchmonkey/wp-content/uploads/2017/11/static1.squarespace.png" alt="logo_the_french_monkey">
          </a>

        </div>
        <div class="footer">

        </div>
      </header>
