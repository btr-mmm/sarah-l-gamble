<?php $cta = get_field('call_to_action') ?>
<section class="call-to-action">
  <div class="call-to-action__content">
    <h2><?php echo esc_attr($cta['title']) ?></h2>
    <p><?php echo esc_attr($cta['copy']) ?></p>
    <?php if ($cta['button_url']): ?>
      <a href="<?php echo esc_url($cta['button_url']) ?>"
        class="btn btn-outline"><?php echo esc_attr($cta['button_label']) ?>
      </a>
    <?php endif; ?>
  </div>
  <img src="" alt="">
</section>