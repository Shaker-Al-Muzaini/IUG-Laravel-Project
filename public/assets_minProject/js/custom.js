$(function () {
	"use strict";

	//================= Preloader Js Start ================

	$(window).on("load", function () {
		$(".preloader").delay(1000).fadeOut(800);
	});

	//================= Preloader Js End ================

	//================= Sticky Menu Js Start ================

	$(window).on("scroll", function() {
		var scrolling = $(this).scrollTop();
		if (scrolling >= 200) {
			$(".navigation").addClass("sticky");
		}
		else {
			$(".navigation").removeClass("sticky");
		}
	});

	//================= Sticky Menu Js End ================
	
	// =============== Closes responsive menu when a scroll link is clicked Start ================

    $('.nav-link').on('click', function () {
        $('.navbar-collapse').collapse('hide');
	});
	
	// =============== Closes responsive menu when a scroll link is clicked End ================

	//================= Product Details Slide Js Start ================

	$('.slide_item').slick({
		dots: false,
		arrows: true,
		speed: 800,
		autoplay:false,
		slidesToShow: 3,
		slidesToScroll: 1,
		centerMode: true,
        centerPadding: '0px',
		prevArrow:'<i class="fa fa-chevron-left left_arrow"></i>',
		nextArrow:'<i class="fa fa-chevron-right right_arrow"></i>',
	});
	
	//================= Product Details Slide Js End ================

	//================= Product Slide Js Start ================
	
	$('.product-slide').slick({
		dots: false,
		arrows: false,
		speed: 800,
		autoplay:false,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
				}
		 },
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
		 },
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1,
				}
		 }
	  ]
	});

	//================= Product Slide Js End ================

	//================= Testimonial Slide Js Start ================

	$('.testimonial-slide').slick({
		dots: false,
		arrows: true,
		speed: 800,
		autoplay:true,
		prevArrow:'<i class="fa fa-chevron-left left_arrow"></i>',
		nextArrow:'<i class="fa fa-chevron-right right_arrow"></i>',
		slidesToShow: 1,
		slidesToScroll: 1,
	});

	//================= Testimonial Slide Js End ================

	//================= Brand Slide Js Start ================
	
	$('.brand-slide').slick({
		dots: false,
		arrows: true,
		speed: 800,
		autoplay:true,
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow:'.left_arrow2',
		nextArrow:'.right_arrow2',
		centerMode:true,
		centerPadding:0,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 5,
					arrows:false,
				}
		 },
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					arrows:false,
				}
		 },
		 {
			breakpoint: 576,
			settings: {
				slidesToShow: 2,
				arrows:false,
			}
	 },
			{
				breakpoint: 481,
				settings: {
					slidesToShow: 1,
					arrows:false,
				}
		 }
	  ]
	});

	//================= Brand Slide Js End ================

	//================= Discount Slide Js Start ================

	$('.discount-slide').slick({
		dots: false,
		arrows: false,
		speed: 800,
		autoplay:true,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
				}
		 },
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
		 },
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
		 }
	  ]
	});

	//================= Discount Slide Js End ================

	//================= Card Js Start ================
	
	$('.card h5 a').click(function(){
		$('.card h5 a').removeClass('active');
		$(this).toggleClass('active');
	});

	//================= Card Js End ================

	//================= Venobox Js Start ================
	
	$('.venobox').venobox({
		spinner: 'wave'
	}); 

	//================= Product Slide Js End ================
	
	//================= Back To Top Js Start ================

	var $top_offset=300;
    $('.top_to i').click(function(){
		 $('html,body').animate({
			 scrollTop:0
		 },800);
    });
	
	$(window).scroll(function(){
		var $scrolling=$(this).scrollTop();
		if($scrolling > $top_offset){
			$('.top_to i').fadeIn(500);
		}
		else{
			$('.top_to i').fadeOut(500);
		}
	});

	//================= Back To Top Js End ================
	
	
});