<?php

// Enqueue styles & scripts
add_action('wp_enqueue_scripts', 'slgEnqueueFiles');
function slgEnqueueFiles()
{
  wp_enqueue_style('futura-fonts', 'https://use.typekit.net/hei8erc.css');
  wp_enqueue_style('slg-main', get_template_directory_uri() . '/css/main.css');

  // Register Swiper only on scholarships page
  if (is_page('scholarships')) {
    wp_enqueue_style('slg-swiper', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_script('slg-swiper', get_template_directory_uri() . '/js/swiper.min.js');
  }
}

// Enqueue hero CSS when template part is called
add_action('get_template_part_template-parts/hero', 'slgEnqueueHeroCSS');
function slgEnqueueHeroCSS()
{
  wp_enqueue_style('slg-hero', get_template_directory_uri() . '/css/hero.css');
}

// Enqueue CTA CSS when template part is called
add_action('get_template_part_template-parts/call-to-action', 'slgEnqueueCtaCSS');
function slgEnqueueCtaCSS()
{
  wp_enqueue_style('slg-call-to-action', get_template_directory_uri() . '/css/call-to-action.css');
}