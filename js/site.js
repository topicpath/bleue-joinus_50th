setTimeout(
	function() {
		$('body').addClass('init');
	},
	300
);

/* mov_show
============================================================================================================ */
(function () {
	setTimeout(() => {
		$('.mov_first').addClass('showed')
	}, 200);
}());
(function () {
	const mov_show = document.querySelectorAll('.mov_show');
	if(!mov_show.length) return false;

	const options = {
		root: null,
		rootMargin: '-20% 0px',
		threshold: 0,
	};

	setTimeout(() => {
		const observer = new IntersectionObserver(intersectionCallback, options);
		mov_show.forEach((tgt) => {
			observer.observe(tgt);
		});
	}, 400);
	function intersectionCallback(entries) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const target = entry.target;
				target.classList.add('showed');
			}
		});
	}
}());

/* pagetop
============================================================================================================ */
(function () {
	var pt = $('#pagetop'),
		f = $('#footer');

	if(!pt.length) return false;

	var checkPos = function() {
//		if(isSpW()) return;
		var s = $(this).scrollTop(),
			h = $(this).height();

		if(s >= h/4) {
			if(!pt.hasClass('show')) pt.addClass('show');
		} else {
			if(pt.hasClass('show')) pt.removeClass('show');
		}
	}
	$(window).on('scroll resize', checkPos);
	checkPos();
}());

/* header
============================================================================================================ */
(function () {
	var b = $('body');
	var h = b.hasClass('page-index') ? 400 : 200;
	var checkPos = function(e) {
//		if(isSpW()) return;
		var s = $(this).scrollTop();
		if(s < h) {
			if(b.hasClass('head-min')) {
				b.removeClass('head-min');
			}
		} else {
			if(!b.hasClass('head-min')) {
				b.addClass('head-min');
			}
		}
	}

	$(window).on('scroll', checkPos);
	checkPos();
}());


/* nav
============================================================================================================ */
(function () {
	var h = $('#header'),
		n = $('#header nav'),

		b = $('#header .nav_btn a'),
		nc = $('#header .nav_cover'),
		c = 'open';

	b.on('click', function() {
		h.toggleClass(c);
		if(h.hasClass(c)) {
			$('#header .gnav').scrollTop(0);
		}
		return false;
	})
	nc.on('click touchstart', function() {
		h.toggleClass(c);
		return false;
	});
}());


/* pdf
============================================================================================================ */
(function () {
	$("a[href$='.pdf']").attr("target", "_blank");
}());


/* smooth scroll
============================================================================================================ */
(function () {
	$(document).on('click', 'a[href^="#"], area[href^="#"], a[href^="' + location.pathname + '#"], a[href^="' + location.protocol + '//' + location.hostname + location.pathname + '#"]', function() {
		var hash = this.hash;
		if(hash.length > 1 && !this['rel']){
			goScroll(hash);
			return false;
		}
	})
}());

function goScroll(hash, time, offset) {
	var target = $(hash).offset().top;
	if(!time) time = 1000;
	if(!offset) offset = 0;

	if(!$('html').hasClass('no-scroll-behavior')) {
		$('html').addClass('no-scroll-behavior')
	}

	if($('#header').hasClass('open')) {
		$('#header').removeClass('open');
	}

	$('body,html')
		.animate({scrollTop: target >= offset ? target - offset : target}, time, 'easeInOutCubic', function(){
			$(this).unbind("mousewheel DOMMouseScroll");
			$('window').trigger('scroll');
		})
		.bind("mousewheel DOMMouseScroll",function(){
			$(this).queue([]).stop();
			$(this).unbind("mousewheel DOMMouseScroll");
			$('window').trigger('scroll');
		})
}


/* tel link
============================================================================================================ */
(function () {
	if(getDevice() == 'other') {
		$('a[href^="tel:"]').removeAttr('href').css('text-decoration', 'none');
	}
}());

/* isSpW
============================================================================================================ */
function isSpW() {
	return window.matchMedia("(max-width: 767px)").matches;
}
function isHover() {
	return window.matchMedia("(hover: hover)").matches;
}

