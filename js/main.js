$(document).ready(function () {

	$('.game-card__plus').click(function () {
		$(this).toggleClass('active');
	})

	$('.delete-btn').click(function () {
		$(this).parent('.game-card').addClass('animate__backOutRight')
		$(this).parent('.game-card').css({
			'max-height': 0,
			'margin': 0,
			'padding': 0,
		})
	})


});

