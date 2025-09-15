<?php
// Chặn truy cập trực tiếp vào file
if ( !defined('ABSPATH') ) exit;

/**
 * Nạp CSS & JS cho theme
 */
if ( ! function_exists( 'cinestar_enqueue_scripts' ) ) {
    function cinestar_enqueue_scripts() {
        // CSS chính của theme
        wp_enqueue_style('cinestar-style', get_stylesheet_uri());

        // Nếu dùng Tailwind build sẵn (output.css)
        wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/output.css');

        // Swiper CSS từ CDN
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

        // Swiper JS từ CDN
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

        // JS custom của theme (nơi bạn khởi tạo Swiper)
        wp_enqueue_script(
            'cinestar-main',
            get_template_directory_uri() . '/assets/js/main.js',
            array('swiper-js', 'jquery'),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'cinestar_enqueue_scripts');

/**
 * Thiết lập các chức năng hỗ trợ của theme
 */
if ( ! function_exists( 'cinestar_theme_setup' ) ) {
    function cinestar_theme_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('movie-poster', 300, 450, true);

        register_nav_menus(array(
            'menu_left'    => __('Menu trái', 'cinestar'),
            'menu_right'   => __('Menu phải', 'cinestar'),
            'main-menu'    => __('Menu chính', 'cinestar'),
            'footer-menu'  => __('Menu chân trang', 'cinestar'),
        ));

        add_theme_support('custom-logo', array(
            'height'      => 60,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ));
    }
}
add_action('after_setup_theme', 'cinestar_theme_setup');

/**
 * Đăng ký sidebar (widget area)
 */
if ( ! function_exists( 'cinestar_widgets_init' ) ) {
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
}
add_action('widgets_init', 'cinestar_widgets_init');

/**
 * Đăng ký Custom Post Type: Phim
 */
if ( ! function_exists( 'cinestar_register_cpt_phim' ) ) {
    function cinestar_register_cpt_phim() {
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
            'show_in_rest'  => true,
        );

        register_post_type('phim', $args);
    }
}
add_action('init', 'cinestar_register_cpt_phim');

// Đảm bảo post và phim đều hỗ trợ ảnh đại diện
add_action('init', function() {
    add_post_type_support('post', 'thumbnail');
    add_post_type_support('phim', 'thumbnail');
});
