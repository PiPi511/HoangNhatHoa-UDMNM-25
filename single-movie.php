<?php get_header(); ?>

<div class="container" style="max-width:900px; margin:40px auto; padding:20px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 style="font-size:32px; margin-bottom:20px;"><?php the_title(); ?></h1>

        <div style="display:flex; gap:30px; flex-wrap:wrap;">
            <div style="flex:1 1 300px;">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large', ['style' => 'width:100%; border-radius:12px;']);
                } ?>
            </div>

            <div style="flex:2 1 500px;">
                <h2 style="margin-bottom:10px;">📖 Giới thiệu</h2>
                <div><?php the_content(); ?></div>

                <?php 
                // Giả sử bạn dùng custom field trailer_url (ACF hoặc meta box)
                $trailer = get_post_meta(get_the_ID(), 'trailer_url', true);
                if($trailer): ?>
                    <h2 style="margin-top:20px;">🎥 Trailer</h2>
                    <div style="aspect-ratio:16/9; margin-top:10px;">
                        <iframe width="100%" height="450" src="<?php echo esc_url($trailer); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
