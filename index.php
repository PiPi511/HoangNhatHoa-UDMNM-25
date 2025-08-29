<?php get_header(); ?>
<h2 class="text-2xl font-bold mb-4">Latest Posts</h2>
<div class="grid grid-cols-3 gap-6">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article class="border p-4 rounded shadow">
        <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()) the_post_thumbnail('medium', ['class'=>'rounded']); ?>
            <h3 class="text-xl mt-2"><?php the_title(); ?></h3>
        </a>
        <p class="text-sm"><?php the_excerpt(); ?></p>
    </article>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
