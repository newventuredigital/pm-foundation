<footer>
	<div class="row">
		<div class="columns">
			&copy; <?php echo date('Y');?> <?php bloginfo('title'); ?>, All Rights Reserved.
		</div>
	</div>
</footer>

<!-- Close Off Canvas Start -->
<a class="exit-off-canvas"></a>
</div>
</di>
<!-- Close Off Canvas End -->

<?php wp_footer(); ?>
<script>
	$(document).foundation();

	/* jQuery Smooth Scroll
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
					scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	*/
</script>
</body>
</html>