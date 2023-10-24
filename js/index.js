(function () {
	var so = sessionStorage.getItem('show_opening');
	if(!so) {
//		sessionStorage.setItem('show_opening', '1');
	}

	if($('.fix_bnr').length) {
		$('#footer').addClass('has_fix_bnr');
	}
}());

(function () {
	const items_swiper = new Swiper('.items.swiper', {
		loop: true,
		centeredSlides: true,
		roundLengths: true,
		speed: 800,
		slidesPerView: 'auto',
		autoplay: {
			delay: 2000,
			disableOnInteraction: false
		},
	});
}());

(function () {
	var smiles_phs_obj = $($('#smiles_phs').html());
	var smiles_phs_arr = [];
	smiles_phs_obj.each(function(){
		smiles_phs_arr.push($(this).prop('outerHTML'));
	});
	smiles_phs_arr = arrayShuffle(smiles_phs_arr);

	var count = 0;
	// 初回
	var ph_bg = $('.index_smiles .ph_bg');
	ph_bg.each(function(i) {
		var ele = $(this);
		for(var j = 0; j < 6 * 3; j ++) {
			ele.append('<div>' + smiles_phs_arr[count].replace('">', '" loading="lazy" decoding="async">') + '</div>');
			count ++;
		}
	})

	// SP
	var half = Math.floor(smiles_phs_arr.length / 2);
	var ph_loop_imgs = [smiles_phs_arr.slice(0, half), smiles_phs_arr.slice(half)];
	var ph_loop = $('.index_smiles .ph_loop');
	ph_loop.each(function(i) {
		var img_tag = '';
		$.each(ph_loop_imgs[i], function(k, v) {
			img_tag += v.replace('">', '" loading="lazy" decoding="async">');
		});
		var anid = ph_loop_imgs[i].length * 1.8;
		$(this).html('<div><div style="animation-duration: ' + anid + 's;">' + img_tag + img_tag + '</div></div>')
	})
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
