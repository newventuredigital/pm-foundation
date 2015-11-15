<?php get_header(); ?>
<?php get_template_part('body', 'opening-tags'); ?>
	<div class="row">
		<div class="medium-7 columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="post-excerpt">
					<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
					<p><?php echo excerpt(50); ?></p>
				</div>
			  
			<?php endwhile; endif; ?>
		</div>

		<aside class="medium-4 medium-offset-1 columns sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>

<?php get_template_part('body', 'closing-tags'); ?>
<?php get_footer(); ?>