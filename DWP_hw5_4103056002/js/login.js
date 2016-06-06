jQuery(document).ready(function($) {
  $('.ui.form').form({
    fields: {
      password: {
        identifier  : 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your password'
          },
          {
            type   : 'length[6]',
            prompt : 'Your password must be at least 6 characters'
          }
        ]
      }
    }
  });
  $('.ui.form').submit(function() {
    console.log('submit');
  });
});