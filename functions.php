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

// ===== Đăng ký Post Type: Phim =====
// function register_phim_post_type() {
//     register_post_type('phim', array(
//         'labels' => array(
//             'name' => 'Phim',
//             'singular_name' => 'Phim',
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'menu_icon' => 'dashicons-format-video',
//         'supports' => array('title', 'editor', 'thumbnail'),
//     ));
// }
// add_action('init', 'register_phim_post_type');


// ===== Đăng ký Taxonomy: Nhóm phim =====
function register_nhom_phim_taxonomy() {
    register_taxonomy(
        'nhom_phim',   // slug của taxonomy
        'phim',        // áp dụng cho post type 'phim'
        array(
            'labels' => array(
                'name' => 'Nhóm phim',
                'singular_name' => 'Nhóm phim',
            ),
            'public' => true,
            'hierarchical' => true, // true = dạng category, false = dạng tag
            'show_admin_column' => true, // hiển thị cột trong admin
        )
    );
}
add_action('init', 'register_nhom_phim_taxonomy');


// Đảm bảo post và phim đều hỗ trợ ảnh đại diện
add_action('init', function() {
    add_post_type_support('post', 'thumbnail');
    add_post_type_support('phim', 'thumbnail');
});
function cinestar_enqueue_styles() {
    wp_enqueue_style('cinestar-header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('cinestar-footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('cinestar-movies', get_template_directory_uri() . '/assets/css/archive-movie.css');
    wp_enqueue_style('cinestar-membership', get_template_directory_uri() . '/assets/css/membership.css');
        wp_enqueue_style('cinestar-nav', get_template_directory_uri() . '/assets/css/nav.css');
        wp_enqueue_style('cinestar-mobile', get_template_directory_uri() . '/assets/css/mobile.css');
}


add_action('wp_enqueue_scripts', 'cinestar_enqueue_styles');


function register_dichvu_post_type() {
    register_post_type('dichvu', array(
        'labels' => array(
            'name' => 'Dịch vụ',
            'singular_name' => 'Dịch vụ',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'thumbnail', 'editor'),
    ));
}
add_action('init', 'register_dichvu_post_type');
