<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="columns">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>