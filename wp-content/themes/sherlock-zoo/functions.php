<?php

// Registering stylesheet
function sherlock_zoos_stylesheet() {
    wp_enqueue_style( 'main_style', get_stylesheet_uri() );
    wp_enqueue_style( 'compiled_styles', get_stylesheet_directory_uri() . './dist/app.css', array(), false, 'all' );
}

add_action( 'wp_enqueue_scripts', 'sherlock_zoos_stylesheet' );

function sherlock_zoo_scripts()
{
    wp_enqueue_script( 'compiled_scripts', get_template_directory_uri() . './dist/app.js', null, false, false );
}

add_action( 'wp_enqueue_scripts', 'sherlock_zoo_scripts' );