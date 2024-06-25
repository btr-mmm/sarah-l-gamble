<?php get_header('', array('pageId' => 'housing'));
while (have_posts()):
  the_post();

  get_template_part('template-parts/hero', 'housing');

  if (get_field('call_to_action')) {
    get_template_part('template-parts/call-to-action', 'housing');
  }
endwhile;
get_footer();