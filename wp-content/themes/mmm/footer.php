</main>
<footer>
  <div class="container">
    <section class="footer__left">
      <img class="footer__logo" src="<?php echo get_template_directory_uri() . '/assets/images/footer-logo.png' ?>"
        alt="">
      <p>
        Support the <span style="font-weight: 700">Sarah L. Gamble Foundation</span> by making a DONATION directly to
        us. Thank you for supporting our cause.
      </p>
    </section>
    <section class="footer__contact">
      <h2>Contact Us</h2>
      <?php echo do_shortcode('[gravityform id="1" title="false"]') ?>
    </section>
  </div>
</footer>
<?php wp_footer() ?>
</body>

</html>