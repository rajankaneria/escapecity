var baseURL;
$(function(){
	 $('select').material_select();
	$(".modal").modal();
	 $('select').material_select();
	baseURL=$("#base_url").val();
	/*$("#addRate").on("click",function(){
		$("#rateModal").modal('open');
	});*/


	$("#sendRate").on("click",function(){
	var formData = new FormData($('#addRateForm')[0]);
	$.ajax({
    url:baseURL+"tour_details/addRate/",
    type: 'POST',
    processData: false,
    contentType: false,
    data: formData,
    success: function (result){
    	alert("Rate Inserted Successfully");
    	window.location.reload();
    }
   });
});
	

	$(".tour-rate-edit-btn").on("click",function(){
		$("#rateModal").modal('open');
		var rateId=$(this).data('tour-id');
		$.post(baseURL+"tour_details/tourByRate/"+rateId,function(data){
			$("#rateModal .modal-content").html(data);
			$('ul.tabs').tabs();
		initEditRate();
		initDeleteRate();
		initUpdateRate();
		});


	});

/*===Main function over==========*/
});
function initEditRate(){
		$(".edit-rate").on("click",function(){
		$("#editRateModal").modal('open');
		$("#editRateModal .modal-content").html("");
		var rateId=$(this).data('rate-id');
		$.post(baseURL+"tour_details/editRate/"+rateId,function(data){
			$("#editRateModal .modal-content").html(data);
			  Materialize.updateTextFields();
			  $('select').material_select();
		});
	});

}
function initDeleteRate(){
		$(".delete-rate").on("click",function(){
		var rateId=$(this).data('rate-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteRate/"+rateId,function(data){
			$("#rate-id"+rateId).remove();
			});
		}
	});
}
function initUpdateRate(){
	$("#updateRate").on("click",function(){
		var formData = new FormData($('#updateRateForm')[0]);
		$.ajax({
	    url:baseURL+"tour_details/updateRate/",
	    type: 'POST',
	    processData: false,
	    contentType: false,
	    data: formData,
	    success: function (result){
	    	alert("Rate Updated Successfully");
	    	window.location.reload();
	    }
		});
	});


}