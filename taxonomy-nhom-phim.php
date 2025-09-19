<?php
get_header();
$term = get_queried_object();
$slug = $term->slug;
$args = [
    'post_type' => 'movie',
    'posts_per_page' => 12,
    'meta_query' => [
        [
            'key' => 'nhom_phim',
            'value' => $slug,
            'compare' => '='
        ]
    ]
];
$query = new WP_Query($args);
?>
<div class="cinestar-movie-list">
    <h2 class="text-center font-extrabold text-3xl md:text-4xl mb-6" style="color:#ffe600;letter-spacing:3px;">
        <?php echo strtoupper($term->name); ?>
    </h2>
    <?php if ($query->have_posts()):
        while($query->have_posts()): $query->the_post(); ?>
        <!-- Hiển thị phim ở đây (giống code bạn gửi) -->
        <div class="cinestar-movie-item">
            <!-- ... -->
        </div>
    <?php endwhile; else: ?>
        <p style="color:#fff;">Hiện chưa có phim nào.</p>
    <?php endif; wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>