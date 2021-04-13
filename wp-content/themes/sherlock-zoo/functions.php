<?php

// Registering stylesheet
function sherlock_zoos_stylesheet() {
    wp_enqueue_style( 'main_style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'sherlock_zoos_stylesheet' );

// Removing the default editor
function init_remove_support(){
    $post_type = 'your post type';
    remove_post_type_support( $post_type, 'editor');
}

add_action('init', 'init_remove_support',100);