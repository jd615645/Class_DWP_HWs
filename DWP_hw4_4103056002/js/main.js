jQuery(document).ready(function($) {
  var MENU = ['bulletin', 'outline', 'content', 'scores'];
  $('#left-nav a').click(function() {
    $('#left-nav').find('.active').removeClass('active');
    $(this).addClass('active');
    var whichPage = $(this).attr('value');
    $.post('server.php', {text: whichPage}, function(result) {
      // console.log(result);
      var ele = result.ele;
      var html = result.html;
      var data = result.data;
      $(ele).html(html);
    }, 'json');
    load_data(parseInt(whichPage));
  });

  $(document).on('click', '#content .menu a', function() {
    $('#content .menu').find('.active').removeClass('active');
    $(this).addClass('active');
    $('#content .detail div').hide();
    var click_num = $(this).index()+1;
    $('#content .detail div:nth-child(' + click_num + ')').show();
  });
  
  $(document).on('click', '.add_post', function() {
    $('.modal').modal('show');
  });

  function load_data(num) {
    var num = parseInt(num);
    var fileName = (MENU[num]);
    // console.log('login ' + fileName);
    $.get(fileName + '.txt', function(data) {
      if(num == 0)
        $('.new_post').append(data);
      else if(num == 1)
        $('#outline table').html(data);
      else if(num == 2)
        $('.detail div:first-child td').text(data);
    });
  }
  // $("#left-nav a[value='0']").click();
});

