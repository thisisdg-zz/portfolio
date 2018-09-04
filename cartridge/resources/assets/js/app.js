
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
*/
require('./bootstrap');

let $ = require('jquery');

$("body").on("click", ".drop-down-arrow-open i", function(){
	let thisParent = $(this).closest(".projects-container").find(".needed-while-hiding");
	thisParent.slideUp();
	$(this).closest(".drop-down-arrow-open").removeClass("drop-down-arrow-open").addClass("drop-down-arrow-closed");
	$(this).removeClass("fa-chevron-down").addClass("fa-chevron-right");
})
.on("click", ".drop-down-arrow-closed i", function(){
	let thisParent = $(this).closest(".projects-container").find(".needed-while-hiding");
	thisParent.slideDown();
	$(this).closest(".drop-down-arrow-closed").removeClass("drop-down-arrow-closed").addClass("drop-down-arrow-open");
	$(this).removeClass("fa-chevron-right").addClass("fa-chevron-down");
})
.on("click", ".menu-toggle-closed", function(){
	var menuTop = $("header div.slide-menu-top");
	var svgLogo = $("header svg");
	var headerContainer = $("header .flex-box .flex-center");
	if(menuTop.hasClass("hide")){
		menuTop.removeClass("hide").addClass("show");
		svgLogo.removeClass("show").addClass("hide");
		headerContainer.removeClass("m-t-md-reduced m-b-md-reduced").addClass("m-t-md m-b-md");
	}else{
		menuTop.removeClass("show").addClass("hide");
		svgLogo.removeClass("hide").addClass("show");
		headerContainer.removeClass("m-t-md m-b-md").addClass("m-t-md-reduced m-b-md-reduced");
	}
});