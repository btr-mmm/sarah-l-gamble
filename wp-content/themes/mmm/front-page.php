<?php get_header('', array('pageId' => 'home'));
while (have_posts()):
  the_post();

  if (get_field('hero')) {
    get_template_part('template-parts/hero', '');
  }

  $bio = get_field('bio');
  if ($bio):
    ?>
    <section class="bio">
      <img src="" alt="">
      <div class="bio__content">
        <h1><?php echo esc_attr($bio['title']) ?></h1>
        <p><?php echo esc_attr($bio['copy']) ?></p>
      </div>
    </section>
    <?php
  endif;


  if (get_field('call_to_action')) {
    get_template_part('template-parts/call-to-action');
  }
endwhile;
get_footer(); ?>