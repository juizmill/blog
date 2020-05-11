<?php

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'escrevercodigo-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
} );

register_nav_menus(
    array(
        'menu-1' => __( 'Primary', 'escrevercodigo' ),
        'footer' => __( 'Footer Menu', 'escrevercodigo' ),
        'social' => __( 'Social Links Menu', 'escrevercodigo' ),
    )
);

add_action( 'wp_print_styles', function () {
    wp_dequeue_style( 'wp-block-library' );
}, 100 );