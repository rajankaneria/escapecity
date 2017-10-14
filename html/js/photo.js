var baseURL;
$(function(){
	$('.modal').modal();
	$('select').material_select();
	baseURL=$("#base_url").val();
	$("#addPhotos").on("click",function(){
		$("#photosModal").modal('open');
	});	

	$("#sendPhotos").on("click",function(){
	var formData = new FormData($('#addPhotosForm')[0]);
		$.ajax({
        url:baseURL+"tour_details/addPhotos/",
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function (result){
        	alert("Photos Inserted Successfully");
        	//window.location.reload();
        }
    });
});





	
	$(".tour-photo-edit-btn").on("click",function(){
		$("#photosModal").modal('open');
		var photoId=$(this).data('tour-id');
		$.post(baseURL+"tour_details/tourByPhoto/"+photoId,function(data){
			$("#photosModal .modal-content").html(data);
			$('ul.tabs').tabs();
		initEditPhoto();
		initUpdatePhoto();
		initDeleteAttraction();

		});

	});



/*===Main function over==========*/
});
function initEditPhoto(){
	$(".edit-photos").on("click",function(){
		$("#editPhotosModal").modal('open');
		$("#editPhotosModal .modal-content").html("");
		var photosId=$(this).data('photos-id');
		$.post(baseURL+"tour_details/editPhotos/"+photosId,function(data){
			$("#editPhotosModal .modal-content").html(data);
			$('select').material_select();
			 Materialize.updateTextFields();
		});
	});
}
function initUpdatePhoto(){
		$("#updatePhotos").on("click",function(){
		var formData = new FormData($('#photosForm')[0]);
			$.ajax({
	        url:baseURL+"tour_details/updatePhotos/",
	        type: 'POST',
	        data: formData,
	        processData: false,
	        contentType: false,
	        
	        success: function (result){
	        	alert("Photos Updated Successfully");
	        	//window.location.reload();
        	}
		});

	});
}
function initDeleteAttraction(){
		$(".delete-photos").on("click",function(){
		var photosId=$(this).data('photos-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deletePhotos/"+photosId,function(data){
			$("#photos-id"+photosId).remove();
			});
		}
	});
}