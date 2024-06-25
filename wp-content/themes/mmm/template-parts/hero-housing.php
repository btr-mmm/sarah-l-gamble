<?php $hero = get_field('hero');
if ($hero && isset($hero['image'])): ?>
  <section class="hero housing-hero">
    <img src="<?php echo $hero['image']['sizes']['hero'] ?>" alt="<?php if (isset($hero['image']['alt']))
         echo $hero['image']['alt'] ?>">
      <div class="hero__content-container">
        <div class="hero__content">
          <h1><?php the_title(); ?></h1>
        <?php if (isset($hero['copy'])): ?>
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