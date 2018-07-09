require('./bootstrap');
var Flickity = require('flickity');

window.Vue = require('vue');
Vue.component('confirmation-form', require('./components/ConfirmationForm.vue'));
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('project-donation-form', require('./components/ProjectDonationForm.vue'));
const app = new Vue({
    el: '#app',
    data:{
        submitAsAnonymous:true
    }
});



try {
  Typekit.load({
    loading: function () {
      // JavaScript to execute when fonts start loading
    },
    active: function () {
      // JavaScript to execute when fonts become active
      var flkty = new Flickity('.project-slider__wrap', {
        cellAlign: 'left',
        contain: true,
        pageDots: false,
        arrowShape: '',
        groupCells: true
      });
    },
    inactive: function () {
      // JavaScript to execute when fonts become inactive
    }
  })
} catch (e) { }


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