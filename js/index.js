(function () {
	if($('.fix_bnr').length) {
		$('#footer').addClass('has_fix_bnr');
	}
}());

(function () {
	var viewed_opening = sessionStorage.getItem('viewed_opening');
	sessionStorage.setItem('viewed_opening', '1');
	if (location.hash && location.hash == '#showopening') {
		viewed_opening = false;
	}
	if(!viewed_opening) {
		$('body').addClass('has_opening');
		$('body').append('<div id="opening"><p class="logo"><img src="images/logo.svg" alt="JOINUS 50th" width="80" height="62"></p><div class="h"><div><img src="images/index/opening.png" alt="" width="1920" height="1920"></div></div></div>');

		var load_imgs = [];
		var load_img = document.querySelectorAll('#opening img');
		load_img.forEach(function(v) {
			var src = v.currentSrc;
			if(!src) {
				src = v.src;
			}
			load_imgs.push(src);
		})
		var img_len = load_imgs.length;
		var img_cnt = 0;
		$.each(load_imgs, function(i, v) {
			var nimg = $(new Image());
			nimg.bind('load', function() {
				img_cnt ++;
				if(img_len <= img_cnt) {
					startOpening();
				}
			});
			nimg.attr('src', v);
		})
		function startOpening() {
			setTimeout(function() {
				$('#opening').addClass('show');
				setTimeout(function() {
					$('#opening').addClass('hide');
					setTimeout(function() {
						$('#opening').remove();
						$('body').removeClass('has_opening');
						showingMain();
					}, 500);
				}, 2000);
			}, 200);
		}
	} else {
		setTimeout(function() {
			showingMain();
		}, 500);
	}

	function showingMain() {
		$('.index_main').addClass('show');
		setTimeout(() => {
			$('.fix_bnr').addClass('show');
			$('.fix_btn').addClass('show');
		}, 1000);
	}
}());

(function () {
	let now = new Date();

	let url = new URL(window.location.href);
	let params = url.searchParams;
	let check_date = params.get('check_date');
	if(check_date) {
		check_date = check_date.replace('_', ' ');
		now = new Date(check_date);
	}

	if($('#add_topics').length) {
		var add_topics = $($('#add_topics').html());
		$('li', add_topics).each(function() {
			var my_date = $(this).data('publish');
			if(now >= new Date(my_date)) {
				$('.index_topics .def_topics').prepend($(this));
				$('.index_topics .def_topics li:last-child').prependTo('.index_topics .more_topics .topics')
			}
		})
	}

	$('.index_bnr li[data-limit]').each(function() {
		var my_date = $(this).data('limit');
		if(now >= new Date(my_date)) {
			$(this).addClass('fin');
			$('a', this).removeAttr('href');
			var p = $(this).parent();
			p.append($(this));
		}
	})
	$('.fix_btn[data-limit]').each(function() {
		var my_date = $(this).data('limit');
		if(now >= new Date(my_date)) {
			$(this).remove();
		}
	})
}());


