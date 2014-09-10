<div class="custom-test">Test Content for custom page
</div>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-documentation'); ?>
<?php endwhile; ?>
