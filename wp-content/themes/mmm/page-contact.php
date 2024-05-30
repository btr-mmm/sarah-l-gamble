<?php get_header();

while (have_posts()):
  the_post();

  get_template_part("template-parts/hero", '');
  ?>

  <section class="contact-page">
    <h2>Questions?</h2>
    <p>Contact us at <span class="bold-text"><?php echo esc_attr(get_field('phone')) ?></span> or via email at <span< /p>
  </section>

<?php endwhile;
get_footer(); ?>