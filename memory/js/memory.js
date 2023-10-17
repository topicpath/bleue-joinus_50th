(function () {
	const swiper = new Swiper('.swiper', {
		loop: true,
		centeredSlides: true,
		breakpoints: {
			768: {
				slidesPerView: 'auto',
			}
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		}
	});


	setTimeout(() => {
		$('.fix_message_btn').addClass('show');
	}, 200);

	$('.fix_message_btn').on('click', function() {
		$('.modal_message').addClass('show');
		return false;
	})
	$('.modal_message').on('click', function() {
		$('.modal_message').removeClass('show');
		return false;
	})
}());
