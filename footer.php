</main>
<footer>
footer
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
