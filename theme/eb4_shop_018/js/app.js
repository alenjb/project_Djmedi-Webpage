(function($) {
    'use strict';
    
     /* ------------------------------
	LOADING JS
	------------------------------ */
	$(window).on('load', function() {
		$('body').addClass('loaded');
	});

    /* ------------------------------
	NAV STICKY JS
	------------------------------ */
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

		if (scroll > 0) {
			$('header').addClass('header-shadow');
		} else {
			$('header').removeClass('header-shadow');
		}
	});

	/* ------------------------------
	SUB NAV JS
	------------------------------ */
	$(document).ready(function() {
		$(".sub-nav-title").click(function(){
			$(this).parent().find("ul").slideToggle(300);
			$(this).parent().siblings().find("ul").slideUp(300);
			return false;
		});
	});

	/* ------------------------------
	ANIMATION JS
	------------------------------ */
	$(function() {

		function ckScrollInit(items, trigger) {
			items.each(function() {
				var ckElement = $(this),
					AnimationClass = ckElement.attr('data-animation'),
					AnimationDelay = ckElement.attr('data-animation-delay');

				ckElement.css({
					'-webkit-animation-delay': AnimationDelay,
					'-moz-animation-delay': AnimationDelay,
					'animation-delay': AnimationDelay,
					opacity: 0
				});

				var ckTrigger = (trigger) ? trigger : ckElement;

				ckTrigger.waypoint(function() {
					ckElement.addClass("animated").css("opacity", "1");
					ckElement.addClass('animated').addClass(AnimationClass);
				}, {
					triggerOnce: true,
					offset: '90%',
				});
			});
		}

		ckScrollInit($('.animation'));
		ckScrollInit($('.staggered-animation'), $('.staggered-animation-wrap'));

	});

	/* ------------------------------
	BOOTSTRAP TOOLTIP
	------------------------------ */
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	});

	/* ------------------------------
	BOOTSTRAP POPOVER
	------------------------------ */
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl)
	});

	/* ------------------------------
	BACK TO TOP
	------------------------------ */
	$(document).ready(function() {
		var prgsPath = document.querySelector('.eb-backtotop path');
		var pathLength = prgsPath.getTotalLength();
		prgsPath.style.transition = prgsPath.style.WebkitTransition = 'none';
		prgsPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		prgsPath.style.strokeDashoffset = pathLength;
		prgsPath.getBoundingClientRect();
		prgsPath.style.transition = prgsPath.style.WebkitTransition = 'stroke-dashoffset 0.01s linear';

		var chkPrgs = function() {
			var scrollTop = $(window).scrollTop();
			var pageHeight = $(document).height() - $(window).height();
			var percentage = (scrollTop / pageHeight) * 100;
			var textColor;
			var prgs = pathLength - (scrollTop * pathLength / pageHeight);
			prgsPath.style.strokeDashoffset = prgs;

			if (percentage > 99) {
				textColor = '#2b2b2e';
			} else {
				textColor = '#a5a5a5';
			}

			$('.progress-count').text(Math.round(percentage) + '%').css({ color: textColor });
		}
		chkPrgs();
		$(window).scroll(chkPrgs);
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 50) {
				$('.eb-backtotop').addClass('active-progress');
			} else {
				$('.eb-backtotop').removeClass('active-progress');
			}
		});
		$('.eb-backtotop, .btt-up-btn').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop: 0}, 500);
			return false;
		});
		$('.btt-down-btn').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop:$(document).height()}, 500);
			return false;
		})
	});

	/* ========== Mobile Menu Toggle ========== */
	const navMenu = document.getElementById('navMenu'),
	navToggle = document.getElementById('navToggle'),
	navClose = document.getElementById('navClose')
	/* show */
	if(navToggle){
		navToggle.addEventListener('click', () =>{
			navMenu.classList.add('act');
		})
	}
	/* hide */
	if(navClose){
		navClose.addEventListener('click', () =>{
			navMenu.classList.remove('act');
		})
	}

	//서브페이지 메뉴 버튼
	$(document).ready(function() {
		$(".submenu-title").click(function(){
			$(this).find("ul").slideToggle(300);
		});
	});

})(jQuery);