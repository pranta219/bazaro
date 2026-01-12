/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js
02. Mobile Menu Js
03. Common Js
04. Menu Controls JS
05. Offcanvas Js
06. Search Js
07. cartmini Js
08. filter
09. Body overlay Js
10. Sticky Header Js
11. Theme Settings Js
12. Nice Select Js
13. Smooth Scroll Js
14. Slider Activation Area Start
15. Masonary Js
16. Wow Js
17. Counter Js
18. InHover Active Js
19. Line Animation Js
20. Video Play Js
21. Password Toggle Js
****************************************************
****************************************************/

(function ($) {
	"use strict";

	var windowOn = $(window);


	// Common Js//
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-height]").each(function () {
		$(this).css("height", $(this).attr("data-height"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	$("[data-text-color]").each(function () {
		$(this).css("color", $(this).attr("data-text-color"));
	});


	//  Nice Select Js//
	$('.aq-select select').niceSelect();


	// Masonary Js//
	$('.grid').imagesLoaded(function () {
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				columnWidth: '.grid-item',
			}
		});

		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});


	// magnificPopup img view //
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});


	// magnificPopup video view //
	$(".popup-video").magnificPopup({
		type: "iframe",
	});


	// Counter Js //
	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});


	// Smooth Scroll Js//
	function smoothSctoll() {
		$('.smooth a').on('click', function (event) {
			let target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 60
				}, 1500);
			}
		});
	}
	smoothSctoll();


    // back to top //
	function back_to_top() {
	var btn = $('#back_to_top');
	var btn_wrapper = $('.back-to-top-wrapper');
		windowOn.scroll(function () {
			if (windowOn.scrollTop() > 300) {
				btn_wrapper.addClass('back-to-top-btn-show');
			} else {
				btn_wrapper.removeClass('back-to-top-btn-show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
	}
	back_to_top();


	// for header language
	if ($("#aq-header-lang-toggle").length > 0) {
		window.addEventListener('click', function(e){
			if (document.getElementById('aq-header-lang-toggle').contains(e.target)){
				$(".aq-header-lang ul").toggleClass("aq-lang-list-open");
			}
			else{
				$(".aq-header-lang ul").removeClass("aq-lang-list-open");
			}
		});
	}

	// for header currency
	if ($("#aq-header-currency-toggle").length > 0) {
		window.addEventListener('click', function(e){
	
			if (document.getElementById('aq-header-currency-toggle').contains(e.target)){
				$(".aq-header-currency ul").toggleClass("aq-currency-list-open");
			}
			else{
				$(".aq-header-currency ul").removeClass("aq-currency-list-open");
			}
		});
	}

	// for header setting
	if ($("#aq-header-setting-toggle").length > 0) {
		window.addEventListener('click', function(e){
	
			if (document.getElementById('aq-header-setting-toggle').contains(e.target)){
				$(".aq-header-setting ul").toggleClass("aq-setting-list-open");
			}
			else{
				$(".aq-header-setting ul").removeClass("aq-setting-list-open");
			}
		});
	}

	// product variation js
	function initColorSwatches() {
		if ($(".aq-product-main").length) {
			$(".aq-color-swatch").on("click mouseover", function () {
				var newImage = $(this).find("img").attr("src");
				var productImage = $(this).closest(".aq-product-main").find(".aq-product-img");
				productImage.attr("src", newImage);
				$(this).siblings(".active").removeClass("active");
				$(this).addClass("active");
			});
		}
	}
	initColorSwatches();


	// countdown js here
	function aq_date_date() {
		const second = 1000,
			minute = second * 60,
			hour = minute * 60,
			day = hour * 24;

		const countdownElement = $('.aq-date-countdown');
		const targetDate = countdownElement.data('date');
		const countDownDate = new Date(targetDate).getTime();

		const interval = setInterval(function () {
			const now = new Date().getTime(),
			distance = countDownDate - now;

			// Calculate values
			let days = Math.floor(distance / day);
			let hours = Math.floor((distance % day) / hour);
			let minutes = Math.floor((distance % hour) / minute);
			let seconds = Math.floor((distance % minute) / second);

			// Format with leading zeros (e.g. 01, 02)
			days = String(days).padStart(2, '0');
			hours = String(hours).padStart(2, '0');
			minutes = String(minutes).padStart(2, '0');
			seconds = String(seconds).padStart(2, '0');

			// Update HTML
			$('#days').text(days);
			$('#hours').text(hours);
			$('#minutes').text(minutes);
			$('#seconds').text(seconds);

			if (distance < 0) {
			clearInterval(interval);
			$('#countdown').html("<span class='alert'>Event Expired</span>");
			}
		}, 1000);
	}
	aq_date_date();


    // cart minus plus js here
	$('.aq-cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = Number($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.aq-cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(Number($input.val()) + 1);
		$input.change();
		return false;
	});

	// ==========================
	// Open Handlers
	// ==========================

	// Wishlist Open
	$(".aq-wishlist-btn").on("click", function () {
		$(".aq-wishlist-active").addClass("opened");
		$(".body-overlay").addClass("opened");
	});

	// Compare Open
	$(".aq-compare-btn").on("click", function () {
		$(".aq-compare-active").addClass("opened");
		$(".body-overlay").addClass("opened");
	});

	// Compare Open
	$(".aq-cart-btn").on("click", function () {
		$(".aq-cartmini-active").addClass("opened");
		$(".body-overlay").addClass("opened");
	});

	// ==========================
	// Close Handlers
	// ==========================
	$(".aq-wishlist-close, .aq-compare-close, .aq-cartmini-close, .body-overlay").on("click", function () {
		$(".aq-wishlist-active, .aq-compare-active, .aq-cartmini-active").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});

	// ==========================
	// Close Handlers
	// ==========================
	$(".aq-note-btn").on('click', function () {
		$(".note-active").addClass("opened");
	});
	$(".aq-coupon-btn").on('click', function () {
		$(".coupon-active").addClass("opened");
	});
	$(".aq-shipping-btn").on('click', function () {
		$(".shipping-active").addClass("opened");
	});

	$(".btn-cancel").on('click', function () {
		$(".note-active, .coupon-active, .shipping-active").removeClass("opened");
	});



    // ==========================
	// Delete Item
	// ==========================
    let aq_compare_remove = function (e) {

		// Remove a single item
        $(".aq-remove").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.closest(".item-delete").remove();
        });

		// Clear all items in a group
        $(".clear-all-file").on("click", function (e) {
            e.preventDefault();
            $(this).closest(".all-file-delete").find(".item-delete").remove();
        });
    };
	aq_compare_remove();


	$(".med-header-menu-cat-toggle").on("click", function () {
		$('.med-header-menu-off').slideToggle(500);
	});


	// Password Toggle Js //
	document.querySelectorAll('.password-show-toggle').forEach(function (btn) {
		btn.addEventListener('click', function () {
			var parent = btn.closest('.aq-login-input');
			var inputType = parent.querySelector('.aq_password');
			var openEye = parent.querySelector('.open-eye');
			var closeEye = parent.querySelector('.close-eye');

			if (inputType.type === "password") {
				inputType.type = "text";
				openEye.style.display = 'block';
				closeEye.style.display = 'none';
			} else {
				inputType.type = "password";
				openEye.style.display = 'none';
				closeEye.style.display = 'block';
			}
		});
	});





})(jQuery);
