// SwiperJS
import './components/swiper';

// AlpineJS
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

// Footprint
if (!(window.console && window.console.log && window.console.group)) {
    window.console = {
        group: function () {},
        log: function () {}
    };
}

window.console.group('DEVELOPER ALERT!');
window.console.log('\nHallo daar! Wil jij ook zulke mooie dingen maken zoals deze website? Neem eens een kijkje bij ons op:\n\nwww.vormkracht10.nl\n\n');