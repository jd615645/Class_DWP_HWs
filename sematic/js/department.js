jQuery(document).ready(function($) {

	$.getJSON('./json/professor.json', function(data) {
		var html, type;
		for (var i = 0; i < data.length; i++) {
			if (data[i]['職銜'] == '教授')
				type = '#professor';
			else if (data[i]['職銜'] == '副教授')
				type = '#associate_professor';
			else if (data[i]['職銜'] == '助理教授')
				type = '#assistant_professor';
			else
				type = '#distinguished_professor';

			html = $.parseHTML('<div class="item" value="' + i + '"><div class="image"><img src=""></div><div class="content"><div class="ui grid"><div class="four wide column"><p>教授名稱</p></div><div class="twelve wide column prof_name_zh"></div><div class="four wide column"><p>英文名稱</p></div><div class="twelve wide column prof_name_us"></div><div class="four wide column"><p>學歷</p></div><div class="twelve wide column prof_edu"></div><div class="four wide column"><p>經歷</p></div><div class="twelve wide column prof_exp"></div><div class="four wide column"><p>專長領域</p></div><div class="twelve wide column prof_field"></div><div class="four wide column"><p>聯絡電話</p></div><div class="twelve wide column prof_phone"></div><div class="four wide column"><p>電子信箱</p></div><div class="twelve wide column prof_mail"><a href=""></a></div><div class="four wide column"><p>個人網頁</p></div><div class="twelve wide column prof_web"><a target="_blank" href="">點此進入<i class="external share icon link"></i></a></div></div></div></div>');
			$(type).append(html);

			$(type + ' [value=' + i + '] img').attr('src', data[i]['img']);
			$(type + ' [value=' + i + '] .prof_name_zh').text(data[i]['prof_name_zh']);
			$(type + ' [value=' + i + '] .prof_name_us').text(data[i]['prof_name_us']);
			$.each(data[i]['prof_edu'], function(key, val) {
				$(type + ' [value=' + i + '] .prof_edu').append('<p>' + val + '</p>');
			});
			$.each(data[i]['prof_exp'], function(key, val) {
				$(type + ' [value=' + i + '] .prof_exp').append('<p>' + val + '</p>');
			});
			$.each(data[i]['prof_field'], function(key, val) {
				$(type + ' [value=' + i + '] .prof_field').append('<p>' + val + '</p>');
			});
			$(type + ' [value=' + i + '] .prof_phone').text(data[i]['prof_phone']);
			$(type + ' [value=' + i + '] .prof_mail a').text(data[i]['prof_mail']).attr('href', 'mailto:' + 'data[i][\'prof_mail\']');
		}
	});
	
	$.getJSON('./json/lab.json', function(data) {
		var html;
		for (var i = 0; i < data.length; i++) {
			html = $.parseHTML('<div class="item" value="' + i + '"><div class="image"><img src=""></div><div class="content"><div class="ui grid"><div class="four wide column">研究室名稱</div><div class="twelve wide column name"></div><div class="four wide column">指導教授</div><div class="twelve wide column professor"></div><div class="four wide column">研究室位置</div><div class="twelve wide column local"></div><div class="four wide column">研究室網站</div><div class="twelve wide column url"><a target="_blank" href="">點此進入<i class="external share icon link"></i></a></div><div class="four wide column">簡介</div><div class="twelve wide column introduce"></div></div></div></div>');
			$('#lab').append(html);

			$('#lab [value=' + i + '] img').attr('src', data[i]['img']);
			$('#lab [value=' + i + '] .name').text(data[i]['zh_name'] + ' ' + data[i]['us_name']);
			$('#lab [value=' + i + '] .professor').text(data[i]['professor']);
			$('#lab [value=' + i + '] .local').text('理學院 ' + data[i]['local']);
			$('#lab [value=' + i + '] .url').attr('href', data[i]['url']);
			$.each(data[i]['introduce'], function(key, val) {
				$('#lab [value=' + i + '] .introduce').append('<p>' + val + '</p>');
			});
		}
	});

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