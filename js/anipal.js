$(document).ready(function(){


	// Bootstrap Carousel
	$('#banner').carousel({
		interval: 6000,

	});


	// Owl Carousel
	$("#testimonial__carousel").owlCarousel({
	  	autoplay: true,
	  	autoplayTimeout: 6000,
	  	loop: true,
	    items: 1,

	    // responsiveClass: true,
	    responsive:{
	        0:{
	            items: 1,
	            dots: true,
	            nav: false
	        },
	        768:{
	            items: 1,
	            dots: true,
	            nav: true
	        },
	        1000:{
	            items: 1,
	            dots: true,
	            nav: true
	        }
	    }
	});


	// Show/Hide nav top button
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll > 200) {
	    	$('.nav--top').addClass('active');
	    }
	    else{
	    	$('.nav--top').removeClass('active');
	    }
	});


	// Smooth Scrolling
	// Select all links with hashes
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#!"]')
	  .not('[href="#0"]')
	  .not('[href="#gallery__image"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	});


	$('.smooth').on('click', function(){
		var scrollTo = $(document).height() - $('#contact').height();
		$('html, body').animate({scrollTop: scrollTo }, 
		1000);
	});


	// Close navbar collapse when click link on mobile
	$('.navbar-collapse a').on('click', function(){
		$('.navbar-collapse').removeClass('show');
	});




});