(function () {
	const hanabi_area = document.querySelectorAll('.hanabi_area');
	const options = {
		root: null,
		rootMargin: '-20% 0px',
		threshold: 0,
	};

	var _isIntersecting = false;
	var _timer;

	const observer = new IntersectionObserver(intersectionCallback, options);
	hanabi_area.forEach((tgt) => {
		observer.observe(tgt);
	});
	function intersectionCallback(entries) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				_isIntersecting = true;
				set_hanabi();
			} else {
				_isIntersecting = false;
				clearInterval(_timer);
			}
		});
	}

	function show_hanabi() {
		if(!_isIntersecting) return false;
		var a_arr = [...Array(4).keys()];
		var c_arr = [...Array(4).keys()];
		a_arr = arrayShuffle(a_arr);
		c_arr = arrayShuffle(c_arr);
		for (let i = 0; i < 4; i++) {
			var r = Math.floor(Math.round() * 3);
			if(r == 1) continue;

			var div1 = $('<div class="hanabi"></div>');
			var div2 = $('<div></div>');
			div2.css('background-image', 'url(images/index/hanabi' + (c_arr[i] + 1) + '.png)');
			div1.append(div2);

			var x;
			var y;
			var ww = $(window).outerWidth();
			var wh = $(window).outerHeight();
			if(1 == a_arr[i] + 1) {
				x = 0;
				y = 0;
			}
			else if(2 == a_arr[i] + 1) {
				x = ww * (3/4);
				y = 0;
			}
			else if(3 == a_arr[i] + 1) {
				x = 0;
				y = wh * (2/3);
			}
			else if(4 == a_arr[i] + 1) {
				x = ww * (3/4);
				y = wh * (2/3);
			}
			var rx = Math.random() * ww/4 + x;
			var ry = Math.random() * wh/3 + y;
			var rs = Math.random() * .5 + .6;

			var ht = $('.hanabi_area').offset().top;
			var st = $(window).scrollTop();
			if(ht > st) {
				ry += ht - st;
			}

			div1.css({left: rx + 'px', top: ry + 'px', transform: 'scale(' + rs + ')'});

			$('.hanabi_area').append(div1);
			showing_hanabi(div1, i);
		}
	}
	function set_hanabi() {
		_timer = setInterval(() => {
			show_hanabi();
		}, 2000);
		show_hanabi();
	}

	function showing_hanabi(ele, i) {
		setTimeout(() => {
			ele.addClass('show');
			setTimeout(() => {
				ele.addClass('hide');
			}, 500);
			setTimeout(() => {
				ele.remove();
			}, 1000);
		}, 100 + 300 * i);
	}
}());

(function () {
	var _fff = true;
	var _isIntersecting = false;

	const index_main = document.querySelectorAll('.index_main');
	const options = {
		root: null,
		rootMargin: '10% 0px',
		threshold: 0,
	};
	const observer = new IntersectionObserver(intersectionCallback, options);
	index_main.forEach((tgt) => {
		observer.observe(tgt);
	});
	function intersectionCallback(entries) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				_isIntersecting = true;
				$('#main_j').html('');
				$('#hide_main_j').html('');
				setMainJ();
			} else {
				_isIntersecting = false;
				$('#main_j').html('');
				$('#hide_main_j').html('');
			}
		});
	}

	function setMainJ() {
		var jlen = 50;
		var len = 22;
		var gap = 10;
		var j = $('#main_j');
		var hj = $('#hide_main_j');
		var load_imgs = [];

		var e_arr = [];
		for (let i = 0; i < len; i++) {
			e_arr.push(('00' + (i+1)).slice(-2));
		}
		e_arr = arrayShuffle(e_arr);

		var j_arr = [];
		for (let i = 0; i < jlen; i++) {
			var src = 'images/j/j-' + ('00' + (i+1)).slice(-2) + '.webp';
			var img = $('<div class="jiw" data-hide-ele="#hide_main_j"><div class="ji"><img src="' + src + '" alt="" width="260" height="320"></div></div>');
			hj.append(img);
			j_arr.push(img);
			load_imgs.push(src);
		}
		j_arr = arrayShuffle(j_arr);

		if(_fff) {
			$.each(load_imgs, function(i, v) {
				var nimg = $(new Image());
				nimg.attr('src', v);
			})
		}
		_fff = false;

		for (let i = 0; i < len; i++) {
			var div = '<div class="j' + ('00' + (i+1)).slice(-2) + '"></div>';
			j.append(div);
		}

		var e_count = 0;
		var j_count = 0;
		for (let i = 0; i < (len - gap); i++) {
			var ele = creJ(j_arr[j_count], true);
			$('.j' + e_arr[e_count],j).append(ele);
			e_count = (e_count + 1) % len;
			j_count = (j_count + 1) % jlen;
		}

		function movJ() {
			if(!_isIntersecting) return false;

			var c = Math.floor(Math.random() * 3);
			for (let i = 0; i < c; i++) {
				var o_ele_num = ((e_count + len) + gap) % len;
				var o_ele = $('.j' + e_arr[o_ele_num] + ' .jiw',j);

				var ele = creJ(j_arr[j_count]);
				$('.j' + e_arr[e_count],j).append(ele);
				showhideJ(o_ele, ele, i);

				e_count = (e_count + 1) % len;
				j_count = (j_count + 1) % jlen;
			}

			var tim = isSpW()
					? Math.random() * (c * 100 + 300) + 500
					: Math.random() * (c * 100 + 200) + 300;
			setTimeout(() => {
				movJ();
			}, tim);
		}
		movJ();
	}

}());


