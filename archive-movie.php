<?php get_header(); ?>

<div class="container" style="max-width:1200px; margin:0 auto; padding:40px 20px;">
    <h1 style="text-align:center; margin-bottom:30px;">🎬 Danh sách phim</h1>

    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(250px, 1fr)); gap:20px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div style="border:1px solid #ddd; border-radius:12px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium', ['style' => 'width:100%; height:350px; object-fit:cover;']);
                    } ?>
                </a>
                <div style="padding:15px;">
                    <h2 style="font-size:20px; margin:0 0 10px;">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <a href="<?php the_permalink(); ?>" 
                       style="display:inline-block; background:#e50914; color:#fff; padding:8px 15px; border-radius:6px; text-decoration:none;">
                       🎥 Xem trailer
                    </a>
                </div>
            </div>
        <?php endwhile; else: ?>
            <p>Chưa có phim nào.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
