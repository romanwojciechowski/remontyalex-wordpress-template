<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/dist/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body <?php body_class(); ?>>
    <header class="header">
        <div class="container flex">
            <div class="header-logo"><a href="<?= get_template_directory_uri() ?>"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt=""></a></div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div> <!-- /.container -->
    </header>
    <main>
