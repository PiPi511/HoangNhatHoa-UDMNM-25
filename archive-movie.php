<?php get_header(); ?>

<style>
.cinestar-movies-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 phim 1 hàng */
    gap: 32px 36px;
    margin: 40px auto 0 auto;
    max-width: 1150px;
}
.cinestar-movie-box {
    display: flex;
    flex-direction: row;
    background: #181f37;
    border-radius: 16px;
    overflow: hidden;
    min-height: 320px;
    align-items: stretch;
    box-shadow: 0 8px 32px rgba(0,0,0,0.18);
}
.movie-poster {
    flex: 0 0 220px;
    background: #111;
    display: flex;
    align-items: center;
    justify-content: center;
}
.movie-poster img {
    width: 220px;
    height: 320px;
    object-fit: cover;
    display: block;
    border-radius: 10px 0 0 10px;
}
.movie-info {
    padding: 28px 32px 28px 32px;
    color: #fff;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.movie-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 12px;
    letter-spacing: 0.5px;
}
.movie-meta {
    margin-bottom: 8px;
    font-size: 1rem;
    color: #ffe600;
}
.movie-meta span {
    margin-right: 18px;
    display: inline-block;
}
.movie-desc {
    margin: 12px 0 16px 0;
    color: #bbb;
    font-size: 0.98rem;
}
.cinestar-btn {
    display: inline-block;
    background: #e50914;
    color: #fff;
    padding: 9px 18px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 10px;
    transition: background 0.2s;
}
.cinestar-btn:hover {
    background: #fff;
    color: #e50914;
    border: 1px solid #e50914;
}
@media (max-width: 900px) {
    .cinestar-movies-list {
        grid-template-columns: 1fr;
    }
    .cinestar-movie-box {
        flex-direction: column;
        min-width: 0;
        min-height: 0;
    }
    .movie-poster img {
        width: 100%;
        height: 270px;
        border-radius: 10px 10px 0 0;
    }
    .movie-info {
        padding: 20px 14px;
    }
    .cinestar-movies-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 phim mỗi hàng */
    gap: 32px 36px;
    margin: 40px auto 0 auto;
    max-width: 1150px;
}
</style>

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
                        <a href="<?php the_permalink(); ?>" style="color:#fff; text-decoration:none;">
                            <?php the_title(); ?>
                            <?php if(get_field('do_tuoi')): ?> <span style="font-size:1rem;">(<?php the_field('do_tuoi'); ?>)</span><?php endif; ?>
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