<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/archive-movie.css">

<main id="primary" class="site-main">

    <!-- ================= PHIM ĐANG CHIẾU ================= -->
    <div class="container" style="max-width:1200px; margin:0 auto; padding:40px 20px;">
        <h1 style="text-align:center; margin-bottom:30px; color:#fff; font-size:2.2rem; text-shadow:0 2px 8px #181f37;"> PHIM ĐANG CHIẾU</h1>

        <div class="cinestar-movies-list">
            <?php
            $args = array(
                'post_type' => 'phim-moi',
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
                    <div class="cinestar-movie-horizontal">
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
                                <?php if(get_field('the_loai')): ?><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tag.svg" 
                                alt="Thể loại" 
                                style="width:16px; height:16px; vertical-align:middle; margin-right:4px;"><?php the_field('the_loai'); ?></span><?php endif; ?>
                                <?php if(get_field('thoi_luong')): ?><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" 
                                alt="Thời lượng" 
                                style="width:16px; height:16px; vertical-align:middle; margin-right:4px;"> <?php the_field('thoi_luong'); ?> phút</span><?php endif; ?>
                                <?php if(get_field('quoc_gia')): ?><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ic-location.svg" 
                                alt="Quốc gia" 
                                style="width:16px; height:16px; vertical-align:middle; margin-right:4px;"> <?php the_field('quoc_gia'); ?></span><?php endif; ?>
                                <?php if(get_field('phu_de')): ?><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subtitle.svg" 
                                alt="Phụ đề" 
                                style="width:16px; height:16px; vertical-align:middle; margin-right:4px;"> <?php the_field('phu_de'); ?></span><?php endif; ?>
                            </div>

                            

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
                            <?php
                                $trailer_url = get_field('trailer');
                                if($trailer_url):
                                ?>
                                    <button type="button" class="cinestar-btn btn-trailer" data-trailer="<?php echo esc_url($trailer_url); ?>">
                                        🎥 Xem trailer
                                    </button>
                                <?php endif; ?>
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
     <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
    <!-- < get_template_part('template-parts/slider-backtoschool'); ?> -->
    <?php get_template_part('template-parts/promotion-slider'); ?>
    <?php get_template_part('template-parts/membership-section'); ?>
    <?php get_template_part('template-parts/entertainment-services'); ?>

</main>

<?php get_footer(); ?>