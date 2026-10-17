<?php

function yo23_takahashi_setup() {

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable custom logo.
    add_theme_support('custom-logo');

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
