<?php get_header('', array('pageId' => 'home'));
while (have_posts()):
  the_post();

  get_template_part('template-parts/hero', 'homepage');

  $bio = get_field('bio');
  if ($bio):
    ?>
    <section class="bio">
      <div class="container">
        <?php if (isset($bio['photo'])): ?>
          <img src="<?php echo esc_url($bio['photo']['link']) ?>" alt="<?php if (isset($bio['alt']))
               echo esc_attr($bio['alt']) ?>">
        <?php endif; ?>
        <div class="bio__content">
          <h2><?php echo esc_attr($bio['title']) ?></h2>
          <p><?php echo esc_attr($bio['copy']) ?></p>
        </div>
      </div>
    </section>
    <?php
  endif;

  get_template_part('template-parts/call-to-action');

endwhile;
get_footer(); ?>