<?php

// Registering stylesheet
function theme_add_stylesheet() {
    wp_enqueue_style( 'mainstyle', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'mainstyles' );

// Removing the default editor
function init_remove_support(){
    $post_type = 'your post type';
    remove_post_type_support( $post_type, 'editor');
}

add_action('init', 'init_remove_support',100);