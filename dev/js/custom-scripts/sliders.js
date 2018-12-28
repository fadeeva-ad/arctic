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

    archiveSlider: function () {
        var archiveSlider = new Swiper(".block-11_slider", {
            loop: true,
            slidesPerView: 1,
            navigation: {
                prevEl: ".main-slider__arrow_prev",
                nextEl: ".main-slider__arrow_next"
            }
        })
        
    },
  
    

    init: function () {
        arctic.sliders.mainSlider();
        arctic.sliders.archiveSlider();
        
    }
    
}

$(function(){
    arctic.sliders.init();
})
