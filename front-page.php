<?php get_header(); ?>
<?php get_template_part('body', 'opening-tags'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('content', get_post_type()); ?>

	<?php endwhile; endif; ?>

<?php get_template_part('body', 'closing-tags'); ?>
<?php get_footer(); ?>