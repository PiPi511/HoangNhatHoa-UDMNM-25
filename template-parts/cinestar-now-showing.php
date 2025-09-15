<div class="now-showing-section" style="background:linear-gradient(180deg,#171b2e 0,#3d2974 100%);padding:40px 0;">
    <h2 class="text-center font-extrabold text-3xl md:text-4xl mb-6" style="color:#fff;letter-spacing:3px;">PHIM ĐANG CHIẾU</h2>
    <div class="swiper now-showing-swiper">
        <div class="swiper-wrapper">
            <?php
            $args = [
                'post_type' => 'movie', // hoặc 'phim' nếu bạn đặt tên CPT là 'phim'
                'posts_per_page' => 10,
                'meta_query' => [
                    [
                        'key' => 'nhom_phim',
                        'value' => 'dang_chieu',
                        'compare' => '='
                    ]
                ]
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="now-showing-movie-card" style="background:#232344;border-radius:16px;overflow:hidden;text-align:center;box-shadow:0 8px 32px rgba(0,0,0,0.18);padding:18px 12px;">
                        <div style="position:relative;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['style'=>'width:210px;height:320px;object-fit:cover;border-radius:12px;']); ?>
                            </a>
                            <?php if($age=get_field('do_tuoi')): ?>
                                <div style="position:absolute;top:12px;left:12px;background:#ffeb3b;color:#222;font-weight:900;padding:2px 7px;font-size:1.1rem;border-radius:4px;"><?php echo esc_html($age); ?></div>
                            <?php endif; ?>
                        </div>
                        <h3 class="mt-3 font-bold" style="color:#ffe600;font-size:1.1rem;"><?php the_title(); ?></h3>
                        <div class="flex gap-2 justify-center my-2">
                            <a href="#" class="show-trailer-btn" style="color:#fff;text-decoration:underline;font-size:1rem;">Xem Trailer</a>
                        </div>
                        <a href="#" class="book-ticket-btn" style="display:inline-block;background:#ffe600;color:#222;font-weight:700;padding:9px 24px;border-radius:6px;margin-top:7px;font-size:1.07rem;">ĐẶT VÉ</a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();
            else: ?>
                <div class="swiper-slide"><p style="color:#fff;">Chưa có phim nào.</p></div>
            <?php endif; ?>
        </div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="flex justify-center mt-6">
        <a href="/phim-dang-chieu" class="px-8 py-3 rounded border-2 border-yellow-400 text-yellow-400 font-bold text-lg hover:bg-yellow-400 hover:text-gray-900 transition">XEM THÊM</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
  new Swiper('.now-showing-swiper', {
    slidesPerView: 4,
    spaceBetween: 24,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: { slidesPerView: 1.1 },
      600: { slidesPerView: 2 },
      900: { slidesPerView: 3 },
      1200: { slidesPerView: 4 }
    }
  });
});
</script>