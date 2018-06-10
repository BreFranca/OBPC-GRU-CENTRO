jQuery(function($){
   $("#tel").mask("(99) 99999-9999?");
	$('.slider').slick({
	  dots: false,
	  arrows: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  responsive: [	
	    {
	      breakpoint: 769,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: true,
	        dots: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$(".slick-programacoes").slick({
		dots: false,
		arrows: true,
		slidesToShow: 3,
		slidesToScroll: 1
	});

	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});
});