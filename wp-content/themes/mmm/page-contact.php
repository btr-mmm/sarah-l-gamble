<?php get_header();

while (have_posts()):
  the_post();

  get_template_part("template-parts/hero", '');
  ?>



<?php endwhile;
get_footer(); ?>