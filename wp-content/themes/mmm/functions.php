<?php

// Register swiper on scholarships page
add_action('wp_enqueue_scripts', 'slgRegisterSwiper');
function slgRegisterSwiper()
{
  if (is_page('scholarships')) {
    wp_enqueue_style('slg-swiper-css', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_script('slg-swiper-js', get_template_directory_uri() . '/js/swiper.min.js');
  }
}