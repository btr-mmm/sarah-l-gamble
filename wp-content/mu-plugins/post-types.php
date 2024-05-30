<?php

// Register custom post types
add_action('init', 'slgRegisterPostTypes');
function slgRegisterPostTypes()
{
  // Scholarship recipients
  register_post_type(
    'recipient',
    array(
      'description' => 'Scholarship recipients',
      'public' => true,
      'labels' => array(
        'name' => __('Recipients', 'example-textdomain'),
        'singular_name' => __('Recipient', 'example-textdomain'),
        'menu_name' => __('Recipients', 'example-textdomain'),
        'name_admin_bar' => __('Recipientss', 'example-textdomain'),
        'add_new' => __('Add New', 'example-textdomain'),
        'add_new_item' => __('Add New Recipient', 'example-textdomain'),
        'edit_item' => __('Edit Recipient', 'example-textdomain'),
        'new_item' => __('New Recipient', 'example-textdomain'),
        'view_item' => __('View Recipient', 'example-textdomain'),
        'search_items' => __('Search Recipients', 'example-textdomain'),
        'not_found' => __('No recipients found', 'example-textdomain'),
        'not_found_in_trash' => __('No recipients found in trash', 'example-textdomain'),
        'all_items' => __('All Recipients', 'example-textdomain'),
      ),
      'supports' => array('title'),
      'menu_icon' => 'dashicons-awards'
    )
  );
}

add_filter('enter_title_here', 'slgChangeTitleText');
function
  slgChangeTitleText(
  $title
) {
  $screen = get_current_screen();

  if ($screen->post_type == 'recipient') {
    $title = 'Recipient name';
  }

  return $title;
}