(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
	$('.slider').slider({full_width: true, indicators: false});
});

$(document).ready(function(){
	$('.scrollspy').scrollSpy();
});

$(document).ready(function(){
	$('.tabs-wrapper').pushpin({ top: 0});
});

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();
});