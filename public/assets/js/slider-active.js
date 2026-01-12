(function ($) {
	"use strict";

	////brand-slider
	let aq_brand_slide = new Swiper(".aqf-text-slide-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 50,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 2000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});

	//fashion-slider
	let aqf_slider_main = new Swiper('.aqf-slider-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 0,
		speed: 1000,
		navigation: {
			prevEl: '.aqf-slider-prev',
			nextEl: '.aqf-slider-next',
		},
		pagination: {
			el: ".aqf-slider-dot",
			clickable: true,
		},
	});

	//collection-slider
	let product_active = new Swiper('.aq-product-active', {
		slidesPerView: 4,
		loop: true,
		autoplay: true,
		arrow: false,
		spaceBetween: 25,
		speed: 1000,
		navigation: {
			prevEl: '.aq-product-prev',
			nextEl: '.aq-product-next',
		},
		breakpoints: {
			1200: {
			    slidesPerView: 4,
			},
			992: {
			    slidesPerView: 3,
			},
			768: {
			    slidesPerView: 2,
			},
			576: {
			    slidesPerView: 2,
			},
			100: {
			    slidesPerView: 1,
			},
	    }
	});

	//collection-slider
	let aqf_collection = new Swiper('.aqf-collection-active', {
		slidesPerView: 5,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 20,
		speed: 1000,
		breakpoints: {
			1200: {
			    slidesPerView: 5,
			},
			992: {
			    slidesPerView: 3,
			},
			768: {
			    slidesPerView: 2,
			},
			576: {
			    slidesPerView: 2,
			},
			100: {
			    slidesPerView: 1,
			},
	    }
	});

	//collection-slider
	let aq_testimonial = new Swiper('.aq-testimonial-active', {
		slidesPerView: 3,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 30,
		speed: 1000,
	});

	//collection-slider
	let fr_testimonial = new Swiper('.fr-testimonial-active', {
		slidesPerView: 3,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 30,
		speed: 1000,
	});

	//deals-slider
	let aqf_deals_slider = new Swiper('.aqf-deals-slider-active', {
		slidesPerView: 3,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 10,
		speed: 1000,
		navigation: {
			prevEl: '.aqf-deals-prev',
			nextEl: '.aqf-deals-next',
		},
		breakpoints: {
			1400: {
			    slidesPerView: 3,
			},
			1200: {
			    slidesPerView: 2,
			},
			992: {
			    slidesPerView: 2,
			},
			768: {
			    slidesPerView: 2,
			},
			576: {
			    slidesPerView: 2,
			},
			0: {
			    slidesPerView: 1,
			},
	    }
	});

	//deals-slider
	let grc_deals_slider = new Swiper('.grc-deals-slider-active', {
		slidesPerView: 4.5,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 10,
		speed: 1000,
		navigation: {
			prevEl: '.aqf-deals-prev',
			nextEl: '.aqf-deals-next',
		},
	});

	//deals-slider
	let gallery_active = new Swiper('.aqb-gallery-active', {
		slidesPerView: 6,
		loop: true,
		autoplay: true,
		arrow: false,
		spaceBetween: 5,
		speed: 1000,
		navigation: {
			prevEl: '.aqf-deals-prev',
			nextEl: '.aqf-deals-next',
		},
	});

	//bag-product-active
	let bag_product_active = new Swiper('.aqb-product-active', {
		slidesPerView: 4,
		loop: true,
		arrow: false,
		spaceBetween: 30,
		speed: 1000,
		autoplay: false,
		navigation: {
			prevEl: '.bag-product-prev',
			nextEl: '.bag-product-next',
		},
		pagination: {
			el: '.swiper-pagination-progress',
			type: 'progressbar',
		},
	});

	//bag-product-active
	let category_product_active = new Swiper('.aqb-category-active', {
		slidesPerView: 6,
		loop: true,
		arrow: false,
		spaceBetween: 5,
		speed: 1000,
		autoplay: false,
		navigation: {
			prevEl: '.bag-product-prev',
			nextEl: '.bag-product-next',
		},
		pagination: {
			el: '.swiper-pagination-progress',
			type: 'progressbar',
		},
	});

	//bag-product-active
	let inner_product_active = new Swiper('.aqb-product-inner-active', {
		slidesPerView: 1,
		loop: true,
		arrow: false,
		spaceBetween: 5,
		speed: 1000,
		autoplay: false,
		navigation: {
			prevEl: '.product-inner-prev',
			nextEl: '.product-inner-next',
		},
	});

	//summer-slider-active
	let aqf_summer_active = new Swiper('.aqf-summer-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		arrow: false,
		spaceBetween: 0,
		speed: 1000,
		navigation: {
			prevEl: '.aqf-summer-prev',
			nextEl: '.aqf-summer-next',
		},
		breakpoints: {
			992: {
			    slidesPerView: 1,
			},
			768: {
			    slidesPerView: 2,
				spaceBetween: 20,
			},
			576: {
			    slidesPerView: 2,
				spaceBetween: 20,
			},
			0: {
			    slidesPerView: 1,
			},
	    }
	});

	//testimonial-slider-active
	let aqf_testimonial = new Swiper('.aqf-testimonial-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 60,
		speed: 1000,
		navigation: {
			prevEl: '.aqf-testimonial-prev',
			nextEl: '.aqf-testimonial-next',
		},
		pagination: {
			el: ".aqf-testimonial-dot",
			clickable: true,
		},
	});

	//testimonial-slider-active
	let product_slider = new Swiper('.aq-modal-slider-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 10,
		speed: 1000,
		navigation: {
			prevEl: '.aq-modal-prev',
			nextEl: '.aq-modal-next',
		},
	});


	//testimonial-slider-active
	let aq_shopgram = new Swiper('.aq-shopgram-active', {
		slidesPerView: 7,
		loop: true,
		autoplay: false,
		arrow: false,
		spaceBetween: 7,
		speed: 1000,
		navigation: {
			prevEl: '.aq-shopgram-prev',
			nextEl: '.aq-shopgram-next',
		},
		breakpoints: {
			1400: {
			    slidesPerView: 7,
			},
			1200: {
			    slidesPerView: 5,
			},
			992: {
			    slidesPerView: 4,
			},
			768: {
			    slidesPerView: 3,
			},
			576: {
			    slidesPerView: 2,
			},
			100: {
			    slidesPerView: 2,
			},
	    }
	});
	
	//electronics-slider-active
	let elt_slider = new Swiper('.elt-slider-active', {
		slidesPerView: 2,
		loop: true,
		autoplay: false,
		arrow: true,
		spaceBetween: 20,
		centeredSlides: true,
		speed: 1000,
		navigation: {
			prevEl: '.aq-slider-prev',
			nextEl: '.aq-slider-next',
		},
	});

	//electronics-slider-active
	let brand_active = new Swiper('.aq-brand-active', {
		slidesPerView: 5,
		loop: true,
		arrow: true,
		autoplay: false,
		spaceBetween: 0,
		centeredSlides: true,
		speed: 1000,
		navigation: {
			prevEl: '.aq-brand-prev',
			nextEl: '.aq-brand-next',
		},
	});
	

	//electronics-slider-active
	let grc_brand_active = new Swiper('.grc-brand-active', {
		slidesPerView: 6,
		loop: true,
		arrow: true,
		autoplay: false,
		spaceBetween: 0,
		speed: 1000,
	});


	//testimonial-slider-active
	let aq_header_discount = new Swiper('.aq-header-discount-active', {
		slidesPerView: 1,
		loop: true,
		arrow: false,
		spaceBetween: 10,
		speed: 1000,
		autoplay: true,
		navigation: {
			prevEl: '.aq-header-prev',
			nextEl: '.aq-header-next',
		},
	});

	//testimonial-slider-active
	let aqf_categories = new Swiper('.aqf-categories-active', {
		slidesPerView: 8,
		loop: true,
		arrow: false,
		spaceBetween: 45,
		speed: 1000,
		autoplay: true,
		navigation: {
			prevEl: '.aqf-categories-prev',
			nextEl: '.aqf-categories-next',
		},
		breakpoints: {
			1200: {
			    slidesPerView: 8,
			},
			992: {
			    slidesPerView: 7,
				spaceBetween: 20,
			},
			768: {
			    slidesPerView: 5,
				spaceBetween: 20,
			},
			576: {
			    slidesPerView: 4,
				spaceBetween: 20,
			},
			100: {
			    slidesPerView: 3,
				spaceBetween: 20,
			},
	    }
	});

	
	//testimonial-slider-active
	let med_categories = new Swiper('.med-categories-active', {
		slidesPerView: 8,
		loop: true,
		arrow: false,
		spaceBetween: 45,
		speed: 1000,
		autoplay: true,
		navigation: {
			prevEl: '.aqf-categories-prev',
			nextEl: '.aqf-categories-next',
		},
	});

	// aqf_category
	let aqf_category = new Swiper(".aqf-category-2-active", {
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		loop: true,
		autoplay: true,
		coverflowEffect: {
			rotate: 0,
			stretch: 0,
			depth: 150,
			modifier: 2,
			slideShadows: false,
		},

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		
		keyboard: {
			enabled: true
		},

		mousewheel: {
			enabled: false, 
		},

		breakpoints: {
			1400: {
			  slidesPerView: 3,
			},
			1200: {
			  slidesPerView: 3,
			},
			768: {
			   slidesPerView: 2,
			},
			576: {
			  slidesPerView: 2,
			},
	    }
	});


	// // Arrival product slider
	let arrivals_nav = new Swiper(".aqf-arrivals-nav-active", {
		speed: 1200,
		spaceBetween: 0,
		slidesPerView: 1,
		centeredSlides: true,
		freeMode: true,
		watchSlidesProgress: true,
	});

	let arrivals_product = new Swiper(".aqf-arrivals-product-active", {
		speed: 1200,
		spaceBetween: 30,
		slidesPerView: 1,
		centeredSlides: true,
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
	});

	// Connect both Swipers
	arrivals_product.controller.control = arrivals_nav;
	arrivals_nav.controller.control = arrivals_product;




})(jQuery);