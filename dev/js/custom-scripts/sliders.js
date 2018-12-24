import Swiper from 'swiper';
import {
    arctic
} from '../mainJs.js';

arctic.sliders = {
    mainSlider: function () {
        var mainSlider = new Swiper(".main-slider .swiper-container", {
            loop: true,
            navigation: {
                prevEl: ".main-slider__arrow_prev",
                nextEl: ".main-slider__arrow_next"
            }
        })
    },

    init: function () {
        arctic.sliders.mainSlider();
    }
}

$(function(){
    arctic.sliders.init();
})


// arctic.sliderss = {
//     archiveSlider: function () {
//         var archiveSlider = new Swiper(".block-11_slider", {
//             loop: true,
//             spaceBetween: 30,
//             navigation: {
//                 prevEl: ".main-slider__arrow_prev",
//                 nextEl: ".main-slider__arrow_next"
//             }
//         })
//     },

//     init: function () {
//         arctic.sliderss.archiveSlider();
//     }
// }
// $(function(){
//     arctic.sliderss.init();
// })

