<?php
// Chặn truy cập trực tiếp
if ( !defined('ABSPATH') ) exit;

/**
 * Load CSS & JS
 */
function cinestar_enqueue_scripts() {
    // CSS chính của theme
    wp_enqueue_style('cinestar-style', get_stylesheet_uri());

    // Tailwind qua CDN
    wp_enqueue_style('cinestar-tailwind', "https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css");

    // JS chính
    wp_enqueue_script(
        'cinestar-main',
        get_template_directory_uri() . '/main.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'cinestar_enqueue_scripts');


/**
 * Theme supports
 */
function cinestar_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('movie-poster', 300, 450, true);

    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'cinestar'),
        'footer-menu' => __('Footer Menu', 'cinestar'),
    ));
}
add_action('after_setup_theme', 'cinestar_theme_setup');


/**
 * Sidebar
 */
function cinestar_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'cinestar'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="mb-4 p-4 bg-gray-100 rounded-lg">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="font-bold mb-2">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'cinestar_widgets_init');


/**
 * Custom Post Type: Movie
 */
function cinestar_register_cpt_movie() {
    $labels = array(
        'name'          => 'Movies',
        'singular_name' => 'Movie',
        'menu_name'     => 'Movies',
        'add_new'       => 'Add New',
        'add_new_item'  => 'Add New Movie',
        'edit_item'     => 'Edit Movie',
        'view_item'     => 'View Movie',
        'all_items'     => 'All Movies',
        'search_items'  => 'Search Movies',
        'not_found'     => 'No movies found.',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-video-alt2',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'movies'),
        'show_in_rest'  => true,
    );

    register_post_type('movie', $args);
}
add_action('init', 'cinestar_register_cpt_movie');
