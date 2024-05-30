<?php $hero = get_field('hero');
if ($hero && isset($hero['background_image'])): ?>
  <section class="hero">
    <img src="<?php echo $hero['background_image']['sizes']['hero'] ?>" alt="<?php if (isset($hero['image']['alt']))
         echo $hero['image']['alt'] ?>">
      <div class="hero__content-container">
        <div class="hero__content">
        <?php if (isset($hero['heading'])): ?>
          <h1><?php echo esc_attr($hero['heading']) ?></h1>
        <?php endif;
       if (isset($hero['copy'])): ?>
          <p>
            <?php echo esc_attr($hero['copy']) ?>
          </p>
        <?php endif;
       if (isset($hero['button_url']) && isset($hero['button_label'])): ?>
          <a href="<?php echo esc_url($hero['button_url']) ?>" class="btn btn-primary">
            <?php echo esc_attr($hero['button_label']) ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>