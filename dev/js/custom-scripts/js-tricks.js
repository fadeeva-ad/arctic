import {
    arctic
} from '../mainJs.js';

arctic.jsTricks = {
    remove: function () {
        $("[data-js-remove]").each(function(){
            $(this).remove();
        })
    },

    init: function () {
        arctic.jsTricks.remove();
    }
}

function tabs() {
    $('[data-tab]').each(function () { // выбираем кнопки на странице и проходимся по каждой

        $(this).click(function (e) { // прослушивваем "клик" по кнопке
			e.preventDefault();

            let buttonClass = $(this).attr('class').split(' ')[0]; // получаем класс кнопки       

            let target = $(this).attr('data-tab'); // находим "цель" кнопки

            let targetClass = $('[data-index="' + target + '"]').attr('class').split(' ')[0]; // получаем класс "цели"

            $(this).closest('.tabs-btn').find("." + buttonClass).removeClass(buttonClass + "_active"); // ищем родителя и удаляем активный класс у всех кнопок

            $('.tabs').find("." + targetClass).removeClass(targetClass + "_active"); // ищем ее родителя и скрывавем все "цели" кнопок

            $(this).addClass(buttonClass + "_active"); // добавляем кнопке активный класс

			$('[data-index="' + target + '"]').addClass(targetClass + "_active"); // добавляем "цели" активный класс
			
			
			// после переключения таба слайдер переиницилизарутся. 
			setTimeout(function () {
				var mySwiper = $(".block-11_slider")[0].swiper;
				mySwiper.update();
			   }, 300);
		})
		
	})
	
}

$(function(){
	arctic.jsTricks.init();
	tabs();
	
})

