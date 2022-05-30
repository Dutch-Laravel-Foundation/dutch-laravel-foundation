// import Swiper JS and it's styles
import Swiper, { Autoplay, Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/navigation';

// Carousel swiper (used on the What is Laravel page)
new Swiper('.swiper-carousel', {
    modules: [ Navigation ],
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Autoplay (logo) swiper (used on the homepage)
function logoSwiperEnabled(carousel) {
    const slidesCount = carousel.querySelectorAll('.swiper-slide').length;
    let settings;
    const wrapperWidth = carousel.querySelector('.js-swiper-wrapper').offsetWidth;
    const slidesWidth = [...carousel.querySelectorAll('.swiper-slide')]
        .map((el) => el.offsetWidth)
        .reduce((total, width) => total + width);
    if (slidesWidth < wrapperWidth) {
        settings = {
            loop: false,
            slidesPerView: slidesCount,
            enabled: false,
        };
        return settings;
    }
    return null;
}

new Swiper(`.swiper-autoplay`, {
    modules: [ Autoplay ],
    allowTouchMove: false,
    slidesPerView: 10,
    loop: true,
    loopedSlides: 4,
    freeMode: true,
    spaceBetween: 60,
    autoplay: {
        delay: 2000,
    },
    speed: 2000,
    freeModeMomentum: false,
    preloadImages: true,
    centeredSlides: true,
    // ...logoSwiperEnabled(carousel)
});