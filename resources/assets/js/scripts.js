$(function() {
	$(document).foundation();
    console.log( "ready!" );
    $('.burger').click(function() {
    	$('.navigation').addClass('active');
    });
    $('.navigation .close-button').click(function() {
    	$('.navigation').removeClass('active');
    });
});
