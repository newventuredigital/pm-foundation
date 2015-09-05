<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="columns">
      <div class="post-single">
        <?php if(has_post_thumbnail()) {the_post_thumbnail('full', array( 'class' => 'featured-image' ) );} ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <div class="post-navigation">
        <?php if (get_previous_post() && get_next_post()) {previous_post_link('&laquo; %link', 'Previous Post'); echo '<span class="seperator">|</span>'; next_post_link('%link &raquo;', 'Next Post');}
if (get_previous_post() && !get_next_post()) {previous_post_link('&laquo; %link', 'Previous Post');}
if (!get_previous_post() && get_next_post()) {next_post_link('%link &raquo;', 'Next Post'); } ?>
      </div>
    </div>
  </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>