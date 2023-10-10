(function () {
	var __loading = false;
	$('.category_nav a').on('click', function() {
		if($(this).hasClass('active')) return false;

		if(__loading) return false;
		__loading = true;

		if(!$('html').hasClass('no-scroll-behavior')) {
			$('html').addClass('no-scroll-behavior')
		}

		var my_cat = $(this).text();

		$('.category_nav a').removeClass('active');
		$('.category_nav a').each(function() {
			if(my_cat == $(this).text()) {
				$(this).addClass('active');
			}
		});

		$('.items').addClass('loading');
		$('.items section').each(function() {
			if(my_cat == 'すべて' || my_cat == $(this).data('category')) {
				$(this).removeClass('hidden');
			} else {
				$(this).addClass('hidden');
			}
		})
		if(my_cat == 'すべて') {
			$('.items').addClass('all');
		} else {
			$('.items').removeClass('all');
		}

		setTimeout(() => {
			var s = $(window).scrollTop();
			var tg = isSpW() ? 127 : 165;
			if(s > $('.items').offset().top - tg) {
				$(window).scrollTop($('.items').offset().top - tg)
			}

			$('.items').removeClass('loading');
			__loading = false;
		}, 100);

		return false;
	})


	var checkPos = function(e) {
		if(!isSpW()) return;
		var s = $(this).scrollTop();
		var fn = $('.fix_category_nav');
		var bn = $('.base_nav');
		var bnt = bn.offset().top;
		var bnh = bn.outerHeight();
		if(s < bnt + bnh - 75) {
			if(fn.hasClass('show')) {
				fn.removeClass('show');
			}
		} else {
			if(!fn.hasClass('show')) {
				fn.addClass('show');
			}
		}
	}

	$(window).on('scroll', checkPos);
	checkPos();
}());
