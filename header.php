<?php
/**
 * Header template cho theme Cinestar
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-900 text-white'); ?>>
<?php if (function_exists('wp_body_open')) wp_body_open(); ?>

<!-- Header trên cùng: logo, nút, tìm kiếm, user, ngôn ngữ -->
<header class="bg-gray-900 py-2 shadow-md">
    <div class="container mx-auto flex items-center justify-between px-4">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="block">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Cinestar Logo" class="h-10">';
                }
                ?>
            </a>
        </div>
        <!-- Nút nổi bật -->
        <div class="flex items-center gap-3">
            <a href="#" class="flex items-center bg-yellow-400 text-gray-900 font-bold px-4 py-2 rounded transition hover:bg-yellow-300">
                <img src="https://cinestar.com.vn/assets/images/ic-ticket.svg" alt="Ticket" class="h-5 w-5 mr-2">
                ĐẶT VÉ NGAY
            </a>
            <a href="#" class="flex items-center bg-purple-500 text-white font-bold px-4 py-2 rounded transition hover:bg-purple-400">
                <img src="https://cinestar.com.vn/assets/images/ic-cor.svg" alt="Popcorn" class="h-5 w-5 mr-2">
                ĐẶT BẮP NƯỚC
            </a>
        </div>
        <!-- Tìm kiếm với icon kính lúp -->
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="hidden md:flex items-center relative">
            <input type="text" name="s" placeholder="Tìm phim, rạp" class="rounded px-4 py-2 w-56 text-gray-900 pr-10" />
            <button type="submit" class="absolute right-2">
                <!-- SVG icon kính lúp -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.5 10.5a7.5 7.5 0 0013.15 6.15z" />
                </svg>
            </button>
        </form>
        <!-- User + Đăng nhập + Language -->
        <div class="flex items-center gap-4">
            <!-- User -->
            <a href="#" class="flex items-center gap-1 hover:text-yellow-400 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a5 5 0 100-10 5 5 0 000 10zm-7 8a7 7 0 0114 0H3z"/>
                </svg>
                <span class="ml-1 font-semibold">Đăng nhập</span>
            </a>
            <!-- Language Dropdown -->
            <div class="relative group">
                <button type="button" class="flex items-center gap-1 font-bold focus:outline-none">
                    <img src="https://cdn.countryflags.com/thumbs/vietnam/flag-round-250.png" alt="VN flag" class="h-5 w-5 mr-1 rounded-full">
                    <span>VN</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Dropdown menu (ẩn/hiện bằng hover) -->
                <div class="absolute right-0 mt-2 w-32 bg-white text-gray-900 rounded shadow-lg z-10 hidden group-hover:block">
                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
                        <img src="https://cdn.countryflags.com/thumbs/vietnam/flag-round-250.png" alt="VN flag" class="h-4 w-4 mr-2 rounded-full">
                        Tiếng Việt
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
                        <img src="https://cinestar.com.vn/assets/images/footer-america.png" alt="EN flag" class="h-4 w-4 mr-2 rounded-full">
                        English
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu trái-phải ngay dưới header, không còn line hở -->
<nav class="bg-gray-900">
    <div class="container mx-auto flex justify-between items-center px-4 border-b border-gray-800">
        <!-- Menu trái -->
        <div>
            <?php
            wp_nav_menu([
                'theme_location' => 'menu_left',
                'menu_class'     => 'flex gap-6 py-2 text-white font-semibold text-base',
                'container'      => false
            ]);
            ?>
        </div>
        <!-- Menu phải -->
        <div>
            <?php
            wp_nav_menu([
                'theme_location' => 'menu_right',
                'menu_class'     => 'flex gap-6 py-2 text-white font-semibold text-base',
                'container'      => false
            ]);
            ?>
        </div>
    </div>
</nav>

<?php get_template_part('template-parts/cinestar-cinema-info'); ?>
<?php get_template_part('template-parts/cinestar-movie-tabs'); ?>

<?php get_template_part('template-parts/cinestar-now-showing'); ?>