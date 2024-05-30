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
  <?php endif; ?>

<?php endwhile;
get_footer(); ?>