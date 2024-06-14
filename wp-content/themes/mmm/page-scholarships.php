<?php get_header();

while (have_posts()):
  the_post();
  ?>
  <h1 class="sr-only"><?php the_title(); ?></h1>
  <?php $recipientsSection = get_field('recipients');
  if ($recipientsSection): ?>
    <section class="recipients">
      <div class="container">
        <div class="recipients-body">
          <?php if (isset($recipientsSection['heading'])): ?>
            <h2>
              <?php echo esc_attr($recipientsSection['heading']) ?>
            </h2>
          <?php endif;
          if (isset($recipientsSection['body'])): ?>
            <p>
              <?php echo esc_attr($recipientsSection['body']) ?>
            </p>
          <?php endif; ?>
        </div>
        <?php $recipientsQuery = new WP_Query(
          array(
            'post_type' => 'recipient',
            'posts_per_page' => '-1',
            'order' => 'asc'
          )
        );
        if ($recipientsQuery->have_posts()):
          ?>
          <div class="swiper recipients-slider">
            <div class="swiper-wrapper">
              <?php while ($recipientsQuery->have_posts()):
                $recipientsQuery->the_post(); ?>
                <div class="swiper-slide">
                  <?php if (get_field('photo')):
                    $photo = get_field('photo') ?>
                    <img src="<?php echo esc_url($photo['sizes']['recipients-slider']) ?>" alt="<?php the_title() ?>">
                  <?php endif ?>
                  <div class="slide-content">
                    <h3><?php the_title(); ?></h3>
                    <?php if (get_field('school')): ?>
                      <p class="school">
                        <?php echo esc_attr(get_field('school')) ?>
                      </p>
                    <?php endif;
                    if (get_field('bio')): ?>
                      <p>
                        <?php echo esc_attr(get_field('bio')) ?>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-prev"></button><button class="swiper-button-next"></button>
          </div>
          <script>
            const recipientsSlider = new Swiper(
              '.swiper.recipients-slider',
              {
                loop: true,
                navigation: {
                  nextEl: '.recipients-slider .swiper-button-next',
                  prevEl: '.recipients-slider .swiper-button-prev',
                },
                pagination: {
                  el: '.recipients-slider .swiper-pagination'
                },
                autoplay: {
                  delay: 5000,
                },
                speed: 500,
              }
            )
          </script>
        <?php endif; ?>
      </div>
    </section>

  <?php endif;
  $cta = get_field('apply_cta');
  if ($cta): ?>
    <section class="call-to-action">
      <div class="call-to-action__content">
        <h2>
          <?php echo esc_attr($cta['heading']) ?>
        </h2>
        <p>
          The recipients will demonstrate a financial need and the following criteria: Faith and/or Community involvement.
        </p>
        <h3>
          Steps To Complete
        </h3>
        <p>
          To be considered for one of these scholarships you must:
        </p>
        <?php if (isset($cta['steps'])): ?>
          <ol>
            <?php foreach ($cta['steps'] as $step): ?>
              <li><?php echo $step['step'] ?></li>
            <?php endforeach; ?>
          </ol>
        <?php endif; ?>
        <?php if ($cta['button']): ?>
          <a href="<?php echo esc_url($cta['button']['link']) ?>"
            class="btn btn-outline"><?php echo esc_attr($cta['button']['label']) ?>
          </a>
        <?php endif; ?>
      </div>
      <?php if (isset($cta['image'])): ?>
        <img src="<? echo esc_url($cta['image']['sizes']['cta']); ?>" alt="<?php if (isset($cta['image']['alt']))
             echo esc_attr($cta['image']['alt']); ?>">
      <?php endif; ?>
    </section>
  <?php endif;
  $cta = get_field('donate_cta');
  if ($cta): ?>
    <section class="call-to-action donate-cta">
      <div class="call-to-action__content">
        <h2><?php echo esc_attr($cta['heading']) ?></h2>
        <p><?php echo esc_attr($cta['body']) ?></p>
        <?php if ($cta['button']): ?>
          <a href="<?php echo esc_url($cta['button']['link']) ?>"
            class="btn btn-primary"><?php echo esc_attr($cta['button']['label']) ?>
          </a>
        <?php endif; ?>
      </div>
      <?php if (isset($cta['image'])): ?>
        <img src="<? echo esc_url($cta['image']['sizes']['cta']); ?>" alt="<?php if (isset($cta['image']['alt']))
             echo esc_attr($cta['image']['alt']); ?>">
      <?php endif; ?>
    </section>
  <?php endif;
endwhile;
get_footer(); ?>