<?php get_header(); ?>

<style>
/* --- Style riêng cho trang chủ --- */
.cinestar-movies-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 24px;
}

.cinestar-movie-box {
  background: #1c1c2e;
  border-radius: 12px;
  overflow: hidden;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  transition: transform 0.3s;
}

.cinestar-movie-box:hover {
  transform: translateY(-4px);
}

.movie-poster img {
  width: 100%;
  height: auto;
  display: block;
}

.movie-info {
  padding: 16px;
}

.movie-title a {
  color: #fff;
  font-size: 1.2rem;
  font-weight: 700;
  text-decoration: none;
}

.movie-meta span {
  display: inline-block;
  margin-right: 10px;
  font-size: 0.9rem;
  opacity: 0.85;
}

.movie-showtimes {
  margin: 12px 0;
}

.showtime-hour {
  display: inline-block;
  background: #ffd600;
  color: #000;
  padding: 4px 8px;
  border-radius: 6px;
  margin-right: 6px;
  font-size: 0.9rem;
}

.cinestar-btn {
  display: inline-block;
  margin-top: 12px;
  padding: 8px 16px;
  background: #ff4081;
  color: #fff;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
}
</style>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/slider-backtoschool'); ?>
    <!-- ================= PHIM ĐANG CHIẾU ================= -->
    <div class="container" style="max-width:1200px; margin:0 auto; padding:40px 20px;">
        <h1 style="text-align:center; margin-bottom:30px; color:#fff; font-size:2.2rem; text-shadow:0 2px 8px #181f37;">🎬 PHIM ĐANG CHIẾU</h1>

        <div class="cinestar-movies-list">
            <?php
            $args = array(
                'post_type' => 'phim',
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => 'nhom_phim',
                        'value' => 'dang_chieu',
                        'compare' => '='
                    )
                )
            );
            $query = new WP_Query($args);

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="cinestar-movie-box">
                        <div class="movie-poster">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="https://via.placeholder.com/220x320?text=No+Image" alt="No poster">';
                                } ?>
                            </a>
                        </div>
                        <div class="movie-info">
                            <div class="movie-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    <?php if(get_field('do_tuoi')): ?>
                                        <span style="font-size:1rem;">(<?php the_field('do_tuoi'); ?>)</span>
                                    <?php endif; ?>
                                </a>
                            </div>

                            <div class="movie-meta">
                                <?php if(get_field('the_loai')): ?><span>🎭 <?php the_field('the_loai'); ?></span><?php endif; ?>
                                <?php if(get_field('thoi_luong')): ?><span>⏱ <?php the_field('thoi_luong'); ?> phút</span><?php endif; ?>
                                <?php if(get_field('quoc_gia')): ?><span>🌏 <?php the_field('quoc_gia'); ?></span><?php endif; ?>
                                <?php if(get_field('phu_de')): ?><span>💬 <?php the_field('phu_de'); ?></span><?php endif; ?>
                            </div>

                            <?php if(get_field('mo_ta')): ?>
                                <div class="movie-desc"><?php the_field('mo_ta'); ?></div>
                            <?php endif; ?>

                            <!-- SHOWTIMES -->
                            <?php
                            $max_showtimes = 3;
                            $has_showtimes = false;
                            for($i = 1; $i <= $max_showtimes; $i++) {
                                $ngay = get_field("ngay_chieu_$i");
                                $gio = get_field("gio_chieu_$i");
                                if($ngay && $gio) {
                                    if(!$has_showtimes) {
                                        echo '<div class="movie-showtimes">';
                                        $has_showtimes = true;
                                    }
                                    echo '<div class="showtime-date">'.esc_html($ngay).'</div>';
                                    echo '<div class="showtime-times">';
                                    $gio_arr = explode(',', $gio);
                                    foreach($gio_arr as $g) {
                                        echo '<span class="showtime-hour">'.trim(esc_html($g)).'</span>';
                                    }
                                    echo '</div>';
                                }
                            }
                            if($has_showtimes) echo '</div>';
                            ?>

                            <a href="<?php the_permalink(); ?>" class="cinestar-btn">
                                🎥 Xem trailer
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p style="color:#fff;">Chưa có phim nào.</p>
                <?php get_template_part('template-parts/cinestar-now-showing'); ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- ================= KHUYẾN MÃI (FULL WIDTH) ================= -->
    <?php get_template_part('template-parts/promotion-slider'); ?>

    <!-- ================= MEMBERSHIP (FULL WIDTH) ================= -->
    <?php get_template_part('template-parts/membership-section'); ?>
    <?php get_template_part('template-parts/entertainment-services'); ?>
</main>

<?php get_footer(); ?>
