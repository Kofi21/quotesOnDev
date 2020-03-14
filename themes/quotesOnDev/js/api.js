(function($) {
  $('#quote').on('click', function(event) {
    event.preventDefault();

    $.ajax({
      method: 'GET',
      url:
        red_vars.rest_url +
        'wp/v2/posts?filter[orderby]rand&filter[posts_per_page]=1'
    }).done(function(data) {
      $.each(data, function(index, value) {
        console.log(value, 'value');
        let test = value.content.rendered;
        console.log(test);
        $('.test-div').append(test);
      });
    });

    // let content = value.content.rendered;
    // let title = value.title.rendered;
    // let source = value._qod_quote_source;
    // let sourceUrl = value._qod_quote_source_url;
    // Closing done function
  }); // Closing event listener (random quote)
})(jQuery); // Closing document ready function
