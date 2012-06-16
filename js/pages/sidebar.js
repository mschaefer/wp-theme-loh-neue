jQuery(function($) {
  var $archives_list = $('#sidebar-archives');

  /*
   * returns mapping: {
   *                    '2012' : [ $[.li], $[.li] ],
   *                    '2011' : [ $[.li] ]
   *                  }
   */
  function archives_by_year($archives_list) {
    var archives_by_year = {};

    $('#sidebar-archives > li').each(function(index, li) {
      link_text = $('a', li).html();

      year = link_text.match(/\d{4}/) ? /\d{4}/.exec(link_text)[0] : ''; // the year from link_text

      if(!archives_by_year[year]) {
        archives_by_year[year] = [];
      }

      archives_by_year[year].push( $(li).detach() ); // remove the li from dom and tuck it away
    });

    return archives_by_year
  }

  // returns a sorted array of an object's keys
  function sorted_keys(obj) {
    return jQuery.map(obj, function(v, k) { return k; }).sort();
  }

  function write_collapsable_archives($archives_by_year) {
    years = sorted_keys($archives_by_year).reverse();

    $.each(years, function(index, year) {
      var months = $archives_by_year[year],
          $year_a = $('<a>', {text: year + ' Archives'}),
          $year_li = $('<li>', {'class': 'year'}).append($year_a),
          $year_ul = $('<ul>', {'class': 'year'});

      $year_a.click(function() {
        $year_ul.is(':visible') ? $year_ul.slideUp('fast') : $year_ul.slideDown('fast')
      });

      // append each month list item to the year list
      $.each(months, function(index, $month_li) {
        $year_ul.append($month_li).hide();
        $month_a = $('a', $month_li);

        $month_a.html( $month_a.html().replace(/ \d*/, '') );
      });

      $archives_list.append($year_li.append($year_ul));
    });
  }

  write_collapsable_archives(archives_by_year($archives_list));
});
