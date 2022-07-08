<?php
/*
    Template Name: Home
*/

get_header();
?>

<section class="hero">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?= get_template_directory_uri() ?>/assets/img/b.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('https://remontyalex.pl/assets/img/7.jpg');"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="hero-container flex">
        <div class="hero__heading" data-aos="fade-right">
            <div class="hero__heading--title">Usługi remontowo - budowlane</div>
        </div>
        <a href="#offer" class="btn" data-aos="fade-right">Sprawdź usługi</a>
    </div>
</section>



<?php get_footer(); ?>