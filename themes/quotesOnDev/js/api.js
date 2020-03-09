(function($) {
  console.log('working', red_vars);
  $('.randomQuote').on('click', function(e) {
    $.ajax({
      method: 'GET',
      url:
        red_vars.rest_url +
        'wp/v2/posts?filter[orderby]rand&filter[posts_per_page]=10'
    }).done(function(data) {
      console.log(data);
    }); // Closing done function
  }); // Closing event listener (random quote)
})(jQuery); // Closing document ready function
