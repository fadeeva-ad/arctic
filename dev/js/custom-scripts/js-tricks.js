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


$(function(){
    arctic.jsTricks.init();
})
