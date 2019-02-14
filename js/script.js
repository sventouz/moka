$(function () {
	//
	$('.menuBtn a').on('click', function (e) {
		e.preventDefault();
		$('header').slideToggle('slow');
	});
	//
	$("#panel-btn").click(function () {
		$("#panel").slideToggle(200);
		$("#panel-btn-icon").toggleClass("close");
		return false;
	});
	//
	$(window).on('scroll', function () {
		var scrollTop = $(window).scrollTop();
		if (scrollTop > 100) {
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
		//
		var windowWidth = $(window).width();
		if (windowWidth < 750) {
			if (scrollTop > 200) {
				$('.menuBtn').fadeIn();
			} else {
				$('.menuBtn').fadeOut();
			}
		}
	});
	//
	$('.yearLinkToggle').on('click', function (e) {
		e.preventDefault();
		$(this).parent('h3').next('ul').slideToggle('fast');
	});
	//
	var swiper = new Swiper('.swiper-container', {
		loop: true,
		autoplay: {
			delay: 4000,
		},
		speed: 1000,
		effect: 'fade',
		disableOnInteraction: true
  });
});