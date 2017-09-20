$(function(){
	$(".modal").modal();
	$('select').material_select();

	/**Navigationd **/
	  $(".button-collapse").sideNav();

	/*Mobile Responsive Single Product*/  
	 $('#mobileSlider.carousel-slider-mobile').carousel({fullWidth: true});
});

$(window).scroll(function () {
    var sc = $(window).scrollTop()
    if (sc > 100) {
    	$("#myHeader").addClass("myHeader-fixed");
    	
    } else {
        $("#myHeader").removeClass("myHeader-fixed");
        $("#myHeader").addClass("myHeader");
        
    }
});

