<?php
$args = [
    'post_type' => 'movie',
    'posts_per_page' => 12, // Số phim muốn hiển thị
];
$query = new WP_Query($args);

if ($query->have_posts()): ?>
  <h2 class="text-center text-4xl text-white font-extrabold mt-8 mb-8 uppercase">Phim đang chiếu</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <?php while($query->have_posts()): $query->the_post();
      $genre = get_field('genre');
      $duration = get_field('duration');
      $country = get_field('country');
      $subtitle = get_field('subtitle');
      $age = get_field('age');
      $showtimes = get_field('showtimes');
    ?>
    <div class="bg-[#181f3a] rounded-xl overflow-hidden flex flex-col md:flex-row shadow-lg">
      <!-- Poster -->
      <div class="md:w-1/2 flex-shrink-0">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('movie-poster', ['class'=>'w-full h-full object-cover']); ?>
        <?php endif; ?>
      </div>
      <!-- Info -->
      <div class="flex-1 p-6 flex flex-col justify-between">
        <div>
          <h3 class="text-white text-2xl font-extrabold uppercase mb-2"><?php the_title(); ?></h3>
          <div class="flex gap-2 flex-wrap text-yellow-400 mb-2 text-base font-semibold">
            <?php if($genre): ?>
              <span class="flex items-center"><svg class="inline h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-width="2"/><path d="M12 6v6l4 2" stroke-width="2"/></svg><?= esc_html($genre) ?></span>
            <?php endif; ?>
            <?php if($duration): ?>
              <span class="flex items-center"><svg class="inline h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke-width="2"/><path d="M8 6v12" stroke-width="2"/></svg><?= esc_html($duration) ?> phút</span>
            <?php endif; ?>
            <?php if($country): ?>
              <span class="flex items-center"><?= esc_html($country) ?></span>
            <?php endif; ?>
            <?php if($subtitle): ?>
              <span class="flex items-center"><?= esc_html($subtitle) ?></span>
            <?php endif; ?>
          </div>
          <?php if($age): ?>
            <div class="flex items-center text-white text-sm mb-2">
              <svg class="inline h-5 w-5 mr-1 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="7" r="4" stroke-width="2"/><path d="M6 21v-2a4 4 0 014-4h0a4 4 0 014 4v2" stroke-width="2"/></svg>
              <?= esc_html($age) ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- Showtimes -->
        <?php if($showtimes): foreach($showtimes as $show): ?>
        <div class="bg-[#232b47] rounded-xl p-4 mt-3">
          <div class="font-bold text-white mb-1"><?= esc_html($show['date']) ?></div>
          <div class="flex gap-2 items-center text-yellow-400 mb-2">
            <span><?= esc_html($show['room']) ?></span>
          </div>
          <div class="flex flex-wrap gap-3">
            <?php
              if(!empty($show['times'])):
                $times = explode(',', $show['times']);
                foreach($times as $time): ?>
                  <span class="bg-yellow-400 text-[#232b47] font-bold px-3 py-1 rounded-md"><?= trim($time) ?></span>
                <?php endforeach;
              endif;
            ?>
          </div>
        </div>
        <?php endforeach; endif; ?>
        <a href="<?php the_permalink(); ?>" class="text-yellow-400 font-bold mt-2 inline-block hover:underline">Xem thêm lịch chiếu</a>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php else: ?>
  <p class="text-white text-center">Hiện chưa có phim nào.</p>
<?php endif; ?>