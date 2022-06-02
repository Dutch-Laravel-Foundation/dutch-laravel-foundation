// Headroom.js
import Headroom from "headroom.js";

var header = document.querySelector('header'),
    banner = document.querySelector('.banner'),
    nav = header.querySelector('nav.animated');

var includeBannerHeight = false;
var bannerHeight = combinedHeaderHeight(includeBannerHeight);

let isIE = /*@cc_on!@*/ false || !!document.documentMode;

if (header != null && isIE === false) {
    var headerHide = new Headroom(header, {
        offset: 0,
        tolerance: {
            up: 5,
            down: 0,
        },
        classes: {
            initial: 'animated',
            pinned: 'slideDown',
            unpinned: 'slideUp',
        },
    });

    headerHide.init();

    // When the banner has changing heights else you can remove this part
    window.addEventListener(
        'load',
        function () {
            headerHide.offset = { down: combinedHeaderHeight(includeBannerHeight), up: combinedHeaderHeight(includeBannerHeight) };
        },
        false,
    );

    window.addEventListener('scroll', (event) => {
        if (window.scrollY > (bannerHeight/2)) {
            nav.classList.add('make-small');
            nav.classList.remove('make-large');
        } else {
            nav.classList.add('make-large');
            nav.classList.remove('make-small');
        }
    });
}

function combinedHeaderHeight(includeBanner = true) {
    return header.offsetHeight + (includeBanner && banner ? banner.offsetHeight: 0);
}

// SwiperJS
import './components/swiper';

// AlpineJS
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Footprint
if (!(window.console && window.console.log && window.console.group)) {
    window.console = {
        group: function () { },
        log: function () { }
    };
}

window.console.group('DEVELOPER ALERT!');
window.console.log('\nHallo daar! Wil jij ook zulke mooie dingen maken zoals deze website? Neem eens een kijkje bij ons op:\n\nwww.vormkracht10.nl\n\n');
window.console.groupEnd();