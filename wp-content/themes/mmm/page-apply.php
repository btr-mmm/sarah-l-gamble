<?php get_header('', array('pageId' => 'housing'));
while (have_posts()):
  the_post();

  if (get_field('call_to_action')):
    $cta = get_field('call_to_action') ?>
    <section class="call-to-action apply-cta">
      <div class="call-to-action__content">
        <h2><?php echo esc_attr($cta['title']) ?></h2>
        <p><?php echo esc_attr($cta['copy']) ?></p>
        <div class="button-wrapper">
          <?php if ($cta['button_url']): ?>
            <a href="<?php echo esc_url($cta['button_url']) ?>"
              class="btn btn-primary"><?php echo esc_attr($cta['button_label']) ?>
            </a>
          <?php endif; ?>
          <?php if ($cta['second_button_url']): ?>
            <a href="<?php echo esc_url($cta['second_button_url']) ?>"
              class="btn btn-outline btn-outline-dark"><?php echo esc_attr($cta['second_button_label']) ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
      <?php if (isset($cta['image'])): ?>
        <img src="<? echo esc_url($cta['image']['sizes']['cta']); ?>" alt="<?php if (isset($cta['image']['alt']))
             echo esc_attr($cta['image']['alt']); ?>">
      <?php endif; ?>
    </section>
  <?php endif;
endwhile;
get_footer();