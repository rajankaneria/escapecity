var baseURL;
$(function(){
	$(".modal").modal();
	baseURL=$("#base_url").val();
	$("#addPhotos").on("click",function(){
		$("#photosModal").modal('open');
	});
	baseURL=$("#base_url").val();
	$("#sendPhotos").on("click",function(){
		var formData=new FormData($("#addPhotosForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/addPhotos/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Photos added successfully...");
				window.location.reload();
			}
		});
	});

	$("#updatePhotos").on("click",function(){
		var formData = new FormData($("#updatePhotosForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/updatePhotos/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Photos Updated successfully...");
				window.location.reload();
			}
		});
	});

	$(".delete-photos").on("click",function(){
		var photosId=$(this).data('photos-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteAttractions"+photosId,function(data){
			$("#photos-id"+photosId).remove();
			});
		}
	});

	$(".edit-photos").on("click",function(){
		$("#editPhotosModal").modal('open');
		$("#editPhotosModal .modal-content").html("");
		var photosId=$(this).data('photos-id');
		$.post(baseURL+"tour_details/editPhotos"+photosId,function(data){
			$("#editPhotosModal .modal-content").html(data);
		});
	}

/*===Main function over==========*/
});