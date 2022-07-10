<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/dist/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>
    <body <?php body_class(); ?>>
    <header class="header">
        <div class="container flex">
            <div class="header-logo"><a href="<?= get_template_directory_uri() ?>"><img src="<?php image('logo', 'option') ?>" alt="<?php alt('logo', 'option') ?>"></a></div>
            <?php wp_nav_menu(['theme_location' => 'header-menu', 'container' => false]); ?>
            <?php wp_nav_menu(['theme_location' => 'res-navigation', 'menu_class' => 'responsive-navigation'] ); ?>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div> <!-- /.container -->
    </header>
    <main>
