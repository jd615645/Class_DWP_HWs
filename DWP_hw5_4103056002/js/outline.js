$(document).ready(function() {
  $(document).on('click', '.btn_post', function() {
    var title = $('.modal input[name="title"]').val(),
        local = $('.modal input[name="local"]').val(),
        goal = $('.modal input[name="goal"]').val(),
        time = $('.modal input[name="time"]').val(),
        outline = $('.modal input[name="outline"]').val(),
        standard = $('.modal input[name="standard"]').val(),
        book = $('.modal input[name="book"]').val(),
        conditional = $('.modal input[name="conditional"]').val(),
        data = $('.modal input[name="data"]').val();
    $.post('../php/outline_post.php', {title: title, local: local, goal: goal , time: time, outline: outline, standard: standard, book: book, conditional: conditional, data: data}, function(result) {
      console.log(result);
      $('#outline table').html(result.html);
    }, 'json');
    $('.modal').modal('hide');
  });
});

