AOS.init({
    once: true,
});
var swiper = new Swiper(".mySwiper", {
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});