<?php
/**
 * YO TAKAHASHI functions and definitions.
 *
 * @package Yo_Takahashi
 * @since 1.0.0
 */

/**
 * Sets up theme features and registers navigation menus.
 * 
 * @since 1.0.0
 *
 * @return void
 */
function yo23_takahashi_setup() {

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable custom logo.
    add_theme_support('custom-logo');

    // Enable custom header.
    add_theme_support('custom-header', array(
        'width'        => 900,
        'height'       => 160,
        'flex-width'   => true,
        'flex-height'  => true,
        'header-text'  => false,
    ));

    // Enable HTML5 markup.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menu.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'yo23-takahashi'),
    ));
}
add_action('after_setup_theme', 'yo23_takahashi_setup');


/**
 * Enqueues Google Fonts used by the theme.
 *
 * Loads Josefin Sans for navigation and Lato for body text.
 * 
 * @since 1.0.0
 * 
 * @return void
 */
function yo_takahashi_enqueue_fonts() {
    wp_enqueue_style(
        'yo-takahashi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&family=Lato:wght@400;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'yo_takahashi_enqueue_fonts');

/**
 * Enqueue the navigation script.
 *
 * Loads the JavaScript responsible for the responsive navigation
 * and off-canvas menu interactions on the frontend.
 * 
 * @since 1.0.0
 *
 * @return void
 */
function yo_takahashi_enqueue_navigation_script() {
    wp_enqueue_script(
        'yo-takahashi-navigation',
        get_theme_file_uri('assets/js/navigation.js'),
        array(),
        '1.0.0',
        true
    );
}
add_action(
    'wp_enqueue_scripts',
    'yo_takahashi_enqueue_navigation_script'
);
