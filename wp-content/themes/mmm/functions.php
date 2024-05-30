<?php

// Enqueue styles & scripts
add_action('wp_enqueue_scripts', 'slgEnqueueFiles');
function slgEnqueueFiles()
{
  wp_enqueue_style('futura-fonts', 'https://use.typekit.net/hei8erc.css');
  wp_enqueue_style('slg-main', get_template_directory_uri() . '/css/main.css', [], rand(111, 9999));
  wp_enqueue_style('slg-header', get_template_directory_uri() . '/css/header.css', ['slg-main'], rand(111, 9999));
  wp_enqueue_style('slg-footer', get_template_directory_uri() . '/css/footer.css', ['slg-main'], rand(111, 9999));
  wp_enqueue_style('slg-hero', get_template_directory_uri() . '/css/hero.css', ['slg-main'], rand(111, 9999));
  wp_enqueue_style('slg-call-to-action', get_template_directory_uri() . '/css/call-to-action.css', ['slg-main'], rand(111, 9999));

  wp_enqueue_script('slg-responsive-nav', get_template_directory_uri() . '/js/responsive-nav.js');

  // Register Swiper only on scholarships page
  if (is_page('scholarships')) {
    wp_enqueue_style('slg-swiper', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_script('slg-swiper', get_template_directory_uri() . '/js/swiper.min.js');
  }
}

add_action('after_setup_theme', 'slgThemeSupport');
function slgThemeSupport()
{
  add_image_size('hero', 1920, 712, true);
  add_image_size('cta', 960, 640, true);
}