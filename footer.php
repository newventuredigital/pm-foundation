<footer>
  <div class="row">
    <div class="columns">
      &copy;<?php echo date('Y');?> <?php bloginfo('title'); ?>, All Rights Reserved.
    </div>
  </div>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>

<?php wp_footer(); ?>
</body>
</html>