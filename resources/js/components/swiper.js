/*
    SwiperJS
    npm install swiper@^7
    Github: https://github.com/nolimits4web/swiper

    Swiper slider
    v2.0 | 26-11-2021
    Slim Site @ Vormkracht10

    Default values for slider:
        data-items = "1"
        data-autoplay = "false"
        data-nav = "false"
        data-space = "20"
        data-speed = "1000"
        data-loop = "false"
        data-drag = "true"
*/
import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const swiperElements = document.querySelectorAll('.js-swiper'), // for general swiper elements
    logosSwiper = document.querySelector('.js-logos-swiper'), // for specific logo swiper
    reviewsSwiper = document.querySelector('.js-reviews-swiper'); // for specific review swiper

if (swiperElements.length > 0) {
    swiperElements.forEach((swiper) => {
        let settings = {
            // Active modules: make sure to import the ones you need
            modules:
                [Autoplay, Navigation, Pagination],
            // Module settings
            autoplay: {
                enabled: swiper.dataset.autoplay ?? false,
                delay: swiper.dataset.speed >= 1 ? swiper.dataset.speed : 1000,
            },
            navigation: {
                nextEl: swiper.querySelector('.swiper-button-next'),
                prevEl: swiper.querySelector('.swiper-button-prev'),
            },
            pagination: {
                el: swiper.querySelector('.swiper-pagination'),
                clickable: true,
            },
            // Layout settings
            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: swiper.dataset.items ? swiper.dataset.items : 2,
                    spaceBetween: swiper.dataset.space >= 1 ? swiper.dataset.space : 20,
                },
            },
            // Other options
            loop:
                swiper.dataset.loop ?? false,
            simulateTouch:
                swiper.dataset.drag ?? false,
        };
        const swiperInstance = new Swiper(swiper, settings);
    });
}

// Logo swiper
if(document.body.contains(logosSwiper)) {
    var swiperLogos = new Swiper(logosSwiper, {
        modules: [ Autoplay ],
        slidesPerView: 2,
        breakpoints: {
            320: {
              slidesPerView: 2,
            },
            480: {
              slidesPerView: 3,
            },
            640: {
              slidesPerView: 4,
            },
            768: {
                slidesPerView: 5,
            },
            1024: {
                slidesPerView: 6,
            },
            1200: {
                slidesPerView: 8,
            },
            1400: {
                slidesPerView: 10,
            },
            1600: {
                slidesPerView: 12,
            }, 
        },
        spaceBetween: 30,
        loop: true,
        autoplay: true,
        speed: 1500,
    });
}

// Review swiper
if(document.body.contains(reviewsSwiper)) {
    // Define default settings or get them from HTML data-attributes
    let reviewSettings = {
        spaceBetween:
            reviewsSwiper.dataset.spaceBetween >= 0 ? parseInt(reviewsSwiper.dataset.spaceBetween) : 40,
        autoplay:
            reviewsSwiper.dataset.autoplay === 'true'
                ? (reviewsSwiper.dataset.delay >= 1 ? { delay: parseInt(reviewsSwiper.dataset.delay), pauseOnMouseEnter: true } : true)
                : false,
        loop:
            reviewsSwiper.dataset.loop ?? false,
    };

    const reviewsSwiperSlider = new Swiper(reviewsSwiper, {
        modules: [Autoplay, Navigation, Pagination],
        ...reviewSettings,
        navigation: {
            nextEl: reviewsSwiper.querySelector('.swiper-button-next'),
            prevEl: reviewsSwiper.querySelector('.swiper-button-prev'),
        },
        pagination: {
            el: reviewsSwiper.querySelector('.swiper-pagination'),
            clickable: true,
        },
    });
}
