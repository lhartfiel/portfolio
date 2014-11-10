$(function(){

	//sticky nav bar
	var stickyNavTop = $('nav').offset().top;
	var stickyNav = function(){
		var scrollTop = $(window).scrollTop();
		if (scrollTop > stickyNavTop) {
			$('nav').addClass('sticky');	
		} else {
			$('nav').removeClass('sticky');
		}
	};

	// Call the StickyNav function
	stickyNav(); 

	$(window).scroll(function(){
		stickyNav();
	});

	// Smooth Scroll Function
		$('a[href*=#]').on('click', function(event){     
    		event.preventDefault();
    	$('html,body').animate({
    		scrollTop:$(this.hash).offset().top}, 700);
		});


	// Hover state on skillset circles
	$('.skillCircles .skillCircle').on('mouseenter',function() {
		var index = $(this).index('.skillCircle');
		// find the index of the  allSkills
		$('.allSkills ul').eq(index).addClass('show');
	}).on('mouseleave',function() {
		var index = $(this).index('.skillCircle');
		// find the index of the  allSkills
		$('.allSkills ul').eq(index).removeClass('show');

	});
});