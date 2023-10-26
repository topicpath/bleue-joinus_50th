(function () {
	var vf = sessionStorage.getItem('view_floating');
	if(!vf) {
		sessionStorage.setItem('view_floating', '1');
		var items_notes = $('.items_notes').clone();
		items_notes.addClass('floating_notes');
		items_notes.append('<a class="close"></a>')
		$('body').append(items_notes);
		setTimeout(() => {
			items_notes.addClass('show');
		}, 400);

		var checkFloatingPos = function(e) {
			var s = $(this).scrollTop();
			var h = $(this).outerHeight();
			var items = $('.items');
			var it = items.offset().top;
			var ih = items.outerHeight();
			if(s > it + ih - h) {
				items_notes.removeClass('show');
				$(window).off('scroll', checkFloatingPos);
			}
		}
		$(window).on('scroll', checkFloatingPos);
		checkFloatingPos();
		$('.close', items_notes).on('click', function() {
			items_notes.removeClass('show');
			$(window).off('scroll', checkFloatingPos);
		});
	}


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
		$('.items section').removeClass('showed').each(function() {
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
		var fnh = fn.outerHeight();
		var bn = $('.base_nav');
		var bnt = bn.offset().top;
		var bnh = bn.outerHeight();
		if(s < bnt + bnh - 75 - fnh) {
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

(function () {
	var pd = $('#pagedown');

	if(!pd.length) return false;

	var checkPos = function() {
//		if(isSpW()) return;
		var s = $(this).scrollTop(),
			h = $(this).height();

		if(s >= $('.items').offset().top + $('.items').outerHeight() - h - 100) {
			if(pd.hasClass('show')) pd.removeClass('show');
		} else {
			if(!pd.hasClass('show')) pd.addClass('show');
		}
	}
	$(window).on('scroll resize', checkPos);
	checkPos();

	pd.on('click', function() {
		var target = $('.items').offset().top + $('.items').outerHeight() - $(window).outerHeight();
		goScroll('', '', '', target);
		return false;
	});
}());


