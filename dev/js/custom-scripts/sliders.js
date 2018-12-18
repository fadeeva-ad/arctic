import Swioer from 'swiper';
import {
    arctic
} from '../mainJs.js';

arctic.sliders = {
    mainSlider: function () {
        var mainSlider = new Swioer(".main-slider .swiper-container", {
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