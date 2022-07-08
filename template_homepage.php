<?php
/*
    Template Name: Home
*/

get_header();
?>

<section class="hero" style="background-image: url('<?= get_template_directory_uri() ?>/assets/img/b.jpg');" >
    <div class="flex">
        <div class="hero__heading" data-aos="fade-right">
            <div class="hero__heading--title">Usługi remontowo - budowlane</div>
        </div>
        <a href="#offer" class="btn" data-aos="fade-right">Sprawdź usługi</a>
    </div>
</section>

<?php get_footer(); ?>