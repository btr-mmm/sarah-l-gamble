<?php get_header(); ?>

<section class="donation-form">
  <div class="container">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/primary-logo.png' ?>"
      alt="The Sarah L. Gamble Foundation">

    <h1>Make a Tax-Deductible Donation</h1>

    <hr>

    <p>Please complete the form below to submit your donation.<br>
      All donations are tax-deductible.</p>

    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
  </div>
</section>

<?php get_footer(); ?>