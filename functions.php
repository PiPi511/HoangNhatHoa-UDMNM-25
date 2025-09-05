<?php
// Chặn truy cập trực tiếp vào file
if ( !defined('ABSPATH') ) exit;

/**
 * Nạp CSS & JS cho theme
 */
function cinestar_enqueue_scripts() {
    // CSS chính của theme
    wp_enqueue_style('cinestar-style', get_stylesheet_uri());

    // NẾU bạn dùng file build Tailwind (output.css), chỉ giữ dòng dưới:
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/output.css');

    // NẾU bạn dùng Tailwind CDN thì bỏ dòng trên, thay bằng dòng dưới:
    // wp_enqueue_style('cinestar-tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', false, '2.2.19');

    // JS chính của theme
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
 * Thiết lập các chức năng hỗ trợ của theme
 */
function cinestar_theme_setup() {
    // Cho phép thay đổi tiêu đề động
    add_theme_support('title-tag');
    // Hỗ trợ ảnh đại diện bài viết, post type
    add_theme_support('post-thumbnails');
    // Kích thước poster phim
    add_image_size('movie-poster', 300, 450, true);

    // Đăng ký menu
    register_nav_menus(array(
        'menu_left'    => __('Menu trái', 'cinestar'),
        'menu_right'   => __('Menu phải', 'cinestar'),
        'main-menu'    => __('Menu chính', 'cinestar'),
        'footer-menu'  => __('Menu chân trang', 'cinestar'),
    ));

    // Hỗ trợ logo tùy chỉnh (nâng cao, nếu muốn dùng Customizer)
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'cinestar_theme_setup');

/**
 * Đăng ký sidebar (widget area)
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
 * Đăng ký Custom Post Type: Movie
 */
function cinestar_register_cpt_movie() {
    $labels = array(
        'name'               => __('Phim', 'cinestar'),
        'singular_name'      => __('Phim', 'cinestar'),
        'menu_name'          => __('Phim', 'cinestar'),
        'name_admin_bar'     => __('Phim', 'cinestar'),
        'add_new'            => __('Thêm mới', 'cinestar'),
        'add_new_item'       => __('Thêm phim mới', 'cinestar'),
        'edit_item'          => __('Sửa phim', 'cinestar'),
        'new_item'           => __('Phim mới', 'cinestar'),
        'view_item'          => __('Xem phim', 'cinestar'),
        'all_items'          => __('Tất cả phim', 'cinestar'),
        'search_items'       => __('Tìm phim', 'cinestar'),
        'not_found'          => __('Không tìm thấy phim nào.', 'cinestar'),
        'not_found_in_trash' => __('Không có phim nào trong thùng rác.', 'cinestar'),
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-video-alt2',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'phim'),
        'show_in_rest'  => true, // Hỗ trợ Gutenberg & REST API
    );

    register_post_type('movie', $args);
}
add_action('init', 'cinestar_register_cpt_movie');

add_action('init', function() {
    add_post_type_support('post', 'thumbnail');
    add_post_type_support('movie', 'thumbnail');
});