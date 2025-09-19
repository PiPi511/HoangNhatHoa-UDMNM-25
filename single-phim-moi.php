<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/movie-detail.css">

<main id="primary" class="site-main">
    <div class="movie-detail-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="movie-detail-main">
                <div class="movie-detail-poster">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large', ['class' => 'movie-detail-img']);
                    } else {
                        echo '<img src="https://via.placeholder.com/470x700?text=No+Image" alt="No poster" class="movie-detail-img">';
                    }
                    ?>
                </div>
                <div class="movie-detail-info">
                    <h1 class="movie-detail-title"><?php the_title(); ?>
                        <?php if(get_field('do_tuoi')): ?>
                            <span class="age-tag">(<?php the_field('do_tuoi'); ?>)</span>
                        <?php endif; ?>
                    </h1>
                    <ul class="movie-detail-meta">
                        <?php if(get_field('the_loai')): ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tag.svg" alt="Thể loại" class="meta-icon">
                            <span>Thể loại:</span> <?php the_field('the_loai'); ?>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('thoi_luong')): ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" alt="Thời lượng" class="meta-icon">
                            <span>Thời lượng:</span> <?php the_field('thoi_luong'); ?> phút
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('quoc_gia')): ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ic-location.svg" alt="Quốc gia" class="meta-icon">
                            <span>Quốc gia:</span> <?php the_field('quoc_gia'); ?>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('phu_de')): ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subtitle.svg" alt="Phụ đề" class="meta-icon">
                            <span>Phụ đề:</span> <?php the_field('phu_de'); ?>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('phan_loai')): ?>
                        <li class="age-warning">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/age-warning.svg" alt="Phân loại độ tuổi" class="meta-icon">
                            <span><?php the_field('phan_loai'); ?></span>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="movie-detail-desc">
                        <h2>Mô tả</h2>
                        <?php if(get_field('dao_dien')): ?>
                            <div class="movie-detail-director"><strong>Đạo diễn:</strong> <?php the_field('dao_dien'); ?></div>
                        <?php endif; ?>
                        <?php if(get_field('dien_vien')): ?>
                            <div class="movie-detail-cast"><strong>Diễn viên:</strong> <?php the_field('dien_vien'); ?></div>
                        <?php endif; ?>
                        <?php if(get_field('ngay_khoi_chieu')): ?>
                            <div class="movie-detail-date"><strong>Khởi chiếu:</strong> <?php the_field('ngay_khoi_chieu'); ?></div>
                        <?php endif; ?>
                    </div>
                    <?php if(get_field('mo_ta')): ?>
                        <div class="movie-detail-description">
                            <h2>Nội dung phim</h2>
                            <p><?php the_field('mo_ta'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>