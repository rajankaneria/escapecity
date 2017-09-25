$(function(){
	$(".modal").modal();
	$('select').material_select();

    // CKEDITOR.replace('editor');

	/**Navigationd **/
	  $(".button-collapse").sideNav();

	/*Mobile Responsive Single Product*/  
	 $('#mobileSlider.carousel-slider-mobile').carousel({fullWidth: true});


  /*  initSample();

    CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;
};*/

});

$(window).scroll(function () {
    var sc = $(window).scrollTop()
    if (sc > 0) {
    	$("#myHeader").addClass("myHeader-fixed");
    	
    } else {
        $("#myHeader").removeClass("myHeader-fixed");
        $("#myHeader").addClass("myHeader");
        
    }
});

