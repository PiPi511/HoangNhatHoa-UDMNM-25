<?php get_header(); ?>
<section class="hero bg-gray-900 text-center text-yellow-400 py-20">
  <h1 class="text-5xl font-bold">Welcome to Cinestar</h1>
  <p class="mt-4 text-lg">Trang chủ rạp chiếu phim của bạn.</p>
</section>
<section class="featured-movies p-6">
  <h2 class="text-3xl font-bold mb-4">Featured Movies</h2>
  <?php
    $featured = new WP_Query(array('post_type'=>'movie','posts_per_page'=>4));
    if ($featured->have_posts()):
      echo '<div class="grid grid-cols-2 md:grid-cols-4 gap-6">';
      while ($featured->have_posts()): $featured->the_post();
        echo '<div>';
        if (has_post_thumbnail()) the_post_thumbnail('movie-poster', ['class'=>'rounded']);
        echo '<h3 class="mt-2"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
        echo '</div>';
      endwhile;
      echo '</div>';
      wp_reset_postdata();
    endif;
  ?>
</section>
<?php get_footer(); ?>
