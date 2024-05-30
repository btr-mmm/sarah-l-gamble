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
        <h2><?php echo esc_attr($cta['heading']) ?></h2>
        <p><?php echo $cta['body'] ?></p>
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
  <?php endif; ?>
<?php endwhile;
get_footer(); ?>