(function () {
	if(isSpW())	return false;

	var _fff = true;
	var _isIntersecting = false;

	const index_bnr = document.querySelectorAll('.index_bnr');
	const options = {
		root: null,
		rootMargin: '10% 0px',
		threshold: 0,
	};
	const observer = new IntersectionObserver(intersectionCallback, options);
	index_bnr.forEach((tgt) => {
		observer.observe(tgt);
	});
	function intersectionCallback(entries) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				_isIntersecting = true;
				$('#bnr_j').html('');
				$('#hide_bnr_j').html('');
				setBnrJ();
			} else {
				_isIntersecting = false;
				$('#bnr_j').html('');
				$('#hide_bnr_j').html('');
			}
		});
	}

	function setBnrJ() {
		var jlen = 50;
		var len = 11;
		var gap = 4;
		var j = $('#bnr_j');
		var hj = $('#hide_bnr_j');

		var e_arr = [];
		for (let i = 0; i < len; i++) {
			e_arr.push(('00' + (i+1)).slice(-2));
		}
		e_arr = arrayShuffle(e_arr);

		var j_arr = [];
		for (let i = 0; i < jlen; i++) {
			var src = 'images/j/j-' + ('00' + (i+1)).slice(-2) + '.webp';
			var img = $('<div class="jiw" data-hide-ele="#hide_bnr_j"><div class="ji"><img src="' + src + '" alt="" width="260" height="320" loading="lazy" decoding="async"></div></div>');
			hj.append(img);
			j_arr.push(img);
		}
		j_arr = arrayShuffle(j_arr);

		for (let i = 0; i < len; i++) {
			var div = '<div class="j' + ('00' + (i+1)).slice(-2) + '"></div>';
			j.append(div);
		}

		var e_count = 0;
		var j_count = 0;
		for (let i = 0; i < (len - gap); i++) {
			var ele = creJ(j_arr[j_count], true);
			$('.j' + e_arr[e_count],j).append(ele);
			e_count = (e_count + 1) % len;
			j_count = (j_count + 1) % jlen;
		}

		function movJ() {
			if(!_isIntersecting) return false;

			var c = Math.floor(Math.random() * 3);
			for (let i = 0; i < c; i++) {
				var o_ele_num = ((e_count + len) + gap) % len;
				var o_ele = $('.j' + e_arr[o_ele_num] + ' .jiw',j);

				var ele = creJ(j_arr[j_count]);
				$('.j' + e_arr[e_count],j).append(ele);
				showhideJ(o_ele, ele, i);

				e_count = (e_count + 1) % len;
				j_count = (j_count + 1) % jlen;
			}

			setTimeout(() => {
				movJ();
			}, Math.random() * (c * 100 + 200) + 300);
		}
		movJ();
	}
}());

function setJ(ele) {
	var r = Math.random() * 20 - 10;
	var t = Math.random() * 20 - 10;
	var l = Math.random() * 20 - 10;
	var s = Math.random() * .4 - .2 + 1;
	$('.ji',ele).css('transform', 'rotate(' + r + 'deg) translate(' + l + 'px, ' + t + 'px) scale(' + s + ')');
	var d = Math.random();
	$('img',ele).css('animation-delay', -d + 's');
	return ele;
}
function creJ(img,show) {
	if(show) img.addClass('show');
	else img.removeClass('show');
	var ele = setJ(img);
	return ele;
}
function showhideJ(o_ele, n_ele, i) {
	setTimeout(() => {
		n_ele.addClass('show');
		o_ele.addClass('hide');
		removeJ(o_ele);
	}, 100 + i * 100);
}
function removeJ(ele) {
	setTimeout(() => {
		$(ele.data('hide-ele')).append(ele);
		ele.removeClass('show hide');
	}, 500);
}


