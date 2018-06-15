(function(window, $){
	'use strict';
	var navbar = $('.nav');
	var navToggle = $('.nav-toggle');
	var body = $('#body');

	var scrollTop = 0;
	var scrollPosition = 0;

	//parallax vars
	var parallax = $('.parallax-bg');


	window.addEventListener('scroll', function(){
		scrollTop = window.scrollY;

		scrollTop > 0 ? navbar.addClass('scrolled') : navbar.removeClass('scrolled');

	});

	navToggle.on('click', function(){
		//navbar.toggleClass('open');  have to toggle body
		if(navbar.hasClass('open')){
			navbar.removeClass('open');
			body.removeClass('navbar-open-body');
			window.scrollTo(0, scrollPosition);
		}else{
			navbar.addClass('open');
			body.addClass('navbar-open-body');
			scrollPosition = scrollTop;

		}
	});

	//slider
	$('.testimonial-slider').slick({

		dots: true,
		arrows: false,
		slide: '.testimonial-slide',
		autoplay: true,
		autoplaySpeed: 5000,
		adaptiveHeight: true
	});

	//form stuff
	inputFocusListeners('input[type="text"]');
	inputFocusListeners('input[type="tel"]');
	inputFocusListeners('input[type="email"]');
	inputFocusListeners('input[type="number"]');
	inputFocusListeners('textarea');

	function inputFocusListeners(input){
		$(input).on('focus', function(){
			$(this).closest('.input-container').addClass('active');
		}).on('focusout', function(){
			if($(this).val() === ''){
				$(this).closest('.input-container').removeClass('active');
			}
		});		
	}

	function animateParallax(){
		var bounds = parallax.closest('.parallax-container')[0].getBoundingClientRect();
		var speed = parseFloat(parallax.attr('data-speed'));
		var offset = parseInt(parallax.attr('data-offset'), 10);

		if(bounds.top < window.innerHeight && bounds.bottom > 0){
			parallax.css({
				'transform': 'translateY(' + (Math.round(scrollTop * speed) - offset) + 'px)'
			});
		}
	}

	//if there's a parallax item
	if(parallax.length){
		//if parallax bg not hidden(mobile), do parallax
		if(parallax.css('display') != 'none'){
			var scrollAnimation = setInterval(function(){
				window.requestAnimationFrame(animateParallax);
			}, 10);
		}
	}


})(window, jQuery);