$(function () {
	function toppageCover() {
		$('.firstEffect').fadeOut(3000);
	}
	$(function () {
		if (navigator.userAgent.indexOf('Windows') != -1) {
			$('body').addClass('windows');
			setTimeout(toppageCover, 1500);
		} else if (navigator.userAgent.indexOf('Mac') != -1
			|| navigator.userAgent.indexOf('iPhone') != -1
			|| navigator.userAgent.indexOf('iPod') != -1
			|| navigator.userAgent.indexOf('iPad') != -1) {
			$('body').addClass('all');
			setTimeout(toppageCover, 4000);
		} else {
			$('body').addClass('windows');
			setTimeout(toppageCover, 1500);
		}
	});
	// change height
	$(window).ready(function () {
		var windowWidth = $(window).width();
		var windowHeight = window.innerHeight;
		var iconPosition = windowHeight / 2 - 34;
		$('.firstEffect svg, .firstEffect span, .mv p img').css('top', iconPosition + 'px');
		$('.firstEffect, .bgCover').css('height', windowHeight + 'px');
		if (windowWidth < 750) {
			$('header .textUnderLine').removeClass('textUnderLine');
			$('.mv .mvLoad').css('height', windowHeight + 'px');
		}
	});
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
	// topPageEffect
	function toppageEffect() {
		$('.topPage, .footerPage').fadeIn('slow');
	}
	setTimeout(toppageEffect, 1000);
	//
	$('.yearLinkToggle').on('click', function (e) {
		e.preventDefault();
		$(this).parent('h3').next('ul').slideToggle('fast');
	});
	//
	var winH = $(window).height();
	$('.box').innerHeight(winH);
	$(window).on('load', function () {
		setBgImg($('.fitImg'));
	});
	$(window).on('resize', function () {
		winH = $(window).height();
		$('.box').innerHeight(winH);
		setBgImg($('.fitImg'));
	});
	function setBgImg(object) {
		//画像サイズ取得
		var imgW = object.width();
		var imgH = object.height();
		//ウィンドウサイズ取得
		var winW = $(window).width();
		var winH = $(window).height();
		//幅・高さの拡大率取得
		var scaleW = winW / imgW;
		var scaleH = winH / imgH;
		//幅・高さの拡大率の大きいものを取得
		var fixScale = Math.max(scaleW, scaleH);
		//画像の幅高さを設定
		var setW = imgW * fixScale;
		var setH = imgH * fixScale;
		//画像の位置を設定
		var moveX = Math.floor((winW - setW) / 2);
		var moveY = Math.floor((winH - setH) / 2);
		//設定した数値でスタイルを適用
		object.css({
			'width': setW,
			'height': setH,
			'left': moveX,
			'top': moveY
		});
	}
});