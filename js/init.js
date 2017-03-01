(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.slider').slider();
	
	var grid = $('.isotope').isotope({
  // options
		itemSelector: '.isotope-item',
		layoutMode: 'fitRows'
	});
	$('.filter-button-group').on( 'click', 'button', function() {
	var filterValue = $(this).attr('data-filter');
	grid.isotope({ filter: filterValue });
	});
	
  }); // end of document ready
})(jQuery); // end of jQuery name space
