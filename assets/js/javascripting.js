
	$(document).ready(function(){
		var owl = $('.slider-active').owlCarousel({
			loop:true,
			navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			animateIn: 'fadeIn',
			autoplay:true,
    	autoplayTimeout:10000,
			nav:true,
			responsive:{
					0:{
						items:1,
						nav:false
					},
					600:{
						items:1,
						nav:true
					},
					1000:{
						items:1,
						nav:true
					}
				}
			})
		});

		owl.on('mousewheel', '.owl-stage', function (e) {
	    if (e.deltaY>0) {
	        owl.trigger('next.owl');
	    } else {
	        owl.trigger('prev.owl');
	    }
	    e.preventDefault();
		});

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });

  $("#section07").click(function() {
      $('html,body').animate({
          scrollTop: $("#scrolling").offset().top},
          600, 'linear');
          return false;
  });
