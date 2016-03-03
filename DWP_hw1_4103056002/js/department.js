jQuery(document).ready(function($) {

	$('.menu .item').click(function() {
		var val = $(this).attr('value');
		click_menu(val);
	});

	function click_menu(val) {
		$('.menu .item.active').removeClass('active');
		$('.menu .item[value=' + val + ']').addClass('active');

		$('#introduce > div').hide();
		$('#introduce > div[value=' + val + ']').show();
	}

	click_menu(1);
});