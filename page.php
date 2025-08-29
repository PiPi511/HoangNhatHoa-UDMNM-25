<?php get_header(); ?>
<article class="prose lg:prose-xl mx-auto py-10">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
  <?php endwhile; ?>
</article>
<?php get_footer(); ?>
