var baseURL;
$(function(){
	$(".modal").modal();
	baseURL=$("#base_url").val();
	$("#addItinrary").on("click",function(){
		$("#itinraryModal").modal('open');
	});
	$("#sendItinrary").on("click",function(){
		var formData=new FormData($("#addItinraryForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/addItinrary/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Itinrary add successfully...");
				window.location.reload();
			}
		});
	});

	$("#updateItinrary").on("click",function(){
		var formData=new FormData($("#updateItinraryForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/updateItinrary/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Itinrary Update successfully...");
				window.location.reload();
			}
		});
	});

	$(".delete-itinrary").on("click",function(){
		var itinraryId=$(this).data('itinrary-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteItinrary"+itinraryId,function(data){
			$("#itinrary-id"+itinraryId).remove();
			});
		}
	});

	$(".edit-itinrary").on("click",function(){
		$("#editItinraryModal").modal('open');
		$("#editItinraryModal .modal-content").html("");
		var itinraryId=$(this).data('itinrary-id');
		$.post(baseURL+"tour_details/editItinrary"+itinraryId,function(data){
			$("#editItinraryModal .modal-content").html(data);
		});

	}

/*===Main function over==========*/
});