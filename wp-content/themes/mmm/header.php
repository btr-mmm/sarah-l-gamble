<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    wp_title('|', true, 'right');
    bloginfo('title');
    if (is_front_page() && get_bloginfo('description') != '')
      echo ' | ' . get_bloginfo('description');
    ?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.png' ?>"
    type="image/x-icon">
  <?php wp_head() ?>
</head>

<body>
  <header>
    <div class="container">
      <h1>Logo</h1>
      <div class="nav-container">
        <button class="nav-toggle nav-open">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="nav-fade-bg"></div>
        <nav>
          <button class="nav-toggle nav-close">
            <i class="fa-solid fa-x"></i>
          </button>
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
      </div>
    </div>
    <script>
      const responsiveNav = new ResponsiveNav({ breakpoint: 1200 });
    </script>
  </header>
  <main id="<?php echo isset($args['pageid']) ? esc_attr($args['pageId']) : '' ?>">