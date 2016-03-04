jQuery(document).ready(function($) {
	$('.dropdown').dropdown({on: 'hover'});

	$('.ui.sidebar').sidebar('attach events', '.toc.item');
});