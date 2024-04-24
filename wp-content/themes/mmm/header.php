<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php if (is_front_page()): ?>
      <?php bloginfo('name') ?>
      <?php echo get_bloginfo('description') == '' ? '' : ' | ' . get_bloginfo('description'); ?>
    <?php else: ?>
      <?php get_the_title() ?> | <?php bloginfo('name') ?>
    <?php endif; ?>
  </title>
  <?php wp_head() ?>
</head>

<body>
  <header>
    <h1>Logo</h1>
    <nav>
      <ul>
        <li>
          <a href="<?php echo site_url() ?>">
            Our Story
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('/scholarships') ?>">
            Scholarships
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('/housing') ?>">
            Housing
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('/apply'); ?>">
            Apply
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('/contact') ?>">
            Contact
          </a>
        </li>
        <li>
          <a class="btn btn-primary btn-white" href="<?php echo site_url('/donate') ?>">
            Donate
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <main id="<?php echo esc_attr($args['pageId']) ?>">