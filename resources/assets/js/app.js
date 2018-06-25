require('./bootstrap');

window.Vue = require('vue');
Vue.component('confirmation-form', require('./components/ConfirmationForm.vue'));
Vue.component('notification', require('./components/Notification.vue'));
const app = new Vue({
    el: '#app'
});

var Flickity = require('flickity');
var flickityElement = document.querySelector('.project-slider__wrap');
if(flickityElement !== null){
    var flickityInstance = new Flickity(flickityElement, {
        cellAlign: 'left',
        contain: true,
        pageDots: false,
        arrowShape: '',
        groupCells: true
    });
}

$( document ).ready(function() {
    //Embed Video Modals
    $("body").on('shown.bs.modal', function (e) {
        var $iframes = $(e.target).find("iframe");
        $iframes.each(function(index, iframe){
            var autoplaySrc = $(iframe).data('autoplay-src');
            $(iframe).attr("src", autoplaySrc);
        });
    });
    $("body").on('hidden.bs.modal', function (e) {
        var $iframes = $(e.target).find("iframe");
        $iframes.each(function(index, iframe){
            $(iframe).removeAttr("src");
        });
    });
});