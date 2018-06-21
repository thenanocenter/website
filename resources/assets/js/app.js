
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

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
