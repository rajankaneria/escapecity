var baseURL;
$(function(){
	$(".modal").modal();
	baseURL=$("#base_url").val();
	$("#addRate").on("click",function(){
		$("#rateModal").modal('open');
	});
	$("#sendRate").on("click",function(){
		var formData=new FormData($("#addRateForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/addRate/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Rate added successfully...");
				window.location.reload();
			}
		});
	});

	$("#updateRate").on("click",function(){
		var formData = new FormData($("#updateRateForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"tour_details/updateRate/",
			type:"POST",
			proccessData:false,
			contentType:false,
			success:function(result){
				alert("Rate Updated successfully...");
				window.location.reload();
			}
		});
	});

	$(".delete-rate").on("click",function(){
		var rateId=$(this).data('rate-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteRate"+rateId,function(data){
			$("#rate-id"+rateId).remove();
			});
		}
	});

	$(".edit-rate").on("click",function(){
		$("#editRateModal").modal('open');
		$("#editRateModal .modal-content").html("");
		var rateId=$(this).data('rate-id');
		$.post(baseURL+"tour_details/editRate"+rateId,function(data){
			$("#editRateModal .modal-content").html(data);
		});
	}

/*===Main function over==========*/
});