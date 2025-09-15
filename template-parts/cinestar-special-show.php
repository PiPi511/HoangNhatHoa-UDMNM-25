<div class="cinestar-movie-list">
<?php
$args = [
  'post_type' => 'movie',
  'posts_per_page' => 12,
  'meta_query' => [
    [
      'key' => 'nhom_phim',
      'value' => 'dac_biet',
      'compare' => '='
    ]
  ]
];
$query = new WP_Query($args);
if ($query->have_posts()):
  while($query->have_posts()): $query->the_post();
    $the_loai = get_field('the_loai');
    $thoi_luong = get_field('thoi_luong');
    $quoc_gia = get_field('quoc_gia');
    $phu_de = get_field('phu_de');
    $do_tuoi = get_field('do_tuoi');
    $showtimes = get_field('showtimes');
?>
  <div class="cinestar-movie-item">
    <div class="cinestar-movie-thumb">
      <?php the_post_thumbnail('medium'); ?>
    </div>
    <div class="cinestar-movie-info">
      <div class="cinestar-movie-title"><?php the_title(); ?></div>
      <div class="cinestar-movie-meta">
        <?php if($the_loai): ?><span><?= esc_html($the_loai) ?></span><?php endif; ?>
        <?php if($thoi_luong): ?><span><i class="fa fa-clock"></i> <?= esc_html($thoi_luong) ?> phút</span><?php endif; ?>
        <?php if($quoc_gia): ?><span><?= esc_html($quoc_gia) ?></span><?php endif; ?>
      </div>
      <?php if($phu_de): ?><div class="cinestar-movie-sub"><?= esc_html($phu_de) ?></div><?php endif; ?>
      <?php if($do_tuoi): ?><div class="cinestar-movie-age"><i class="fa fa-users"></i> <?= esc_html($do_tuoi) ?></div><?php endif; ?>
      <?php if($showtimes): foreach($showtimes as $show): ?>
        <div class="cinestar-movie-showtime">
          <span><?= esc_html($show['ngay_chieu']) ?></span>
          <span><?= esc_html($show['phong']) ?></span>
          <span><?= esc_html($show['gio_chieu']) ?></span>
        </div>
      <?php endforeach; endif; ?>
    </div>
  </div>
<?php endwhile; wp_reset_postdata();
else: ?>
  <p style="color:#fff;">Hiện chưa có phim nào.</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>