/* getDevice
============================================================================================================ */
function getDevice() {
	var ua = navigator.userAgent.toLowerCase();
	if ((ua.indexOf('iphone') != -1) || ua.indexOf('ipod') != -1 || (ua.indexOf("android") != -1 && ua.indexOf("mobile") != -1) || (ua.indexOf("firefox") != -1 && ua.indexOf("mobile") != -1) || (ua.indexOf("windows") != -1 && ua.indexOf("phone") != -1)) {
		return 'sp';
	}else if(ua.indexOf('ipad') > -1 || (ua.indexOf('macintosh') > -1 && 'ontouchend' in document) || ua.indexOf('android') > -1){
		return 'tab';
	}else{
		return 'other';
	}
}

/* https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js */
(function(factory){if(typeof define==="function"&&define.amd){define(["jquery"],function($){return factory($)})}else if(typeof module==="object"&&typeof module.exports==="object"){exports=factory(require("jquery"))}else{factory(jQuery)}})(function($){$.easing.jswing=$.easing.swing;var pow=Math.pow,sqrt=Math.sqrt,sin=Math.sin,cos=Math.cos,PI=Math.PI,c1=1.70158,c2=c1*1.525,c3=c1+1,c4=2*PI/3,c5=2*PI/4.5;function bounceOut(x){var n1=7.5625,d1=2.75;if(x<1/d1){return n1*x*x}else if(x<2/d1){return n1*(x-=1.5/d1)*x+.75}else if(x<2.5/d1){return n1*(x-=2.25/d1)*x+.9375}else{return n1*(x-=2.625/d1)*x+.984375}}$.extend($.easing,{def:"easeOutQuad",swing:function(x){return $.easing[$.easing.def](x)},easeInQuad:function(x){return x*x},easeOutQuad:function(x){return 1-(1-x)*(1-x)},easeInOutQuad:function(x){return x<.5?2*x*x:1-pow(-2*x+2,2)/2},easeInCubic:function(x){return x*x*x},easeOutCubic:function(x){return 1-pow(1-x,3)},easeInOutCubic:function(x){return x<.5?4*x*x*x:1-pow(-2*x+2,3)/2},easeInQuart:function(x){return x*x*x*x},easeOutQuart:function(x){return 1-pow(1-x,4)},easeInOutQuart:function(x){return x<.5?8*x*x*x*x:1-pow(-2*x+2,4)/2},easeInQuint:function(x){return x*x*x*x*x},easeOutQuint:function(x){return 1-pow(1-x,5)},easeInOutQuint:function(x){return x<.5?16*x*x*x*x*x:1-pow(-2*x+2,5)/2},easeInSine:function(x){return 1-cos(x*PI/2)},easeOutSine:function(x){return sin(x*PI/2)},easeInOutSine:function(x){return-(cos(PI*x)-1)/2},easeInExpo:function(x){return x===0?0:pow(2,10*x-10)},easeOutExpo:function(x){return x===1?1:1-pow(2,-10*x)},easeInOutExpo:function(x){return x===0?0:x===1?1:x<.5?pow(2,20*x-10)/2:(2-pow(2,-20*x+10))/2},easeInCirc:function(x){return 1-sqrt(1-pow(x,2))},easeOutCirc:function(x){return sqrt(1-pow(x-1,2))},easeInOutCirc:function(x){return x<.5?(1-sqrt(1-pow(2*x,2)))/2:(sqrt(1-pow(-2*x+2,2))+1)/2},easeInElastic:function(x){return x===0?0:x===1?1:-pow(2,10*x-10)*sin((x*10-10.75)*c4)},easeOutElastic:function(x){return x===0?0:x===1?1:pow(2,-10*x)*sin((x*10-.75)*c4)+1},easeInOutElastic:function(x){return x===0?0:x===1?1:x<.5?-(pow(2,20*x-10)*sin((20*x-11.125)*c5))/2:pow(2,-20*x+10)*sin((20*x-11.125)*c5)/2+1},easeInBack:function(x){return c3*x*x*x-c1*x*x},easeOutBack:function(x){return 1+c3*pow(x-1,3)+c1*pow(x-1,2)},easeInOutBack:function(x){return x<.5?pow(2*x,2)*((c2+1)*2*x-c2)/2:(pow(2*x-2,2)*((c2+1)*(x*2-2)+c2)+2)/2},easeInBounce:function(x){return 1-bounceOut(1-x)},easeOutBounce:bounceOut,easeInOutBounce:function(x){return x<.5?(1-bounceOut(1-2*x))/2:(1+bounceOut(2*x-1))/2}})});
