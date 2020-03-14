(function($) {
  $('#quote')
    .off('click')
    .on('click', function(e) {
      $.ajax({
        method: 'GET',
        url:
          red_vars.rest_url +
          'wp/v2/posts?filter[orderby]rand&filter[posts_per_page]'
      }).done(function(data) {
        console.log(data);
        const randNum = Math.floor(Math.random() * data.length);
        let content = data[randNum].content.rendered;
        let title = data[randNum].title.rendered;
        let source = data[randNum]._qod_quote_source;
        let sourceUrl = data[randNum]._qod_quote_source_url;

        $('.randomQuote').html(`
        <i class="fas fa-quote-left"></i>
        <div>
        ${content}
        <p> - ${title}, <a href="${sourceUrl}"> ${source}</a></p>
        </div>
                <i class="fas fa-quote-right"></i>    
`);
      });

      // Closing done function
    }); // Closing event listener (random quote)
})(jQuery); // Closing document ready function
