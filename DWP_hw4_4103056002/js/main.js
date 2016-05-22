jQuery(document).ready(function($) {
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

  $(document).on('click', '.btn_post', function() {
    var title = $('.modal input[name="title"]').val(),
        date = $('.modal input[name="date"]').val(), 
        text = $('.modal textarea[name="text"]').val();
    $.post('post.php', {title: title,date: date , text: text}, function(result) {
      $('.new_post').append(result.html);
    }, 'json');
    $('.modal').modal('hide');
  });
});

