<?php
/*
Plugin Name: Scroll To Top Button
Description: Hiển thị nút mũi tên khi lướt xuống, bấm vào để lên đầu trang.
Version: 1.0
Author: Hoa
*/

// Chặn truy cập trực tiếp
if ( !defined('ABSPATH') ) exit;

/**
 * Thêm HTML nút scroll-to-top
 */
function stt_button_html() {
    echo '<div id="scroll-to-top">&#8679;</div>';
}
add_action('wp_footer', 'stt_button_html');

/**
 * Thêm CSS cho nút
 */
function stt_button_css() {
    ?>
    <style>
    #scroll-to-top {
        display: none;
        position: fixed;
        bottom: 30px;
        right: 20px;
        width: 45px;
        height: 45px;
        background: #000;
        color: #fff;
        text-align: center;
        line-height: 45px;
        border-radius: 50%;
        font-size: 22px;
        cursor: pointer;
        z-index: 9999;
        transition: all 0.3s ease;
    }
    #scroll-to-top:hover {
        background: #444;
    }
    </style>
    <?php
}
add_action('wp_head', 'stt_button_css');

/**
 * Thêm JS xử lý scroll
 */
function stt_button_js() {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("scroll-to-top");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        });

        btn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'stt_button_js');
