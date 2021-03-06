(function ($, window) {

  $('.btn-login').click(function(e) {
    e.preventDefault();

    $.oauthpopup({
      path: $(this).attr('href'),
      callback: function(err, data){
        data = JSON.parse(data);
        $('.alert').remove();

        var alertType = data.error ? 'danger' : 'success'
          , prettyJson = JSON.stringify(data, undefined, 2);

        $('<div class="alert alert-' + alertType +'"><strong>Oauth Response:</strong><pre>' + prettyJson + '</pre></div>').insertBefore('.page-header');
      }
    });
  });

})(jQuery, window);