$(document).ready(function() {
  $(document).on('click', '.btn_post', function() {
    var text = $('.modal textarea[name="text"]').val();
    $.post('content_post.php', {text: text}, function(result) {
      console.log(result);
      $('.detail div:first-child td').text(result.text);
    }, 'json');
    $('.modal').modal('hide');
  });
});