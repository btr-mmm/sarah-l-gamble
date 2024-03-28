<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php if(is_front_page()): ?>
    <?php bloginfo('name') ?>
    <?php echo get_bloginfo('description') == '' ? '' : ' | ' . get_bloginfo('description'); ?>
    <?php else: ?>
    <?php get_the_title() ?> | <?php bloginfo('name') ?>
    <?php endif; ?>
  </title>
</head>
<body>
  <header>
    <h1>Logo</h1>
    <nav>
      <ul>
        <li>Nav</li>
        <li>Menu</li>
        <li>Goes</li>
        <li>Here</li>
      </ul>
    </nav>
  </header>