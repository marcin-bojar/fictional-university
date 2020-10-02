<?php
function university_files()
{
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    if(strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {
        wp_enqueue_script('main-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('main-js', get_theme_file_uri('/bundled-assets/scripts.b634e25475d9dd09c259.js'), NULL, '1.0', true);
        wp_enqueue_style('main-styles', get_theme_file_uri('/bundled-assets/styles.b634e25475d9dd09c259.css'));
    }
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
