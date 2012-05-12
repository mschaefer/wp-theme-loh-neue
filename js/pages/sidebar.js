jQuery(function($) {
  var archives_by_year = {},
      $archives_list = $('#sidebar-archives');

  $('#sidebar-archives > li').each(function(index, li) {
    link_text = $('a', li).html();

    year = link_text.match(/\d{4}/) ? /\d{4}/.exec(link_text)[0] : ''; // the year from link_text

    if(!archives_by_year[year]) {
      archives_by_year[year] = [];
    }

    archives_by_year[year].push( $(li).detach() ); // remove the li from dom and tuck it away

    $.each(archives_by_year, function(year, months) {
      $year_li = $('<li>', {'class': 'year', text: 'Archive for ' + year});
      $year_ul = $('<ul>', {'class': 'year'});

      // append each month list item to the year list
      $.each(months, function($month_li) { $year_ul.append($month_li); });

      $archives_list.append($year_li.append($year_ul));
  // create a li.year>a with year
  // create a ul.year
    // for each dom element: add it to the list
  // attach event to the li.year to expand/hide the ul.year
    });
  });
// parse each li>a in #sidebar-archives
  // add dom li to a collection based on a year pulled from text
  // detach each from dom
});
/*
  ul#sidebar-archives
    li.year > a Archives from 2012
      ul
        li.month > a
<ul>
  <li><a title="March 2012" href="http://loh.localhost/2012/03/">March 2012</a></li>
	<li><a title="February 2012" href="http://loh.localhost/2012/02/">February 2012</a></li>
</ul>

*/
