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
          <div class="mobile-menu-open">
              <div class="mobile-menu-open__inner">
              </div>
          </div>
          <div class="mobile-menu-close">
              <div class="mobile-menu-close__inner">
              </div>
          </div>
        <a href="<?php echo home_url( '/' ); ?>">
          <?php the_custom_logo();?>
          <div class="brand-menu__title">
            <?php bloginfo( 'name' ); ?>
          </div>
        </a>
      </div>
      <nav class="nav-menu">
          <?php
            wp_nav_menu (
                array (
                    'theme_location' => 'top-nav',
                    'menu_class' => 'nav-menu__links'
                )
            );
            ?>
      </nav>
    </header>