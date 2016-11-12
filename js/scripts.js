$(function(){

	console.log("It's working");

	//slide-out nav
	$('header i').on('click', function() {
		$('.nav').toggleClass('nav-open');
		$('header i').toggleClass('fa-times').toggleClass('fa-bars');
	});

	//smooth scroll
	$('.nav a, .splash a').on('click', function(e) { 
	//select the anchors
		e.preventDefault(); 
		//prevent the default action
		var target = $(this).attr('href'); 
		//store the value of the link's href in a variable
		$('html, body').animate({ 
		//animate the body
		    scrollTop: $(target).offset().top 
		    //use the pixel distance from the top of the page (offset) and scroll that far
		}, 800); //set the time it takes to get there
	});

});