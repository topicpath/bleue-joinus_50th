(function () {
	const swiper = new Swiper('.swiper', {
		loop: false,
		slidesPerView: 1,
		autoHeight: true,
		breakpoints: {
			768: {
				slidesPerView: 2,
			}
		},
		navigation: {
			nextEl: '.arrow.r',
			prevEl: '.arrow.l'
		}
	});
}());
