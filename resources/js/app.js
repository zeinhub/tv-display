import './bootstrap';
import moment from 'moment';
import Splide from '@splidejs/splide/dist/js/splide.js';

window.moment = moment;
console.log('Splide:', Splide); // Cek apakah Splide ter-import dengan benar

window.Splide = Splide;