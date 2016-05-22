jQuery(document).ready(function($) {
  $('#left-nav a').click(function() {
    $('#left-nav').find('.active').removeClass('active');
    $(this).addClass('active')
    var whichPage = $(this).attr('value');
    $.post("server.php", {text: whichPage}, function(result) {
      console.log(result);
      var ele = result.ele;
      var html = result.html;
      var data = result.data;
      $(ele).html(html);
      $(ele).find("p.ui.header").text(data);
    }, 'json');
  });
});

