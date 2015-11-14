<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="columns">
      <div class="post-excerpt">
        <?php get_template_part('content', get_post_type()); ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>