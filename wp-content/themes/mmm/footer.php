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
      <form action="">
        <div>
          <label for="name" class="sr-only">Name</label>
          <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
          <label for="email" class="sr-only">Email Address</label>
          <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div>
          <label for="message" class="sr-only">Message</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
      </form>
    </section>
  </div>
</footer>
<?php wp_footer() ?>
</body>

</html>