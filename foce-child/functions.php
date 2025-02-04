<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'theme', get_stylesheet_directory_uri() . '/assets/sass/theme.css',  array(), filemtime(get_stylesheet_directory() . '/assets/sass/theme.css'));
    }

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function enqueue_custom_scripts() {
        wp_enqueue_script(
            'animations.js', // Nom unique pour identifier le script
            get_stylesheet_directory_uri() . '/assets/js/animations.js', // Chemin vers le fichier JS
            array(), // Dépendances, si nécessaire
            null, //numéro version
            true // Place le script dans le footer
        );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function enqueue_swiper_assets() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    // Fichier de test JavaScript
    wp_enqueue_script('custom-swiper-test', get_stylesheet_directory_uri() . '/assets/js/custom-swiper-test.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');