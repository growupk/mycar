/* Automatically scroll to div id's by starting the link with #*/
$("document").ready(function() {
	$('a[href^="#"]').click(function(event) {
		var target = $( $(this).attr('href') );
		if( target.length ) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
	
	baguetteBox.run('.tz-gallery');
});