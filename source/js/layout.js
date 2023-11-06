import Swiper from '../../node_modules/swiper/swiper-bundle';
import "../../node_modules/swiper/modules";
import "../../node_modules/bootstrap/js/dist/offcanvas";
import "../../node_modules/bootstrap/js/dist/collapse";

var swiper = new Swiper(".main-swiper", {
  loop: true,
  centeredSlides: true,
  spaceBetween: 0,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".main-swiper__next-btn",
    prevEl: ".main-swiper__prev-btn",
  },

  breakpoints: {
    1441: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 1.4,
    },
    576: {
      spaceBetween: 10,
      slidesPerView: 1.3,
    }
  }
});

if (window.innerWidth <= 767.98) {
  document.getElementById('main').classList.remove('container');
  document.querySelector('.product-list').classList.remove("container");
  document.getElementById('footer').classList.remove('container');
}