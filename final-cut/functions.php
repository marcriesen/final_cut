<?php
/**
 * Created by PhpStorm.
 * User: marcriesen
 * Date: 20.08.17
 * Time: 12:21
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Menu Rechts' ),
            'extra-menu' => __( 'Menu Unten' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );