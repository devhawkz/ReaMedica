<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_enqueue_scripts', function () {
    $parent_handle = 'parent-style';
    $parent_style  = get_template_directory() . '/style.css';

    // Parent CSS
    wp_enqueue_style(
        $parent_handle,
        get_template_directory_uri() . '/style.css',
        [],
        file_exists($parent_style) ? filemtime($parent_style) : wp_get_theme(get_template())->get('Version')
    );

    // Child CSS
    $child_style = get_stylesheet_directory() . '/style.css';
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [ $parent_handle ],
        file_exists($child_style) ? filemtime($child_style) : wp_get_theme()->get('Version')
    );
}, 20);
