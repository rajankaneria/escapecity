var baseURL;
$(function(){
	$(".modal").modal();
	baseURL=$("#base_url").val();
	$("#addAttractions").on("click",function(){
		$("#attractionsModal").modal('open');
	});
	$("#sendAttractions").on("click",function(){
		var formData=new FormData($("#addAttractionsForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/addAttractions/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Attractions add successfully...");
				window.location.reload();
			}
		});
	});

	$("#updateAttractions").on("click",function(){
		var formData = new FormData($("#updateAttractionsForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/updateAttractions/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Attractions Update successfully...");
				window.location.reload();
			}
		});
	});

	$(".delete-attractions").on("click",function(){
		var attractionsId=$(this).data('attractions-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteAttractions"+attractionsId,function(data){
			$("#attractions-id"+attractionsId).remove();
			});
		}
	});

	$(".edit-attractions").on("click",function(){
		$("#editAttractionsModal").modal('open');
		$("#editAttractionsModal .modal-content").html("");
		var attractionsId=$(this).data('attractions-id');
		$.post(baseURL+"tour_details/editAttractions"+attractionsId,function(data){
			$("#editAttractionsModal .modal-content").html(data);
		});
	}

/*===Main function over==========*/
});