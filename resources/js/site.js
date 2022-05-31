import './components/swiper';

// Carousel swiper (used on the What is Laravel page)
new Swiper('.swiper-carousel', {
    modules: [ Navigation ],
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});