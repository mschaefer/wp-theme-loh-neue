jQuery.fn.hasAttr = function(name) {
   return (this.attr(name) !== undefined && this.attr(name) !== false);
};

jQuery(function($) {
  function primary_menu_in(event) {
    $(event.currentTarget).addClass('active');
    $('#primary-menu .link-group.active').not(event.currentTarget).removeClass('active');
  }

  function primary_menu_out(event) {
    $('#primary-menu .link-group.active').removeClass('active');
  }

  $('#primary-menu .link-group').hover(primary_menu_in, primary_menu_out);

  $('#primary-menu .link-group:has(ul)').addClass('has-submenu');

  $('#search').hover(function() {
    $('#s').addClass('js-expanded');
  });
});
