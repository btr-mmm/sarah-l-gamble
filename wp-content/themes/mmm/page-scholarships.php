<?php get_header();

while (have_posts()):
  the_post();
  ?>
  <h1 class="sr-only"><?php the_title(); ?></h1>
  <?php $recipientsSection = get_field('recipients');
  if ($recipientsSection): ?>
    <section class="recipients">
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
endwhile;
get_footer(); ?>