$(document).ready(function() {
  $(document).on('click', '.btn_post', function() {
    var title = $('.modal input[name="title"]').val(),
        date = $('.modal input[name="date"]').val(), 
        text = $('.modal textarea[name="text"]').val();
    $.post('../php/bulletin_post.php', {title: title,date: date , text: text}, function(result) {
      $('.new_post').append(result.html);
    }, 'json');
    $('.modal').modal('hide');
  });
});