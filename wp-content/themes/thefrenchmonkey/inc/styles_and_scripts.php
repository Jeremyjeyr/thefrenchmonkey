<?php
function ajout_scripts() {

// enregistrement des scripts
wp_register_script('main_script', JS_URL.'/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');

wp_register_script('bootstrap_script', JS_URL.'/bootstrap.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('bootstrap_script');

// enregistrement des styles
wp_register_style( 'reset_style', CSS_URL.'/reset.css' );
wp_enqueue_style( 'reset_style' );

wp_register_style( 'main_style', CSS_URL.'/main.css' );
wp_enqueue_style( 'main_style' );

wp_register_style( 'bootstrap_style', CSS_URL.'/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
