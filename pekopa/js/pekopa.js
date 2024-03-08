(function () {
	var load_imgs = [];
	var load_img = document.querySelectorAll('.pekopa_container h1 img, .pekopa_container .main_ph img');
	load_img.forEach(function(v) {
		var src = v.currentSrc;
		if(!src) {
			src = v.src;
		}
		load_imgs.push(src);
	})
	var bg_img = $('.pekopa_container .page_bg > *');
	bg_img.each(function() {
		var src = $(this).css('background-image');
		if(src.indexOf('url') === 0) {
			src = src.replace('url("','').replace('")','');
			src = src.replace('url(','').replace(')','');
			load_imgs.push(src);
		}
	});
	var img_len = load_imgs.length;
	var img_cnt = 0;
	$.each(load_imgs, function(i, v) {
		var nimg = $(new Image());
		nimg.bind('load', function() {
			img_cnt ++;
			if(img_len <= img_cnt) {
				startMain();
			}
		});
		nimg.attr('src', v);
	})
	function startMain() {
		$('.pekopa_container').addClass('loaded');
		setTimeout(() => {
			startMovShow();
		}, 1500);
	}



	function startMovShow() {
		const mov_show = document.querySelectorAll('.mov_show');
		const options = {
			root: null,
			rootMargin: '-20% 0px',
			threshold: 0,
		};

		const observer = new IntersectionObserver(intersectionCallback, options);
		mov_show.forEach((tgt) => {
			observer.observe(tgt);
		});
		function intersectionCallback(entries) {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					const target = entry.target;
					target.classList.add('showed');
				}
			});
		}
	}

}());
