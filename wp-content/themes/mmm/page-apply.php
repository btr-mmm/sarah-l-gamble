<?php get_header('', array('pageId' => 'housing'));
while (have_posts()):
  the_post();

  if (get_field('call_to_action')) {
    get_template_part('call-to-action');
  }
endwhile;
get_footer();