<?php

function enqueue_university_files() {
    // Enqueue scripts
    wp_enqueue_script('university_main-scripts', get_template_directory_uri() . '/build/index.js', array(), '1.0.0', true);

    // Enqueue styles
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main-styles', get_template_directory_uri() . '/build/style-index.css');
    wp_enqueue_style('university_custom-styles', get_template_directory_uri() . '/build/index.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_action('wp_enqueue_scripts', 'enqueue_university_files');

function university_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');



?>


