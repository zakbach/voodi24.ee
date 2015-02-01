$(function() {

	// on map click
	$('.land').on('click', function() {

		var place = $(this).attr('title');

		console.log(place);

	});

});
