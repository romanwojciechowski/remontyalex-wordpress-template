<?php
/*
    Template Name: Home
*/

get_header();
?>

<section class="hero">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php if( have_rows('slider') ): ?>
                <?php while( have_rows('slider') ): the_row(); ?>
                    <div class="swiper-slide" style="background-image: url('<?php image('slider-image') ?>');"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="hero-container container flex">
        <div class="hero__heading" data-aos="fade-right">
            <div class="hero__heading--title"><?php the_field('hero-heading') ?></div>
        </div>
        <a href="#offer" class="btn" data-aos="fade-right"><?php the_field('hero-button') ?></a>
    </div>
</section>

<section class="about section" id="about">
    <div class="container flex">
        <h1 class="section-heading" data-aos="fade-right"><?php the_field('about-heading') ?></h1>
        <ol class="section-gradient-list">
            <?php if( have_rows('about-list') ): ?>
                <?php while( have_rows('about-list') ): the_row(); ?>
                    <li data-aos="fade-right"><?php the_sub_field('about-list-item') ?></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ol>
    </div>
</section>

<section class="offer section" id="offer">
    <div class="container flex">
        <h1 class="section-heading" data-aos="fade-left"><?php the_field('offer-heading') ?></h1>
        <ol class="section-gradient-list">
            <?php if( have_rows('offer-list') ): ?>
                <?php while( have_rows('offer-list') ): the_row(); ?>
                    <li data-aos="fade-left"><?php the_sub_field('offer-list-item') ?></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ol>
    </div>
</section>

<section class="our-work section" id="our-work">
    <div class="container">
        <h1 class="section-heading" data-aos="fade-right"><?php the_field('work-heading') ?></h1>
        <ul class="our-work-grid">
            <li class="small" data-aos="fade-right" style="background-image: url('<?php image('work-image-small-left') ?>');"></li>
            <li class="large" data-aos="fade-right" style="background-image: url('<?php image('work-image-large-right') ?>');"></li>
            <li class="large" data-aos="fade-right" style="background-image: url('<?php image('work-image-small-right') ?>');"></li>
            <li class="small" data-aos="fade-right" style="background-image: url('<?php image('work-image-large-left') ?>');"></li>
        </ul>
    </div>
</section>


<?php get_footer(); ?>