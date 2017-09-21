

/* js for parallax */
  $(document).ready(function(){
      $('.parallax').parallax();
      $('.carousel.carousel-slider').carousel({fullWidth: true});
      /*$('.testimoni-slider').carousel({fullWidth: true});*/

      $(".hover").mouseleave(
		  function () {
		    $(this).removeClass("hover");
		  }
		);

    });
       