(function () {
	const items_swiper = new Swiper('.items.swiper', {
		loop: true,
		centeredSlides: true,
		roundLengths: true,
		speed: 800,
		slidesPerView: 'auto',
		autoplay: {
			delay: 2000,
			disableOnInteracInteraction: false
		},
	});
}());

(function () {
	$('.index_topics .more a').on('click', function() {
		$(this).toggleClass('open');
		var target = $('.index_topics .more_topics');
		if($(this).hasClass('open')) {
			target.css('height', $('>*', target).outerHeight())
		} else {
			target.removeAttr('style');
		}
		return false;
	})
}());

(function () {
	var len = 6 * 3;

	var smiles_phs_obj = $($('#smiles_phs').html());
	var smiles_phs_arr = [];
	smiles_phs_obj.each(function(){
		smiles_phs_arr.push($(this));
	});
	smiles_phs_arr = arrayShuffle(smiles_phs_arr);

	if(isSpW()) {
		// SP
		var half = Math.floor(smiles_phs_arr.length / 2);
		var ph_loop_imgs = [smiles_phs_arr.slice(0, half), smiles_phs_arr.slice(half)];
		var ph_loop = $('.index_smiles .ph_loop');
		ph_loop.each(function(i) {
			var img_tag = '';
			$.each(ph_loop_imgs[i], function(k, v) {
				img_tag += v.prop('outerHTML');
			});
			var anid = ph_loop_imgs[i].length * 1.8;
			$(this).html('<div><div style="animation-duration: ' + anid + 's;">' + img_tag + img_tag + '</div></div>')
		});

		const ph_loop_qs = document.querySelectorAll('.ph_loop');
		const observer = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				if (entry.intersectionRatio > 0) {
					var img = entry.target.querySelectorAll('img');
					img.forEach(ele => {
						ele.removeAttribute("loading");
						ele.removeAttribute("decoding");
					});
					observer.unobserve(entry.target);
				}
			});
		});
		ph_loop_qs.forEach(ele => {
			observer.observe(ele);
		});

		return false;
	}

	var count = 0;
	var c_count = 0;
	var c_arr = [...Array(len*2).keys()];
	c_arr = arrayShuffle(c_arr);

	// 初回
	var ph_bg = $('.index_smiles .ph_bg');
	ph_bg.each(function(i) {
		var ele = $(this);
		var my_arr = [...Array(len).keys()];
		my_arr = arrayShuffle(my_arr);
		for(var j = 0; j < len; j ++) {
			ele.append('<div class="d' + my_arr[j] + '"></div>');
		}
	});
	for (let i = 0; i < c_arr.length; i++) {
		var phs = $('.index_smiles .ph_bg > *');
		var target = phs.eq(c_arr[i]);
		target.append(smiles_phs_arr[count]);
		count = (count + 1) % smiles_phs_arr.length;
	}

	function changePh() {
		var phs = $('.index_smiles .ph_bg > *');
		var target = phs.eq(c_arr[c_count]);
		if(!target.hasClass('showing')) {
			target.addClass('showing');
			var old_img = $('img', target);
			var new_img = smiles_phs_arr[count].clone();
			new_img.addClass('hide');
			target.append(new_img);
			setTimeout(() => {
				new_img.addClass('show');
			}, 100);
			setTimeout(() => {
				old_img.remove();
				target.removeClass('showing');
			}, 1200);
		}
		count = (count + 1) % smiles_phs_arr.length;
		c_count = (c_count + 1) % c_arr.length;
		setTimeout(() => {
			changePh();
		}, Math.random() * 100 + 50);
	}
	changePh();

}());

function arrayShuffle(array) {
	for(let i = (array.length - 1); 0 < i; i--){
		let r = Math.floor(Math.random() * (i + 1));
		let tmp = array[i];
		array[i] = array[r];
		array[r] = tmp;
	}
	return array;
}
