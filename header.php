<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eats.</title>
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="brand-menu">
          <div class="toggle">
              <div class="toggle--inner">
              click
              </div>
          </div>
        <a href="<?php echo home_url( '/' ); ?>">
          <?php the_custom_logo();?>
          <div class="brand-menu--title">
            <?php bloginfo( 'name' ); ?>
          </div>
        </a>
      </div>
      <nav class="nav-menu">
          <?php
            wp_nav_menu (
                array (
                    'theme_location' => 'top-nav',
                    'menu_class' => 'nav-menu--links'
                )
            );
            ?>
      </nav>
    </header>