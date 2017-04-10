jQuery(document).ready(function($){
	SnsExtend.init();
	
	// banner slider
	$(window).load(function(){
		$('.banner-slider').owlCarousel({
			controlsClass: "owl-controls",
			dotClass: "owl-page",
			dots: true,
			nav: false,
			loop: true,
			slideSpeed : 800,
			autoPlay: true,
			addClassActive: true,
			items: 1,
			autoplayTimeout: 5000,	
		    animateOut: 'hinge',
		    animateIn: 'rollIn'
		});
	});
	// end banner slider
});
