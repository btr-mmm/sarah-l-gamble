<?php get_header();

while (have_posts()):
  the_post();

  get_template_part("template-parts/hero", '');
  ?>

  <section class="contact-page">
    <div class="container">
      <h2>Questions?</h2>
      <p>Contact us at
        <a
          href="tel:<?php echo esc_attr(preg_replace("/\D/", '', get_field('phone'))) ?>"><?php echo esc_attr(get_field('phone')) ?></a>
        or via email at <a
          href="mailto:<?php echo esc_attr(get_field('email')) ?>"><?php echo esc_attr(get_field('email')) ?></a> if you
        have any questions. Please click the button below to download an application today.
      </p>
      <?php $button = get_field('button');
      if ($button): ?>
        <a href="<?php echo esc_url($button['link']) ?>" class="btn btn-primary">
          <?php echo esc_attr($button['label']) ?>
        </a>
      <?php endif;
      $address = get_field('address');
      if ($address): ?>
        <p>
          We are accepting donations payable to the:<br>
          <span class="text-bold"><?php echo esc_attr($address['name']) ?></span><br>
          <?php echo esc_attr($address['line_1']) ?><br>
          <?php echo esc_attr($address['line_2']) ?>
        </p>
      <?php endif; ?>
    </div>
  </section>

<?php endwhile;
get_footer(); ?>