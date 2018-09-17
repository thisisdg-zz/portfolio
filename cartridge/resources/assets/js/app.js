require('./bootstrap');

let $ = require('jquery');

$("body").on("click", ".drop-down-arrow-open i", function(){
	let thisParent = $(this).closest(".projects-container, .contact-list").find(".needed-while-hiding");
	thisParent.slideUp();
	$(this).closest(".drop-down-arrow-open").removeClass("drop-down-arrow-open").addClass("drop-down-arrow-closed");
	$(this).removeClass("fa-chevron-down").addClass("fa-chevron-right");
})
.on("click", ".drop-down-arrow-closed i", function(){
	let thisParent = $(this).closest(".projects-container, .contact-list").find(".needed-while-hiding");
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
		$(this).find("span:first-child").addClass("top-span");
		$(this).find("span:nth-child(2)").addClass("middle-span");
		$(this).find("span:last-child").addClass("bottom-span");
	}else{
		menuTop.removeClass("show").addClass("hide");
		svgLogo.removeClass("hide").addClass("show");
		headerContainer.removeClass("m-t-md m-b-md").addClass("m-t-md-reduced m-b-md-reduced");
		$(this).find("span:first-child").removeClass("top-span");
		$(this).find("span:nth-child(2)").removeClass("middle-span");
		$(this).find("span:last-child").removeClass("bottom-span");
	}
});


//CODE to set setTimeout while resizing window

/*function setSvgInIphone(){
	setTimeout(function(){
		if(screen.width == 320){
			$("header").find("svg text").attr("x", 15);
			console.log("done");
		}else{
			$("header").find("svg text").attr("x", 44);
		}
	}, 500);
}

window.onload = function(){
	setSvgInIphone();
};*/

/*window.resize = function(){
	setSvgInIphone();
};*/

//This CODE ends here.