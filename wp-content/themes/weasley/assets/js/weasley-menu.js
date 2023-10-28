/*
 * Copyright (c) 2023 Shtheme
 * Author: Shtheme
 * This file is made for CURRENT TEMPLATE
*/

jQuery(document).ready(function(){

	"use strict";
	
	// here all ready functions

	weasley_home_menu();
	
	
	
});

// -----------------------------------------------------
// ---------------   HOME MENU    -------------------
// -----------------------------------------------------

function weasley_home_menu(){
	
	// "use strict";

	$(document).ready(function () {
		$(document).on("scroll", onScroll);
		//smoothscroll
		$('ul.navbar-nav > li > a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
			$('ul.navbar-nav > li > a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
			var target = this.hash,
				menu = target;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 500, 'swing', function () {
				document.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
	});

	function onScroll(event){
		var scrollPos = $(document).scrollTop() + 10;
		$('ul.navbar-nav > li > a').each(function () {
			var currLink = $(this);
			var refElement = $(currLink.attr("href"));
			if (scrollPos >= 10) {
				if (refElement.length) {
					var contentNav = refElement.position().top;
					if (contentNav <= scrollPos && contentNav + refElement.height() > scrollPos) {
						$('.navbar-nav > li > a').removeClass("active");
						currLink.addClass("active");
					}
					else{
						currLink.removeClass("active");
					}
				}
			} else {
				$('ul.navbar-nav > li > a.active').removeClass("active");
				$('ul.navbar-nav > li:first > a').addClass("active");
			}
		});
	}
}
