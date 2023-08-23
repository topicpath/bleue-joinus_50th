(function () {
	setTimeout(function() {
		$('body').addClass('start');
		setTimeout(function() {
			$('body').addClass('show-j');
			showJ();
			setTimeout(function() {
				$('body').addClass('show-fire');
				setTimeout(function() {
					$('body').addClass('show-note');
					setTimeout(function() {
						swipeCandle();
					}, 1000);
				}, 1000);
			}, 1500);
		}, 2000);
	}, 500);

	function showJ() {
		var arr = [];
		var arr_late = [];
		var js = $('#j > div');
		var g;
		if(isSpW()) {
			arr_late = [26,8,35,36,37];
			js.each(function(i) {
				var order = $(this).css('order');
				if(order > 0) {
					if($.inArray(i + 1, arr_late) === -1) {
						arr.push(i + 1);
					}
				}
			})
			g = 38;
		} else {
			arr_late = [15,16,25,26,35,36,37];
			for (var i = 1; i <= 50; i ++) {
				if($.inArray(i, arr_late) === -1) {
					arr.push(i);
				}
			}
			g = 20;
		}
		arr = shuffle(arr);
		arr_late = shuffle(arr_late);
		arr_all = [...arr, ...arr_late];

		arr_all.forEach(function(n, i){
			var ele = js.eq(n - 1);
			addShow(ele, i * g + 300);
		});
	}
	function addShow(ele, delay) {
		setTimeout(function() {
			ele.addClass('show');
		}, delay);
	}

	function shuffle(arr) {
		const cloneArray = [...arr]
		for (let i = cloneArray.length - 1; i >= 0; i--) {
			let rand = Math.floor(Math.random() * (i + 1))
			let tmpStorage = cloneArray[i]
			cloneArray[i] = cloneArray[rand]
			cloneArray[rand] = tmpStorage
		}
		return cloneArray
	}

	function swipeCandle() {
		let start_flg = false;
		let end_flg = false;
		let startX = 99999;
		let startY = 99999;
		var j = document.querySelector('#j');
		j.addEventListener('touchstart', sStart);
		j.addEventListener('touchmove', sMove);
		j.addEventListener('touchend', sEnd);
		j.addEventListener('mousemove', mMove);

		function sStart(e) {
			startX = e.touches[0].pageX;
			startY = e.touches[0].pageY;
//			if(startX < window.innerWidth / 2) {
				start_flg = true;
//			}
		}
		function sMove(e) {
			if(!start_flg) return false;
			let movX = e.touches[0].pageX;
			let movY = e.touches[0].pageY;
			if(start_flg && movX > startX + 10) {
				checkHide(movX, movY);
			}
			startX = movX;
			startY = movY;
		}
		function sEnd(e) {
			start_flg = false;
/*
			if(end_flg) {
			}
*/
		}
		function mMove(e) {
			let movX = e.pageX;
			let movY = e.pageY;
//			if(movX < window.innerWidth / 2) {
				start_flg = true;
//			}
			if(start_flg && movX > startX + 10) {
				checkHide(movX, movY);
			}
			startX = movX;
			startY = movY;
		}

		function checkHide(x,y) {
			$('.swipe_notes').addClass('hide');
			$('#j > div.show').not('.hide').each(function() {
				var tt = $(this).offset().top + $(this).height() / 2;
				var tl = $(this).offset().left + $(this).width() / 2;

				var c = Math.sqrt(Math.pow(tt-y, 2) + Math.pow(tl-x, 2));
				goHide($(this), c);
			})
		}
		function goHide(ele, time) {
			setTimeout(function() {
				ele.addClass('hide');
				checkEnd();
			}, time * 1.5);
		}
		function checkEnd() {
			if(!$('#j > div.show').not('.hide').length) {
				j.removeEventListener('touchstart', sStart);
				j.removeEventListener('touchmove', sMove);
				j.removeEventListener('touchend', sEnd);
				j.removeEventListener('mousemove', mMove);
				$('body').addClass('show-contents');
			}
		}
	}
}());

/* checkTelLink
============================================================================================================ */
(function () {
	if(getDevice() == 'pc') {
		$('a[href^="tel:"]').removeAttr('href').css('text-decoration', 'none');
	}
}());

/* isSpW
============================================================================================================ */
function isSpW() {
	return window.matchMedia("(max-width: 767px)").matches;
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
		return 'pc';
	}
}
