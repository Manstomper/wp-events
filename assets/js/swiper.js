import Swiper, { Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';

// Posts
new Swiper('.block-posts .swiper', {
  modules: [Navigation],
  createElements: true,
  navigation: true,
  slidesPerView: 3,
  spaceBetween: 16,
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
  },
});

// Component that does not exist
new Swiper('.block-foo .swiper', {
  slidesPerView: 1,
});
