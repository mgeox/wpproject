<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/style.css' );

    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Poppins:wght@600&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support(
    'custom-logo',
    array(
        'width'       => 160,
        'height'      => 41,
        'flex-width'  => false,
        'flex-height' => false,
    )
);

// Menu locations
register_nav_menus(
    array(
        'menu' => __( 'Header', 'wpproject' ),
    )
);