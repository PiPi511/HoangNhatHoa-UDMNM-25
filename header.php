<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <a href="<?php echo home_url(); ?>" class="logo">CINESTAR</a>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => '',
            'items_wrap' => '<ul>%3$s</ul>'
        ));
        ?>
    </nav>
</header>
<main>
