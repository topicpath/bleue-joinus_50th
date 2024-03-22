(function () {

	var players = [];
	$('.modal_contents .movie').each(function() {
		console.log($(this).attr('id'))
		var player = new Vimeo.Player($(this).attr('id'));
		console.log($(this).attr('id'))
		players.push(player);
	})

	var _modal_showed_flg = false,
		_current_modal;

	$('#overlay').on('click touchstart', function() {
		if($(this).hasClass('showed')) {
			closeModal();
		}
		return false;
	});
	$(document).on('click', '.modal_contents .close', function() {
		closeModal();
		return false;
	});

	$(document).on('click', 'a[data-modal]', function() {
		if(_modal_showed_flg) return false;
		_modal_showed_flg = true;

		showModal($(this).attr('data-modal'));
		return false;
	});
	function closeModal() {
		_current_modal.removeClass('show').addClass('hide');
		$('#overlay').removeClass('show');
		$.each(players, function(k,v) {
			v.pause();
		})

		setTimeout(function() {
			$('.modal_contents').removeClass('hide');
			$('#overlay').removeClass('showed');
			_modal_showed_flg = false;
		}, 500);
	}

	function showModal(c) {
		var modal = $('.modal_contents.' + c);
		_current_modal = modal;

		modal.addClass('show');
		$('#overlay').addClass('show showed');
	}
}());
