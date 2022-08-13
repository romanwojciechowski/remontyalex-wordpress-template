</main>
<footer class="footer">
  <div class="container flex">
    <ul class="footer-list">
      <li>
        <strong>Email: </strong><a href="mailto:<?php the_field('footer-email') ?>"><?php the_field('footer-email') ?> </a>
      </li>
      <li>
        <strong>Tel: </strong><a href="tel:<?php the_field('footer-phone') ?>"><?php the_field('footer-phone') ?> </a>
      </li>
      <li>
        <strong>NIP: </strong><?php the_field('footer-nip') ?>
      </li>
      <li>
        <strong>Regon: </strong><?php the_field('footer-regon') ?>
      </li>
    </ul>
    <?php wp_nav_menu(['theme_location' => 'footer-menu', 'container' => false]); ?>
  </div>
</footer>
<?php wp_footer() ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/dist/js/main.js"></script>
<script>
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu-mobilne-container");
const menuItem = document.querySelectorAll(".menu-item");

menuItem.forEach(item => {
  item.addEventListener('click', event => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  })
})

hamburger.addEventListener("click", mobileMenu);
console.log(menuItem);
function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

</script>
</body>
</html>
