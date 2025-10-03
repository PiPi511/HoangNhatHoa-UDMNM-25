<?php
/*
Plugin Name: Cinestar CPT & Taxonomy
Description: Đăng ký CPT "Phim mới" và taxonomy "Nhóm phim" cho site Cinestar.
Author: Your Name
Version: 1.0
*/

add_action('init', function() {

    // --- Đăng ký Taxonomy "Nhóm phim" nếu chưa tồn tại ---
    if (!taxonomy_exists('nhom-phim')) {
        register_taxonomy('nhom-phim', array('phim-moi'), array(
            'labels' => array(
                'name' => 'Nhóm phim',
                'singular_name' => 'Nhóm phim',
                'menu_name' => 'Thể loại',
                'all_items' => 'All Thể loại',
                'edit_item' => 'Edit Thể loại',
                'view_item' => 'View Thể loại',
                'update_item' => 'Update Thể loại',
                'add_new_item' => 'Add New Thể loại',
                'new_item_name' => 'New Thể loại Name',
                'search_items' => 'Search Thể loại',
                'popular_items' => 'Popular Thể loại',
                'separate_items_with_commas' => 'Separate thể loại with commas',
                'add_or_remove_items' => 'Add or remove thể loại',
                'choose_from_most_used' => 'Choose from the most used thể loại',
                'not_found' => 'No thể loại found',
                'no_terms' => 'No thể loại',
                'items_list_navigation' => 'Thể loại list navigation',
                'items_list' => 'Thể loại list',
                'back_to_items' => '← Go to thể loại',
                'item_link' => 'Thể loại Link',
                'item_link_description' => 'A link to a thể loại',
            ),
            'public' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
        ));
    }

    // --- Đăng ký CPT "Phim mới" nếu chưa tồn tại ---
    if (!post_type_exists('phim-moi')) {
        register_post_type('phim-moi', array(
            'labels' => array(
                'name' => 'Phim',
                'singular_name' => 'phim',
                'menu_name' => 'Phim',
                'all_items' => 'All Phim',
                'edit_item' => 'Edit phim',
                'view_item' => 'View phim',
                'add_new_item' => 'Add New phim',
                'search_items' => 'Search Phim',
                'not_found' => 'No phim found',
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-admin-post',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'delete_with_user' => false,
        ));
    }

});
