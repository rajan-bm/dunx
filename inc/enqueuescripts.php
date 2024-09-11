<?php

// Linking CSS and Javascripts required for pages
function project_script_enqueue()
{
    wp_enqueue_style('main_style', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/app.css'));
    wp_enqueue_style('wp_additional_style', get_stylesheet_directory_uri() . '/assets/wp/wp.css', array(), filemtime(get_stylesheet_directory() . '/assets/wp/wp.css'));

    wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/app.js'), true);
    wp_enqueue_script('nav-scroll-js', get_stylesheet_directory_uri() . '/assets/wp/nav-scroll.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/wp/nav-scroll.js'), true);
}
add_action('wp_enqueue_scripts', 'project_script_enqueue');
