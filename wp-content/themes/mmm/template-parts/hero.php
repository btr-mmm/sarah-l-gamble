<?php $hero = get_field('hero'); ?>
<section class="hero">
  <img src="" alt="">
  <div class="hero__content">
    <?php if ($hero['copy']): ?>
      <p>
        <?php echo esc_attr($hero['copy']) ?>
      </p>
    <?php endif;
    if ($hero['button_url']): ?>
      <a href="<?php echo esc_url($hero['button_url']) ?>" class="btn btn-primary">
        <?php echo esc_attr($hero['button_label']) ?>
      </a>
    <?php endif; ?>
  </div>
</section>