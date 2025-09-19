<?php get_header(); ?>


<div class="container" style="max-width:1200px; margin:0 auto; padding:40px 20px;">
    <h1 style="text-align:center; margin-bottom:30px; color:#fff; font-size:2.2rem; text-shadow:0 2px 8px #181f37;">🎬 PHIM ĐANG CHIẾU</h1>

    <div class="cinestar-movies-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                    
                    <?php endif; ?>

                    <!-- SHOWTIMES (ACF FREE - MULTI FIELD GROUP) -->
                    <?php
                    // Số lượng lịch chiếu tối đa, chỉnh theo số trường bạn tạo trong nhóm field
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
        <?php endwhile; else: ?>
            <p style="color:#fff;">Chưa có phim nào.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>